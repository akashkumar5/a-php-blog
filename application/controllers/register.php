<?php 
    class register extends CI_controller{
        public function user(){
        if(!$this->session->userdata('logged_in')){
        $data['title'] = 'Register';
        $data['basic'] = $this->get_model->get_basic();

        if($data['basic']){
                $data['basic_title'] = $data['basic'][0]['basic_title'];
                $data['copyright'] = $data['basic'][0]['basic_copyright'];
        }
        else{
                $data['basic_title'] = 'Theory [A blog]';
                $data['copyright'] = 'Order of new world';
            }
        //setting rules for validation of register form
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('username','Username','required|callback_username_already_exist');
        //callback_check_username_exist is defined define below
        $this->form_validation->set_rules('email','email','required|callback_email_already_exist');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password1','confirm password','matches[password]');
        //checking of form validation run or not
        
        if($this->form_validation->run() === false){
            //if form validation does not run then execute this block
            $this->load->view('admin/admin-header',$data);
            $this->load->view('admin/register_form',$data);
            $this->load->view('admin/admin-footer');
        }
        else{
            //if every thing is right then encrypt password
            $password = md5($this->input->post('password'));
            //load model
            $this->admin_model->register($password);
            $this->session->set_flashdata('registered','registration success full now you can login');
            redirect('login');
        }
        }else{
            redirect('user/index');
        }
    }
    }
?>
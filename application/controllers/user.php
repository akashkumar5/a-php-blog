<?php 
    class user extends CI_Controller{
        public function index(){
            if($this->session->userdata('logged_in')){
                $data['title'] = 'Admin panel';
                $data['basic'] = $this->get_model->get_basic();
                if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                }
                else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                }
                $this->load->view('admin/admin-header',$data);
                $this->load->view('admin/admin-index',$data);
                $this->load->view('admin/admin-footer');
            }
            else{
                redirect('admin/login');
            }
        }
        public function add_category(){
            if($this->session->userdata('logged_in')){
                $this->form_validation->set_rules('name','Category','required');
                if($this->form_validation->run() === false){
                    $data['title'] = 'Add Category';
                    $data['basic'] = $this->get_model->get_basic();

                    if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                    }
                    else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                    }
                    $this->load->view('admin/admin-header',$data);
                    $this->load->view('admin/add_category',$data);
                    $this->load->view('admin/admin-footer');
                    }
                    else{
                    $this->load->model('add_model');
                    $category_name = $this->input->post('name');
                    
                    $config['upload_path'] = './asset/images/categories';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['remove_spaces'] ='FALSE';
                    $config['max-size'] = '2048';
                    $config['max-height'] = '1000';
                    $config['max-width'] = '1000';
                    
                    $this->load->library('upload',$config);
                    
                    if(!$this->upload->do_upload()){
                        $errors = array('error' => $this->upload->display_errors());
                        $category_image = 'noimg.png';
                    }
                    else{
                        $data = array('upload_data' => $this->upload->data());
                        $category_image = $_FILES['userfile']['name']; 
                    }
                    $this->add_model->create_category($category_name,$category_image);
                    $this->session->set_flashdata('category_added','your category is added');
                    redirect('user/add_category');
                }
            }
            else{
                redirect('admin/login');
            }
        }
        public function create_post(){
           if($this->session->userdata('logged_in')){
                $data['title'] = 'Add Post';
                $data['categories'] = $this->add_model->get_categories();
                $data['basic'] = $this->get_model->get_basic();

                if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                }
                else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                }
                $this->load->model('add_model');
                $this->form_validation->set_rules('title','Title','required');
                $this->form_validation->set_rules('content','Body','required');
                $this->form_validation->set_rules('category_id','Category','required');
                if($this->form_validation->run() === false){
                    $this->load->view('admin/admin-header',$data);
                    $this->load->view('admin/create_post',$data);
                    $this->load->view('admin/admin-footer');
                }
                else{
                    $config['upload_path'] = './asset/images/posts';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['remove_spaces'] ='FALSE';
                    $config['max-size'] = '2048';
                    $config['max-height'] = '5000';
                    $config['max-width'] = '5000';
                    
                    $this->load->library('upload',$config);
                    
                    if(!$this->upload->do_upload()){
                        $errors = array('error' => $this->upload->display_errors());
                        $post_image = 'noimg.png';
                    }
                    else{
                        $data = array('upload_data' => $this->upload->data());
                        $post_image = $_FILES['userfile']['name']; 
                    }
                    $this->add_model->create_post($post_image);
                    $this->session->set_flashdata('post_created','your post is created');
                    redirect('admin/login');
                } 
            }
            else{
                redirect('admin/login');
            }
        }
        public function delete_post($id){
            if($this->session->userdata('logged_in')){
                $this->load->model('edit_and_delete');
                $this->edit_and_delete->delete_post($id);
                redirect('user/index');
            }
            else{
                $this->session->set_flashdata('not_logged_in','you are not log in login first to perform this action');
                redirect('admin/login');
                
            }
        }
        public function edit($slug){
            if($this->session->userdata('logged_in')){
            $this->load->model('get_model');
            $data['posts'] = $this->get_model->get_posts($slug);
            if (empty($data['posts'])){
                show_404();
            }
            $data['title'] = 'Edit post';
            $data['basic'] = $this->get_model->get_basic();

                if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                }
                else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                }
            $data['categories'] = $this->get_model->get_categories();
            $this->load->view('admin/admin-header',$data);
            $this->load->view('admin/edit_post',$data);
            $this->load->view('admin/admin-footer');
            }
            else{
                redirect('admin/login');
            }
        }
        public function update_post(){
            if($this->session->userdata('logged_in')){
                $data['basic'] = $this->get_model->get_basic();

                if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                }
                else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                }
                $this->load->model('edit_and_delete');
                $this->edit_and_delete->edit_post();
                $this->session->set_flashdata('post_updated','you post is updated');
                redirect('user/index');
            }
        }
        public function posts(){
            if($this->session->userdata('logged_in')){
            $this->load->model('get_model');
            $data['posts'] = $this->get_model->get_posts();
            $data['categories'] = $this->get_model->get_categories();
            $data['title'] = 'All posts';
            $data['basic'] = $this->get_model->get_basic();

                if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                }
                else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                }
            $this->load->view('admin/admin-header',$data);
            $this->load->view('admin/posts',$data);
            $this->load->view('admin/admin-footer');
                
            }
        }
        
        
        public function basic_setting(){
            if($this->session->userdata('logged_in')){
                $this->load->model('get_model');
                $data['title'] = 'basic setting';
                $data['basic'] = $this->get_model->get_basic();

                if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                }
                else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                }
                $this->form_validation->set_rules('name','Title','required');
                $this->form_validation->set_rules('copyright','Copyright','required');
                if($this->form_validation->run() === false){
                $this->load->view('admin/admin-header',$data);
                $this->load->view('admin/basic_setting',$data);
                $this->load->view('admin/admin-footer');
                }
                else{
                    $this->load->model('edit_and_delete');
                    $this->edit_and_delete->update_basic();
                    redirect('user/index');
                }
            }
            else{
                redirect('admin/login');
            }
        }
        
        /*
        public function basic_update(){
            if($this->session->userdata(logged_in)){
                $this->form_validation->set_rules('name','Title','required');
                $this->form_validation->set_rules('copyright','Copyright','required');
                if($this->form_validation->run() === false){
                    $this->load->view('admin/admin-header',$data);
                    $this->load->view('admin/basic_setting',$data);
                    $this->load->view('admin/admin-footer');
                }else{
                   $this->load->model('edit_and_delete');
                    this->edit_and_delete->update_basic(); 
                }
                
            }
            else{
                redirect('admin/login');
            }
        }*/
    }
?>
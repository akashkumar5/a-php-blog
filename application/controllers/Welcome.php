<?php 
    class welcome extends CI_Controller{
        public function index(){
            $this->load->model('get_model');
            $data['posts'] = $this->get_model->get_posts();
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
            $data['title'] = 'Latest Post';
            $this->load->view('public/public-header',$data);
            $this->load->view('public/blog_index',$data);
            $this->load->view('public/public-footer',$data);
        }
        public function view($slug = null){
            $this->load->model('get_model');
            $data['basic'] = $this->get_model->get_basic();
                if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                }
                else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                }
            $data['posts'] = $this->get_model->get_posts($slug);
            $data['categories'] = $this->add_model->get_categories();
            $post_id = $data['posts']['id'];
            $data['comments'] = $this->get_model->get_comments($post_id);
            if (empty($data['posts'])){
                show_404();
            }
            $data['$title'] = $data['posts']['title'];
            $this->load->view('public/public-header.php',$data);
            $this->load->view('public/blog-view.php', $data);
            $this->load->view('public/public-footer.php',$data);
            
        }
        public function comment_create($post_id){
            $this->load->model('get_model');
            $slug = $this->input->post('slug');
            $data['posts'] = $this->get_model->get_posts($slug);
            $data['comments'] = $this->get_model->get_comments($post_id);
            $data['basic'] = $this->get_model->get_basic();
                if($data['basic']){
                    $data['basic_title'] = $data['basic'][0]['basic_title'];
                    $data['copyright'] = $data['basic'][0]['basic_copyright'];
                }
                else{
                    $data['basic_title'] = 'Theory [A blog]';
                    $data['copyright'] = 'Order of new world';
                }
            //form validation
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email id','required');
            $this->form_validation->set_rules('comment','minimum 2 character in comment','required');
            //if else block for form validation
            if($this->form_validation->run() === FALSE){
                $this->load->view('public/public-header.php', $data);
                $this->load->view('public/blog-view', $data);
                $this->load->view('public/public-footer.php',$data);
            }
            else{
                $this->load->model('add_model');
                $post_id = $data['posts']['id'];
                $this->add_model->add_comment($post_id);
                redirect($slug);
            }
        }
        
    }
?>
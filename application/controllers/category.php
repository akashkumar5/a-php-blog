<?php
    class category extends CI_Controller{
       public function index(){
            $data['title'] = 'Category';
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
            $data['categories'] = $this->get_model->get_categories();
            $this->load->view('public/public-header.php', $data);
            $this->load->view('public/category-index', $data);
            $this->load->view('public/public-footer.php', $data); 
        }
        public function post($id){
            $this->load->model('get_model');
            $data['categories'] = $this->add_model->get_categories();
            $data['title'] = $this->get_model->get_category($id)->category;
            $data['posts'] = $this->get_model->get_post_by_category($id);
            $data['basic'] = $this->get_model->get_basic();
            if($data['basic']){
                $data['basic_title'] = $data['basic'][0]['basic_title'];
                 $data['copyright'] = $data['basic'][0]['basic_copyright'];
            }
            else{
                $data['basic_title'] = 'Theory [A blog]';
                $data['copyright'] = 'Order of new world';
            }
            $this->load->view('public/public-header',$data);
            $this->load->view('public/category-view',$data);
            $this->load->view('public/public-footer',$data);
        }
    }
?>
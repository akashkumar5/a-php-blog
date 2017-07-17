<?php 
    class add_model extends CI_model{    
        public function create_category($category_name,$category_image){
            $data = array(
            'category' => $category_name,
            'category_image' => $category_image
            );
            return $this->db->insert('categories',$data);
        }
    //get categories for displaying in various pages
        public function get_categories(){
            $this->db->order_by('category');
            $query = $this->db->get('categories');
            return $query->result_array();
        }
        
        
        //send post detail to database
        public function create_post($post_image){
            $slug = url_title($this->input->post('title'));
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'category_id' => $this->input->post('category_id'),
                'slug' => $slug,
                'post_image' =>$post_image,
            );
            return $this->db->insert('posts',$data);
        }
        
        //create comment
        public function add_comment($post_id){
            $data = array(
                'post_id' => $post_id,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'comment' => $this->input->post('comment'),
            );
             return $this->db->insert('comments',$data);
                
        }
        }
?>
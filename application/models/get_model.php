<?php 
    class get_model extends CI_Model{
        public function get_posts($slug=FALSE){
            if($slug === FALSE){
                $this->db->order_by('posts.id','DESC');
                $this->db->join('categories','categories.category_id = posts.category_id');
                $query = $this->db->get('posts');
                return $query->result_array();
            }
            $query = $this->db->get_where('posts', array('slug' => $slug));
            return $query ->row_array();
        }
        public function get_comments($post_id){
            $query = $this->db->get_where('comments', array('post_id' => $post_id));
            return $query->result_array();
        }
        
        
        //get categories
        public function get_categories(){
            $this->db->order_by('category');
            $query = $this->db->get('categories');
            return $query->result_array();
        }
        public function get_category($id){
            $query = $this->db->get_where('categories' , array('category_id'=> $id));
            return $query->row();
        }
        public function get_post_by_category($id){
            $this->db->order_by('posts.id','DESC');
            $this->db->join('categories','categories.category_id = posts.category_id');
            $query = $this->db->get_where('posts', array('posts.category_id' => $id));
            return $query->result_array();
        }
        
        public function get_basic(){
            $query = $this->db->get('basic');
            return $query->result_array();
        }
    }
?>
<?php 
    class edit_and_delete extends CI_Model{
        public function delete_post($id){
            $this->db->where('id' , $id);
            $this->db->delete('posts');
            return true;
        }
        public function edit_post(){
            $slug = url_title($this->input->post('title'));
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'category_id' => $this->input->post('category_id'),
                'slug' => $slug
            );
            $this->db->where('id',$this->input->post('id'));
            return $this->db->update('posts',$data);
        }
        
        public function update_basic(){
            $data = array(
                'basic_title' => $this->input->post('name'),
                'basic_copyright' => $this->input->post('copyright')
            );
            $this->db->update('basic',$data);
        }
    }
?>
<?php 
    class admin_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        //login 
        public function login($username,$password){
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result = $this->db->get('users');
            if($result->num_rows() == 1){
                return $result->row(0)->id;
            }
            else{
                return false;
            }
        }
        
        public function register($password){
            $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $password
            );
            $this->db->insert('users',$data);
        }
        
        //check useranme exist or not in database
        
        public function check_username($username){
            $result = $this->db->get_where('users',array('username'=>$username));
            if(empty($result->row_array())){
                return true;
            }
            else{
                return false;
            }
        }
        public function check_email($email){
            $result = $this->db->get_where('users',array('email'=>$email));
            if(empty($result->row_array())){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>
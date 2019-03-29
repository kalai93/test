<?php

Class Auth extends CI_Controller{

    public function login(){
        $this->form_validation->set_rules('email','Email','required|min_length[5]');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');
        if($this->form_validation->run()==TRUE){
            $username = $_POST['email'];
            $password = md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('email'=>$username,'password'=>$password));
            $query = $this->db->get();

            $user = $query->row();
            if($user){
                $this->session->set_flashdata("success","you are now logged in");
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username; 
                redirect("user/profile","refresh");

            }else{
                $this->session->set_flashdata("error","No such data found");
                redirect("auth/login","refresh");
            }
        }
        $this->load->view('login');   
    }

    public function Register(){
        if(isset($_POST['register'])){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('email','Email','required|min_length[5]');
            $this->form_validation->set_rules('password','Password','required|min_length[5]');
            $this->form_validation->set_rules('password','Confirm Password','required|min_length[5]|matches[password]');
            if($this->form_validation->run()==TRUE){
                $data = array(
                    "username"=>$_POST['username'],
                    "email"=>$_POST['email'],
                    "password"=>md5($_POST['password']),
                    "phone"=>"343434",
                    "created_date"=>date('T-m-d')
                );  
                $this->db->insert('users',$data);
                $this->session->set_flashdata("success","user created successfully. You can login now");
                redirect("auth/register","refresh");
            }
        }
     $this->load->view('register');
    }
}
?>

<?php
Class User extends CI_Controller{

    public function _construct(){
        if(!isset($_SESSION['username'])){
        $this->session->set_flashdata("error","please login to view this page");
        redirect("auth/login","refresh");
        }
    }
    public function profile(){
        $this->load->view('profile');
         
    }
}
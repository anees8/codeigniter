<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
      if(!isset($_SESSION['user_logged'])){
        $this->session->set_flashdata("error"," Please Login First");
        redirect(base_url());
      }
        
    }
    public function profile(){
       $this->load->view('profile');
    }
}
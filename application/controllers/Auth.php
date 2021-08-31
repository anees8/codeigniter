<?php
class Auth extends CI_Controller{
    

    public function login(){
        
    
        $this->form_validation->set_rules('email','Email ID','trim|required|valid_email');
        $this->form_validation->set_rules('password','password','trim|required|min_length[6]');
        if($this->form_validation->run()==TRUE){
            $email = $_POST['email'];
          $password = md5($_POST['password']); 
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('email'=>$email,'password'=>$password));
            $query = $this->db->get();
            $user = $query->row();


            if($user->email){
                $this->session->set_flashdata("success","Login ok");
                $_SESSION['user_logged']=TRUE;
                $_SESSION['username']=$user->name;
                redirect(base_url('user/profile'));
            }else{
                $this->session->set_flashdata("error","Login failed");
                redirect(base_url());
            }
                 
         
        }
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }
        
   
    


    public function register(){

        if(isset($_POST['register'])){    
        $this->form_validation->set_rules('username','Username','trim|required|alpha|min_length[3]');
        $this->form_validation->set_rules('email','Email ID','trim|required|valid_email');
        $this->form_validation->set_rules('mobile','Mobile','trim|required|numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('password','password','trim|required|min_length[6]');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
        if($this->form_validation->run()==TRUE){
           
                $data =array(
                    'name' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'created_date' => date('Y-m-d'),
                    'phone' => $_POST['mobile']
                                  );
              $this->db->insert('users', $data);

              $this->session->set_flashdata("success","User Register Successfully");
             redirect("auth/login");
            
        }
       
    }
    $this->load->view('header');
    	$this->load->view('register');
        $this->load->view('footer');
    }
}
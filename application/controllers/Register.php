<?php
/**
 * Created by PhpStorm.
 * User: Emal Isuranga
 * Date: 2018-02-10
 * Time: 1:30 PM
 */

class Register extends CI_Controller
{
 public function registerUser(){
     $this->form_validation->set_rules('fname', 'First Name', 'required');
     $this->form_validation->set_rules('lname', 'Last Name', 'required');
     $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[testPHP.email]');
     $this->form_validation->set_rules('pass', 'Password', 'required');
     if ($this->form_validation->run() == FALSE)
     {
         $this->load->view('Register');
     }
     else
     {
        $this->load->model('modelUser');
        $respons=$this->modelUser->insertData();

        if($respons){
            $this->session->set_flashdata('msg','Register Sucssesfuly');
            redirect('Welcome/register');
        }
        else{
            $this->session->set_flashdata('msg','Register Unsucssesfuly');
            redirect('Welcome/register');
        }
     }

 }
}
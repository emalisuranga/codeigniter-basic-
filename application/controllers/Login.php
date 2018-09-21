<?php
/**
 * Created by PhpStorm.
 * User: Emal Isuranga
 * Date: 2018-02-12
 * Time: 7:54 AM
 */

class Login extends CI_Controller{

    public function loginUser(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {
            $this->load->model('modelUser');
            $respons = $this->modelUser->checkUser();

            if($respons != false){

                $user_data=array(
                    'user_id'=>$respons->id,
                    'fname'=>$respons->fname,
                    'lname'=>$respons->lname,
                    'email'=>$respons->email,
                    'login'=>TRUE,
                );

                $this->session->set_userdata($user_data);
                //print_r($_SESSION);
                $this->session->set_flashdata('welcome','Welcome our Web');
                redirect('AdminCt/index');
            }
            else{
                $this->session->set_flashdata('errmsg','Wrong User Name Or Password');
                redirect('Welcome/login');
            }
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('login');
        redirect('Welcome/login');
    }
}
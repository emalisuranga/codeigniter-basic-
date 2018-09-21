<?php
/**
 * Created by PhpStorm.
 * User: Emal Isuranga
 * Date: 2018-02-17
 * Time: 7:37 PM
 */

class AdminCt extends CI_Controller{

    public function index()
    {
        $this->load->view('Admin/dashboard');
    }

    public function AddPost()
    {
        $this->load->view('Admin/Add');
    }

    public function viewPost()
    {
        $this->load->view('Admin/viewPost');
    }
}
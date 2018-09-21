<?php

include 'include/header.php';

if(!($this->session->userdata('login'))){

    redirect('Welcome/login');
}


    if($this->session->flashdata('welcome')){
    echo "<h3>".$this->session->flashdata('welcome')."</h3>";
    }



?>


<h1>test home</h1>
<?php
include 'parts/header.php';
?>


<div class="container">
    <h2>LOGIN</h2>
    <?php  if($this->session->flashdata('errmsg')){
        echo "<h3>".$this->session->flashdata('errmsg')."<h3>";
    }
    ?>
    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Login/loginUser');   ?>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <?php echo form_close();?>
</div>

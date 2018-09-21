<?php
include 'parts/header.php';
?>



<div class="container">
    <h2>REGISTER</h2>

    <?php  if($this->session->flashdata('msg')){
        echo "<h3>".$this->session->flashdata('msg')."<h3>";
    }

    ?>
    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Register/registerUser');   ?>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="lname">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email Address</label>
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
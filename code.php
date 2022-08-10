<?php
session_start();
require 'dbcom.php';

if(isset($POST['save_intern'])){
    $name= mysql_real_escape_string($con, $_POST['name']);
    $email= mysql_real_escape_string($con, $_POST['email']);
    $mobile= mysql_real_escape_string($con, $_POST['mobile']);
    $password= mysql_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO crud(name,email,mobile,password) VALUES
    ('$name','$email','$mobile','$password')";

    $query_run = mysqli_query($con, $query);

    if ($query_run){
        $_SESSION['message']= "Intern Created Successfully";
        header("Location: Php_CRUD/user.php");
        exit(0);
    }
    else{
        $_SESSION['message']= "Intern Not Created";
        header("Location: Php_CRUD/user.php");
        exit(0);
    }
}
?>
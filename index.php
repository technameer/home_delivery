<?php
    $name=$_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $body = $name.$email.$message;
    mail("nameerahmad965@gmail.com","home delivery","user name:".$name."   user's email:".$email."  user's message:".$message);
    ?>
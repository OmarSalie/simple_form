<?php

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];

    $con = new mysqli('localhost','root','','db');

    if($con->connect_error){
        echo 'database connection error';
    }

    $stmt = $con->prepare("INSERT INTO userDetails (fname, lname, email) VALUES (?, ?, ?)");

    $stmt->bind_param("ssi", $fname, $lname, $email);

    if($stmt->execute()){
        echo 'success';
    }
    else {
        echo 'failure';
    }
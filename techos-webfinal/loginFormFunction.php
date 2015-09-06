<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
    
    }
}

// Define $username and $password
$username = trim($_POST['username']);
$password = trim($_POST['password']);

$connection = mysqli_connect($dbHost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_error()){

            echo "Connection Error";

        }
            else{

            $query  = $mysqli->prepare("SELECT id, username, password, 
                                        FROM user
                                        WHERE email = ? LIMIT 1");
            
            $subject_set = mysqli_query($connection, $query);
            confirm_query($subject_set);








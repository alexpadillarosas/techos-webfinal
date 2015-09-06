<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        /* 
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        /*$dbHost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "shopping";*/

        include 'config.php';
        
        
             
        $username = filter_input(INPUT_POST, "username");
        $firstname = filter_input(INPUT_POST, "firstname");
        $lastname = filter_input(INPUT_POST, "lastname");
        $dobForm = filter_input(INPUT_POST, "dob");
        $useremail = filter_input(INPUT_POST, "email");
        $userpassword = filter_input(INPUT_POST, "password");
        $checkEnabled = filter_input(INPUT_POST, "checkEnebled");
        
        
        //getting the date from the form
        $dob = date_create($dobForm);
        // formating the date of the form to the format of mysql
        $dobMysql = date_format($dob, 'Y/m/d H:i:s');
        
//        if ($checkEnabled == '1'){
//           message
//        }
        
        
        
        $connection = mysqli_connect($dbHost, $dbuser, $dbpass, $dbname);

        if(mysqli_connect_error()){

            echo "Connection Error";

        }
            else{
                echo "Database connected";



                $sql = "Insert into User (username, firstname, lastname, dob, email, password, enabled)"
                        . "values ('$username', '$firstname', '$lastname', '$dobMysql', '$useremail', '$userpassword', '$checkEnabled')";

                $result = mysqli_query($connection, $sql);
                        if (!$result){
                            die ('Database query failed'. mysqli_error($connection));
                        }
                        else{
                            echo "<br> on record added to database";
                        }
            }
                ?>
    </body>
</html>

<?php 
//Database connection      
        $host = "localhost";  
        $user = "root";  
        $password = 'root@';  //your xampp password
        $db_name = "signup_form";  //your database name
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        } 

?>
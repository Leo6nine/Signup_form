<?php
//Include your database connection
include('dbcon.php');

//store the names of your inputs and button in variables
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

//Insert form data into your SQL database
    $sql = "INSERT INTO forms (firstName, lastName, email, user_uid, user_pwd) VALUES ('$first','$last', '$email', '$uid', '$pwd')";
    mysqli_query($con, $sql);

    header("Location: ../index.php?signup=success");


?>
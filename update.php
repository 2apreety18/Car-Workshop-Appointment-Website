<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/lab3/login.php');
}
require_once "db.php";

extract($_POST);  // Make all index as variable 


  
    $sql = "UPDATE userform SET name='$name', email='$email', carno='$carno' , appdate='$appdate', mechanic ='$mechanic' WHERE id= $id ";


if (mysqli_query($link, $sql)) {
    echo 'Updated.';
    header('Location:http://localhost/lab3/');
} else {
    echo 'Failed.';
    header('Location:http://localhost/lab3/');
}





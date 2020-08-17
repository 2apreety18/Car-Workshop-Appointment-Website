<?php

session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
    session_destroy();
    header('Location:http://localhost/lab3/login.php');
} else {
    header('Location:http://localhost/lab3/login.php');
}
?>
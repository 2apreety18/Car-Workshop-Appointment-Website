<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header('Location:http://localhost/lab3/');
}
?>





<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

 <style>
 


@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  background: #e5e5e5;
  font-family: 'Open Sans', sans-serif;
}

.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #b8b8b8;
}

.login-header {
  background: #b8b8b8;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ffffff;
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #b8b8b8;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}

 </style>



<body>
<br><br><br><br> 
 

 <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" method="POST">
    <p><input type="email" name="email" placeholder="Email"></p>
    <p><input type="password" name="password" placeholder="Password"></p>
    <p><input type="submit"  value="Log in"></p>
  </form>
</div>



</body>
</html>



<?php
if ($_POST && isset($_POST['email']) && isset($_POST['password'])) {
    extract($_POST);
    include_once 'db.php';
    $email = $link->real_escape_string($email);
    $password = $link->real_escape_string($password);
   // $password = md5($password);

    $sql = "SELECT * FROM managers WHERE email='$email' AND password='$password'  ";
    // die($sql);
    $result = mysqli_query($link, $sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['login'] = true;
        $_SESSION['name'] = $data['name'];
        header('Location:http://localhost/lab3');
    } else {
        echo 'Login Failed.';
    }
}
?>
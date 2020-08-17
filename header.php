<!DOCTYPE html>
<html>
    <head>
        <title>Simple CRUD</title>
        <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: red;
  color: white;
}
</style>
    </head>
    <body>
<div>
        <div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

</div>
        <div class="container">
            <div class="row">
                <h4>Welcome, <?=$_SESSION['email'];?>&nbsp;<small><a  href="http://localhost/lab3/logout.php">Logout</a></small></h4>
            </div>
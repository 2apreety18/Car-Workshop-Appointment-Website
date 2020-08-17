<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/lab3/login.php');
}

require_once 'header.php';
include_once 'db.php';
$data = null;
$user_id =$_GET['id'];
$user_id = $link->real_escape_string($user_id);

$query = "SELECT * FROM userform WHERE id=$user_id";
$result = $link->query($query);

$num_result = $result->num_rows;

if ($num_result > 0) {

    while ($rows = $result->fetch_assoc()) {

        $data[] = $rows;
    }
}
//var_dump($data);
?>


<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>


<div>
  <form action="http://localhost/lab3/update.php" method="POST">



     <label for="name">Name </label>
    <input type="text" id="name" name="name" placeholder="Full name" value="<?php echo $data[0]['name']?>">
    

    <label for="email"> Email </label>
    <input type="text" id="email" name="email" placeholder="Email" value="<?php echo $data[0]['email']?>">

    <label for="carno"> carno </label>
    <input type="text" id="carno" name="carno" placeholder="carno" value="<?php echo $data[0]['carno']?>">

    <label for="appdate">Appoinment date</label>
    <input type="text" id="appdate" name="appdate" placeholder="Change Appoinment Date.." value="<?php echo $data[0]['appdate']?>">

    <label for="mechanic">Mechanics Name</label>
    <select id="mechanic" name="mechanic">
      <option value="mia">Mia</option>
      <option value="misha">Misha</option>
      <option value="rahim">Rahim</option>
      <option value="karim">Karim</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>








<?php require_once 'footer.php'; ?>

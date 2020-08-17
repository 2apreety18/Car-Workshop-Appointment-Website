<?php

include 'db.php';

$data = null;

//echo '<pre>';
//var_dump($_REQUEST);

//var_dump($_FILES);
$name = $_REQUEST['name'];
$address= $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$appdate = $_REQUEST['appdate'];
$engine = $_REQUEST['engine'];
$carno = $_REQUEST['carno'];
$mechanic = $_POST['mechanic'];


/* Prepare an insert statement */
$query = "INSERT INTO userform (name,address,phone,email,appdate,engine,carno,mechanic) VALUES ('$name','$address','$phone','$email','$appdate','$engine','$carno','$mechanic')";

$stmt = $link->prepare($query);
/* Execute the statement */
if ($stmt->execute()) {
    echo 'Inserted' . PHP_EOL;
   

   
   
} else {
    echo 'Not Inserted  or, already exist' . PHP_EOL;
}





$querycheck = "SELECT appdate, mechanic, COUNT(*) as num FROM userform where appdate='".$_POST["appdate"]."' GROUP BY mechanic";








$result = $link->query($querycheck);

$num_result = $result->num_rows;

if ($num_result > 0) {

    while ($rows = $result->fetch_assoc()) {

        $data[] = $rows;
    }
}
//var_dump($data); 
 ?>

<?php
 if ( $data[0]['num']> 4 ) {

    echo 'Your prefered mechanic is ' . $_POST["mechanic"] .' on ' . $_POST["appdate"].'is not available';
 ?>
   
     <h4>Change the mechanic OR the appoinment date</h4>

     <form action="" method="POST">



     <label for="name">Num </label>
     <input type="text" id="num" name="num" placeholder="Full name" value="<?php echo $data[0]['num']?>">


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



 <?php

 }   
else{
?>
    <h1 class="text-center"> Registered Successfully </h1> <br>
	<h2> <?php echo 'Your prefered mechanic is ' . $_POST["mechanic"] .' on ' . $_POST["appdate"];?></h2>
   
<?php
}

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





 
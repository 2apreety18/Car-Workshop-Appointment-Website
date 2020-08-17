<?php  
require_once "db.php";

//extract($_POST);  // Make all index as variable 


  
    $sql = "UPDATE userform SET appdate='$appdate', mechanic ='$mechanic' WHERE id= $id  ";


if (mysqli_query($link, $sql)) {

  echo '<script type="text/javascript">
			alert("REGISTERD SUCCESSFULLY"); 
			</script>';
  header('Location:http://localhost/lab3/home.php');


} else {
   echo '<script type="text/javascript">
			alert("Data NOT Upadted"); 
			</script>';
     header('Location:http://localhost/lab3/home.php');
}
 


?>
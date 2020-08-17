<?php
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/lab3/login.php');
}
include_once 'db.php';

$data = null;

$query = "SELECT * FROM userform";

$result = $link->query($query);

$num_result = $result->num_rows;

if ($num_result > 0) {

    while ($rows = $result->fetch_assoc()) {

        $data[] = $rows;
    }
}
?>

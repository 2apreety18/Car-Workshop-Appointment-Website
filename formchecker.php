<?php

include_once 'db.php';




if ( isset( $_POST['submit'] ) ) {

// retrieve the form data by using the element's name attributes value as key

echo '<h2>form data retrieved by using the $_REQUEST variable<h2/>'

$mechanic = $_REQUEST['mechanic'];
$appdate = $_REQUEST['appdate'];

// display the results
echo 'Your prefered mechanic is ' . $mechanic .' on ' . $appdate;



}
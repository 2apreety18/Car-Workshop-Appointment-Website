<?php

$link = mysqli_connect("localhost", "id4347961_cse391", "hahahihi", "id4347961_cse391lab3");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
  // echo "Connected" . PHP_EOL;
}




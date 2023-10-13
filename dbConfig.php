<?php


$hn = "localhost";
$un = "studentAdmin";
$pw = "X(QDQzFNcqL3R8CH";
$db = "students";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>
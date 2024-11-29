<?php
include_once("../_dbconnect.php");

$username = $_REQUEST['useremail'];
$q = "Select * from users where useremail='$username' ";
$result = mysqli_query($conn, $q);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "email registered";
}

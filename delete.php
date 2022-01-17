<?php

include "dbconnection.php";

if (isset($_POST['deletedata'])) {

$id = $_POST['delete_id'];

$sql = "DELETE FROM products WHERE id='$id'";
global $conn;
if ($conn->query($sql) === TRUE) {
    echo '<script> alert("Success");<script>';
    $conn->close();
     header("location:coordinator/displaycoordinator.php");


}else {
	echo '<script> alert("Success");<script>' . $conn->error;
	}
}
header("location:manageproduct.php");
?>
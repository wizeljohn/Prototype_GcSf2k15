<?php
include "config.php";

mysqli_select_db($conn, "db_sportfest");
$sql = "SELECT * FROM tbl_account";
$result = mysqli_query($conn, $sql);

$username=$_POST['txtUsername'];
$password=$_POST['txtPassword'];
$department=$_POST['radDepartment'];

$sql = "INSERT INTO tbl_account(accout_Id, account_Email, account_Password, account_Department) VALUES (NULL, '".$username."', '".$password."', '".$department."')";
$result = mysqli_query($conn, $sql);
?>
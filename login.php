<?php
session_start();
	include 'config.php'; //connection


		$user = $_POST['txtLogUsername'];
		$pass = $_POST['txtLogPassword'];

		$qry = "select * from tbl_account where account_Email='".$user."' and account_Password='".$pass."' ";
				
		$result = mysqli_query($conn,$qry);
			
				if(mysqli_num_rows($result)){
					$data = mysqli_fetch_array($result);
					$_SESSION['txtLogUsername'] = $data['account_Email'];
					$_SESSION['txtLogPassword'] = $data[];
				}else{
				echo "<script>alert('Account does not exist.')</script>";
				}

			if(isset($_SESSION['txtLogUsername'])) {
			}

?>
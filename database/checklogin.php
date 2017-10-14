	<?php

	session_start();
	require_once("connection.php");
	if (isset($_POST['submit']))
	{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn,$query)or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row > 0 )
		 {
			header('location:admin.php');
			$_SESSION['id']=$row['user_id'];
		}
		else
			{ 
			echo "incorrect info";
			}
			//header('location:staff.php');
		}
			?>

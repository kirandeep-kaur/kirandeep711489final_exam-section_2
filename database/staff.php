<?php
//require_once("header.php");
?>
<?php
require_once("connection.php");
?>
 </div>
<div class = "details">Admin Login
</div>
<div class="form">

	<form action="checklogin.php" method="post">
		

		<table>
		<tr>
			<td>
			Username:
			</td><td>
			<input type="text" name="username" id="userName">
			</td>
			</tr>
		<tr>
			<td>
			Password:
			</td>
			<td><input type="password" name="password">
			</td>
			</tr>
		<tr>
		
			<td>
			<input type ="submit" name="submit" value="login">
			</td>
			</tr>
		</table>
</form>
</div>

<?php
//require_once("footer.php");
?>


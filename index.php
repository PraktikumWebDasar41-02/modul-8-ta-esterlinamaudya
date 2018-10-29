<h1> MENU LOGIN</h1>
 	<br>
<form method="post">
			    <table>
			 	<tr>
			 		<td>Username</td>
			 		<td>:</td>
			 		<td><input type="text" name="username"> </td>
			 	</tr>
			 	<tr>
			 		<td>Password</td>
			 		<td>:</td>
			 		<td><input type="password" name="password"></td>
			 	</tr>
			 	<tr>
			 		<td><input style="width: 100px" type="submit" name="kirim" value="Login"></td>
			 	</tr>
</table>
</form>
</center>

<?php
	if (isset($_POST['kirim'])) {
		session_start();
		include"konek.php";
		$datbase = new database();
			@$username = $_POST["username"];
			@$password = $_POST["password"];

		$sql = "SELECT * from tabel_user where username = '$username' and password = '$password'";
		$datbase = new database();

				if (mysqli_num_rows($result) != 0) {
					header("Location: dashboard.php");
				}else {
					echo "Login Gagal";
				}
			}

?>
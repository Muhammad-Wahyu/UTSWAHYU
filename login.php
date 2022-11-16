<?php 
 
include "koneksi.php";
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: tampil-pemain.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location:tampil-pemain.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!doctype HTML>
<html>
<head><title>Login Admin</title></head>
<body>

<div class="container">
		<div class="row">
			<div class="col-md-12">
					<br>
					<br>
						<br>
					<br>
				<center><h1> <b>LOGIN</b></h1>
				<br>
				<form action="proses-login.php" method="POST">
					<div class="form-group">
						<label for="username">USERNAME :</label>
						<input type="text" name="username" class="form-control">
					</div>
					<br>
					<br>

					<div class="form-group">
						<label for="password">PASSWORD :</label>
						<input type="text" name="password" class="form-control">
					</div>
						<br>
					<br>
	

		<input type="submit" name="simpan" value="Login">
		<input type="reset" name="kosongkan" value="kosongkan">

	</form></center>
</body>
</html>


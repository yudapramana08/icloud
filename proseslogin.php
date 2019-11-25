<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="icloud";
$conn=new mysqli($servername, $username, $password,$dbname);




$username =$_POST['username']; 
$password = $_POST['password'];


$result = $conn->query("SELECT * from user where username= '$username' and password= '$password'");
$row = mysqli_fetch_array ($result);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['user_id'] = $row['id'];
	$_SESSION['username'] = $username;
		

	header('location:admin/index.php');
} else {
	  echo "<script>alert('username / password salah !!'); window.location = 'index.php'</script>";

}
?>
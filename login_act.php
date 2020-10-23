<?php 
session_start();
include 'admin/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$query=mysqli_query($koneksi,"select * from admin where uname='$uname' and pass='$pass'");
if(mysqli_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysqli_error());
	// mysql_error();
}
// echo $pas;
 ?>
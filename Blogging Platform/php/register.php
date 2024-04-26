<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

//$con = mysqli_connect('localhost', 'root','','blogging');
$server  = "localhost";
$username = "root";
$password = "";
$dbname = "blogging";
$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
	echo "not connected";
}
else{
	echo "connected";
}
// get the post records
$username = $_POST['username'];
//$userid = $_POST['userid'];
$password = $_POST['password'];
//$email = $_POST['email'];
//$mobile = $_POST['mobile'];
//$state = $_POST['state'];
//$city = $_POST['city'];
//$pincode = $_POST['pincode'];


// database insert SQL code
$sql = "INSERT INTO `register` ( `username`, `password`) VALUES ( '$username','$password')";

// insert in database 
 $rs = mysqli_query($con, $sql);
if($rs)
{
	echo "data submitted";
}
else{
	echo "query failed";
}


?>
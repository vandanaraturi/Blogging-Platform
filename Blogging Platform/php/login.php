<?php      
    // database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect("localhost", "root"," ","blogging");

// get the post records
$username = $_POST['username'];
//$userid = $_POST['userid'];
$password = $_POST['password'];

        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from register where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       
        // $count = mysqli_num_rows($result);  
          
        if($result){  
           header("location: site.html");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?> 
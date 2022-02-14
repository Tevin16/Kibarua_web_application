<?php

include'conn.php';

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=md5($_POST['password']);

   
$query=mysqli_query($conn,"INSERT INTO users(user_firstname,user_lastname,user_email,user_mobile,user_address) values ('$fname','$lname','$email','$mobile','$address')");

    if($query)
    {
		$user_id =$conn->insert_id;
		$quer=mysqli_query($conn,"INSERT INTO login(login_username,login_password,login_user_id, login_rank) values ('$email','$password','$user_id','user')");
		if($query)
		{
        echo"succesfull";
        }
    }
    header("location: index.php");
}


?>
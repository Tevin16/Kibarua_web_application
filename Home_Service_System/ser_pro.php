<?php

include'conn.php';

if(isset($_POST['submit']))
{   
    $category=$_POST['category'];
    $subcat=$_POST['subcategory'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $exp=$_POST['experience'];
    $rate=$_POST['rate'];
    $location=$_POST['location'];
    $image=$_FILES["img"]["name"];
    $image1=$_FILES["img"]["tmp_name"];
    $password=md5($_POST['password']);

   $path="service_providerimages/$image";
    // directory creation for product images
    move_uploaded_file($image1,$path);

$query=mysqli_query($conn,"INSERT INTO freelancer(freelancer_category_id,freelancer_subcategory_id,freelancer_firstname,freelancer_lastname,freelancer_email,freelancer_mobile,freelancer_address, freelancer_experience,freelancer_rate,freelancer_location,freelancer_image) values ('$category','$subcat','$fname','$lname','$email','$mobile','$address','$exp','$rate','$location','$image')");

    if($query)
    {
		$freelancer_id =$conn->insert_id;
		$quer=mysqli_query($conn,"INSERT INTO login(login_username,login_password,login_freelancer_id, login_rank) values ('$email','$password','$freelancer_id','freelancer')");
		if($query)
		{
        echo"succesfull";
	    }
    }
    header("location: index.php");
}


?>
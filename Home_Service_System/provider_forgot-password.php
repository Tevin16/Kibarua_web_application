
<?php
session_start();
error_reporting(0);
include'conn.php';

if(isset($_POST['change']))
{
   $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=md5($_POST['password']);
$query=mysqli_query($conn,"SELECT * FROM service WHERE email='$email' and mobile='$contact'");
$num=mysqli_fetch_array($query);
if($num>0)
{

mysqli_query($conn,"update service set password='$password' WHERE email='$email' and mobile='$contact' ");
header("location:provider_forgot-password.php");
$_SESSION['errmsg']="Password Changed Successfully";
exit();
}
else
{

header("location:provider_forgot-password.php");
$_SESSION['errmsg']="Invalid email id or Contact no";
exit();
}
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Got-It</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
</head>


<body>
     
    <!-- banner-inner -->
    <div id="demo-1" class="page-content">
        <div class="dotts">
            <?php include'header.php'; ?>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <ol class="breadcrumb justify-content-left">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <!-- banner-text -->
    <!-- contact -->
    <section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
        <!---728x90--->
            <h3 class="tittle text-center mb-lg-5 mb-3">
                <span>Forgot</span>Password</h3>
                <!---728x90--->
                <div class="container">
                       <div class="login px-4 mx-auto mw-100">
                        
                        <form  method="post">
                            <span style="color:red;" >
<?php
echo htmlentities($_SESSION['errmsg']);
?>
<?php
echo htmlentities($_SESSION['errmsg']="");
?></span>
                           <div class="form-group">
                            <label>Email Id <span>*</span></label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Contact no <span>*</span></label>
                            <input type="number" class="form-control" name="contact" id="exampleInputEmail1" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label class="mb-2">New Password <span>*</span></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Confirm Password <span>*</span></label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="" required="">
                        </div>
                        <input type="submit" name="change" class="btn btn-danger submit mb-4"value="Login">
                        </form>
                            <p class="text-center pb-4">
                                <a href="ser_login.php" > Login to Account </a>
                            </p>
                        
                    </div>
                    </div>
            
        </div>
    </section>
    <!-- //contact -->
    <!---728x90--->
    <!--footer -->
    <?php include'footer.php'; ?>
    <!-- //footer -->

    
    <!-- js -->
    <!--/slider-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    
    <!-- //password-script -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
                                    var defaults = {
                                          containerID: 'toTop', // fading element id
                                        containerHoverID: 'toTopHover', // fading element hover id
                                        scrollSpeed: 1200,
                                        easingType: 'linear' 
                                     };
                                    */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html> 
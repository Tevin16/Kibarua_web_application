<?php 
session_start();
error_reporting(0);
include('conn.php');
if(strlen($_SESSION['ser_login'])==0)
    {   
header('location:ser_login.php');
}
else{

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
        addEventListener("load", function() {
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
        <li class="breadcrumb-item active">Service Bookings List</li>
    </ol>
    <!-- banner-text -->
    <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
        <!---728x90--->
        <?php
        $query=mysqli_query($conn,"select freelancer.*,category.category_categoryName as catname,category.category_id as cid,subcategory.subcategory_name as subcatname,subcategory.subcategory_id as subcatid from freelancer join category on category.category_id=freelancer.freelancer_category_id join subcategory on subcategory.subcategory_id=freelancer.freelancer_subcategory_id where freelancer.freelancer_id='".$_SESSION['id']."'");

while($row=mysqli_fetch_array($query))
{
  


?>

            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="single-user-candidate">
                    <div class="user-detail-info text-center">
                        <div class="user-pic">
                            <img src="service_providerimages/<?php echo $row['freelancer_image'] ?>" class="img-fluid rounded-circle" alt="" style="height: 200px;width: 200px;">
                        </div>
                        <div class="user-content-info emply-resume-info text-center mt-4">
                            <h4>
                                <a href="#"><?php echo $row['freelancer_firstname'].' '.$row['freelancer_lastname'] ?></a>
                            </h4>
                            <p>
                                <i class="fas fa-map-marker-alt"></i> <?php echo $row['freelancer_address'] ?></p>
                            <div class="skills-info my-4">
                                <span><i class="fas fa-star"></i> 
                                    <?php echo $row['freelancer_experience'] ?> Experience</span>

                                <span class="mx-3"><i class="fas fa-user-circle"></i> Join Date: 
                                    <?php echo $row['freelancer_regdate'] ?></span>

                                <span>Charge: Ksh<i class=""></i> 
                                    <?php echo $row['freelancer_rate'] ?></span>
                            </div>
                            
                        </div>
                    </div>
                </div> <?php } ?>


                <!--row -->
                <div class="row qualification-details mt-5">
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="qual-info">
                            <?php 
                     
$ret = mysqli_query($conn,"SELECT * FROM booking WHERE DATE(booking_orderDate) = CURDATE() and booking_freelancer_id='".$_SESSION['id']."'");
$num = mysqli_num_rows($ret);
{?>
                            <h4>Today Bookings</h4>
                            <p><?php echo htmlentities($num); ?></p>
                        <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="qual-info">
                            <?php 
                     
$ret = mysqli_query($conn,"SELECT * FROM booking where booking_bookstatus = '0' and booking_freelancer_id='".$_SESSION['id']."'");
$num = mysqli_num_rows($ret);
{?>
                            <h4>Pending Confirm Bookings</h4>
                            <p><?php echo htmlentities($num); ?></p>
                        <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="qual-info">
                            <?php 
                     
$ret = mysqli_query($conn,"SELECT * FROM booking where booking_bookstatus = '1' and booking_freelancer_id='".$_SESSION['id']."'");
$num = mysqli_num_rows($ret);
{?>
                            <h4>Confirm Bookings</h4>
                            <p><?php echo htmlentities($num); ?></p>
                        <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="qual-info">
                            <?php 
                     
$ret = mysqli_query($conn,"SELECT * FROM booking where booking_bookstatus = '3' and booking_freelancer_id='".$_SESSION['id']."'");
$num = mysqli_num_rows($ret);
{?>
                            <h4>Services Done</h4>
                            <p><?php echo htmlentities($num); ?></p>
                        <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                
                </div>
                <!--row -->
                <!---728x90--->
                
                <!---728x90--->
                <!--/history -->
                

                <div class="candidate-history-info mt-5">
                    <h5 class="j-b mb-5"><i class='fas fa-users'></i> Your Services Booking Clients Lists</h5>
                    <div class="candidate-story-grid">

                        <!--/job1-->
<?php 
$query=mysqli_query($conn,"select booking.*,users.user_firstname as cname,users.user_lastname as lname,users.user_email as cemail,users.user_mobile as contact,users.user_address as caddress from booking inner join users on booking.booking_user_id=users.user_id  where booking_freelancer_id='".$_SESSION['id']."'");

while($row=mysqli_fetch_array($query))
{
?>
                        <div class="job-post-main row">
                            <div class="col-md-8 job-post-info text-left">
                                <div class="job-post-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="job-single-sec">
                                    <h4>
                                        <a href="#"><?php echo $row['cname'].' '.$row['lname'] ?></a>
                                    </h4>
                                    <p class="my-2"><i class="fas fa-map-marker-alt"></i> <?php echo $row['caddress'] ?> 

                                     <i class="fas fa-envelope" style="margin-left: 2%;"></i> <?php echo $row['cemail'] ?> </p>

                                    <ul class="job-list-info d-flex">
                                        
                                        <li>
                                            <i class="fas fa-phone"></i> <?php echo $row['contact'] ?></li>
                                        <li>
                                            <i class="far fa-clock"></i> <?php echo $row['service_time'] ?></li>   
                                        <li>
                                            <i class="fas fa-calendar-check"></i> <?php echo $row['service_date'] ?></li>
                                         
                                        
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-4 job-single-time text-right">
                                <span class="job-time"><i class="fas fa-bookmark"></i>
                                   

                                    <?php if($row['booking_bookstatus'] == 1) { ?>
                          <span style="color: green;">Confirm by Service Provider.</span>
                        <?php }

                         if($row['booking_bookstatus'] == 2) { ?>
                          <span style="color: orange;">On the way to reach your Location.</span>
                          <?php } 

                         if($row['booking_bookstatus'] == 3) { ?>
                          <span style="color: blue;">Service Done Successfully.</span>
                      <?php }
                      if($row['booking_bookstatus'] == 4) { ?>
                          <span style="color: Gray;">Client Does not available at location</span>
                      <?php }
                      if($row['booking_bookstatus'] == 5) { ?>
                          <span style="color:SlateBlue;">Service Booking Cancel by Service provider for some reason.</span>
                      <?php }
                        if($row['booking_bookstatus'] == 0) { ?>
                          <span style="color: red;">Not Yet Confirm.</span>
                        <?php } ?>
                                    </span>
                                <a href="manage_booking.php?bid=<?php echo $row['booking_id'];?>" class="aply-btn " target="_black">Manage Booking</a>
                            </div>
                        </div><br>
                        <?php } ?>
                        <!--//job1-->
                       
                    </div>
                    <!---//network-->
                </div>
                
            </div>
        </div>

    </section>
    <!--footer -->
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
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
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
<?php } ?>
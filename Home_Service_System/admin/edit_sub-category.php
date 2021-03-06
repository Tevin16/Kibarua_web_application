<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['admin_login'])==0) {
  header('location:logout.php');
  } else{
    date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $subcat=$_POST['subcategory'];
  $id=intval($_GET['id']);
$sql=mysqli_query($conn,"update subcategory set subcategory_category_id='$category',subcategory_name='$subcat',subcategory_updationDate='$currentTime' where subcategory_id='$id'");

if ($sql) {
  echo "<script>alert('Sub-Category Updated');</script>"; 
echo "<script>window.location.href ='manage_sub-category.php'</script>";
}

}

  ?>
<!DOCTYPE html>
<html>
<head>
  
  <title>Got-It</title>
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include_once('includes/header.php');?>

 
<?php include_once('includes/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Update Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Service Sub-Category</h3>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
<?php
$id=intval($_GET['id']);
$query=mysqli_query($conn,"select category.category_id,category.category_categoryName,subcategory.subcategory_name from subcategory join category on category.category_id=subcategory.subcategory_category_id where subcategory.subcategory_id='$id'");
while($row=mysqli_fetch_array($query))
{
?>  
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Service Sub-Category Name</label>
                    <select name="category" class="form-control" required>
<option value="<?php echo htmlentities($row['category_id']);?>"><?php echo htmlentities($catname=$row['category_categoryName']);?></option>
<?php $ret=mysqli_query($conn,"select * from category");
while($result=mysqli_fetch_array($ret))
{
echo $cat=$result['category_categoryName'];
if($catname==$cat)
{
  continue;
}
else{
?>
<option value="<?php echo $result['category_id'];?>"><?php echo $result['category_categoryName'];?></option>
<?php } }?>
</select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Service Sub-Category Name</label>
                    <input type="text" class="form-control" id="subcategory" name="subcategory" value="<?php echo  htmlentities($row['subcategory_name']);?>" placeholder="Enter Sub-Category Name" required="true">
                  </div>
                        <?php } ?>
                </div>
              
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Add Sub-Category</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php include_once('includes/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php }  ?>
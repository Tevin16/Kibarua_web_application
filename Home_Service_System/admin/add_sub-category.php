<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['admin_login'])==0) {
  header('location:logout.php');
  } else{
          

    if(isset($_POST['submit']))
  {

    $cname=$_POST['categoryName'];
    $subname=$_POST['subcategoryName'];

   
$query=mysqli_query($conn,"INSERT INTO subcategory(subcategory_category_id,subcategory_name) values ('$cname','$subname')");

    if($query)
    {
        echo"Service Sub-Category Added succesfull";
        
    }
    header("location:dashboard.php");
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
            <h1>Add Service Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add Service Category</li>
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

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Service Category Name</label>
                    <select name="categoryName" class="form-control" required>
<option value="">Select Category</option> 
<?php $query=mysqli_query($conn,"select * from category");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['category_id'];?>"><?php echo $row['category_categoryName'];?></option>
<?php } ?>
</select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Service Sub-Category Name</label>
                    <input type="text" class="form-control" id="category" name="subcategoryName" placeholder="Enter Sub-Category Name" required="true">
                  </div>
                        
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
<?php
include('conn.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysqli_query($conn,"SELECT * FROM subcategory WHERE subcategory_category_id=$id");
?>
<option value="">Select Sub-Category Of Service</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['subcategory_id']); ?>"><?php echo htmlentities($row['subcategory_name']); ?></option>
  <?php
 }
}
?>
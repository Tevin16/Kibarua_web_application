<?php
$con=mysqli_connect('localhost','root','','test');

$output='';


    $creditor_query="select booking.*,users.user_firstname as cname,users.user_lastname as lname,users.user_email as 
	cemail,users.user_mobile as contact,users.user_address as caddress,freelancer.freelancer_firstname as 
	providername,freelancer.freelancer_lastname as providerlname,freelancer.freelancer_email as 
	provideremail,freelancer.freelancer_mobile as providercontact,freelancer.freelancer_address as 
	provideraddress,category.category_categoryName as providercat,subcategory.subcategory_name as 
	providersubcat,freelancer.freelancer_image as providerimg from booking inner join users on 
	booking.booking_user_id=users.user_id inner join freelancer on booking.booking_freelancer_id=freelancer.freelancer_id inner join category on 
	booking.booking_category_id=category.category_id inner join 
	subcategory on booking.booking_subcategory_id=subcategory.subcategory_id";

    $result=mysqli_query($con,$creditor_query);

    if(mysqli_num_rows($result)>0)
    {
        $output .= '
        <table class="table" bordered="1">
        
        <tr>
           
                  
                  <th>Client Full Name</th>
                  <th>Client Email</th>
                  <th>Client Address</th>
                  <th>Client Mobile-no</th>
                  <th>Booked Service & Details</th>
                  <th>Service Provider Full Name</th>
                  <th>Service Provider Address</th>
                  <th>Service Provider Email</th>
                  <th>Service Provider Mobile-no</th>
                  
           
            
        </tr>

        ';
        while($row = mysqli_fetch_array($result))
        {
          
            $output .= ' 
          <tr>
            
             <td>'.$row['cname'].'</td>
             <td>'.$row['cemail'].'</td>
             <td>'.$row['caddress'].'</td>
			 <td>'.$row['contact'].'</td>
             <td>'.$row['providercat'].'</td>
             <td>'.$row['providername'].'</td>
			 <td>'.$row['provideraddress'].'</td>
             <td>'.$row['provideremail'].'</td>
             <td>'.$row['providercontact'].'</td>
         
            
         </tr>
         ';
         }
            $output .='</table>';
            
            header("Content-Type: application/xls");
            header('Content-Disposition: attachment; filename=Sessions.xls');
            echo $output;
    }








?>
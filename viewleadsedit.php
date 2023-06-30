<?php
session_start();
if (!isset($_SESSION['username']) ||(trim ($_SESSION['username']) == '')) {
  header('location:login.php');
  exit();
}
include('db_conn1.php');//DATABASE CONNECTION
$query=mysqli_query($conn,"select * from tbregistration where username='".$_SESSION['username']."'");//GET USER ID FROM USER TABLE
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,intial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="viewleadsstle.css">
    <title>View Leads</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head> 

<body>
    
    <h1>View Leads</h1>
    <table class="table1">
        <thead>
           <tr>
              <th>Date</th>
              <th>Property Name</th>
              <th>Property Type</th>
              <th>Location</th>
              <th>Contact Number</th>
              <th>Edit Details</th>
             
            </tr>      
        </thead>
        <?php
        $row['username']=$_SESSION['username'];
  
        $user_qry = "SELECT  tbproperties.id,tbproperties.uploaded_by,tbproperties.current_date1,tbproperties.propertyname,tbproperties.property_type,tbproperties.location,tbproperties.contact_number FROM tbproperties WHERE uploaded_by = '".$_SESSION['username']."'";
        $user_res=mysqli_query($conn,$user_qry);
        while($row=mysqli_fetch_assoc($user_res))
       {
?>
        <tr>
        <td><?php echo $row["current_date1"]?></td>
        <td><?php echo $row["propertyname"]?></td>
        <td><?php echo $row["property_type"]?></td>
        <td><?php echo $row['location']?></td>
        <td><?php echo $row['contact_number']?></td>
        <td>
        <div class="row" style=" display: flex;align-items: center;padding-left:20px;">
        <button type="button" class="about3" style="width: 5rem;height: 30px;border: 1px solid;font-family: 'Montserrat', sans-serif;background: rgba(12, 126, 255, 0.692);border-radius: 20px;font-size: 13px;color: #e9f4fb;font-weight: 400;cursor: pointer;text-decoration:none;outline: none;margin-top: 1rem;margin-left:10%;" name="edit" >
        <?php 
        $img_display = "http://localhost/view_leads/propertyedit.php?id=".$row['id']."&username=".$_SESSION['username'];
        echo  "<a href =".$img_display.">Edit </a>";?><?php 
        $img_display = "http://localhost/view_leads/delete-process.php?id=".$row['id']."&username=".$_SESSION['username'];
        echo  "<a href =".$img_display.">Delete </a>";
        ?>
        </button>
       </div>
    </td>
</tr>
        <?php
        }
        ?>
        </table>
        <button type="submit" id="back" name="back"  class="about4" style="width: 40rem;height: 30px;
    border: 1px solid;font-family: 'Montserrat', sans-serif;background: rgba(12, 126, 255, 0.692);border-radius: 20px;font-size: 18px;color: #e9f4fb;font-weight: 600;cursor: pointer;text-decoration:none;outline: none;margin-top: 1rem;margin-left:27%;">


    <?php $img_display = "http://localhost/view_leads/dashboard.php?username=".$_SESSION['username'];
        echo "<a href=".$img_display." >Dashboard</a>"; ?></button>
        
    </body>
    
    </html>
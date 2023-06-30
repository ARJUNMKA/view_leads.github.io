<?php
include_once 'db_conn1.php';

   
        ?>
        
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,intial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="viewleadsstle.css">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>View Leads</title>
</head> 

<body>
    <form method="post">
<div class="row" style=" display: flex;align-items: center;padding-left:450px;  background: rgba(221,47,110);` ">
      <div class="col text-white" style="padding-right: 10px; ">
      <select name="dropdown" class="form-control form-control-sm" style="width: 10rem; height: 30px;
    border: 1px solid;
    font-family: 'Montserrat', sans-serif;
    background: rgba(255,255,255);
    border-radius: 20px;
    font-size: 18px;
    color: #000000;
    font-weight: 400;
    cursor: pointer;
    text-decoration:none;
    outline: none;
    margin-top: 1rem;
    margin-left:27%;">
      <option value="" disabled selected>--Search by--</option>
      <option value="property_type">Property Type</option>
      <option value="location">Location</option>
      <option value="contact_number">Contact Number</option>
    </select>
    </div>
    <div class="col text-white" style="padding-right: 10px;">
    <input type="text" class="form-control form-control-sm" name="value" style="width: 10rem; height: 30px;
    border: 1px solid;
    font-family: 'Montserrat', sans-serif;
    background: rgba(255,255,255);
    border-radius: 20px;
    font-size: 10px;
    color: #000000;
    font-weight: 400;
    cursor: pointer;
    text-decoration:none;
    outline: none;
    margin-top: 1rem;
    margin-left:27%;">
  </div>
  <div class="col text-white">
    <button type="submit" class="form-control form-control-sm" value="Submit" name="submit" style="width: 10rem; height: 30px;
    border: 1px solid;
    font-family: 'Montserrat', sans-serif;
    background: rgba(255,255,255);
    border-radius: 20px;
    font-size: 18px;
    color: #000000;
    font-weight: 400;
    cursor: pointer;
    text-decoration:none;
    outline: none;
    margin-top: 1rem;
    margin-left:27%;">Submit</button>
  </div>
</div>
</form>

  
    <h1>View Leads</h1>
    <table class="table1">
        <thead>
           <tr>
              <th>Date</th>
              <th>Property Name</th>
              <th>Property Type</th>
              <th>Location</th>
              <th>Contact Number</th>
              
            
             
            </tr>      
        </thead>
        <?php
        
$dropdown="";
$value="";
// Get the selected column and entered value from the form
if (isset($_POST['submit'])) {
   $dropdown = $_POST['dropdown'];
   $value = $_POST['value'];
   // Prepare and execute the SQL query
   $query = "SELECT * FROM tbproperties WHERE  `$dropdown` = '$value'";
   $result = mysqli_query($conn, $query);
   while ($row = $result->fetch_assoc()) {
    $dropdown="";
     $value="";
     // Get the selected column and entered value from the form
    if (isset($_POST['submit'])) {
        $dropdown = $_POST['dropdown'];
        $value = $_POST['value'];
        // Prepare and execute the SQL query
        $query = "SELECT * FROM tbproperties WHERE  `$dropdown`= '$value'";
        $result = mysqli_query($conn, $query);
        while ($row = $result->fetch_assoc()) {
        ?>

<tr>
<td><?php echo $row["current_date1"] ?></td>
<td><?php echo $row["propertyname"] ?></td>
<td><?php echo $row["property_type"] ?></td>
<td><?php echo $row['location'] ?></td>
<td><?php echo $row['contact_number'] ?></td>

<?php
    }
}
   }
}
?>
      
        <?php
        $query = "SELECT * FROM tbproperties order by id desc";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
        <td><?php echo $row["current_date1"] ?></td>
        <td><?php echo $row["propertyname"] ?></td>
        <td><?php echo $row["property_type"] ?></td>
        <td><?php echo $row['location'] ?></td>
        <td><?php echo $row['contact_number'] ?></td>
        <td>
        </td>
    </tr>
    <?php

    }

    mysqli_close($conn);
?>

    </table>    
</form>
<div class="row" style=" display: flex;align-items: center;padding-left:20px;">
<button type="button" onclick="windlow.location.href='login.php';" class="about4" style="width: 15rem; 
    
    height: 30px;
    border: 1px solid;
    font-family: 'Montserrat', sans-serif;
    background: rgba(12, 126, 255, 0.692);
    border-radius: 20px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 600;
    cursor: pointer;
    text-decoration:none;
    outline: none;
    margin-top: 1rem;
    margin-left:30%;">Sign In</button>
    
 
<button type="button" onclick="window.location.href='mahatbadmin.php';" class="about4" style="width: 15rem; 
    
    height: 30px;
    border: 1px solid;
    font-family: 'Montserrat', sans-serif;
    background: rgba(12, 126, 255, 0.692);
    border-radius: 20px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 600;
    cursor: pointer;
    text-decoration:none;
    outline: none;
    margin-top: 1rem;
    margin-left:00%;">Sign Up</button>
      </div>

</body>

</html>

<?php
session_start();
if (!isset($_SESSION['username']) ||(trim ($_SESSION['username']) == '')) {
  header('location:login.php');
  exit();
}
include('db_conn1.php');//DATABASE CONNECTION
$query=mysqli_query($conn,"select * from tbregistration where username='".$_SESSION['username']."'");//GET USER ID FROM USER TABLE
$row=mysqli_fetch_assoc($query);

?><?php
$curr_date1 = date('d/m/Y');
include_once 'db_conn1.php';
//if (isset($_POST['back'])) {
   // header("location:dashboard.php");
//}

if(isset($_POST['submit'])){

   

    $uploaded_by = $_POST['uploaded_by'];
    $current_date1 = $_POST['current_date1'];
    $propertyname = $_POST['propertyname'];
    $property_type = $_POST['property_type'];
    $location = $_POST['location'];
    $contact_number = $_POST['contact_number'];
    $expiry_date = $_POST['expiry_date'];

    $sql = "INSERT INTO tbproperties(uploaded_by,current_date1,propertyname,property_type,location,contact_number,expiry_date)
    VALUES('$uploaded_by','$current_date1','$propertyname','$property_type','$location','$contact_number','$expiry_date')";    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Registration Successfully";
    }
    else{
        echo "error:" . $sql . " " . mysqli_error($conn);

    }
    mysqli_close($conn);



}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="properties.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Properties Details</title>
</head> 

<body>

    <div class="center">
        <h1> Properties Details</h1>
        <form method="post">
           

            <div class="txt_field">
            <span></span> 
            
            <input type="text" name="uploaded_by" readonly value="<?php echo($row['username']);?>">
                
                
            </div> 
            
            <div class="txt_field" id="current_date1">
                <span></span>
                <input  name="current_date1"  placeholder="Date" readonly
                value=<?php date_default_timezone_set('Asia/Kolkata');
                $curr_date1 = date('Y-m-d');
                echo $curr_date1;
                ?>>
          </div>  
            
            
            <div class="txt_field">
                
                <span></span>
                <input type="text" name="propertyname" placeholder="Property Name">
            </div> 
               
            
            
                <label for="district">Property Type</label><br><br>
                <select name="property_type" id="property_type">
    <option value="Residential">Residential</option>
    <option value="Commercial">Commercial</option>
    <option value="Industrial">Industrial</option>
    
  </select>

            <div class="txt_field">
                <span></span>
                <input type="text" name="location" placeholder="Location">
                
            </div>
            
            <div class="txt_field">
            
                <span></span>
                <input type="text" name="contact_number" placeholder="Contact Number" required>
               
            </div>

            <div class="txt_field">Expiry Date
            <input type="date" name="expiry_date" placeholder="Expiry Date" value="<?php $Today=date('Y-m-d');

// add 3 days to date
$NewDate=Date('Y-m-d', strtotime('+30 days'));
echo $NewDate;?>">
           
            </div>


            <input type="submit" name="submit" value="Submit">

          

           <button type="submit" id="back"  name="back">
           <?php $img_display = "http://localhost/view_leads/dashboard.php?username=".$_SESSION['username'];
        echo "<a href=".$img_display." >Dashboard</a>"; ?></button>

               





            
        </form>
    </div>                                                                                                  



</body>
</html>
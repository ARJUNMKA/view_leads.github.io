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

<?php
include_once 'db_conn1.php';
$_SESSION['id'] = $_GET['id'];
$id=$_GET['id'];
echo $id;
if(isset($_POST['edit'])){
    $id=$_POST['id'];
  }
         $id = $_SESSION['id'];
//$id = 13;
        $sql = "SELECT * FROM tbproperties where id='$id'";

        if(mysqli_query($conn, $sql)) {
                $row = mysqli_fetch_array(mysqli_query($conn, $sql));
                $id   = $row['id'];
                $upby = $row['uploaded_by'];
                $cdt  = $row['current_date1'];
                $pnm  = $row['propertyname'];
                $ptyp = $row['property_type'];
                $ploc = $row['location'];
                $pcon = $row['contact_number'];
                $pexp = $row['expiry_date'];
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
        <form method="POST" >
                    
                <div class="txt_field">
                <span></span> 
                    <input type="text" name="uploaded_by"  placeholder="Uploaded by" value="<?php echo $upby;?>" readonly>
                </div> 
                
                <div class="txt_field" id="current_date1">
                    <span></span>
                    <input type="date" name="current_date1"  placeholder="Date"
                    value="<?php echo $cdt; ?>">
                </div>  
                
                <div class="txt_field">
                    <span></span>
                    <input type="text" name="propertyname" placeholder="Property Name"
                    value="<?php echo $pnm;?>">
                </div> 
            
                <label for="district">Property Type</label><br><br>
                <select name="property_type" id="property_type">
                    <option value="Residential">Residential</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Industrial">Industrial</option>
                  
                </select>


                <div class="txt_field">
                    <span></span>
                    <input type="text" name="location" placeholder="Location"
                    value="<?php echo $ploc; ?>">
                </div>
            
                <div class="txt_field">
                    <span></span>
                    <input type="text" name="contact_number" placeholder="Contact Number" required
                    value="<?php echo $pcon; ?>">
                </div>

                <div class="txt_field">Expiry Date
                    <input type="date" name="expiry_date" placeholder="Expiry Date"
                    value="<?php echo $pexp; ?>">
                </div>


                <input type="submit" name="submit" value="Submit">

           <!-- <input type="submit" name="back" value="Back to dashboard">-->

                 <button type="submit" id="back" name="back" >
               <?php $img_display = "http://localhost/view_leads/viewleadsedit.php?username=".$_SESSION['username'];
				echo "<a href=".$img_display." >View Leads</a>"; ?></button>
                <button type="submit" id="back" name="back" >
               <?php $img_display = "http://localhost/view_leads/dashboard.php?username=".$_SESSION['username'];
				echo "<a href=".$img_display." >Dashboard</a>"; ?></button>
                
            </form>
        </div>
        
        <?php
        include_once 'db_conn1.php';
        if (isset($_POST['submit'])) {
        $upby   = $_POST["uploaded_by"];
        $cdt    = $_POST["current_date1"];
        $pnm    = $_POST["propertyname"];
        $ptyp   = $_POST["property_type"];
        $ploc   = $_POST["location"];
        $pcon   = $_POST["contact_number"];
        $pexp   = $_POST["expiry_date"];
        //code to the update image
    
        //update query
        $sql1 = "update tbproperties set uploaded_by='$upby',current_date1='$cdt',propertyname='$pnm '
        ,property_type='$ptyp',location=' $ploc',contact_number='$pcon',expiry_date='$pexp' WHERE id=$id";
		$result = mysqli_query($conn, $sql1);
        if ($result) {

            echo '<script>alert("Yours Values Is Updated!!")</script>';
        }

    }	
 ?>
</body>
</html>
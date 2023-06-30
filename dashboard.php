<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"   href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet"  href="dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Gruhlaxmi Admin</title>

</head> 

<body>

<?php
  include('db_conn1.php');//DATABASE CONNECTION
  $result = mysqli_query($conn,"SELECT * FROM tbregistration WHERE  username='".$_SESSION['username']."'");
  ?>

    <?php
    if(isset($_SESSION["username"])) {
      if($_SESSION["username"]) {
        ?>
        
        Welcome<?php echo $_SESSION["username"]; ?>
        <?php
        }
        else
        echo "<h1>Please login first .</h1>";
      }
      ?>


    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span>Gruhlaxmi Associates</h2>
        </div>

            
        <div class="sidebar-menu" >
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo" ></span>
                    <span>Dashboard</span></a>
                </li>  

                


                <li>
                <?php  $img_display = "http://localhost/view_leads/viewleadsedit.php?username=".$_SESSION['username'];
				echo "<a href=".$img_display.">View Leads</a>";?>
                </li>


                <li>
                    
                    <?php $img_display = "http://localhost/view_leads/properties.php?username=".$_SESSION['username'];
				echo "<a href=".$img_display." >Upload Leads</a>"; ?>
                </li>

                <li>
                <?php $img_display = "http://localhost/view_leads/logout.php?username=".$_SESSION['username'];
				echo "<a href=".$img_display." >Logout</a>"; ?>
                </li>
            </ul>
        </div>
   </div>
</body> 
</html> 
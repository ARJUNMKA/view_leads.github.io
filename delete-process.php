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


if(isset($_POST['delete'])){
    $id=$_POST['id'];
}
$id = $_SESSION['id'];
// sql to delete a record
$sql = "DELETE FROM tbproperties WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}

 else
  {
    echo "Error deleting record: " . $conn->error;
}
header('location:viewleadsedit.php');
$conn->close();
?>
<?php
include_once 'db_conn1.php';
$curr_date1 = date('d/m/Y');
//if (isset($_POST['back'])) {
   // header("location:login.php");
//}
if(isset($_POST['submit'])){

    $registrationdate = $_POST['registrationdate'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['mobilenumber'];
    $address = $_POST['address'];

    $sql = "INSERT INTO tbregistration(registrationdate,username,password,usertype,email,mobilenumber,address)
    VALUES('$registrationdate','$username','$password','$usertype','$email','$mobilenumber','$address')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "";
       
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
    <link rel="stylesheet" href="mahalaxmi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title> Registration</title>
</head> 

<body>
    <div class="center">
        <h1>Registration </h1>
        <form  class="form" method="POST">
       
           
        <div class="input-group">
                <input type="text" name="registrationdate" id="registrationdate"value=<?php echo $curr_date1 ?> required style="color: white;">
                <label for="registrationdate"  class="input-group">Registration Date </label>
               
                


            </div>  
            
            <div class="input-group">
                <input type="username" name="username" id="username" required>
                <label for="username" class="input-group">User Name</label >
            </div>

            

            <div class="input-group">
                <input type="usertype" name="usertype" id="usertype">
                <label for="usertype">User Type</label>
            </div>


            <div class="input-group">
                <input type="email" name="email" id="email" > 
                <label for="email">Email</label>
            </div>

            <div class="input-group">
                <input type="password" name="password" id="password">
                <label for="password">password</label>
            </div>


            <div class="input-group">
                <input type="mobilenumber" name="mobilenumber" id="mobilenumber">
                <label for="mobilenumber">Contact Number</label>
            </div>

            <div class="input-group">
                <input type="address" name="address" id="address">
                <label for="address">Address</label>
            </div>
          
            
            <input type="submit" value="Register" name="submit" class="submit-btn">
            
           <!-- <input type="submit" name="back" value="Sign in">-->
                 <button type="submit" id="signupBtn" name="back" >
                <a href="login.php" style="color:white; text-decoration: none;">Sign in</a></button>
               



            
        </form>
    </div>                                                                                                  



</body>
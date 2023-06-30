<?php
session_start();
include_once 'db_conn1.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <title>  Login Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

</head> 


<body>

   <div class="container">
       <div class="form-box">
         <h1 id="title">Sign in</h1>
          <form method="post" action="index.php"> 
              <div class="input-group">
                  


                    <div class="input-field">
                     <i class="fa-solid fa-envelope"></i>
                     <input type="email" placeholder="Email" required  value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="email">
                    </div>


                    <div class="input-field">
                     <i class="fa-solid fa-user"></i>
                     <input type="password" placeholder="Password" class="disable"  value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password">
                    </div><br><br>

                    
                </div> 
                
                <div class="btn-field">
               
                <button type="submit" id="signinBtn"  class="disable" name="login" value="Sign in">Sign in</button>
                <button type="submit" id="signupBtn" name="submit1"  >
                <a href="mahatbadmin.php" style="color:white; text-decoration: none;" >Sign up</a></button>
               
            </div><br><br>
            </form>
       </div> 
    </div>
    

    <?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>




</body>

</html>

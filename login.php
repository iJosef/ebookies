<?php
   include("config.php");
   session_start();
   if(isset($_SESSION["login_user"]))  
    {  
        header("location:welcome.php");  
    }

   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
	  $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $a = "SELECT * FROM users WHERE email = '$email' ";
      $result = mysqli_query($conn,$a);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($count > 0) {
		 //session_register("myemail");
		
		 while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
						  $_SESSION["login_user"] = $email;  
						  
                          header("location: welcome.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          $error = "Your Login Name or Password is invalid";  
                     }  
                }         
         
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
    <head>
    <title>Test Test</title>
    </head>
    <body>
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="email" placeholder="Email" value="" ><span></span><br>
                <input type="password" name="password" placeholder="Password" value="" ><span></span><br>
                <button>Login</button>
                <?php echo $error;?>
            </form>
        </div>
    </body>
</html>
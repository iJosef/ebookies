<?php
   include "session.php";
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $row['username']; ?></h1> 
      
      
      <div>
          <p>Your Full Name is: <?php echo $row['full_name']?></p>
          <p>Your Username is: <?php echo $row['username']?></p>
          <p>Your Phone number is: <?php echo $row['phone_number']?></p>
      </div>
       <div>
        <h5><a href = "logout.php">Sign Out</a></h5>
       </div>
       
   </body>
   
</html>
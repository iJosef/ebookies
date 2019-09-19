<?php
    include "reg.php";
?>

<html>
    <head>
    <title>Test Test</title>
    </head>
    <body>
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="full_name" placeholder="Full Name" value="<?php echo $full_name; ?>" ><span><?php echo $full_name_error; ?></span><br>
                <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>" ><span><?php echo $email_error; ?></span><br>
                <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" ><span><?php echo $username_error; ?></span><br>
                <input type="text" name="phone_number" placeholder="Phone number" value="<?php echo $phone_number; ?>" ><span><?php echo $phone_number_error; ?></span><br>
                <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" ><span><?php echo $password_error; ?></span><br>
                <input type="password" name="confirm_password" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>" ><span><?php echo $confirm_password_error; ?></span><br>
                <button>Register</button>
            </form>
        </div>
    </body>
</html>
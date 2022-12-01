<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Boulala</title>
    <link rel="stylesheet" href="css/signup_login.css">
</head>

<body>
    <div class="container">
        <img src="img/boulala-logo.png" class="logo">
        <form action="include/signup.inc.php" method="post">
            <input type="text" required autocomplete="off" name="name" placeholder="Name" style="text-transform: capitalize;">
            <input type="text" required autocomplete="off" name="username" placeholder="Username">
            <input type="email" required autocomplete="off" name="email" placeholder="Email"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            <input type="password" required autocomplete="off" name="password" placeholder="Password">
            <input type="password" required autocomplete="off" name="confirmPassword" placeholder="Confirm password">
            <input type="tel" required autocomplete="off" name="phone" placeholder="Phone number (01xxxxxxxxx)"
            pattern="01[0-9]{8}">

            <input type="checkbox" required class="checkbox" name="terms">
            <label for="terms">Agree to our <a href="#">Terms and Conditions</a></label>

            <button type="submit" name="submit" class="submit-button">Create account</button>
        </form>
        
        <div class="link">
            <a href="login.php">Already have an account? Log in here</a>

            <div style="color: red;">
                <?php
                    if (isset($_GET["error"])) {
                        
                        if($_GET["error"] == "pwdnotmatch") {
                            echo "Password doesn't match!";
                        }

                        else if($_GET["error"] == "none") {
                            echo "Signed up successfully! Please proceed to login page.";
                        }
                    }
                ?>
            </div>
        </div> 
    </div>

</body>

</html>
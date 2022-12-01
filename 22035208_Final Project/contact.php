<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boulala - Online Store</title>
    <link rel="stylesheet" href="css/contact.css"> 
</head>

<body>
    <div class="container">
        <img src="img/boulala-logo.png" class="logo">
        <form action="" method="post">
            <div class="select">
                <select id="attn" name="attn">
                    <option value="attn">Attn: (Click to select)</option>
                    <option value="mr">Mr</option>
                    <option value="mr">Dr</option>
                    <option value="mr">Mrs</option>
                    <option value="mr">Mdm</option>
                    <option value="mr">Ms</option>
                </select>
            </div>

            <input type="text" required autocomplete="off" name="name" placeholder="Name" style="text-transform: capitalize;">
            <input type="email" required autocomplete="off" name="email" placeholder="Email"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            <input type="tel" required autocomplete="off" name="phone" placeholder="Phone number (01xxxxxxxxx)"
            pattern="01[0-9]{8}">
            <textarea name="comments" required placeholder="Describe your problems"></textarea>

            <button type="submit" name="submit" class="submit-button">Submit</button>
            <button type="index" name="index" class="submit-button">
                <a href="index.php" style="color: #fff; text-decoration: none;">Back to Home Page</a>
            </button>
        </form>
    </div>
</body>

</html>
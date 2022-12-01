<?php
    session_start();
?>

<div class="nav">
    <img src="img/boulala-logo.png" class="brand-logo">
    <div class="nav-items">
        <div class="search">
            <input type="text" class="search-box" placeholder="search for...">
            <button class="search-button">SEARCH</button>
        </div>
        <a href="#"><img src="img/user.png"></a>
        <?php
        if (isset($_SESSION["username"])) {
            echo '<a href="cart.php"><img src="img/cart.png"></a>';
        }
        else {
            echo '<a href="login.php?message"><img src="img/cart.png"></a>';
        }
    ?>
    </div>
</div>
    
<ul class="links-container">
    <li class="link-item"><a href="index.php" class="link">HOME</a></li>
    <li class="link-item"><a href="blouse.php" class="link">BLOUSE</a></li>
    <li class="link-item"><a href="shorts.php" class="link">SHORTS</a></li>
    <li class="link-item"><a href="skirt.php" class="link">SKIRT</a></li>
    <li class="link-item"><a href="jacket.php" class="link">JACKET</a></li>
    <li class="link-item"><a href="dress.php" class="link">DRESS</a></li>
    <li class="link-item"><a href="contact.php" class="link">CONTACT US</a></li>
    <?php
        if (isset($_SESSION["username"])) {
            echo '<li class="link-item"><a href="include/logout.inc.php" class="link">LOG OUT</a></li>';
        }
        else {
            echo '<li class="link-item"><a href="login.php" class="link">LOGIN</a></li>';
        }
    ?>
</ul>
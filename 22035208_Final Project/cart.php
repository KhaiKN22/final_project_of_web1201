<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boulala - Online Store</title>
    <link rel="stylesheet" href="css/home.css"> 
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <?php
        include "include/nav.php";
    ?>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th colspan="2">Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/blouse1.jpg">
                    </div>
                </td>
                <td>
                    <p>Blouse</p>
                    <small>Price: RM15</small><br><br>
                    <a href="#">Remove</a>
                </td>
                <td><input type="number" value="1"></td>
                <td>RM15</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/dress1.jpg">
                    </div>
                </td>
                <td>
                    <p>Dress</p>
                    <small>Price: RM25</small><br><br>
                    <a href="#">Remove</a>
                </td>
                <td><input type="number" value="1"></td>
                <td>RM25</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/jacket1.jpg">
                    </div>
                </td>
                <td>
                    <p>Jacket</p>
                    <small>Price: RM20</small><br><br>
                    <a href="#">Remove</a>
                </td>
                <td><input type="number" value="1"></td>
                <td>RM20</td>
            </tr>
        </table>

        <div class="price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>RM60</td>
                </tr>

                <tr>
                    <td>Service Tax (10%)</td>
                    <td>RM6</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>RM66</td>
                </tr>
            </table>
        </div>

        <div class="checkout">
            <button type="submit" name="checkout" class="submit-button">Proceed to checkout</button>
        </div>
    </div>

    <footer class="footer">
    </footer>

    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
</body>

</html>
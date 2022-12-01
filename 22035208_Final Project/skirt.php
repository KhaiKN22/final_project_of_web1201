<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skirt - Boulala</title>
    <link rel="stylesheet" href="css/home.css"> 
    <link rel="stylesheet" href="css/product.css"> 
</head>

<body>

    <?php
        include "include/nav.php";
    ?>

    <section class="product-details">
        <div class="product-image">
            <img src="img/skirt1.jpeg">
        </div>

        <div class="details">
            <h2 class="product-des">Jeans</h2>
            <p class="product-short-des">Jeans<br>A blue jeans skirt</p>
            <span class="product-price">RM15</span>
            <span class="product-act-price">RM30</span>
            <span class="product-discount">(-50%)</span>

            <p class="product-sub-heading">Select size</p>
            <input type="radio" name="size" value="s" checked hidden id="s-size">
            <label for="s-size" class="size-button check">S</label>
    
            <input type="radio" name="size" value="m" hidden id="m-size">
            <label for="m-size" class="size-button">M</label>
    
            <input type="radio" name="size" value="l" hidden id="l-size">
            <label for="l-size" class="size-button">L</label>
    
            <input type="radio" name="size" value="xl" hidden id="xl-size">
            <label for="xl-size" class="size-button">XL</label>
    
            <input type="radio" name="size" value="xxl" hidden id="xxl-size">
            <label for="xxl-size" class="size-button">XXL</label>

            <button class="cart-button">Add To Cart</button>

        </div>
    </section>

    <section class="product">
        <h2 class="product-category">More Skirt</h2>
        <button class="previous-button"><img src="img/arrow.png"></button>
        <button class="next-button"><img src="img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/skirt2.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue skirt</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/skirt3.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue skirt</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer"></footer>

    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
    <script src="js/product.js"></script>

</body>

</html>
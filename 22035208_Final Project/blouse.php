<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blouse - Boulala</title>
    <link rel="stylesheet" href="css/home.css"> 
    <link rel="stylesheet" href="css/product.css"> 
</head>

<body>

    <?php
        include "include/nav.php";
    ?>

    <section class="product-details">
        <div class="product-image">
            <img src="img/blouse1.jpg">
        </div>

        <div class="details">
            <h2 class="product-des">Linen</h2>
            <p class="product-short-des">H&M<br>A white linen blouse</p>
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
        <h2 class="product-category">More Blouse</h2>
        <button class="previous-button"><img src="img/arrow.png"></button>
        <button class="next-button"><img src="img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/blouse2.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Cotton</h2>
                    <p class="product-desc">A grey blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/blouse3.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Knitted</h2>
                    <p class="product-desc">A red blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/blouse4.jpeg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/blouse5.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">A blue striped blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/blouse6.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">A white striped blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/blouse7.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/blouse8.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Knitted</h2>
                    <p class="product-desc">A red blouse</p>
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
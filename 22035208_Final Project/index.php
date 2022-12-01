<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boulala - Online Store</title>
    <link rel="stylesheet" href="css/home.css"> 
</head>

<body>
    <?php
        include "include/nav.php";
    ?>

    <header class="hero-section">
        <div class="content">
            <img src="img/boulala-logo.png" class="logo">
            <p class="sub-heading">Made for everyBODY</p>
        </div>
    </header>

    <section class="product">
        <h2 class="product-category">Best Selling</h2>
        <button class="previous-button"><img src="img/arrow.png"></button>
        <button class="next-button"><img src="img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="blouse.php"><img src="img/blouse1.jpg"></a>
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">H&M</h2>
                    <p class="product-desc">A white blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="dress.php"><img src="img/dress1.jpg"></a>
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue dress</p>
                    <span class="price">RM25</span><span class="actual-price">RM50</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="jacket.php"><img src="img/jacket1.jpg"></a>
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Cotton</h2>
                    <p class="product-desc">A grey jacket</p>
                    <span class="price">RM20</span><span class="actual-price">RM40</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/dress2.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue dress</p>
                    <span class="price">RM25</span><span class="actual-price">RM50</span>
                </div>
            </div>

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
                    <a href="shorts.php"><img src="img/shorts1.jpeg"></a>
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Cotton</h2>
                    <p class="product-desc">A red shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="skirt.php"><img src="img/skirt1.jpeg"></a>
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
                    <img src="img/blouse5.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">A blue striped blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>
        </div>
    </section>

    <section class="collection-container">
        <a href="blouse.php" class="collection">
            <img src="img/blouse-collection.jpeg">
            <p class="collection-title">BLOUSE</p>
        </a>

        <a href="shorts.php" class="collection">
            <img src="img/shorts-collection.jpeg">
            <p class="collection-title">SHORTS</p>
        </a>

        <a href="skirt.php" class="collection">
            <img src="img/skirt-collection.jpeg">
            <p class="collection-title">SKIRT</p>
        </a>

        <a href="jacket.php" class="collection">
            <img src="img/jacket-collection.jpeg">
            <p class="collection-title">JACKET</p>
        </a>

        <a href="dress.php" class="collection">
            <img src="img/dress-collection.jpeg">
            <p class="collection-title">DRESS</p>
        </a>
    </section>

    <section class="product">
        <h2 class="product-category">Blouse</h2>
        <button class="previous-button"><img src="img/arrow.png"></button>
        <button class="next-button"><img src="img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="blouse.php"><img src="img/blouse1.jpg"></a>
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">H&M</h2>
                    <p class="product-desc">A white blouse</p>
                    <span class="price">RM15</span><span class="actual-price">RM30</span>
                </div>
            </div>

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
        </div>
    </section>

    <section class="product">
        <h2 class="product-category">Shorts</h2>
        <button class="previous-button"><img src="img/arrow.png"></button>
        <button class="next-button"><img src="img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="shorts.php"><img src="img/shorts1.jpeg"></a>
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Cotton</h2>
                    <p class="product-desc">A red shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/shorts2.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">A white shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/shorts3.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">A black shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/shorts4.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">A white shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/shorts5.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">A black shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/shorts6.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/shorts7.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/shorts8.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">A pink shorts</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>
        </div>
    </section>

    <section class="product">
        <h2 class="product-category">Skirt</h2>
        <button class="previous-button"><img src="img/arrow.png"></button>
        <button class="next-button"><img src="img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="skirt.php"><img src="img/skirt1.jpeg"></a>
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

    <section class="product">
        <h2 class="product-category">Jacket</h2>
        <button class="previous-button"><img src="img/arrow.png"></button>
        <button class="next-button"><img src="img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="jacket.php"><img src="img/jacket1.jpg"></a>
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Cotton</h2>
                    <p class="product-desc">A grey jacket</p>
                    <span class="price">RM20</span><span class="actual-price">RM40</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/jacket2.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A green jacket</p>
                    <span class="price">RM20</span><span class="actual-price">RM40</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/jacket3.jpeg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A brown jacket</p>
                    <span class="price">RM20</span><span class="actual-price">RM40</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/jacket4.jpeg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A pink jacket</p>
                    <span class="price">RM20</span><span class="actual-price">RM40</span>
                </div>
            </div>
        </div>
    </section>

    <section class="product">
        <h2 class="product-category">Dress</h2>
        <button class="previous-button"><img src="img/arrow.png"></button>
        <button class="next-button"><img src="img/arrow.png"></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <a href="dress.php"><img src="img/dress1.jpg"></a>
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue dress</p>
                    <span class="price">RM25</span><span class="actual-price">RM50</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/dress2.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Jeans</h2>
                    <p class="product-desc">A blue dress</p>
                    <span class="price">RM25</span><span class="actual-price">RM50</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/dress3.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Japanese Brand</h2>
                    <p class="product-desc">A grey dress</p>
                    <span class="price">RM25</span><span class="actual-price">RM50</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/dress4.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Monki</h2>
                    <p class="product-desc">A green dress</p>
                    <span class="price">RM25</span><span class="actual-price">RM50</span>
                </div>
            </div>

            <div class="product-card">
                <div class="product-images">
                    <span class="discount">-50%</span>
                    <img src="img/dress5.jpg">
                    <button class="card-button">Add To Cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-special">Linen</h2>
                    <p class="product-desc">An orange dress</p>
                    <span class="price">RM10</span><span class="actual-price">RM20</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
    </footer>

    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>
</body>

</html>
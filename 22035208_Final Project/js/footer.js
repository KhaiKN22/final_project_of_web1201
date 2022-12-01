const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
        <img src="img/boulala-logo.png" class="logo">
        <div class="footer-ul-container">
            <ul class="category">
                <li class="category-title">Blouse</li>
                <li><a href="#" class="footer-link">Cotton</a></li>
                <li><a href="#" class="footer-link">Jeans</a></li>
                <li><a href="#" class="footer-link">Knitted</a></li>
                <li><a href="#" class="footer-link">Linen</a></li>
            </ul>

            <ul class="category">
                <li class="category-title">Shorts</li>
                <li><a href="#" class="footer-link">Cotton</a></li>
                <li><a href="#" class="footer-link">Jeans</a></li>
                <li><a href="#" class="footer-link">Linen</a></li>
            </ul>

            <ul class="category">
                <li class="category-title">Skirt</li>
                <li><a href="#" class="footer-link">Cotton</a></li>
                <li><a href="#" class="footer-link">Jeans</a></li>
                <li><a href="#" class="footer-link">Brand</a></li>
            </ul>

            <ul class="category">
                <li class="category-title">Jacket</li>
                <li><a href="#" class="footer-link">Cotton</a></li>
                <li><a href="#" class="footer-link">Jeans</a></li>
                <li><a href="#" class="footer-link">Brand</a></li>
            </ul>

            <ul class="category">
                <li class="category-title">Dress</li>
                <li><a href="#" class="footer-link">Cotton</a></li>
                <li><a href="#" class="footer-link">Jeans</a></li>
                <li><a href="#" class="footer-link">Linen</a></li>
                <li><a href="#" class="footer-link">Brand</a></li>
            </ul>
        </div>
    </div>

    <p class="footer-title">About Boulala</p>
    <p class="footer-info">All clothes are new and these are off season items imported from overseas.</p>
    <p class="footer-info">Support emails - help@boulala.com</p>
    <p class="footer-info">Telephone - 010 234 5678</p>

    <div class="footer-social-container">
        <div>
            <a href="#" class="footer-social">Terms & Services</a>
            <a href="#" class="footer-social">Privacy policy</a>
        </div>

        <div>
            <a href="https://chat.whatsapp.com/B9K7mprmEyWEE4bmKyk6XL" class="footer-social">WhatsApp</a>
            <a href="https://www.facebook.com/profile.php?id=100083393646271" class="footer-social">Facebook</a>
        </div>
    </div>

    <p class="footer-credit">Boulala - Online Store</p>
    `;
}

createFooter();
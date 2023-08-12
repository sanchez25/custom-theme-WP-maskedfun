<footer>
    <!--<div class="footer-icon"></div>-->
    <div class="container">
        <div class="footer-block">
            <div class="footer-col">
                <span class="footer-title">Скачать приложение</span>
                <div class="app-buttons">
                    <button class="download-btn apple" aria-label="Скачать с app store" onclick="location.href='https://apps.apple.com/us/app/masked-love-anonymous-dating/id919512287'"></button>
                    <button class="download-btn android" aria-label="Скачать с google play" onclick="location.href='https://play.google.com/store/apps/details?id=com.wamba.bbs'"></button>
                </div>
            </div>
            <div class="footer-col">
                <span class="footer-title">Контакты</span>
                <a href="mailto:feedback@masked.love" class="footer-link">feedback@masked.love</a>
            </div>
        </div>
        <div class="footer-copy">
            <span>© 2023 masked.love</span>
            <a href="/policy/">Политика кнофиденциальности</a>
        </div>
    </div>
    <div id="cookie-block">
        <span class="cookie-block-title">We value your privacy</span>
        <p class="cookie-block-text">We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.</p>
        <div class="cookie-buttons">
            <button class="cookie-reject-button">
               <span>Reject All</span>
            </button>
            <button class="cookie-accept-button">
               <span>Accept All</span>
            </button>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

</body>
</html>

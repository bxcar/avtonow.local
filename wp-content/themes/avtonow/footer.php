<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avtonow
 */

?>
<footer class="footer">
    <div class="footer__top">
        <div class="footer__top-container">
            <span class="footer__title">По всем вопросам вы можете обращаться по нашим контактным телефонам.</span>
            <div class="footer__phone-map-wrapper">
                <div class="footer__phone">
                    <img class="footer__phone-img" src="<?= get_template_directory_uri();?>/dist/img/white-tel.png"><!--
                --><span class="footer__phone-number"><!--
                --><span class="footer__phone-number-sub">(495)</span> 544 87 65</span><!--
                --><span class="footer__phone-small-text">или написать по адресу: avtonow@mail.ru</span>
                </div>
                <div class="footer__location-wrapper">
                    <img class="footer__location-img" src="<?= get_template_directory_uri();?>/dist/img/location-marker.png">
                    <span class="footer__address">метро Электрозаводская , ул.Фридриха Энгельса 75 корп<br>
                20 офисный центр, офис 303</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__form-wrap">
        <span class="footer__form-title">Не нашил, что искали?</span>
        <span class="footer__form-subtitle">Оставьте заявку и мы перезвоним вам через 30 секунд</span>
        <form class="footer__form" action="/" method="post">
            <input class="footer__form-input" type="text" name="name" placeholder="Ваше имя">
            <input class="footer__form-input footer__form-input--tel" type="tel" name="phone" placeholder="Ваш телефон">
            <input class="footer__form-submit" type="submit" value="Заказать">
        </form>
        <span class="footer__form-small-text">* Я даю согласие на обработку моих персональных данных</span>
    </div>
    <div class="footer__bottom">
        <div class="footer__bottom-container">
            <span class="footer__copyright">Аренда машин, аренда авто, аренда автомобиля, аренда автобуса Avtonow.ru</span>
        </div>
    </div>
</footer>
<script src="<?= get_template_directory_uri();?>/app/js/libs.min.js"></script>
<script src="<?= get_template_directory_uri();?>/app/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package avtonow
 */

get_header();
?>
    <div class="cars-rent">
        <div class="cars-rent__container">
            <div class="cars-rent__block">
                <div class="cars-rent__images">
                    <a class="cars-rent__img-link" href="#">
                        <img class="cars-rent__img" src="img/minivan-rent.png">
                        <span class="cars-rent__text-link cars-rent__text-link--mob">Аренда Минивэна</span>
                    </a>
                    <a class="cars-rent__img-link" href="#">
                        <img class="cars-rent__img" src="img/minibus-rent.png">
                        <span class="cars-rent__text-link cars-rent__text-link--mob">Аренда Микроавтобуса</span>
                    </a>
                    <a class="cars-rent__img-link" href="#">
                        <img class="cars-rent__img" src="img/car-rent.png">
                        <span class="cars-rent__text-link cars-rent__text-link--mob">Аренда Автомобиля</span>
                    </a>
                </div>
                <div class="cars-rent__titles">
                    <a class="cars-rent__text-link" href="#">Аренда Минивэна</a>
                    <a class="cars-rent__text-link" href="#">Аренда Микроавтобуса</a>
                    <a class="cars-rent__text-link" href="#">Аренда Автомобиля</a>
                </div>
            </div>
            <div class="cars-rent__block">
                <div class="cars-rent__images cars-rent__images--spbtw">
                    <a class="cars-rent__img-link" href="#">
                        <img class="cars-rent__img" src="img/premium-rent.png">
                        <span class="cars-rent__text-link cars-rent__text-link--mob">Аренда Премиум класс</span>
                    </a>
                    <a class="cars-rent__img-link" href="#">
                        <img class="cars-rent__img" src="img/suv-rent.png">
                        <span class="cars-rent__text-link cars-rent__text-link--mob">Аренда Внедорожника</span>
                    </a>
                    <a class="cars-rent__img-link" href="#">
                        <img class="cars-rent__img" src="img/bus-rent.png">
                        <span class="cars-rent__text-link cars-rent__text-link--mob">Аренда Автобуса</span>
                    </a>
                </div>
                <div class="cars-rent__titles">
                    <a class="cars-rent__text-link" href="#">Аренда Премиум класс</a>
                    <a class="cars-rent__text-link" href="#">Аренда Внедорожника</a>
                    <a class="cars-rent__text-link" href="#">Аренда Автобуса</a>
                </div>
            </div>
        </div>
    </div>
    <div class="advantages">
        <div class="advantages__container">
            <div class="advantages__item">
                <img class="advantages__img" src="img/high-service-quality.png">
                <span class="advantages__desc">Высокое качество<br>сервиса</span>
                <img class="advantages__checked advantages__checked--desktop" src="img/checked.png">
            </div>
            <div class="advantages__item">
                <img class="advantages__img" src="img/professional-drivers.png">
                <span class="advantages__desc">Профессиональные<br>водители</span>
                <img class="advantages__checked advantages__checked--desktop" src="img/checked.png">
            </div>
            <div class="advantages__item">
                <img class="advantages__img" src="img/flexible-prices.png">
                <span class="advantages__desc">Гибкие цены</span>
                <img class="advantages__checked advantages__checked--desktop" src="img/checked.png">
            </div>
            <div class="advantages__item">
                <img class="advantages__img" src="img/speed-and-time.png">
                <span class="advantages__desc">Скорость и время</span>
                <img class="advantages__checked" src="img/checked.png">
            </div>
        </div>
    </div>
    <main class="main">
        <div class="main__container">
            <div class="main__left-side">
                <div class="main__left-side-title">Наши услуги</div>
                <ul class="main__left-side-list">
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Условия аренды авто</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Заказ лимузинов на свадьбу</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Автопарк автомобилей для аренды</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Бизнес такси и долгосрочная аренда автомобилей</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Аренда мерседес 221 – прикоснитесь к роскоши</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Вакансии</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Вопросы и ответы</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Аренда автомобилей на свадьбу</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Машины свадебные</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Корпоративное такси и такси микроавтобус</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Аренда мерседес</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Долгосрочная аренда автомобилей</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Статьи</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Цены на аренду авто</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Корпоративное и бизнес такси</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Аренда ретро автомобилей и долгосрочная аренда
                            автомобилей</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Аренда ретро автомобилей и аренда мерседес 221</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Аренда микроавтобуса с водителем</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Контакты</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Бизнес такси и трансфер в аэропорт</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Аренда мерседес и трансфер в аэропорт</a>
                    </li>
                    <li class="main__left-side-item">
                        <a class="main__left-side-link" href="#">Новости</a>
                    </li>
                </ul>
            </div>
            <div class="main__right-side">
                <h2>Аренда машины с водителем – комфорт по приемлемой цене</h2>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin,
                    lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit
                    amet
                    nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                    auctor
                    a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad
                    litora
                    torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis
                    dapibus
                    condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum
                    nunc.
                    Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.
                    Suspendisse in orci enim.</p>
                <img src="img/content-img.png">
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin,
                    lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit
                    amet
                    nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                    auctor
                    a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad
                    litora
                    torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis
                    dapibus
                    condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum
                    nunc.
                    Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.
                    Suspendisse in orci enim.</p>
                <h2>Информация по аренде машины с водителем</h2>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin,
                    lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit
                    amet
                    nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                    auctor
                    a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad
                    litora
                    torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis
                    dapibus
                    condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum
                    nunc.
                    Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.
                    Suspendisse in orci enim. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti
                    sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. Sed non mauris vitae erat consequat auctor eu in
                    elit. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. Sed non mauris vitae erat consequat auctor eu in
                    elit. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. Sed non mauris vitae erat consequat auctor eu in
                    elit. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
        </div>
    </main>
    <div class="slider">
        <h2 class="slider__main-title">Новинки</h2>
        <div class="slider__container owl-carousel owl-slider" id="owl-slider">
            <div class="slider__item">
                <img class="slider__img" src="img/slider-img.png">
                <span class="slider__title">Аренда Мерседес Виано<br>Mercedes Viano Люкс чёрный</span>
                <p class="slider__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                    aliquet. Aenean sollicitudin, lorem</p>
            </div>
            <div class="slider__item">
                <img class="slider__img" src="img/slider-img.png">
                <span class="slider__title">Аренда Мерседес Виано<br>Mercedes Viano Люкс чёрный</span>
                <p class="slider__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                    aliquet. Aenean sollicitudin, lorem</p>
            </div>
            <div class="slider__item">
                <img class="slider__img" src="img/slider-img.png">
                <span class="slider__title">Аренда Мерседес Виано<br>Mercedes Viano Люкс чёрный</span>
                <p class="slider__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                    aliquet. Aenean sollicitudin, lorem</p>
            </div>
            <div class="slider__item">
                <img class="slider__img" src="img/slider-img.png">
                <span class="slider__title">Аренда Мерседес Виано<br>Mercedes Viano Люкс чёрный</span>
                <p class="slider__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                    aliquet. Aenean sollicitudin, lorem</p>
            </div>

            <div class="slider__item">
                <img class="slider__img" src="img/slider-img.png">
                <span class="slider__title">Аренда Мерседес Виано<br>Mercedes Viano Люкс чёрный</span>
                <p class="slider__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                    aliquet. Aenean sollicitudin, lorem</p>
            </div>
            <div class="slider__item">
                <img class="slider__img" src="img/slider-img.png">
                <span class="slider__title">Аренда Мерседес Виано<br>Mercedes Viano Люкс чёрный</span>
                <p class="slider__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                    aliquet. Aenean sollicitudin, lorem</p>
            </div>
            <div class="slider__item">
                <img class="slider__img" src="img/slider-img.png">
                <span class="slider__title">Аренда Мерседес Виано<br>Mercedes Viano Люкс чёрный</span>
                <p class="slider__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                    aliquet. Aenean sollicitudin, lorem</p>
            </div>
            <div class="slider__item">
                <img class="slider__img" src="img/slider-img.png">
                <span class="slider__title">Аренда Мерседес Виано<br>Mercedes Viano Люкс чёрный</span>
                <p class="slider__text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                    aliquet. Aenean sollicitudin, lorem</p>
            </div>
        </div>
    </div>

<?php
get_footer();

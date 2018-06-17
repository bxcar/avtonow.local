<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avtonow
 */

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/app/css/libs.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/app/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/app/css/main.css">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="header__container">
        <ul class="header__menu">
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Главная</a>
            </li>
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Цены</a>
            </li>
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Автопарк</a>
            </li>
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Условия аренды</a>
            </li>
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Контакты</a>
            </li>
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Наши услуги</a>
            </li>
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Вакансии</a>
            </li>
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Сотрудничество</a>
            </li>
            <li class="header__menu-item">
                <a class="header__menu-item-link" href="#">Вопросы и ответы</a>
            </li>
        </ul>
        <div class="header__search-burger-wrapper">
            <div class="header__burger-wrapper">
                <input type="checkbox" class="header__burger-check-menu" id="check-menu">
                <label class="header__burger-check-menu-label" for="check-menu"></label>
                <div class="header__burger-line header__burger-first"></div>
                <div class="header__burger-line header__burger-second"></div>
                <div class="header__burger-line header__burger-third"></div>
                <div class="header__burger-line header__burger-fourth"></div>
                <nav class="header__burger-main-menu">
                    <a class="header__burger-link" href="#">Пункт 1</a>
                    <a class="header__burger-link" href="#">Пункт 2</a>
                    <a class="header__burger-link" href="#">Пункт 3</a>
                    <a class="header__burger-link" href="#">Пункт 4</a>
                    <a class="header__burger-link" href="#">Пункт 5</a>
                </nav>
            </div>
            <div class="header__search">
                <button id="search-form-submit-unreal" class="header__search-form-submit">
                    <img class="header__search-img" src="img/search.png">
                </button>
                <form id="header-search-form" class="header__search-form" action="/" method="get">
                    <input class="header__search-input" name="s" id="s" type="text" placeholder="Поиск">
                    <button type="submit" class="header__search-form-submit">
                        <img class="header__search-form-submit-img" src="img/search.png">
                    </button>
                </form>
            </div>
        </div>
        <div class="header__bottom">
            <div class="header__logo">
                <span class="header__logo-text header__logo-text--1">AVTO</span><!--
                --><span class="header__logo-text header__logo-text--2">NOW</span>
            </div>
            <div class="header__phone">
                <img class="header__phone-img" src="img/tel-blue.png"><!--
                --><span class="header__phone-number"><span
                            class="header__phone-number-sub">(495)</span> 544 87 65</span>
            </div>
            <div class="header__callback">
                <a class="header__callback-button" href="#">Обратный звонок</a>
            </div>
            <div class="header__order">
                <a href="#" class="header__order-link">
                    <img class="header__order-img" src="img/header-order.png"><!--
                    --><span class="header__order-text">Ваш заказ</span>
                </a>
            </div>
        </div>
    </div>
</header>
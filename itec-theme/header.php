<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-above">
                <a href="#" class="header-logo">
                    <img src="<?php theme_image('logo.png'); ?>" alt="ITEC" class="header-logo-image" loading="lazy" width="157"
                        height="50">
                </a>
                <div class="header-contact">
                    <img class="header-above-image" src="<?php theme_image('yandexFavorite.png'); ?>" alt="Хорошее место - 2025"
                        loading="lazy" width="83" height="16">
                    <div class="header-contact-address">
                        <h6 class="header-contact-address-text">
                            г. Москва, ул. Тверская 22а,<br>стр. 3, эт. 2 (ст. м. Тверская)
                        </h6>
                    </div>
                    <div class="header-contact-social">
                        <a href="#" class="header-contact-social-image">
                            <img class="header-contact-social-instagram" src="<?php theme_image('instagram.png'); ?>" alt="Instagram"
                                loading="lazy" width="32" height="32">
                        </a>
                        <a href="#" class="header-contact-social-image">
                            <img class="header-contact-social-vk" src="<?php theme_image('vk.png'); ?>" alt="VK" loading="lazy" width="32"
                                height="32">
                        </a>
                        <a href="#" class="header-contact-social-image">
                            <img class="header-contact-social-telegram" src="<?php theme_image('telegram.png'); ?>" alt="Telegram"
                                loading="lazy" width="32" height="32">
                        </a>
                        <a href="#" class="header-contact-social-image">
                            <img class="header-contact-social-whatsapp" src="<?php theme_image('whatsapp.png'); ?>" alt="WhatsApp"
                                loading="lazy" width="32" height="32">
                        </a>
                    </div>
                    <div class="header-contact-phone">
                        <a href="tel:+74991135264">
                            <h3>+7 499 113 52 64</h3>
                        </a>
                    </div>
                    <a href="#" class="search-short"><img src="<?php theme_image('search-mob.png'); ?>" alt="" width="18" height="18"></a>
                    <a href="#" class="phone-short"><img src="<?php theme_image('phone.png'); ?>" alt="" width="18" height="18"></a>
                    <button class="header-burger-button" type="button">
                        <img src="<?php theme_image('burger.png'); ?>" alt="" width="13px">
                    </button>
                    <a href="#" class="header-contact-button button">Оставить заявку</a>
                </div>
            </div>
            <div class="header-below">
                <nav class="header-below-menu">
                    <ul class="header-menu-list">
                        <li class="header-menu-item">
                            <a href="#" class="header-menu-link has-dropdown">Языки</a>
                        </li>
                        <li class="header-menu-item">
                            <a href="#" class="header-menu-link has-dropdown">Экзамены</a>
                        </li>
                        <li class="header-menu-item">
                            <a href="#" class="header-menu-link has-dropdown">Курсы</a>
                        </li>
                        <li class="header-menu-item">
                            <a href="#" class="header-menu-link has-dropdown">О нас</a>
                        </li>
                        <li class="header-menu-item">
                            <a href="#" class="header-menu-link has-dropdown">Компаниям</a>
                        </li>
                        <li class="header-menu-item">
                            <a href="#" class="header-menu-link has-dropdown">События и акции</a>
                        </li>
                        <li class="header-menu-item">
                            <a href="#" class="header-menu-link">Контакты</a>
                        </li>
                    </ul>
                </nav>
                <div class="header-below-input" style="width: 100%;">
                    <img class="header-below-image" src="<?php theme_image('yandexFavorite.png'); ?>" alt="Хорошее место - 2025"
                        loading="lazy" width="162" height="30">
                    <label class="visibility-hidden header-below-search" for="search">Name</label>
                    <input id="search" type="text" class="header-below-search input" placeholder="Поиск" type="search">
                </div>
                <div class="header-below-social">
                    <a href="#" class="header-contact-social-image">
                        <img class="header-contact-social-instagram" src="<?php theme_image('instagram.png'); ?>" alt="Instagram"
                            loading="lazy" width="32" height="32">
                    </a>
                    <a href="#" class="header-contact-social-image">
                        <img class="header-contact-social-vk" src="<?php theme_image('vk.png'); ?>" alt="VK" loading="lazy" width="32"
                            height="32">
                    </a>
                    <a href="#" class="header-contact-social-image">
                        <img class="header-contact-social-telegram" src="<?php theme_image('telegram.png'); ?>" alt="Telegram"
                            loading="lazy" width="32" height="32">
                    </a>
                    <a href="#" class="header-contact-social-image">
                        <img class="header-contact-social-whatsapp" src="<?php theme_image('whatsapp.png'); ?>" alt="WhatsApp"
                            loading="lazy" width="32" height="32">
                    </a>
                </div>
                <div class="header-below-address">
                    <h6 class="header-contact-address-text">
                        г. Москва, ул. Тверская 22а,<br>стр. 3, эт. 2 (ст. м. Тверская)
                    </h6>
                </div>
            </div>
        </div>
    </header>
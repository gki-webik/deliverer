<?php
$siteUrl = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$meta = '
<!-- Важная сео информация -->
<!-- Имя владельца -->
<meta name="author" lang="ru" content="Кирилл Гуляев" />
<!-- Разрешение роботу индексировать сайт -->
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow">
<!-- Тема сайта -->
<meta name="subject" content="IT">
<!-- Местоположение сайта -->
<meta name="ICBM" content="54.979486,73.363419">
<meta name="geo.position" content="54.979486;73.363419">
<!-- Регион -->
<meta name="geo.region" content="RU">
<!-- Город -->
<meta name="geo.placename" content="Omsk">
<!-- Текущий URL -->
<meta property="og:url" content="' . $siteUrl . '" />
<!-- Ссылка на сайт -->
<link rel="me" href="https://klicks.ru/my" type="text/html">
<!-- Ссылка на почту -->
<link rel="me" href="mailto:gki-webik@ya.ru">
<!-- Ссылка на смс -->
<link rel="me" href="sms:+79836214418">
<!-- Фавиконки -->
<link rel="icon" href="https://gki-wbk.ru/files/images/regular/iconka.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="https://gki-wbk.ru/files/images/regular/iconka.png" />
<!-- Стиль меню -->
<link rel="stylesheet" href="/assets/styles/dist/menu.css">
<!-- Стиль футера -->
<link rel="stylesheet" href="/assets/styles/dist/footer.css">
';
$menu = '
<header>
    <div class="menu">
        <div class="logo" onclick="document.location.href=\'/\'">
            <img src="./assets/images/Dark-logo.svg"
                alt="Логотип">
        </div>
        <nav class="navMenu">
            <ul>
                <li><a href="/about">О компании</a></li>
                <li><a href="#">Вакансии</a></li>
                <li><a href="/contact">Контакты</a></li>
                <li><a href="https://deliverer.ru/contact#formContact">Обратная связь</a></li>
            </ul>
        </nav>
        <button type="button" class="openMenu">
            <img src="./assets/images/menu-btn.svg"
                alt="Кнопка Закрыть">
        </button>
        <button class="contact-button" onclick="document.location.href=\'https://deliverer.ru/contact#formContact\'">Связаться с нами</button>
    </div>
    <div class="is-blur"></div>
</header>
<div class="leftMenu">
    <div class="logo">
        <img id="logo" src="./assets/images/Dark-logo.svg" onclick="document.location.href=\'/\'" alt="Логотип">
            <button type="button" class="closeMenu">
                <img src="./assets/images/menu-btn.svg" alt="Кнопка Закрыть">
            </button>
    </div>
    <ul>
        <li><a href="/about">О компании</a></li>
        <li><a href="#">Вакансии</a></li>
        <li><a href="/contact">Контакты</a></li>
        <li><a href="https://deliverer.ru/contact#formContact">Обратная связь</a></li>
    </ul>
    <button class="contact-button" onclick="document.location.href=\'https://deliverer.ru/contact#formContact\'">Связаться с нами</button>
</div>
';
$footer = '
<footer>
    <div class="footer-logo">
        <img src="https://assets-global.website-files.com/65636268c62f3d0464956cf4/65672938d8807d2d36c44819_Logo_White.svg"
            alt="Логотип">
        <p>
            Оператор логистических услуг, эксперт в сфере комплексных решений и организации грузоперевозок по
            России
        </p>
    </div>
    <nav>
        <ul>
            <li><a href="#">Вакансии</a></li>
            <li><a href="https://deliverer.ru/contact#formContact">Обратная связь</a></li>
        </ul>
        <ul>
            <li><a href="/about">О компании</a></li>
            <li><a href="/contact">Контакты</a></li>
        </ul>
    </nav>
    <form class="newsletter formNewsletter" action="/api/sendForm.php" method="post">
        <p>Подпишитесь на нашу рассылку с актуальными акциями и новостями компании</p>
        <input type="email" name="email" class="emailNewsletter" placeholder="E-mail">
        <input type="text" name="type" value="3" hidden class="is-none">
        <button type="button" class="btnNewsletter" onclick="submitNewsletter()">Подписаться на новости</button>
    </form>
</footer>
';
?>
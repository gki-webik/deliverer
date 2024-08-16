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
<meta property="og:url" content="' . $siteUrl . '" />
<!-- Стиль меню -->
<link rel="stylesheet" href="/assets/styles/dist/menu.css">
<!-- Стиль футера -->
<link rel="stylesheet" href="/assets/styles/dist/footer.css">
';
$menu = '
<header>
    <div class="menu">
        <div class="logo">
            <img src="https://assets-global.website-files.com/65636268c62f3d0464956cf4/65672df4a5b2b658bab9f327_Dark-logo.svg"
                alt="Логотип">
        </div>
        <nav class="navMenu">
            <ul>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Вакансии</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Обратная связь</a></li>
            </ul>
        </nav>
        <button type="button" class="openMenu">
            <img src="https://assets-global.website-files.com/65636268c62f3d0464956cf4/65636268c62f3d0464956d3e_menu-btn.svg"
                alt="Кнопка Закрыть">
        </button>
        <button class="contact-button">Связаться с нами</button>
    </div>
    <div class="is-blur"></div>
</header>
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
            <li><a href="#">Обратная связь</a></li>
        </ul>
        <ul>
            <li><a href="#">О компании</a></li>
            <li><a href="#">Контакты</a></li>
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
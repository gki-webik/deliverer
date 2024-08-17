<?php
require($_SERVER["DOCUMENT_ROOT"] . "/env.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Краткое описание сайта -->
    <meta name="description" content="Контакты" />
    <title>Контакты</title>

    <?php print_r($meta); ?>

    <!-- Стиль Сайта -->
    <link rel="stylesheet" href="/assets/styles/dist/contact.css?data=<?php print_r(rand(0, 1000)) ?>">
    <!-- Иконки -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php print_r($menu); ?>

    <div class="main_block">
        <div class="text">
            <h1>Связаться с нами</h1>
            <p>Переосмысливаем удобство при каждой отправке. Испытайте безупречную логистику и непревзойденное
                обслуживание клиентов благодаря нашему стремлению к совершенству.</p>
        </div>
        <div class="img">
            <img src="./assets/images/5.webp" alt="">
        </div>
    </div>

    <div class="block2">
        <h2>Наши Офисы</h2>
        <div class="cards">
            <div class="card">
                <div class="title">Лондон</div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-map'></i></div>
                    <div class="text">44 ПАРК РОУДЛОНДОН</div>
                </div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-phone'></i></div>
                    <div class="text">+1 212 425 4567</div>
                </div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-envelope'></i></div>
                    <div class="text">DELIVERER@OFFICE.COM</div>
                </div>
            </div>
            <div class="card">
                <div class="title">Лондон</div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-map'></i></div>
                    <div class="text">44 ПАРК РОУДЛОНДОН</div>
                </div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-phone'></i></div>
                    <div class="text">+1 212 425 4567</div>
                </div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-envelope'></i></div>
                    <div class="text">DELIVERER@OFFICE.COM</div>
                </div>
            </div>
            <div class="card">
                <div class="title">Лондон</div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-map'></i></div>
                    <div class="text">44 ПАРК РОУДЛОНДОН</div>
                </div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-phone'></i></div>
                    <div class="text">+1 212 425 4567</div>
                </div>
                <div class="line">
                    <div class="ico"><i class='bx bxs-envelope'></i></div>
                    <div class="text">DELIVERER@OFFICE.COM</div>
                </div>
            </div>
        </div>
    </div>

    <div class="block3">
        <span class="subtitle">МЫ ПРЕДЛАГАЕМ</span>
        <h2>
            Откройте Для Себя Разницу Между Поставщиками. Мы Предлагаем Непревзойденное Качество Доставки
        </h2>
        <div class="cards">
            <div class="card">
                <div class="head">
                    <div class="dot"></div>
                </div>
                <div class="body">
                    <div class="title">Поддержка</div>
                    <div class="text">Наша специальная команда поддержки готова помогать вам на каждом этапе,
                        гарантируя, что у вас есть рекомендации.</div>
                </div>
                <div class="footer">
                    <a href="">ВСЕ УСЛУГИ ></a>
                </div>
            </div>
            <div class="card">
                <div class="head">
                    <div class="dot"></div>
                </div>
                <div class="body">
                    <div class="title">Поддержка</div>
                    <div class="text">Наша специальная команда поддержки готова помогать вам на каждом этапе,
                        гарантируя, что у вас есть рекомендации.</div>
                </div>
                <div class="footer">
                    <a href="">ВСЕ УСЛУГИ ></a>
                </div>
            </div>
            <div class="card">
                <div class="head">
                    <div class="dot"></div>
                </div>
                <div class="body">
                    <div class="title">Поддержка</div>
                    <div class="text">Наша специальная команда поддержки готова помогать вам на каждом этапе,
                        гарантируя, что у вас есть рекомендации.</div>
                </div>
                <div class="footer">
                    <a href="">ВСЕ УСЛУГИ ></a>
                </div>
            </div>
        </div>
    </div>
    <div id="formContact"></div>
    <div class="block4">
        <form action="/api/sendForm.php" class="formContact">
            <div class="centerStatusSuccess is-none">Спасибо за обращение.</div>
            <div class="centerStatusError is-none">Ошибка</div>
            <div class="block_left">
                <div class="title">Отдел Поддержки</div>
                <input type="text" name="fio" class="formContact_fio" placeholder="Полное имя">
                <div>
                    <input type="email" name="email" class="formContact_email" placeholder="Электронная почта">
                    <input type="tel" name="tel" class="formContact_tel" placeholder="Телефон">
                </div>
                <textarea type="text" name="text" class="formContact_text" placeholder="Пример текста"></textarea>
                <input type="text" class="is-none" name="type" value="4">
                <button type="button" onclick="submitContactForm()">Отправить</button>
            </div>
            <div class="block_right">
                <div class="title">
                    Напишите В Нашу Службу Поддержки, Чтобы Узнать Больше
                </div>
                <div class="text">
                    Наша специальная команда поддержки готова помогать вам на каждом этапе, гарантируя, что вы получите
                    рекомендации и помощь
                </div>
                <div class="contacts">
                    <div class="contact">
                        <i class='bx bxs-phone'></i> +1 212 425 8617
                    </div>
                    <div class="contact">
                        <i class='bx bxs-envelope'></i> information@office.com
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php print_r($footer); ?>
    <!-- Скрипт сайта -->
    <script src="./assets/scripts/index.js"></script>
</body>

</html>
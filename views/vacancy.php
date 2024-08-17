<?php
require($_SERVER["DOCUMENT_ROOT"] . "/env.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Краткое описание сайта -->
    <meta name="description" content="Вакансии" />
    <title>Вакансии</title>

    <?php print_r($meta); ?>

    <!-- Стиль Сайта -->
    <link rel="stylesheet" href="/assets/styles/dist/vacancy.css?data=<?php print_r(rand(0, 1000)) ?>">
    <!-- Иконки -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php print_r($menu); ?>
    <div class="main_block">
        <h1>Вакансии</h1>
        <div class="box">
            <div class="left">
                <img src="./assets/images/8.jpg" alt="">
                <div class="text">
                    <div class="head">
                        <div class="mark">НОВОСТИ</div>
                        <div class="date">26 ноября 2023 г.</div>
                    </div>
                    <div class="body">
                        <div class="title">Логистика, Основанная На Данных: Использование Аналитики Для Повышения
                            Эффективности</div>
                        <div class="description">В эпоху принятия решений на основе данных в нашем последнем посте в
                            блоге
                            исследуется преобразующее влияние аналитики на логистические операции.</div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="title">
                    Недавние посты
                </div>
                <div class="cards">
                    <div class="card">
                        <img src="./assets/images/7.jpg" alt="">
                        <div class="post_text">
                            <div class="post_title">
                                Доставка "последней милей": последний рубеж эффективности логистики</div>
                            <div class="post_date">26 ноября 2023 г.</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./assets/images/7.jpg" alt="">
                        <div class="post_text">
                            <div class="post_title">
                                Доставка "последней милей": последний рубеж эффективности логистики</div>
                            <div class="post_date">26 ноября 2023 г.</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./assets/images/7.jpg" alt="">
                        <div class="post_text">
                            <div class="post_title">
                                Доставка "последней милей": последний рубеж эффективности логистики</div>
                            <div class="post_date">26 ноября 2023 г.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block1">
        <div class="cards">
            <div class="card">
                <div class="img">
                    <img src="./assets/images/8.jpg" alt="">
                </div>
                <div class="mark">НОВОСТИ</div>
                <div class="title">Персонализированная Логистика: Адаптация Решений К Потребностям Вашего Бизнеса</div>
                <div class="description">Раскройте роль анализа данных в изменении логистических операций. Узнайте, как
                    данные в реальном времени, прогнозная аналитика и инструменты бизнес-аналитики трансформируют
                    процессы принятия решений.</div>
                <div class="link">
                    <a href="#">ЧИТАТЬ ДАЛЬШЕ ></a>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/8.jpg" alt="">
                </div>
                <div class="mark">НОВОСТИ</div>
                <div class="title">Персонализированная Логистика: Адаптация Решений К Потребностям Вашего Бизнеса</div>
                <div class="description">Раскройте роль анализа данных в изменении логистических операций. Узнайте, как
                    данные в реальном времени, прогнозная аналитика и инструменты бизнес-аналитики трансформируют
                    процессы принятия решений.</div>
                <div class="link">
                    <a href="#">ЧИТАТЬ ДАЛЬШЕ ></a>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/8.jpg" alt="">
                </div>
                <div class="mark">НОВОСТИ</div>
                <div class="title">Персонализированная Логистика: Адаптация Решений К Потребностям Вашего Бизнеса</div>
                <div class="description">Раскройте роль анализа данных в изменении логистических операций. Узнайте, как
                    данные в реальном времени, прогнозная аналитика и инструменты бизнес-аналитики трансформируют
                    процессы принятия решений.</div>
                <div class="link">
                    <a href="#">ЧИТАТЬ ДАЛЬШЕ ></a>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/8.jpg" alt="">
                </div>
                <div class="mark">НОВОСТИ</div>
                <div class="title">Персонализированная Логистика: Адаптация Решений К Потребностям Вашего Бизнеса</div>
                <div class="description">Раскройте роль анализа данных в изменении логистических операций. Узнайте, как
                    данные в реальном времени, прогнозная аналитика и инструменты бизнес-аналитики трансформируют
                    процессы принятия решений.</div>
                <div class="link">
                    <a href="#">ЧИТАТЬ ДАЛЬШЕ ></a>
                </div>
            </div>
        </div>
    </div>

    <?php print_r($footer); ?>
    <!-- Скрипт сайта -->
    <script src="./assets/scripts/index.js"></script>
</body>

</html>
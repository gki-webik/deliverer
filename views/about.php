<?php
require($_SERVER["DOCUMENT_ROOT"] . "/env.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Краткое описание сайта -->
    <meta name="description" content="О Нас" />
    <title>О Нас</title>

    <?php print_r($meta); ?>

    <!-- Стиль Сайта -->
    <link rel="stylesheet" href="/assets/styles/dist/about.css?data=<?php print_r(rand(0, 1000)) ?>">
</head>

<body>
    <div class="wk-modal isModalFormHelp" data-id="wk-modal-formHelp">
        <div class="wk-modal-background is-active"></div>
        <div class="wk-modal-content">
            <section class="wk-modal-card-body">
                <h2>Отдел Поддержки</h2>
                <div class="centerStatusSuccessModal is-none">Спасибо за обращение.</div>
                <div class="centerStatusErrorModal is-none">Ошибка</div>
                <form action="/api/sendForm.php" class="formContactModal">
                    <input type="text" name="fio" class="formContactModal_fio" placeholder="Полное имя">
                    <div>
                        <input type="email" name="email" class="formContactModal_email" placeholder="Электронная почта">
                        <input type="tel" name="tel" class="formContactModal_tel" placeholder="Телефон">
                    </div>
                    <textarea type="text" name="text" class="formContactModal_text"
                        placeholder="Пример текста"></textarea>
                    <input type="text" class="is-none" name="type" value="4">
                    <button type="button" onclick="submitContactFormModal()">Отправить</button>
                </form>
            </section>
        </div>
        <button class="wk-modal-close js-active is-large"></button>
    </div>

    <?php print_r($menu); ?>

    <div class="main_block">
        <div class="block_text">
            <div class="about">О НАС</div>
            <h1>Кто мы такие</h1>
            <p>Мы осознаем важность обеспечения сохранности того, что для вас важнее всего. Наша цель - предложить вам
                спокойствие, которого вы заслуживаете, благодаря нашим комплексным решениям по отправке грузов.</p>
        </div>
        <div class="img">
            <img src="./assets/images/6.webp" alt="">
        </div>
    </div>

    <div class="block1">
        <h2>
            Мы Стремимся Предоставлять Надежные Страховые Решения
        </h2>
        <div class="block_services">
            <div class="block_left">
                <div class="text">
                    <p>Уделяя особое внимание исключительному обслуживанию клиентов, персонализированному
                        страхованию и
                        стремлению удовлетворить ваши потребности, мы стремимся быть вашим надежным страховым партнером.
                    </p>
                </div>
                <div class="people">
                    <div class="imgs">
                        <div class="img is-1"></div>
                        <div class="img is-2"></div>
                        <div class="img is-3"></div>
                        <div class="img is-4"></div>
                    </div>
                    <div class="description">
                        <b>40K+</b> Застрахованные лица
                    </div>
                </div>
            </div>
            <div class="block_right">
                <div class="top">
                    <div class="line">
                        <i class='bx bx-check'></i> Индивидуальное покрытие
                    </div>
                    <div class="line">
                        <i class='bx bx-check'></i> Исключительное обслуживание клиентов
                    </div>
                    <div class="line">
                        <i class='bx bx-check'></i> Опыт, которому доверяют
                    </div>
                </div>
                <div class="bottom">
                    <a role="button" class="js-active-modal" data-id="wk-modal-formHelp">ВСЕ УСЛУГИ ></a>
                </div>
            </div>
        </div>
    </div>
    <div class="block2">
        <div class="img">
            <img src="./assets/images/1.webp" alt="">
        </div>
        <div class="block_text">
            <div class="title">Наша История</div>
            <div class="info">Компания Insurance обслуживает частных лиц, семьи и предприятия уже более 20 лет.</div>
            <div class="text">
                Мы росли и развивались на протяжении многих лет, мы легко адаптировались к динамичным
                потребностям наших клиентов и постоянно меняющемуся ландшафту логистической отрасли. Наш путь является
                свидетельством нашей приверженности предоставлению не просто услуг, но и гарантией надежности для наших
                уважаемых клиентов.
            </div>
        </div>
    </div>
    <div class="block3">
        <div class="title">
            <h2>Познакомьтесь с нашей преданной командой</h2>
            <div class="description">
                <p>
                    Наша команда состоит из высококвалифицированных агентов, специалистов по претензиям и представителей
                    службы поддержки клиентов, которые стремятся понять ваши уникальные потребности и предложить
                    персонализированные решения.
                </p>
                <button class="js-active-modal" data-id="wk-modal-formHelp">ПРОСМОТРЕТЬ ВСЮ КОМАНДУ ></button>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <a href="" class="img">
                    <img src="./assets/images/6.png" alt="">
                </a>
                <div class="name"><a href="">ЭМИЛИ ДЖОНСОН</a></div>
                <div class="description">Менеджеры цепочки поставок</div>
            </div>
            <div class="card">
                <a href="" class="img">
                    <img src="./assets/images/6.png" alt="">
                </a>
                <div class="name"><a href="">ЭМИЛИ ДЖОНСОН</a></div>
                <div class="description">Менеджеры цепочки поставок</div>
            </div>
            <div class="card">
                <a href="" class="img">
                    <img src="./assets/images/6.png" alt="">
                </a>
                <div class="name"><a href="">ЭМИЛИ ДЖОНСОН</a></div>
                <div class="description">Менеджеры цепочки поставок</div>
            </div>
            <div class="card">
                <a href="" class="img">
                    <img src="./assets/images/6.png" alt="">
                </a>
                <div class="name"><a href="">ЭМИЛИ ДЖОНСОН</a></div>
                <div class="description">Менеджеры цепочки поставок</div>
            </div>
        </div>
    </div>
    <div class="block4">
        <div class="counts">
            <div class="count">
                <div class="title">40K+</div>
                <div class="description">Довольные клиенты</div>
            </div>
            <div class="count">
                <div class="title">12+</div>
                <div class="description">Многолетний опыт работы</div>
            </div>
            <div class="count">
                <div class="title">25</div>
                <div class="description">Надежные партнеры</div>
            </div>
            <div class="count">
                <div class="title">98%</div>
                <div class="description">Рейтинг удовлетворенности</div>
            </div>
        </div>
        <h2>Наши Услуги</h2>
        <p>Независимо от того, ищете ли вы страховку для своего дома, автомобиля, здравоохранения или бизнеса, мы
            обеспечим вас.</p>
        <div class="services">
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.jpg" alt="">
                </div>
                <div class="title">Услуги Экспресс-Доставки</div>
                <div class="description">Быстрые и надежные экспресс-доставки, гарантирующие, что ваши посылки быстро
                    доберутся до места назначения.</div>
                <div class="link"><a role="button" class="js-active-modal" data-id="wk-modal-formHelp">УЗНАТЬ БОЛЬШЕ
                        ></a></div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.jpg" alt="">
                </div>
                <div class="title">Услуги Экспресс-Доставки</div>
                <div class="description">Быстрые и надежные экспресс-доставки, гарантирующие, что ваши посылки быстро
                    доберутся до места назначения.</div>
                <div class="link"><a role="button" class="js-active-modal" data-id="wk-modal-formHelp">УЗНАТЬ БОЛЬШЕ
                        ></a></div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.jpg" alt="">
                </div>
                <div class="title">Услуги Экспресс-Доставки</div>
                <div class="description">Быстрые и надежные экспресс-доставки, гарантирующие, что ваши посылки быстро
                    доберутся до места назначения.</div>
                <div class="link"><a role="button" class="js-active-modal" data-id="wk-modal-formHelp">УЗНАТЬ БОЛЬШЕ
                        ></a></div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.jpg" alt="">
                </div>
                <div class="title">Услуги Экспресс-Доставки</div>
                <div class="description">Быстрые и надежные экспресс-доставки, гарантирующие, что ваши посылки быстро
                    доберутся до места назначения.</div>
                <div class="link"><a role="button" class="js-active-modal" data-id="wk-modal-formHelp">УЗНАТЬ БОЛЬШЕ
                        ></a></div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.jpg" alt="">
                </div>
                <div class="title">Услуги Экспресс-Доставки</div>
                <div class="description">Быстрые и надежные экспресс-доставки, гарантирующие, что ваши посылки быстро
                    доберутся до места назначения.</div>
                <div class="link"><a role="button" class="js-active-modal" data-id="wk-modal-formHelp">УЗНАТЬ БОЛЬШЕ
                        ></a></div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.jpg" alt="">
                </div>
                <div class="title">Услуги Экспресс-Доставки</div>
                <div class="description">Быстрые и надежные экспресс-доставки, гарантирующие, что ваши посылки быстро
                    доберутся до места назначения.</div>
                <div class="link"><a role="button" class="js-active-modal" data-id="wk-modal-formHelp">УЗНАТЬ БОЛЬШЕ
                        ></a></div>
            </div>
        </div>
    </div>
    <div class="block5">
        <h2>Отзывы</h2>
        <h3>Вот Что Хочет Сказать Наш Клиент</h3>
        <div class="cards">
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.webp" alt="">
                </div>
                <div class="comment">
                    В мире выбора моя приверженность страхованию остается непоколебимой более пяти лет, что
                    свидетельствует о доверии, которое они неизменно завоевывают.
                </div>
                <div class="name">
                    Оливия Андерсон
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.webp" alt="">
                </div>
                <div class="comment">
                    В мире выбора моя приверженность страхованию остается непоколебимой более пяти лет, что
                    свидетельствует о доверии, которое они неизменно завоевывают.
                </div>
                <div class="name">
                    Оливия Андерсон
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.webp" alt="">
                </div>
                <div class="comment">
                    В мире выбора моя приверженность страхованию остается непоколебимой более пяти лет, что
                    свидетельствует о доверии, которое они неизменно завоевывают.
                </div>
                <div class="name">
                    Оливия Андерсон
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="./assets/images/7.webp" alt="">
                </div>
                <div class="comment">
                    В мире выбора моя приверженность страхованию остается непоколебимой более пяти лет, что
                    свидетельствует о доверии, которое они неизменно завоевывают.
                </div>
                <div class="name">
                    Оливия Андерсон
                </div>
            </div>
        </div>
    </div>

    <?php print_r($footer); ?>
    <!-- Скрипт сайта -->
    <script src="./assets/scripts/index.js"></script>
</body>

</html>
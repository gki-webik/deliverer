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
    <link rel="stylesheet" href="/assets/styles/dist/contact.css">
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
                    <p class="policyModalAcept"><label><input type="checkbox" class="checkPolicy" /> Я соглашаюсь с <a
                                href="/policy">Политикой
                                Конфиденциальности</a></label></p>
                    <button type="button" class="btnFormModalHelpCheck is-disabled" disabled
                        onclick="submitContactFormModal()">Отправить</button>
                    <script>
                        const checkPolicy = document.querySelector(".checkPolicy");
                        const btnFormModalHelpCheck = document.querySelector(".btnFormModalHelpCheck");

                        checkPolicy.addEventListener("change", () => {
                            const isChecked = checkPolicy.checked;
                            btnFormModalHelpCheck.disabled = !isChecked;
                            btnFormModalHelpCheck.classList.toggle("is-disabled", !isChecked);
                        });
                    </script>
                </form>
            </section>
        </div>
        <button class="wk-modal-close js-active is-large"></button>
    </div>
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
                    <a role="button" class="js-active-modal" data-id="wk-modal-formHelp">ВСЕ УСЛУГИ ></a>
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
                    <a role="button" class="js-active-modal" data-id="wk-modal-formHelp">ВСЕ УСЛУГИ ></a>
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
                    <a role="button" class="js-active-modal" data-id="wk-modal-formHelp">ВСЕ УСЛУГИ ></a>
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
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/env.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Разработано в WK Studio - gki-webik.ru/studio -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Краткое описание сайта -->
    <meta name="description" content="Транспортная компания" />

    <title>Транспортная компания</title>

    <?php print_r($meta); ?>

    <!-- Телефон -->
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

    <!-- Стиль Сайта -->
    <link rel="stylesheet" href="/assets/styles/dist/index.css?data=<?php print_r(rand(0, 100000)); ?>">
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
            <h1 class="fade-in-text">С НАМИ ВАШ ГРУЗ НА ПРАВИЛЬНОМ ПУТИ</h1>
            <h2 class="fade-in-text">ДОСТАВКА ВАШЕГО ГРУЗА - НАША РАБОТА</h2>
            <div class="fade-in-text">
                Организуем доставку груза:
                <ul>
                    <li class="fade-in-text">Своевременно из точки А в точку В</li>
                    <li class="fade-in-text">Безопасно</li>
                </ul>
            </div>
        </div>
        <div class="white_circle"></div>
    </div>

    <!-- <div class="brieflyAbout">
        <div class="blockImg">
            <img src="./assets/images/1.webp" loading="lazy" alt="">
            <div class="description">БОЛЕЕ 3 ЛЕТ УСПЕШНОЙ РАБОТЫ</div>
        </div>
        <div class="text">
            Транспортная компания 000 ТК « » основана в 2021 г. с целью оказания услуг по доставке грузов собственным
            или партнерским грузовым автомобильным транспортом грузоподьемностью от 3 до 20 тонн, в том числе грузов,
            требующих специального режима. Весь транспорт компании своевременно обслуживается в дилерских центрах, что
            гарантирует своевременную доставку груза клиенту. Компания динамично развивается на рынке грузоперевозок и
            имеет в собственности грузовой автомобильный транспорт не старше 4 лет. Управляют транспортными средствами
            водители-экспедиторы со стажем работы от 5 лет.
            <div class="textBottom">
                <div class="imgs">
                    <div class="img is-1"></div>
                    <div class="img is-left is-2"></div>
                    <div class="img is-left is-3"></div>
                    <div class="img is-left is-4"></div>
                </div>
                <div class="count"><span class="counter">0</span><span>K+</span> довольных клиентов</div>
            </div>
        </div>
    </div> -->

    <div class="section">
        <div class="base-container w-container">
            <div class="content-wrapper-grid-2c">
                <div class="grid-cell-wrap first">
                    <img class="about-us-image"
                        src="https://assets-global.website-files.com/65636268c62f3d0464956cf4/6564a7b8c9ddf1df07e9aa9a_About-deliverer.webp"
                        alt="Family"
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1279px) 41vw, 610.5px"
                        loading="lazy"
                        srcset="https://assets-global.website-files.com/65636268c62f3d0464956cf4/6564a7b8c9ddf1df07e9aa9a_About-deliverer-p-500.webp 500w, https://assets-global.website-files.com/65636268c62f3d0464956cf4/6564a7b8c9ddf1df07e9aa9a_About-deliverer-p-800.webp 800w, https://assets-global.website-files.com/65636268c62f3d0464956cf4/6564a7b8c9ddf1df07e9aa9a_About-deliverer.webp 866w">
                    <div class="absolute-block-years">
                        <div class="big-number">БОЛЕЕ 3 ЛЕТ <br> УСПЕШНОЙ РАБОТЫ</div>
                    </div>
                </div>
                <div class="grid-cell-wrap text">
                    <div class="paragraph-wrapper">
                        <p class="paragraph-large mt-30">Транспортная компания 000 ТК « » основана в 2021 г. с целью
                            оказания услуг по доставке грузов собственным
                            или партнерским грузовым автомобильным транспортом грузоподьемностью от 3 до 20 тонн, в том
                            числе грузов,
                            требующих специального режима. Весь транспорт компании своевременно обслуживается в
                            дилерских центрах, что
                            гарантирует своевременную доставку груза клиенту. Компания динамично развивается на рынке
                            грузоперевозок и
                            имеет в собственности грузовой автомобильный транспорт не старше 4 лет. Управляют
                            транспортными средствами
                            водители-экспедиторы со стажем работы от 5 лет.</p>
                    </div>
                    <div class="social-prove-wrap">
                        <div class="people-images-wrap">
                            <div class="person-image"><img
                                    src="https://assets-global.website-files.com/65636268c62f3d0464956cf4/65636268c62f3d0464956d76_Rectangle%201093%20(1).jpg"
                                    loading="lazy" alt="Girl Image" class="customer-image-small"></div>
                            <div class="person-image"><img
                                    src="https://assets-global.website-files.com/65636268c62f3d0464956cf4/65636268c62f3d0464956d77_Rectangle%201094%20(1).jpg"
                                    loading="lazy" alt="Boy Image" class="customer-image-small"></div>
                            <div class="person-image"><img
                                    src="https://assets-global.website-files.com/65636268c62f3d0464956cf4/65636268c62f3d0464956d75_Rectangle%201092%20(1).jpg"
                                    loading="lazy" alt="Girl Image" class="customer-image-small"></div>
                            <div class="person-image"><img
                                    src="https://assets-global.website-files.com/65636268c62f3d0464956cf4/65636268c62f3d0464956d78_Rectangle%201095%20(1).jpg"
                                    loading="lazy" alt="Girl Image" class="customer-image-small"></div>
                        </div>
                        <div class="social-prove-info-text">
                            <p class="numeric"><span class="counter">0</span>K+</p>
                            <p class="paragraph-large">довольных клиентов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-section">
        <h3>Оставьте заявку <br> для просчета стоимости маршрута</h3>
        <div class="amountFormSuccess is-none">
            <p>Спасибо за вашу заявку!</p>
            <p>Наш менеджер свяжется с вами в ближайшее время.</p>
        </div>
        <div class="amountFormError  is-none">
            <p>Упс... Произошла ошибка...</p>
        </div>
        <form action="/api/sendForm.php" class="amountForm" method="post">
            <div class="is-div amountFormOne is-active">
                <label>
                    <span>Откуда</span>
                    <input type="text" name="inputForm1" class="inputForm1" placeholder="город">
                    <div class="is-error is-e1 is-none">* Поле обязательно для заполнения</div>
                </label>
                <label>
                    <span>Куда</span>
                    <input type="text" name="inputForm2" class="inputForm2" placeholder="город">
                    <div class="is-error is-e2 is-none">* Поле обязательно для заполнения</div>
                </label>
                <label>
                    <span>Вес</span>
                    <input type="number" name="inputForm3" class="inputForm3" placeholder="тонн">
                    <div class="is-error is-e3 is-none">* Поле обязательно для заполнения</div>
                </label>
                <div class="btn btnStepAmountForm">
                    <button type="button" onclick="validateForm()">Далее →</button>
                </div>
            </div>
            <div class="is-div amountFormTwo is-hidden is-none">
                <label>
                    <span>Имя</span>
                    <input type="text" name="inputForm4" class="inputForm4">
                    <div class="is-error is-e4 is-none">* Поле обязательно для заполнения</div>
                </label>
                <label>
                    <span>Телефон</span>
                    <input type="tel" id="phone" name="inputForm5" class="inputForm5" maxlength="14"
                        placeholder="(999) 999-99-99">
                    <input name="inputForm6" class="inputForm6" hidden class="is-none">
                    <div class="is-error is-e5 is-none">* Поле обязательно для заполнения</div>
                </label>
                <div class="is-div is-two">
                    <div class="btn btnStepAmountForm">
                        <button type="button" class="is-gray">← Назад</button>
                    </div>
                    <div class="btn">
                        <button type="button" onclick="validateForm('submit')">Отправить</button>
                    </div>
                </div>
            </div>
            <input type="text" name="type" value="1" hidden class="is-none">
        </form>
        <div class="map">
            <img src="./assets/images/3.png" alt="Карта">
        </div>
    </div>

    <div class="features">
        <h2>Почему выбирают нас?</h2>
        <div class="content">
            <div class="text">
                <ul>
                    <li>Быстрый расчет стоимости доставки груза <img src="./assets/images/High1024.webp" alt="Значок 1">
                    </li>
                    <li>Своевременная подача необходимого транспортного средства <img
                            src="./assets/images/High1024.webp" alt="Значок 2"></li>
                    <li>Страховка вашего груза <img src="./assets/images/High1024.webp" alt="Значок 3"></li>
                    <li>Персональный менеджер на всем протяжении маршрута <img src="./assets/images/High1024.webp"
                            alt="Значок 4"></li>
                    <li>Своевременная сдача документов через ЭДО или доставка курьером<img
                            src="./assets/images/High1024.webp" alt="Значок 5"></li>
                </ul>
            </div>
            <img src="./assets/images/2.png" alt="Дорога">
        </div>
    </div>
    <div class="form-section-two">
        <h4>Хотите с нами поработать?</h4>
        <h3>Оставьте заявку для расчета <br> стоимости доставки груза</h3>
        <div class="formEmailSuccess is-none">
            <p>Спасибо за вашу заявку!</p>
            <p>Наш менеджер свяжется с вами в ближайшее время.</p>
        </div>
        <div class="formEmailError  is-none">
            <p>Упс... Произошла ошибка...</p>
        </div>

        <form action="/api/sendForm.php" class="formEmail" method="post">
            <input type="text" name="fio" required class="inputFormEmail1" placeholder="ФИО">
            <div>
                <input type="email" name="email" required class="inputFormEmail2" placeholder="E-mail">
                <input type="tel" name="tel" required class="inputFormEmail3" placeholder="Телефон">
            </div>
            <input type="text" name="comment" placeholder="Комментарий">
            <input type="text" name="type" value="2" hidden class="is-none">
            <button type="button" onclick="submitFormEmail()" class="formEmailBtn">Отправить заявку</button>
        </form>

        <div class="map">
            <img src="./assets/images/3.png" alt="Карта">
        </div>
    </div>
    <div class="statistics_block">
        <div class="statistics">
            <div><span class="is-red"><span class="spanCount1">0</span>K+</span> <span>Доставок грузов</span></div>
            <div><span class="is-red"><span class="spanCount2">0</span>+</span> <span>Новых клиентов каждый день</span>
            </div>
            <div><span class="is-red"><span class="spanCount3">0</span></span> <span>Постоянных клиентов</span></div>
            <div><span class="is-red"><span class="spanCount4">0</span>%</span> <span>Довольных клиентов</span></div>
        </div>
    </div>
    <div class="slider_box">
        <h3>Качественное решение ваших задач</h3>
        <div class="slider_main">
            <div class="btn_container">
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>
            </div>
            <div class="slider">
                <div class="slider-wrapper">
                    <div class="slide">
                        <div class="body">
                            <a href="">
                                <img src="./assets/images/4.jpg" class="imgSlide is-right" alt="Image 1">
                            </a>
                            <p>Тентовые автомобили грузоподъёмностью 3 тонны</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="body">
                            <a href="">
                                <img src="./assets/images/1.jpg" class="imgSlide" alt="Image 2">
                            </a>
                            <p>Тентовые грузовые автомобили грузоподъёмностью 20 тонн</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="body">
                            <a href="">
                                <img src="./assets/images/5.png" class="imgSlide is-left" alt="Image 1">
                            </a>
                            <p>Рефрижераторные автомобили грузоподъёмностью 20 тонн</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="body">
                            <a href="">
                                <img src="./assets/images/4.jpg" class="imgSlide is-right" alt="Image 1">
                            </a>
                            <p>Тентовые автомобили грузоподъёмностью 3 тонны</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="body">
                            <a href="">
                                <img src="./assets/images/1.jpg" class="imgSlide" alt="Image 2">
                            </a>
                            <p>Тентовые грузовые автомобили грузоподъёмностью 20 тонн</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="body">
                            <a href="">
                                <img src="./assets/images/5.png" class="imgSlide is-left" alt="Image 1">
                            </a>
                            <p>Рефрижераторные автомобили грузоподъёмностью 20 тонн</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php print_r($footer); ?>
    <!-- Цифры -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <!-- Скрипт сайта -->
    <script src="./assets/scripts/index.js"></script>
</body>

</html>
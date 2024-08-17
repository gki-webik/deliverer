/* Разработано в WK Studio - gki-webik.ru/studio */

/* Меню */
window.addEventListener('scroll', function () {
    const menu = document.querySelector('header');
    if (screen.width > 500) {
        if (window.scrollY > 100) {
            menu.classList.add('scrolled');
        } else {
            menu.classList.remove('scrolled');
        }
    } else {
        if (window.scrollY > 20) {
            menu.classList.add('scrolled');
        } else {
            menu.classList.remove('scrolled');
        }
    }
});
const openMenu = document.querySelector(".openMenu");
const closeMenu = document.querySelector(".closeMenu");
let leftMenu = document.querySelector(".leftMenu");

openMenu.addEventListener('click', () => {
    leftMenu.classList.toggle("is-open");
});
closeMenu.addEventListener('click', () => {
    leftMenu.classList.toggle("is-open");
});

/* Слайдер */
let currentIndex = 0;

function moveSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const wrapper = document.querySelector('.slider-wrapper');
    const slidesToShow = getSlidesToShow();

    currentIndex += direction * slidesToShow;

    if (currentIndex < 0) {
        currentIndex = totalSlides - slidesToShow;
    } else if (currentIndex >= totalSlides) {
        currentIndex = 0;
    }

    wrapper.style.transform = `translateX(-${currentIndex * (100 / slidesToShow)}%)`;
}

function getSlidesToShow() {
    const width = window.innerWidth;
    if (width >= 1280) {
        return 3;
    } else if (width >= 990) {
        return 2;
    } else {
        return 1;
    }
}

window.addEventListener('resize', () => {
    const wrapper = document.querySelector('.slider-wrapper');
    const slidesToShow = getSlidesToShow();
    const totalSlides = document.querySelectorAll('.slide').length;

    if (currentIndex >= totalSlides - slidesToShow) {
        currentIndex = totalSlides - slidesToShow;
    }

    wrapper.style.transform = `translateX(-${currentIndex * (100 / slidesToShow)}%)`;
});

/* Телефон */
let inputPhone = document.querySelector("#phone");
window.intlTelInput(inputPhone, {
    separateDialCode: true,
    countrySearch: true,
    initialCountry: "ru",
    geoIpLookup: true,
});

/* Валидация формы */
const btnStepAmountForm = document.querySelectorAll(".btnStepAmountForm");
let amountFormOne = document.querySelector(".amountFormOne");
let amountFormTwo = document.querySelector(".amountFormTwo");
let inputForm6 = document.querySelector(".inputForm6");
const inputs = [".inputForm1", ".inputForm2", ".inputForm3"].map(selector => document.querySelector(selector));
const inputs2 = [".inputForm4", ".inputForm5"].map(selector => document.querySelector(selector));
const errors = [".is-e1", ".is-e2", ".is-e3"].map(selector => document.querySelector(selector));
const errors2 = [".is-e4", ".is-e5"].map(selector => document.querySelector(selector));

function validateForm(type) {
    let isValid = true;
    inputs.forEach((input, index) => {
        if (input.value.trim() === "") {
            errors[index].classList.remove("is-none");
            isValid = false;
        } else {
            errors[index].classList.add("is-none");
        }
    });
    if (isValid) {
        btnStepAmountForm.forEach(element => {
            element.addEventListener('click', () => {
                amountFormOne.classList.toggle("is-hidden");
                amountFormOne.classList.toggle("is-active");
                amountFormTwo.classList.toggle("is-hidden");
                amountFormTwo.classList.toggle("is-active");
                setTimeout(() => {
                    amountFormOne.classList.toggle("is-none");
                    amountFormTwo.classList.toggle("is-none");
                }, 200);
            });
        });
    }
    if (isValid && type === "submit") {
        let isValid2 = true;
        inputs2.forEach((input, index) => {
            if (input.value.trim() === "") {
                errors2[index].classList.remove("is-none");
                isValid2 = false;
            } else {
                errors2[index].classList.add("is-none");
            }
        });
        if (isValid2) {
            document.querySelector(".amountForm").classList.add("is-none");
            inputForm6.value = document.querySelector(".iti__selected-dial-code").textContent;
            const formData = new FormData(document.querySelector(".amountForm"));
            const xhr = new XMLHttpRequest();
            xhr.open('POST', document.querySelector(".amountForm").action);
            xhr.addEventListener('load', () => {
                document.querySelector(xhr.status === 200 ? ".amountFormSuccess" : ".amountFormError").classList.remove("is-none");
            });
            xhr.addEventListener('error', () => document.querySelector(".amountFormError").classList.remove("is-none"));
            xhr.send(formData);
        }
    }
}
function submitFormEmail() {
    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailPattern.test(email);
    }
    function validatePhone(phone) {
        const phonePattern = /^\+?[1-9]\d{1,14}$/;
        return phonePattern.test(phone);
    }
    if (validateEmail(document.querySelector(".inputFormEmail2").value) && validatePhone(document.querySelector(".inputFormEmail3").value)) {
        document.querySelector(".formEmail").classList.add("is-hidden");
        const formData = new FormData(document.querySelector(".formEmail"));
        const xhr = new XMLHttpRequest();
        xhr.open('POST', document.querySelector(".formEmail").action);
        xhr.addEventListener('load', () => {
            document.querySelector(xhr.status === 200 ? ".formEmailSuccess" : ".formEmailError").classList.remove("is-none");
        });
        xhr.addEventListener('error', () => document.querySelector(".formEmailError").classList.remove("is-none"));
        xhr.send(formData);
    }
}
function submitNewsletter() {
    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailPattern.test(email);
    }
    if (validateEmail(document.querySelector(".emailNewsletter").value)) {
        const formData = new FormData(document.querySelector(".formNewsletter"));
        const xhr = new XMLHttpRequest();
        xhr.open('POST', document.querySelector(".formNewsletter").action);
        xhr.addEventListener('load', () => {
            alert("Спасибо за подписку!");
        });
        xhr.addEventListener('error', () => alert("Ошибка"));
        xhr.send(formData);
    }
}
function submitContactForm() {
    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailPattern.test(email);
    }
    function validatePhone(phone) {
        const phonePattern = /^\+?[1-9]\d{1,14}$/;
        return phonePattern.test(phone);
    }
    if (validateEmail(document.querySelector(".formContact_email").value) && validatePhone(document.querySelector(".formContact_tel").value)) {
        document.querySelector(".block_left").classList.add("is-none");
        document.querySelector(".centerStatusSuccess").classList.remove("is-none");
        const formData = new FormData(document.querySelector(".formContact"));
        const xhr = new XMLHttpRequest();
        xhr.open('POST', document.querySelector(".formContact").action);
        xhr.addEventListener('load', () => {
            document.querySelector(xhr.status === 200 ? ".centerStatusSuccess" : ".centerStatusError").classList.remove("is-none");
        });
        xhr.addEventListener('error', () => {
            document.querySelector(".centerStatusSuccess").classList.add("is-none")
            document.querySelector(".centerStatusError").classList.remove("is-none")
        });
        xhr.send(formData);
    }
}


function submitContactFormModal() {
    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailPattern.test(email);
    }
    function validatePhone(phone) {
        const phonePattern = /^\+?[1-9]\d{1,14}$/;
        return phonePattern.test(phone);
    }
    if (validateEmail(document.querySelector(".formContactModal_email").value) && validatePhone(document.querySelector(".formContactModal_tel").value)) {
        document.querySelector(".formContactModal").classList.add("is-none");
        document.querySelector(".centerStatusSuccessModal").classList.remove("is-none");
        const formData = new FormData(document.querySelector(".formContactModal"));
        const xhr = new XMLHttpRequest();
        xhr.open('POST', document.querySelector(".formContactModal").action);
        xhr.addEventListener('load', () => {
            document.querySelector(xhr.status === 200 ? ".centerStatusSuccessModal" : ".centerStatusErrorModal").classList.remove("is-none");
        });
        xhr.addEventListener('error', () => {
            document.querySelector(".centerStatusSuccessModal").classList.add("is-none")
            document.querySelector(".centerStatusErrorModal").classList.remove("is-none")
        });
        xhr.send(formData);
    }
}

/* Цифры от GSAP */
document.addEventListener('DOMContentLoaded', function () {
    const counterElement = document.querySelector('.counter');
    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {
                hasAnimated = true;
                gsap.to(counterElement, {
                    innerText: 10,
                    duration: 1,
                    snap: { innerText: 0.5 },
                    ease: "power1.inOut",
                    onUpdate: function () {
                        counterElement.innerText = Math.floor(counterElement.innerText);
                    }
                });
                observer.unobserve(counterElement);
            }
        });
    });

    observer.observe(counterElement);
});
document.addEventListener('DOMContentLoaded', function () {
    const counterElement1 = document.querySelector('.spanCount1');
    let hasAnimated1 = false;

    const observer1 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated1) {
                hasAnimated1 = true;
                gsap.to(counterElement1, {
                    innerText: 40,
                    duration: 1.7,
                    snap: { innerText: 0.5 },
                    ease: "power1.inOut",
                    onUpdate: function () {
                        counterElement1.innerText = Math.floor(counterElement1.innerText);
                    }
                });
                observer1.unobserve(counterElement1);
            }
        });
    });

    observer1.observe(counterElement1);
});
document.addEventListener('DOMContentLoaded', function () {
    const counterElement2 = document.querySelector('.spanCount2');
    let hasAnimated2 = false;

    const observer2 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated2) {
                hasAnimated2 = true;
                gsap.to(counterElement2, {
                    innerText: 12,
                    duration: 1.7,
                    snap: { innerText: 0.5 },
                    ease: "power1.inOut",
                    onUpdate: function () {
                        counterElement2.innerText = Math.floor(counterElement2.innerText);
                    }
                });
                observer2.unobserve(counterElement2);
            }
        });
    });

    observer2.observe(counterElement2);
});
document.addEventListener('DOMContentLoaded', function () {
    const counterElement3 = document.querySelector('.spanCount3');
    let hasAnimated3 = false;

    const observer3 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated3) {
                hasAnimated3 = true;
                gsap.to(counterElement3, {
                    innerText: 25,
                    duration: 1.7,
                    snap: { innerText: 0.5 },
                    ease: "power1.inOut",
                    onUpdate: function () {
                        counterElement3.innerText = Math.floor(counterElement3.innerText);
                    }
                });
                observer3.unobserve(counterElement3);
            }
        });
    });

    observer3.observe(counterElement3);
});
document.addEventListener('DOMContentLoaded', function () {
    const counterElement4 = document.querySelector('.spanCount4');
    let hasAnimated4 = false;

    const observer4 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated4) {
                hasAnimated4 = true;
                gsap.to(counterElement4, {
                    innerText: 98,
                    duration: 1.7,
                    snap: { innerText: 0.5 },
                    ease: "power1.inOut",
                    onUpdate: function () {
                        counterElement4.innerText = Math.floor(counterElement4.innerText);
                    }
                });
                observer4.unobserve(counterElement4);
            }
        });
    });

    observer4.observe(counterElement4);
});

/* Hover img с одинаковыми пропорциями */
document.addEventListener('DOMContentLoaded', function () {
    function editMaxHeight() {
        let allImages = document.querySelectorAll(".imgSlide");
        allImages.forEach((image) => {
            image.style.maxHeight = image.offsetWidth + "px";
            image.style.height = image.offsetWidth + "px";
            image.parentNode.style.maxHeight = image.offsetWidth + "px";
            image.parentNode.style.height = image.offsetWidth + "px";
        });
    }
    editMaxHeight();
    window.addEventListener('resize', editMaxHeight);
});

/* Разработано в WK Studio - gki-webik.ru/studio */
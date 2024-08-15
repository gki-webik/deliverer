/* Меню */
window.addEventListener('scroll', function () {
    const menu = document.querySelector('header');
    if (screen.width > 500) {
        if (window.scrollY > 200) {
            menu.classList.add('scrolled');
        } else {
            menu.classList.remove('scrolled');
        }
    } else {
        if (window.scrollY > 70) {
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
let amountForm = document.querySelector(".amountForm");
let amountFormTwo = document.querySelector(".amountFormTwo");
const inputForm1 = document.querySelector(".inputForm1");
const inputForm2 = document.querySelector(".inputForm2");
const inputForm3 = document.querySelector(".inputForm3");
const inputForm4 = document.querySelector(".inputForm4");
const inputForm5 = document.querySelector(".inputForm5");
const inputForm6 = document.querySelector(".inputForm6");
let is_e1 = document.querySelector(".is-e1");
let is_e2 = document.querySelector(".is-e2");
let is_e3 = document.querySelector(".is-e3");
let is_e4 = document.querySelector(".is-e4");
let is_e5 = document.querySelector(".is-e5");

function validateForm(type) {
    if (inputForm1.value == "" || inputForm1.value == " ") {
        is_e1.classList.remove("is-none");
        return;
    }
    is_e1.classList.add("is-none");
    if (inputForm2.value == "" || inputForm2.value == " ") {
        is_e2.classList.remove("is-none");
        return;
    }
    is_e2.classList.add("is-none");
    if (inputForm3.value == "" || inputForm3.value == " ") {
        is_e3.classList.remove("is-none");
        return;
    }
    is_e3.classList.add("is-none");
    btnStepAmountForm.forEach(element => {
        element.addEventListener('click', () => {
            amountForm.classList.toggle("is-hidden");
            amountForm.classList.toggle("is-active");
            amountFormTwo.classList.toggle("is-hidden");
            amountFormTwo.classList.toggle("is-active");
            setTimeout(() => {
                amountForm.classList.toggle("is-none");
                amountFormTwo.classList.toggle("is-none");
            }, 200);
        });
    });
    if (type == "submit") {
        if (inputForm4.value == "" || inputForm4.value == " ") {
            is_e4.classList.remove("is-none");
            return;
        }
        is_e4.classList.add("is-none");
        if (inputForm5.value == "" || inputForm5.value == " ") {
            is_e5.classList.remove("is-none");
            return;
        }
        is_e5.classList.add("is-none");
        document.getElementById('amountForm').addEventListener('submit', function (event) {
            event.preventDefault();
            inputForm6.value = document.querySelector(".iti__selected-dial-code").textContent;
            var form = event.target;
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest();

            document.querySelector(".amountForm").classList.add("is-none");

            xhr.addEventListener('load', function () {
                if (xhr.status == 200) {
                    document.querySelector(".amountFormSuccess").classList.remove("is-none");
                } else {
                    document.querySelector(".amountFormError").classList.remove("is-none");
                }
            });

            xhr.addEventListener('error', function () {
                document.querySelector(".amountFormError").classList.remove("is-none");
            });

            xhr.addEventListener('abort', function () {
                document.querySelector(".amountFormError").classList.remove("is-none");
            });

            xhr.open('POST', form.action);
            xhr.send(formData);
        });
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
    const counterElement = document.querySelector('.spanCount1');
    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {
                hasAnimated = true;
                gsap.to(counterElement, {
                    innerText: 40,
                    duration: 3,
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
    const counterElement = document.querySelector('.spanCount2');
    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {
                hasAnimated = true;
                gsap.to(counterElement, {
                    innerText: 12,
                    duration: 3,
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
    const counterElement = document.querySelector('.spanCount3');
    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {
                hasAnimated = true;
                gsap.to(counterElement, {
                    innerText: 25,
                    duration: 3,
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
    const counterElement = document.querySelector('.spanCount4');
    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !hasAnimated) {
                hasAnimated = true;
                gsap.to(counterElement, {
                    innerText: 98,
                    duration: 3,
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
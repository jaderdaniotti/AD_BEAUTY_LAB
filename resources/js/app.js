import "./bootstrap";
import "bootstrap";

// sezione welcome 
import Typed from "typed.js"; // Importa Typed.js

document.addEventListener("DOMContentLoaded", function () {
    let homesection = document.getElementById("home");

    function animazioneHome(element) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    var typed = new Typed(element, {
                        strings: [
                            '<h1 class="display-1">AD BeautyLab</h1><div class="row justify-content-center gap-1"><a class="bookmarkBtn d-flex align-content-center justify-content-center" href="#chi-sono"><span class="IconContainer"><i class="bi bi-arrow-down-circle text-base"></i></span><span class="text"><i class="bi bi-person-fill"></i></span></a><a class="bookmarkBtn d-flex align-content-center justify-content-center" href="#chi-sono"><span class="IconContainer"><i class="bi bi-arrow-down-circle text-base"></i></span><span class="text"><i class="bi bi-shop"></i></span></a></div><div class="row justify-content-center gap-1"><a class="bookmarkBtn d-flex align-content-center justify-content-center" href="#chi-sono"><span class="IconContainer"><i class="bi bi-arrow-down-circle text-base"></i></span><span class="text"><i class="bi bi-brush"></i></span></a><a class="bookmarkBtn d-flex align-content-center justify-content-center" href="#chi-sono"><span class="IconContainer"><i class="bi bi-arrow-down-circle text-base"></i></span><span class="text"><i class="bi bi-telephone-fill"></i></span></a></div>'
                        ],
                        typeSpeed: 10,
                    });
                    observer.unobserve(element); // Evita di ripetere l'animazione
                }
            });
        });

        observer.observe(element);
    }

    animazioneHome(homesection);
});

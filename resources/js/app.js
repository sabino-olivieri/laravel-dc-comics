import './bootstrap';
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";

const formDelete = document.querySelectorAll('.delete');
const modalElem = document.querySelector('.ms_modal');
const overlayElem = document.querySelector('.ms_overlay');
const yesElem = document.querySelector('.yes-btn');
const noElem = document.querySelector('.no-btn');

noElem.addEventListener("click", () => {
    modalElem.classList.toggle("hidden");
    overlayElem.classList.toggle("hidden");
    console.log("ciao");
});

modalElem.addEventListener("click", (e) => {
    e.stopPropagation();
});

overlayElem.addEventListener("click", () => {
    modalElem.classList.toggle("hidden");
    overlayElem.classList.toggle("hidden");
    console.log("ciao");
});

formDelete.forEach(elem => {
    elem.addEventListener("submit", function (e) {
        e.preventDefault();
    
        modalElem.classList.toggle("hidden");
        overlayElem.classList.toggle("hidden");
    
        yesElem.addEventListener("click", () => {
            modalElem.classList.toggle("hidden");
            overlayElem.classList.toggle("hidden");
            elem.submit();
        }) 
    })
});

const supprimer = document.querySelector('.supprimer');
const popup = document.querySelector('.popup');
const crois = document.querySelector('.crois');
const accepte = document.querySelector('.accepte');
const contenaire = document.querySelector('.container');

supprimer.addEventListener("click" , ()=> {
    popup.classList.add('active-popup');
    contenaire.classList.add('flou');
})

crois.addEventListener('click', ()=> {
    popup.classList.remove('active-popup');
    contenaire.classList.remove('flou');
})

accepte.addEventListener('click', ()=> {
    popup.classList.remove('active-popup');
    contenaire.classList.remove('flou');
})
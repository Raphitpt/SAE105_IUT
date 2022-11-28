window.addEventListener('DOMContentLoaded', function() {
    const interrupteur = document.getElementById('interrupteur');
    const calque_noir = document.getElementById('calque_noir');
    const button_light = document.getElementById('button_light');

//Lecture du localStorage pour mettre la position de la class

window.addEventListener('load', function() {
    calque_noir.className = localStorage.getItem('position');
    button_light.src = localStorage.getItem('lastBtnPos');
})
   

// Gestion du calque noir avec interrupteur + ajout de la valeur de la dernière position de la class au localStorage
    interrupteur.addEventListener("click", function () {



        if (calque_noir.className == "on") {
            calque_noir.className = "off";
            button_light.src = "./assets/images/off.png";
            localStorage.setItem("position", calque_noir.className);
            localStorage.setItem("lastBtnPos", button_light.src);
        } 
        else {
            calque_noir.className = "on";
            button_light.src = "./assets/images/on.gif";
            localStorage.setItem("position", calque_noir.className);
            localStorage.setItem("lastBtnPos", button_light.src);
        }
      });
});
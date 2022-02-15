let idTimer, explosion, ecranEnPanne, interval, temps;

let ecran = document.querySelector("#ecran");
temps = new Date(-3300000);
explosion = false;
ecranEnPanne = false;
interval = 1000;

/**
 * Créer un timer qui décremente a interval régulier et quand le temps arrive a -3600000 la bombe explose 
 * Utiliser set interval mais oublier pas de valoriser le idTimer 
 * Si l'ecran n'est pas en panne alors le nouveau temps est afficher dans sur l'ecran
 * Attention si le temps <= -3600000 ou que la bombe a exploser alors le timer doit s'areter 
 */
function timer() {
    idTimer = setInterval(function () {
        if (temps > -3600000 && explosion==false) {
            let ms =temps.getTime();
            temps = new Date(ms-1000) ;
            if(!ecranEnPanne)
            {
                ecran.value=temps.toLocaleTimeString();
            }
        } else {
            
            explose();
            clearInterval(idTimer);
        }
    }, interval)
}


/**
 * Ce déclenche quand on clique sur un fil 
 * est déclenche la fonction lier a la couleur
 * @param {*} uneCouleur la couleur du fil (la value du button)
 */
function couperUnFil(uneCouleur) {
    switch(uneCouleur)
    {
        case "vert":
            couperFilVert();
            break;
        case "bleu":
            couperFilBleu();
            break;
        case "jaune":
            couperFilJaune();
            break;
        case "rouge":
            couperFilRouge();
            break;
        case "cyan":
            couperFilCyan();
            break;
    }
}

/**
 * La bombe explose
 */
function couperFilRouge() {
 //@TODO
}

/**
 * Le compteur augmente ou diminue aléatoirement une fois de + ou - 60000 ms
 */
function couperFilJaune() {


}

/**
 * Le timer est désactiver
 */
function couperFilVert() {
  //@TODO

}

/**
 * Diviser la valeur de la variable intervale par 2
 * Areter le timer
 * Démarer un nouveau timer ( et ecrase idTimer)
 */
function couperFilCyan() {
 //@TODO
}

/**
 * ecranEnPanne prend la valeur l'inverse de sa valeur
 */
function couperFilBleu() {
    //@TODO
}

/**
 * Remplace le compteur par une image
 * explosion prend vrai comme valeur
 */
function explose()
{
    explosion = true;
    ecran.outerHTML="<img src='img/boom.gif'>"
}


timer(interval)

document.querySelectorAll(".fil").forEach(element => {
    element.addEventListener("click",()=>{couperUnFil(element.value)})
});
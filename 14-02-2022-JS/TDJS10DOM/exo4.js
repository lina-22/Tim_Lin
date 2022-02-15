// let iphone_gris = document.querySelectorAll(".iphone_gris");
// let btnJour = document.querySelectrorById("#btnJour");
// let btnNuit = document.querySelectrorById("#btnNuit");


// btnJour.addEventListener("input",function(){
//     texte.style.background = btnJour.value;
    
// })
// btnNuit.addEventListener("input",function(){
//     texte.style.backgroundColor = btnNuit.value;
    
// })
// inputNom.addEventListener("input",function(){
//     for(const unLi of listeAfficheNom){
//         unLi.innerHTML = inputNom.ariaValueMax;
//     }
// })

// imageIphone

let imageIphone = document.querySelector("#imageIphone");
let lesBtns = document.querySelectorAll(".btnIphone");

for (const unBtn of lesBtns){
    unBtn.addEventListener("click",function(){
        imageIphone.src=`img/${unBtn.value}.jpg`
    })
}

// imageAudi btnAudi

let imageAudi = document.querySelector("#imageAudi");
let lesBtnss = document.querySelectorAll(".btnAudi");

for (const unBtn of lesBtnss){
    unBtn.addEventListener("click",function(){
        imageAudi.src=`img/${unBtn.value}.jpg`
    })
}

let imageTshirt = document.querySelector("#imageTshirt");
let lesBtnsss = document.querySelectorAll(".btnTshirt");

for (const unTshirt of lesTshirts){
    unBtn.addEventListener("click",function(){
        imageTshirt.src=`img/${unBtn.value}.jpg`
    })
}
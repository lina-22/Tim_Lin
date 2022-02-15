// let texte = document.querySelectorAll(".texte");
// let btnJour = document.querySelectror("#btnJour");
// let btnNuit = document.querySelectror("#btnNuit");


// btnJour.addEventListener("click",function(){
//     for(unTexte of texte){
//     unTexte.classList.add("bg-light");
//     unTexte.classList.add("text-dark");
//     unTexte.classList.remove("bg-dark");
//     unTexte.classList.remove("text-light")
//     }
// })
// btnNuit.addEventListener("click",function(){
//     for(unTexte of texte){
//         unTexte.classList.add("bg-dark");
//         unTexte.classList.add("text-light");
//         unTexte.classList.remove("bg-light");
//         unTexte.classList.remove("text-dark")
//     }   
// })

let mainBody = document.querySelectorAll("#mainBody");
let btnJour = document.querySelectror("#btnJour");
let btnNuit = document.querySelectror("#btnNuit");
let theme = document.querySelector("#theme");


btnJour.addEventListener("click",function(){
    for(unTexte of mainBody){
    unTexte.classList.add("bg-light");
    unTexte.classList.add("text-dark");
    unTexte.classList.remove("bg-dark");
    unTexte.classList.remove("text-light")
    }
})
btnNuit.addEventListener("click",function(){
    for(unTexte of mainBody){
        unTexte.classList.add("bg-dark");
        unTexte.classList.add("text-light");
        unTexte.classList.remove("bg-light");
        unTexte.classList.remove("text-dark")
    }   
})

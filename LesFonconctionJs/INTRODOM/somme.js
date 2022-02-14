
let inputNombre= document.querySelector("#inputNombre");

let divResultat= document.querySelector("#resultat");

function calculSomme(nb){
    let resultat=0;
    for(let i=0;i<=nb;i++){
        resultat+=nb;
    }
    return resultat;
}

inputNombre.addEventListener("input",function(){
    let valeurInput=Number(inputNombre.value)
    let resultat=calculSomme(valeurInput);
    divResultat.innerHTML=resultat;

});


let inputNombre1 = document.querySelector("#nb1");
let inputNombre2 = document.querySelector("#nb2");
let selectSigne = document.querySelector("#signe");
let selectEgale = document.querySelector("#egale");
let divResultat = document.querySelector("#resultat");

function calc(nombre1, signe, nombre2){
    if(signe=="+"){
        return nombre1+nombre2;
    }
    else if(signe=="-"){
        return nombre1-nombre2;
    }
    else if(signe=="*"){
        return nombre1*nombre2;
    }
    else if(signe=="/"){
        return nombre1/nombre2;
    }
    else{
        throw "pas le bon signe";
    }

}
    selectEgale.addEventListener("click",function(){
    let nombre1=Number(inputNombre1.value)
    let nombre2=Number(inputNombre2.value);
    let signe= selectSigne.value;
    let resultat = calc(nombre1,signe,nombre2);
    // console.log(resultat);
    divResultat.innerHTML=resultat;
})
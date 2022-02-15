let divExo2 = document.querySelector("#divExo2");
// let divExo2 = document.getElementById("divExo2");

let inputExo2 = document.querySelector("#inputExo2");
// let inputExo2 = document.getElementById("inputExo2");


inputExo2.addEventListener("input",function(){
    
    divExo2.style.background = inputExo2.value;
    // divExo2.innerText = inputExo2.value;

    
})
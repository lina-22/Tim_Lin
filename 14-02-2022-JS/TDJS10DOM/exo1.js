let divExo1 = document.querySelector("#divExo1");
// let divExo1 = document.getElementById("divExo1");

let inputExo1 = document.querySelector("#inputExo1");
// let showText = document.getElementById("inputExo1");


inputExo1.addEventListener("input",function(){
    
    divExo1.innerHTML = inputExo1.value;
    // divExo1.innerText = inputExo1.value;

    
})

// var el = document.getElementById("un-element");
// el.setAttribute("style", "background-color:darkblue;");
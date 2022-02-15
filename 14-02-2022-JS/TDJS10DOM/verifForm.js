let lesFormulaires = document.querySelectorAll("form");
console.log(lesFormulaires);

function valideInput(unInput){
    unInput.classList.add("is-valid");
    unInput.classList.remove("is-invalid");
}

function invalideInput(unInput){
    unInput.classList.add("is-invalid");
    unInput.classList.remove("is-valid");
}

for(const unFormulaire of lesFormulaires){
    unFormulaire.addEventListener("submit",function(event){
        let lesInputs=unFormulaire.querySelectorAll("input,select,textarea");
        for(const unInput of lesInputs){
            // Si le champ est valid(unInput.validity.valid==true)
             console.log(unInput.validity.valid);
            if(unInput.validity.valid){
                valideInput(unInput);
            }
            // si le champ n'est pas valide
            else{
                invalideInput(unInput);
            }
        }
        // console.log(unFormulaire.reportValidity());
    //    Si un champs ne respecte pas les contraintes e validation html
        if(unFormulaire.reportValidity()==false){
             // empeche l'envoi du formulaire
            event.preventDefault();
        }
        
    })
}
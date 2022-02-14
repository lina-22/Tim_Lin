
function calc(nombre1, signe,nombre2){

    if(signe=="+"){
        return nombre1+nombre2;
    }
    else if(signe=="-"){
        return nombre1 - nombre2;
    }
    else if(signe=="*"){
        return nombre1 * nombre2;
    }
    else if(signe=="/"){
        return nombre1 /nombre2;
    }
    else {
        throw "pas le bon signe";
    }
}


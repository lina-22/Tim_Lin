// vérification d'utilisateur connecté
if(!sessionStorage.login || !sessionStorage.email){

    $(location).attr("href","connexion.php");
}

email=sessionStorage.email;

xmladh=getXmlBase("v_adh","email",email);
numadh=getElement(xmladh,"v_adh","email",email,"num");

xmlemp=getXmlBase("v_historique","numadh",numadh);
// numemp=getElement(xmladh,"v_adh","email",email,"num");

afficheEmprunts(xmlemp);




function afficheEmprunts(xmlemp)
{
    var chaine="";
    $(xmlemp).find("v_historique").each
    (
         function()
         {
           var titre=$(this).find("titre").text();
           var datemprunt=$(this).find("datemprunt").text();
           var datederetour=$(this).find("datederetour").text();
           if(datederetour==""){
               datederetour="Non restitué"
           }
           chaine+=`<div class='col-12 col-md-4 col-lg-6 text-start'>${titre}</div>
           <div class='col-12 col-md-4 col-lg-3 text-center'>${datemprunt}</div>
           <div class='col-12 col-md-4 col-lg-3 text-center'>${datederetour}</div>`
         }
    );
    $("#historique").html(chaine);  
}


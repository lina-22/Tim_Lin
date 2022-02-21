xmlcateg = "";
xmledit = "";
xmllivres = "",
xmladh="";

    // on récup la variable de session
    connect=sessionStorage.login;
    email=sessionStorage.email;
    // on l'affiche dans le span "connect"
    $("#connect").html(email+connect);

    initialisation(xmlcateg, xmledit);
    afficheLivres(xmllivres);

    xmladh=getXmlBase("v_adh","email",email),


// procédures évènementielles
$(".bouton").live("click",
    function()
    {
        cote=$(this).attr("id");
        num=getElement(xmladh,"v_adh","email",email,"num");
        reservation("modeles/reserver.php",num,cote);

    }
)


// changement dans la liste listecateg
$("#listecateg").change
    (
        function () {
            clef = "0";
            valeur = "0";
            idcateg = $("#listecateg").val();
            if (idcateg != "0") {
                clef = "idcateg";
                valeur = idcateg;
            }


            xmllivres = getXmlBase("v_livredit", clef, valeur);

            afficheLivres(xmllivres);
        }

    );

$("#listedit").change
    (
        function () {
            clef = "0";
            valeur = "0";
            codedit = $("#listedit").val();
            if (codedit != "0") {
                clef = "codedit";
                valeur = codedit;
            }


            xmllivres = getXmlBase("v_livredit", clef, valeur);
            afficheLivres(xmllivres);
        }

    );



// fonctions et procédures
function initialisation(xmlcateg, xmledit) {
    xmlcateg = getXmlBase("categorie", "0", "0");
    xmledit = getXmlBase("editeur", "0", "0");
    // remplissage de la liste
    afficheListe("listecateg", xmlcateg, "categorie", "id", "nomcateg");
    afficheListe("listedit", xmledit, "editeur", "code", "nomedit");

    xmllivres = getXmlBase("v_livredit", "0", "0");

    afficheLivres(xmllivres);

}


// procédure pour afficher les livres
function afficheLivres(xmllivres) {

    // on parse la chaine xml des livres
    chaine = "";
    $(xmllivres).find("v_livredit").each
        (

            function () {

                var titre = $(this).find('titre').text();
                var nomedit = $(this).find('nomedit').text();
                var annee = $(this).find('annee').text();
                var cote = $(this).find('cote').text();
                var etat = $(this).find('etat').text();
                var photo = $(this).find('photo').text();
                var commentaire=$(this).find('commentaire').text();
                urlimage = "images/"+photo+".jpg";
                if (etat == "0") {
                    etatlivre = "<div class='text-success'>Disponible</div>";
                }
                else {
                    etatlivre = "<div class='text-danger'>Indisponible</div>";
                }

                if(etat=="0" && sessionStorage.email!="")
                {
                    reservation="<button id='"+cote+"' class='btn text-center btn-sm btn-primary mt-1 bouton'>Reserver</button>"  
                }
                else
                {
                    reservation="<button class='btn text-center btn-sm btn-danger mt-1 bouton' disabled='disabled'>Indisponible</button>"                  
                }
                


                chaine += `<div class=" border border-primary float-start card bg-light  text-center ms-5 me-5 mb-5" style="width: 21rem;">
                            <div class="card-body">
                                <h5 class="text-primary card-title">${titre}</h5>
                                <h5 class="text-primary card-subtitle mb-2 ">${nomedit} ${annee}</h6>
                                <p class="text-justify text-secondary card-text">${etatlivre}</p>
                                <img id="${cote}" title="${commentaire}" class=" img-fluid classimage card-img-top" src="${urlimage}" />
                                <p class="text-center text-secondary card-text">${reservation}</p>

                            </div>                            
                        </div>`

            }
        )
    $("#divlivres").html(chaine);

}

// procédure ajax pour la réservation d'un livre
function reservation(urlphp,num,cote)
{
    $.ajax
	   (
	        {
			    url:urlphp,
				data:{num:num,cote:cote},
				async:false,
				complete:function(resultat)
				{
				      res= resultat.responseText;
				}
			}
	        
	   );
	   return res;
}
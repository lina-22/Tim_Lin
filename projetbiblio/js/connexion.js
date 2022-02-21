// Initialisation des variables
// sessionStorage.login="";
// sessionStorage.email="";
if(!sessionStorage.login || !sessionStorage.email)
{ 
	$("#btnconnect").hide();
}



//click sur le bouton

$("#valider").click
(
	function()
	{
		var resultat=estvide("saisie");
		if(!resultat)
		{
			var email=$("#email").val();
			var mdp=$("#mdp").val();
			
			var connex=connexion("modeles/connexion.php",email,mdp);
			if(connex=="1")
			{
				sessionStorage.login="connecté(e)";
				sessionStorage.email=$("#email").val();
				$(location).attr("href","consultation.php");
			}
		}
	  
	}
);

// click sur un des élèments du formulaire
//classe"saisie"

$(".saisie").click
(
	function()
	{
		//annulation des surbrillance précédentes
		$(".saisie").css("background","white");

		//mise en surbrillance de la zone concernée
		$(this).css("background","lightyellow");
	}
);

$("#btnconnect").click
(
	function()
	{
		sessionStorage.login="";
		sessionStorage.email="";
		sessionStorage.clear();
		$("#btnconnect").hide();
	}
)

////// fonctions utilisateur
function connexion(urlphp,email,mdp)
{
    $.ajax
	   (
	        {
			    url:urlphp,
				data:{email:email,mdp:mdp},
				async:false,
				complete:function(resultat)
				{
				      res= resultat.responseText;
				}
			}
	        
	   );
	   return res;
}

function estvide(maclasse)
{
	classe="."+maclasse;
	vide=false;
	$(maclasse).each
	(
	      function()
		  {
			   valeur=$(this).val();
			  
			   if(!valeur)
			   {
				   vide=true;
			   }
		  }
	);
	
	return vide;
}
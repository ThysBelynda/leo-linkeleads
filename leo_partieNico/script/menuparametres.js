function afficherContent (lien, lienContent) {

	var creationElt = document.getElementById(lien);
	var creationContentElt = document.getElementById(lienContent);

	creationContentElt.style.display = "none";
	

	creationElt.addEventListener("click", function () {
		var contenusElt = document.getElementsByClassName("contentParametres");
		var liensElt = document.getElementsByClassName("liensParametres");

		for (var i = 0; i < contenusElt.length ; i++) {
			contenusElt[i].style.display = "none";
		}
		
		for (var j = 0; j < liensElt.length ; j++) {
			liensElt[j].style.color = "#ABABAB";
			liensElt[j].style.fontWeight = "normal";
			liensElt[j].style.textDecoration = "none";
		}

	creationContentElt.style.display = "flex";
	creationElt.style.color = "#7798FB";
	creationElt.style.fontWeight = "bold";
	creationElt.style.textDecoration = "underline";

	});
};

function annulerClique (classDuClic) {
	
	var cliqueInterditElt = document.getElementsByClassName(classDuClic);

	for (var j = 0; j < cliqueInterditElt.length; j++) {
		cliqueInterditElt[j].addEventListener("click", function (e) {
			e.preventDefault();
		});
	}
	
};


afficherContent("lienInfosCompte", "infosCompte");
afficherContent("lienFonctionnementLeo", "fonctionnementLeo");
afficherContent("lienFacturesCB", "facturesCB");

annulerClique("interdit");

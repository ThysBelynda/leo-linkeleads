function boutonClose (blocAEffacer, idBoutonClose) {
	var ombreElt = document.getElementById("shadow");
	var blocAEffacerElt = document.getElementById(blocAEffacer);
	var boutonCloseElt = document.getElementById(idBoutonClose);

	boutonCloseElt.addEventListener("click", function (e) {
		blocAEffacerElt.style.display = "none";
		ombreElt.style.opacity = "1";
		e.preventDefault();
	});

};

function popup (popup, boutonOpen, idBoutonClose) {
	
	var ombreElt = document.getElementById("shadow");
	var popupElt = document.getElementById(popup);
	var boutonOpenElt = document.getElementById(boutonOpen);

	boutonOpenElt.addEventListener("click", function (e) {
		popupElt.style.display = "block";
		ombreElt.style.opacity = "0.35";
		e.preventDefault();
	});

	boutonClose(popup, idBoutonClose);
};

popup("popupConnexion", "lienConnexion", "closePopupConnexion");
popup("popupInscription", "lienInscription", "closePopupInscription");


var popupConnexionElt = document.getElementById("popupConnexion");
var popupInscriptionElt = document.getElementById("popupInscription");
var popupValideeElt = document.getElementById("inscriptionValidee");



/* ----------- Lien vers Mot de passe oublié -------------- */

var lienMdpForgotElt = document.getElementById("lienMdpForgot");
var mdpForgotElt = document.getElementById("motDePasseOublie");
lienMdpForgotElt.addEventListener("click", function (e) {
	
	popupConnexionElt.style.display = "none";
	mdpForgotElt.style.display = "block";
	e.preventDefault();
});

boutonClose("motDePasseOublie", "closePopupOublie");
boutonClose("inscriptionValidee", "closePopupValidee");


/* ----------- Liens connexion - inscription ----------- */

var lienConnexionToInscriptionElt = document.getElementById("lienConnexionToInscription");
var lienInscriptionToConnexionElt = document.getElementById("lienInscriptionToConnexion");

lienConnexionToInscriptionElt.addEventListener("click", function (e) {

	popupConnexionElt.style.display = "none";
	popupInscriptionElt.style.display = "block";	
	e.preventDefault();
});

lienInscriptionToConnexionElt.addEventListener("click", function (e) {
	
	popupInscription.style.display = "none";
	popupConnexion.style.display = "block";
	e.preventDefault();
});

/* ------------ Liens inscription validee - connexion ------ */

var lienInscriptionValToConnexionElt = document.getElementById("imgValidee");

lienInscriptionValToConnexionElt.addEventListener("click", function (e) {
	
	popupValideeElt.style.display = "none";
	popupConnexion.style.display = "block";	
});

var lienImgLeoElt = document.getElementById("lienImgLeo");

lienImgLeoElt.addEventListener("click", function (e) {

	e.preventDefault();
});

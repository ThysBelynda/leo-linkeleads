var unSurTroisElt = document.getElementById("unSurTrois");
var deuxSurTroisElt = document.getElementById("deuxSurTrois");
var troisSurTroisElt = document.getElementById("troisSurTrois");
var leoIsWorkingElt = document.getElementById("leoIsWorking");

var boutonSuivantUnElt = document.getElementById("suivantProspecter");

var boutonPrecedentDeuxElt = document.getElementById("boutonPrecedent23");
var boutonSuivantDeuxElt = document.getElementById("boutonSuivant23");

var boutonSuivantTroisElt = document.getElementById("boutonCommencer33");
var boutonPrecedentTroisElt = document.getElementById("boutonPrecedent33");

var boutonRecommencerElt = document.getElementById("boutonRecommencer43");

var recapInvitElt = document.getElementById("recapInvit");
var recapMessageElt = document.getElementById("recapMessage");
var paragrapheLeo33Elt = document.getElementById("paragrapheLeoProspect33");

var selectionneur = 0;

	boutonSuivantUnElt.addEventListener("click", function () {

		unSurTroisElt.style.display = "none";
		deuxSurTroisElt.style.display = "block";
	});

	boutonPrecedentDeuxElt.addEventListener("click", function () {

		deuxSurTroisElt.style.display = "none";
		unSurTroisElt.style.display = "block";
	});

	boutonSuivantDeuxElt.addEventListener("click", function () {

		if(selectionneur >= 1)
		{
			deuxSurTroisElt.style.display = "none";
			troisSurTroisElt.style.display = "block";

			if(selectionneur == 1)
			{
				recapInvitElt.style.display = "none";
				recapMessageElt.style.display = "none";
				paragrapheLeo33Elt.style.marginTop = "40px";
			}
			else if(selectionneur == 2)
			{
				recapInvitElt.style.display = "inline";
				recapMessageElt.style.display = "none";
				paragrapheLeo33Elt.style.marginTop = "20px";
			}
			else if(selectionneur == 3)
			{
				recapInvitElt.style.display = "inline";
				recapMessageElt.style.display = "inline";
				paragrapheLeo33Elt.style.marginTop = "3px";
			}
		}
	});

	boutonPrecedentTroisElt.addEventListener("click", function () {

		troisSurTroisElt.style.display = "none";
		deuxSurTroisElt.style.display = "block";
	});

	boutonSuivantTroisElt.addEventListener("click", function () {

		troisSurTroisElt.style.display = "none";
		leoIsWorkingElt.style.display = "block";
	});

	boutonRecommencerElt.addEventListener("click", function () {

		leoIsWorkingElt.style.display = "none";
		unSurTroisElt.style.display = "block";
	});

function selectionDuBloc(blocElt, textElt) {

	blocElt.style.border = "2px solid #0085CC";
	textElt.style.color = "#0085CC";
	textElt.style.borderTop = "1px solid #0085CC";
	textElt.style.backgroundColor = "#C8DFF2";
	textElt.textContent = "Sélectionné";
};

function deselectionDuBloc(blocElt, textElt) {

	blocElt.style.border = "2px solid #D9D9D9";
	textElt.style.color = "#A0A0A0";
	textElt.style.borderTop = "1px solid #D9D9D9";
	textElt.style.backgroundColor = "white";
	textElt.textContent = "Sélectionner";
};

function blocSelectionnable (idBloc, idTxt) {

	var blocElt = document.getElementById(idBloc);
	var textElt = document.getElementById(idTxt);
	var clicky = 0;

	blocElt.addEventListener("click", function () {

		if(idBloc == "blocVisite")
		{
			if(clicky == 0)
			{
				selectionDuBloc(blocElt, textElt);
				clicky = 1;
				selectionneur++;
			}
			else if(clicky == 1 && selectionneur == 1)
			{
				deselectionDuBloc(blocElt, textElt);
				clicky = 0;
				selectionneur--;
			}
		}

		if(idBloc == "blocInvitation")
		{
			if(selectionneur >= 1)
			{
				if(clicky == 0)
				{
					selectionDuBloc(blocElt, textElt);
					clicky = 1;
					selectionneur++;
				}
				else if(clicky == 1 && selectionneur == 2)
				{
					deselectionDuBloc(blocElt, textElt);
					clicky = 0;
					selectionneur--;
				}
			}
		}

		if(idBloc == "blocMessage")
		{
			if(selectionneur >= 2)
			{
				if(clicky == 0)
				{
					selectionDuBloc(blocElt, textElt);
					clicky = 1;
					selectionneur++;
				}
				else if(clicky == 1)
				{
					deselectionDuBloc(blocElt, textElt);
					clicky = 0;
					selectionneur--;
				}
			}
		}
	});
};

blocSelectionnable("blocVisite", "selectVisite");
blocSelectionnable("blocInvitation", "selectInvit");
blocSelectionnable("blocMessage", "selectMessage");

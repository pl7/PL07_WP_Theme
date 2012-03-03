var kommentareFormular_HEIGHT;
function initPl07() {

	try {
		kommentareFormular_HEIGHT = window.document
				.getElementById('commentform').offsetHeight;
		console.log(kommentareFormular_HEIGHT);
		/**
		 * Verkleinern des Formulars fuer die Kommentare
		 */
		dropdownElement('commentform');
	} catch (e) {
		console.log('Kommentar-Formular nicht gefunden');
	}

}

function dropdownElement(formElementId) {
	var b = window.document.getElementById(formElementId);

	if (b.className == "displayed_on") {
		console.log('on');
		b.className = "displayed_off";
		b.style.height = "0px";
	} else {
		console.log('off');
		b.style.height = kommentareFormular_HEIGHT+"px";
		b.className = "displayed_on";
	}
}
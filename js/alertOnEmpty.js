function openAlert() {
	var x = document.forms["registracija"]["registracijaUsername"].value;
	 y = document.forms["registracija"]["registracijaPassword"].value;
	 a = document.forms["registracija"]["registracijaPasswordVerify"].value;
	 c = document.forms["registracija"]["registracijaEmail"].value;
	 
	if (x == null || x == ""){
		alert("Polje ime je prazno!");
	}
	if (y == null || y == ""){
		alert("Polje geslo je prazno!");
	}
	if (a == null || a == ""){
		alert("Polje ponovi geslo je prazno!");
	}
	if (c == null || c == ""){
		alert("Polje email je prazno!");
	}
}

function klikCV() {

  var slova = /^[a-zA-Z]+$/;

  if (document.getElementById("imeKorisnika").value.length == 0
     || document.getElementById("prezimeKorisnika").value.length == 0
     || !document.getElementById("imeKorisnika").value.match(slova)
     || !document.getElementById("prezimeKorisnika").value.match(slova))
  {
    alert("Please fill in all required fields in right way.");
  }

  else if ( document.getElementById("unosFile").files.length == 0 ) {
    alert("Please attach your CV file.");
  }

  else {
	alert("You have successfully filled in all the fields and submitted your CV.");
  }
}


function klikKontakt() {

  var slova = /^[a-zA-Z]+$/;
  var brojevi = /^[+0-9]*$/;

  if (document.getElementById("imeKorisnika").value.length == 0
     || document.getElementById("prezimeKorisnika").value.length == 0
     || document.getElementById("emailKorisnika").value.length == 0
     || document.getElementById("telKorisnika").value.length == 0
     || document.getElementById("subject").value.length == 0
     || !document.getElementById("imeKorisnika").value.match(slova)
     || !document.getElementById("prezimeKorisnika").value.match(slova)
     || !document.getElementById("telKorisnika").value.match(brojevi))
  {
    alert("Please fill in all required fields in right way.");
  }

  else {
	alert("You have successfully filled in all the fields and submitted your request.");
  }
}

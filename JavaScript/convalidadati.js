window.onload=tutte();

function tutte(){
  document.getElementById('convalida').onclick=check;
}

// CONVALIDA DATI

function check() {
  var controllo=true;
  var campi = document.forms[0].length;

// ciclo sul form escludendo campi - 1 in quanto l'ultimo elemento è l'input type="submit"
  for (var i=0; i<campi-1; i++) {
    if (document.forms[0].elements[i].value=="") {
        // evidenzio eventuali errori all'utente settando i campi vuoti in giallo
        document.forms[0].elements[i].style.backgroundColor="yellow";
        controllo=false;
    } else {
      // Faccio tornare bianchi i campi che sono stati corretti dall'utente in caso sbagli di nuovo per non confonderlo
      document.forms[0].elements[i].style.backgroundColor="white";
    }
  }
  // se la variabile di controllo è stata settata a false dopo la verifica, disabilito l'invio del form e avviso l'utente
  if (controllo==false) {
    document.getElementById('feedback').innerHTML="Uno o più campi sono stati lasciati vuoti!";
    return false;
  } else {
    // altrimenti reinderizzo
    document.forms[0].action="https://www.unito.it";
        // al posto di return true;
    document.forms[0].submit();

  }
  }

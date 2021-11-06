window.onload=tutte();

function tutte(){
  document.getElementById('conta').onclick=contacrediti;
}


// CONTA CREDITI

function contacrediti(){
  // escludo il bottone così ottengo il numero precise di checkbox
  var selezionabili = document.forms[0].length - 1;
  var conteggio=0;
  var feed;

  for(var j=0; j<selezionabili; j++) {
      // se l'esame è stato selezionato dall'utente
    if(document.forms[0].elements[j].checked==true) {
      // lo aggiungo al conto dei CFU
      conteggio+=parseInt(document.forms[0].elements[j].value);
    }
  }
    // Se ha raggiunto abbastanza crediti mi complimento altrimenti lo avviso
    if (conteggio>=40) {
      feed = "Complimenti, hai sostenuto abbastanza esami.";
    } else {
      feed = "Ops, non hai raggiunto il numero minimo di CFU(40)";
    }
    document.getElementById('feedback').innerHTML=feed;
}

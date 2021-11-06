window.onload=tutte();

function tutte() {
  document.getElementById('regista').onchange=select;
}


// SELECT
function select(){

  var selezionato = document.getElementById('regista').selectedIndex;
  var render = document.getElementsByTagName('option')[selezionato].value;

  if (render=="seleziona") {
    alert("scegline uno per poter visitare la sua pagina!");
  } else {
  window.location.assign(render);
}
}

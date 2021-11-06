window.onload=my_sniffer();

function my_sniffer(){
  var sniff = navigator.language.toLowerCase();
  var welcome;
  if (sniff.indexOf('it')>-1) {
    welcome="Benvenuta/o sul mio sito!";
  } else if (sniff.indexOf('fr')>-1) {
    welcome="Bienvenue sur mon site!";
  } else if (sniff.indexOf('de')>-1) {
    welcome="Willkommen auf meiner Webseite!";
  } else if (sniff.indexOf('es')>-1){
    welcome="Bienvenido a mi sitio!";
  } else {
    welcome="Welcome to my website!";
  }
    document.getElementById('welcome').innerHTML=welcome;
  }

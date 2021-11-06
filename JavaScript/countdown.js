window.onload=my_timeout();


// SET INTERVAL,TIMEOUT,LOCATION

function my_timeout(){
window.setTimeout(function(){ window.location.assign("https://www.ict.unito.it")},5000);
// avvio il countdown
countdown(5);
}

function countdown(x){
  // caso base. Per evitare che tornando indietro con il browser i secondi vadano in negativo.
  if (x<0) {return false;}
  document.getElementById('count').innerHTML="Verrai reindirizzato tra " + x + " secondi";
  // effettuo ricorsione
  window.setInterval(function(){countdown(x-1);},1000);
}

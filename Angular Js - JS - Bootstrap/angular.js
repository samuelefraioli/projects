// Creo servizio personalizzato per tenere aggiornato il prezzo totale
var app = angular.module('myApp', []);
app.service('price', function() {
    this.totale = function (corsi) {
      var totale=corsi[0].prezzo;
        for (var i=1;i<corsi.length;i++){
            totale+=corsi[i].prezzo;
        }
        return (totale/100)*80;
    }

  });

// Creo primo controller
app.controller('myCtrl',function($scope,$interval,price) {
// FEED + con servizio INTERVAL
   var dascorrere = ["Ogni giorno nuovi contenuti","Non perderti le ultime novità"];
   var i=0;
   $scope.scorrimento = dascorrere[i];
// A intervalli cambio l'h5 visualizzato sotto le icone social
   $interval(function () {
     if (i==0){
       i=1;
       $scope.scorrimento = dascorrere[i];
   } else {
     i=0;
     $scope.scorrimento = dascorrere[i];
   }
 }, 2000);

 // Lista offerte da visualizzare nella sidebar tramite ng-repeat
     $scope.offerte = [
         {offerta:'Video editing',prezzo:290},
         {offerta:'Ph educational',prezzo:200},
         {offerta:'Social management',prezzo:110},
         {offerta:'Photoshop avanzato',prezzo:1500},
         {offerta:'Mastering',prezzo:150}
         ];
   // Prezzo totale (utilizzando il servizio personalizzato 'price')
      $scope.tot = price.totale($scope.offerte);

         var myJSON = '{'
                          + '"feedback": ['
                          + '{ "recensione": "Servizio eccezionale!", "nome": "Giulia", "eta": "30 anni", "voto":"5/5" },'
                          + '{ "recensione": "Veloci ed affidabili", "nome":"Guido", "eta":"52 anni", "voto":"5/5"},'
                          + '{ "recensione": "Mi hanno letto nel pensiero", "nome":"Ginevra", "eta":"44 anni", "voto":"5/5"},'
                          + '{ "recensione": "Voglio fare tutti i vostri corsi!", "nome":"Giacomo", "eta":"28 anni", "voto":"5/5"}'
                          + ']'
                          + '}';
         var pars = JSON.parse(myJSON);
         $scope.j=0;

// Funzione per il feedback
         $scope.feed = function() {
                                    if ($scope.j==3){
                                        $scope.j=0;
                                        } else {
                                          $scope.j+=1;
                                        }
                                          return $scope.feedback = "\" " + pars.feedback[$scope.j].recensione + "\", " + pars.feedback[$scope.j].nome + ", " + pars.feedback[$scope.j].eta + ", voto " + pars.feedback[$scope.j].voto;
                                        }
// Feedback iniziale
$scope.feedback = "\" " + pars.feedback[$scope.j].recensione + "\", " + pars.feedback[$scope.j].nome + ", " + pars.feedback[$scope.j].eta + ", voto " + pars.feedback[$scope.j].voto;


});

// Funzioni di toggle icone
function big(x) {
  x.style.height = "80px";
  x.style.width  = "80px";
}

function normal(x) {
  x.style.height = "50px";
  x.style.width = "50px";
}
// Funzioni per animazione imgs
function brd(x) {
 x.style.height="240px";
 x.style.width = "300px";
}
function nBrd(x) {
 x.style.height="200px";
 x.style.width = "260px";
}

// CONTROLLER PER VALIDAZIONE FORM
app.controller('myCtrl2', function($scope){
  $scope.name="";
  $scope.surname="";
  $scope.email="";
  $scope.number="";
});

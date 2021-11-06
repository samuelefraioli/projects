$(document).ready(function(){

  // ES.1 SELECT
   $("#regista").change(function(){

       var render = $("option:selected").val();

       if (render=="seleziona") {
         alert("scegline uno per poter visitare la sua pagina!");
       } else {
         // al posto di window.location.assign
        $(location).attr("href",render);
   }
 });


  // ES.2 CONVALIDA DATI
    $("#convalida").click(function(){
      var controllo=true;
      var feed = "Uno o più campi sono vuoti";
    // selezioni elementi appartenenti alla classe check
      var campi = $(".check");

  // ciclo sull'array degli elementi contenuti nella variabile campi precedentemente inizializzata
    for (var i=0;i<campi.length;i++) {

        if ($(campi[i]).val()==""){
            $(campi[i]).css("background-color","yellow");
            controllo=false;
        } else {
          // Faccio tornare bianchi i campi che sono stati corretti dall'utente in caso sbagli di nuovo per non confonderlo
          $(campi[i]).css("background-color","white");
       }
      }

      // se la variabile di controllo è stata settata a false dopo la verifica, disabilito l'invio del form e avviso l'utente
      if (controllo==false) {
            $("#feedback").html(feed);
           return false;
      }else {
        // altrimenti reinderizzo
        $("#feedback").html(" ");
        $("#form1").attr("action","https://www.unito.it");
        $("#form1").submit();

      }
});


  // ES.3 CONTA CREDITI
      $("#conta").click(function(){
       var conteggio=0;
       var feed;

    // ciclo su un array di id degli elementi che voglio controllare
      for (var i=0;i<$(":checked").length;i++) {

        conteggio+=parseInt($(":checked").val());
}
  // controllo numero dei crediti
      if (conteggio>=40) {
         feed = "Complimenti, hai sostenuto abbastanza esami.";
      } else {
         feed = "Ops, non hai raggiunto il numero minimo di CFU(40)";
      }
  // fornisco feedback
      $("#feedback").html(feed);
 });


  // ES.4 TABLET
    $(document.body).css("min-width","480px");

    $(".box").click(function(){

    $(this).children(".slide").slideToggle("slow");
 });

});

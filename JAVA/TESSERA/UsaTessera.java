public class UsaTessera {
    public static void main(String[] args) {

        Tessera t1 = new Tessera(200,"Pippo");
        Tessera t2 = new Tessera(30,"Pluto");
        Tessera t3 = new Tessera(100,"Paperino");
        TesseraYoung t4 = new TesseraYoung(5000,"Topolino","Tutor");
        TesseraGold t5 = new TesseraGold(6000,"Minnie");
        Tessera[] vettore = {t1, t2, t3, t4, t5};

        GestoreVettore MioGestore = new GestoreVettore("MioGestore",vettore);
        GestoreVettore.test(MioGestore);
/*
  // sposta
        System.out.println("Sposto disponibilità da tessera t1 a tessera t2 ");
        MioGestore.sposta(0,1,10);
        System.out.println("\n ");

  // cerca
        System.out.println("Ricerca tessera dato titolare:");
        System.out.println(MioGestore.cerca("Pluto"));
        System.out.println("\n ");
   // cercamax
        System.out.println("Ricerca tessera con titolare che ha disponibilità massima: ");
        // prima versione
        System.out.println(MioGestore.cercamax());
        // seconda versione
        String trovato=MioGestore.cercamax();
        System.out.println(trovato);
        System.out.println("\n ");
    // stampa decrescente
        System.out.println("Stampo in ordine crescente di disponibilità");
        MioGestore.stampadec();
        System.out.println("\n ");
    // stampa minimo
        System.out.println("Stampo titolare e id, delle tessere con disponibilità minore a x: ");
        MioGestore.stampamin(1300);
*/


    }
}

import java.util.Scanner;

public class GestioneVettore {

    private Scheda[] vettore;


    public GestioneVettore(Scheda[]vett) {

        this.vettore=vett;
    }

    public void setVettore(Scheda[] v) {
        this.vettore = v;
    }

    public Scheda[] getVettore() {
        return vettore;
    }


    public void test() {

        boolean esci = false;
        int operazione;
        Scanner scan = new Scanner(System.in);
        while (!esci) {
            System.out.println("Che operazione vorresti svolgere?");
            System.out.println();
            System.out.println("Premi 0 per trasferire del credito");
            System.out.println("Premi 1 per cercare un titolare carta");
            System.out.println("Premi 2 per conoscere il titolare della scheda con più credito");
            System.out.println("Premi 3 per conoscere tutte le carte");
            System.out.println("Premi 4 per conoscere ID e titolare di carte che hanno meno di un certo credito");
            System.out.println("Per uscire: 5");
            System.out.println();
            operazione = scan.nextInt();

            if (operazione < 6 && operazione > -1) {

                switch (operazione) {
                    case 0 -> trasferisci();
                    case 1 -> cercaTitolare();
                    case 2 -> System.out.println(maxCredito());
                    case 3 -> arrayDecrescente();
                    case 4 -> minoreDi();
                    default -> esci = true;
                }

            } else {
                System.out.println("\n" +"Inserire un numero da 0 a 4 oppure esci(5)" + "\n");
            }


        }
    }

    public void trasferisci() {
        Scanner scan = new Scanner(System.in);
        int scelta=-1;
        int aChi=-1;
        int quanto;

        while(scelta < 0 || scelta > this.vettore.length - 1) {
            System.out.println("Da quale scheda vuoi trasferire credito? Inserisci un numero da 0 a 4.");
            scelta = scan.nextInt();
        }
        while(aChi < 0 || aChi > this.vettore.length - 1 || aChi==scelta) {
            System.out.println("Inserire il numero della carta a cui vuoi trasferire il credito (da 0 a 4, escludendo il numero che hai appena inserito):");
            aChi = scan.nextInt();
        }
            System.out.println("Quanto credito vuoi trasferire?");
            quanto = scan.nextInt();

        while (this.vettore[scelta].getCredito() < quanto) {
            System.out.println("Credito insufficiente per effettuare l'operazione ( " + this.vettore[scelta].getCredito() + "€ residui)");
            System.out.println("Procedi con un altro importo (se non hai credito premi 0): ");
            quanto = scan.nextInt();
        }
        if (this.vettore[scelta].getCredito() >= quanto) {

            this.vettore[scelta].setCredito(quanto);
            this.vettore[aChi].setRicarica(quanto);
            System.out.println("Operazione effettuata: ora il tuo credito è " + this.vettore[scelta].getCredito() + "€");
        }

    }

    public void cercaTitolare() {
        Scanner scan = new Scanner(System.in);
        System.out.println("Scrivi nome e cognome del titolare da cercare (es.Mario Rossi):");
        String titolare = scan.nextLine();
        int trovato =0;
        for (Scheda scheda : this.vettore) {
            if (scheda.getTitolare().equals(titolare)) {
                trovato++;
                System.out.println(trovato + " ) " + scheda.toString());
            }
        }

        if (trovato==0) {
            System.out.println("Mi dispiace, non ho trovato nessuna scheda che abbia questo titolare \n ");
        } else {
            System.out.println();
        }
  }

  public String maxCredito () {
        float max = this.vettore[0].getCredito();
        int index = 0;
      for (int i=1;i<this.vettore.length;i++) {
          if (this.vettore[i].getCredito() > max) {
              max = this.vettore[i].getCredito();
              index = i;
          }
          }
      return "La scheda con più credito è di " + this.vettore[index].getTitolare() + " ( " + this.vettore[index].getCredito() + "€ )\n";
      }

public void minoreDi() {

    Scanner scan = new Scanner(System.in);
    System.out.println("Vuoi risultati per credito inferiore a euro:");
    int soglia = scan.nextInt();
        int conto = 1;
    for (Scheda scheda : this.vettore) {
        if (scheda.getCredito() < soglia) {
            System.out.println(conto + ") ID= " + scheda.getID() + " titolare= \"" + scheda.getTitolare() + "\"");
            conto++;
        }
    }
        if (conto==1) {
            System.out.println("Mi dispiace ma non ho trovato nessuna scheda con credito inferiore a questa soglia. Prova con un'altra! \n");
    }
}

public void My_Sort() {

         Scheda tmp;
         for (int i = 0; i<this.vettore.length;i++) {
             int min = i;
             for (int j=i+1;j<this.vettore.length;j++) {
                 if (this.vettore[j].getCredito()<this.vettore[min].getCredito()) {
                     min = j;
                 }
                 tmp = this.vettore[min];
                 this.vettore[min]= this.vettore[j];
                 this.vettore[j]=tmp;
             }
         }
}
public void arrayDecrescente () {
        My_Sort();
    for (Scheda scheda : this.vettore) {
        System.out.println(scheda.toString());
    }
        }
}

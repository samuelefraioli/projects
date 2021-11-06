
public class UsaScheda {
      public static void main(String[] args) {
        System.out.println("* Assignment 2 *");
        System.out.println("Test scheda YOUNG");

        // PARTE 1) : creo una nuova scheda YOUNG
        SchedaYoung SIM_1 = new SchedaYoung(10,"Samuele junior","Fraioli","Tutor da cambiare");

        // controllo che la scheda possa effettuare una chiamata
        SIM_1.chiama ();

        //Setto un nuovo tutor
        SIM_1.setTutor("Samuele Senior");
        System.out.println("Il nuovo tutor è " + SIM_1.getTutor());

        System.out.println("Test scheda GOLD");

        // PARTE 2) creo una nuova scheda GOLD e chiamo
        Scheda SIM_2 = new SchedaGold (10,"Mario","Rossi");
        SIM_2.chiama();

        // Reset credito e cashback
        SIM_2.reset_credito();

        // ---- Verifica assegnazione ID univoco
        System.out.println("Test ID univoco:");
        System.out.println("Hai creato una scheda Young con ID= " + SIM_1.getID());
        System.out.println("Hai creato una scheda Gold con ID= " + SIM_2.getID());
      }

}


class UsaVett {

    public static void main(String[] args) {

        //Creo schede
        Scheda SIM_1 = new SchedaGold(10, "Mario", "Rossi");
        SchedaYoung SIM_2 = new SchedaYoung(10, "Samuele junior", "Fraioli", "Samuele Fraioli");
        Scheda SIM_3 = new Scheda(10, "Attilio", "Fraioli");
        Scheda SIM_4 = new SchedaYoung(20, "Mariella", "Giovannella", "Romina Buck");
        SchedaGold SIM_5 = new SchedaGold(30, "Luca", "Genovese");

        // Creo il vettore di Schede
        Scheda[] v = new Scheda[] {SIM_1, SIM_2, SIM_3, SIM_4, SIM_5};

        // Creo il gestore vettore
        GestioneVettore testGestioneVettore = new GestioneVettore(v);
        testGestioneVettore.test();
    }
}

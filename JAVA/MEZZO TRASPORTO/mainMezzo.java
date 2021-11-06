public class mainMezzo
{
    public static void main(String[] args)
    {
        Mezzo mezzo1 = new Mezzo("Sara", 01, 0, 0);

        mezzo1.setNomeTitolareMezzo("Andrea");

                    System.out.println("------");

        mezzo1.setKgPeso(100);

                    System.out.println("------");

        mezzo1.setNumeroOggetti(1);

                    System.out.println("------");

        mezzo1.setAzzera();

                    System.out.println("------");

        mezzo1.caricaKg(400);
        mezzo1.caricaKg(2000);


/*
        mezzoSpeciale mezzo2 = new mezzoSpeciale();

                    System.out.println("------");

        mezzo2.setCarico1(20);

                    System.out.println("------");

        mezzo2.setCarico2(80);

                    System.out.println("------");

        mezzo2.setAzzera();




        mezzoSemplice mezzo3 = new mezzoSemplice();

                    System.out.println("------");

        mezzo3.setTutor("Giulio");

                    System.out.println("------");

        mezzo3.setControlloKg(19);
        mezzo3.setControlloKg(21);

*/

        MezziTrasporto.setArrayMezzi(5);

                    System.out.println("------");

        MezziTrasporto.setNomeTitolare(0, "Marco");
        MezziTrasporto.setNomeTitolare(1, "Luca");
        MezziTrasporto.setNomeTitolare(2, "Gaia");
        MezziTrasporto.setNomeTitolare(3, "Chiara");
        MezziTrasporto.setNomeTitolare(4, "Giovanni");

                    System.out.println("------");

        MezziTrasporto.setKgCarico(0, 10);
        MezziTrasporto.setKgCarico(1, 20);
        MezziTrasporto.setKgCarico(2, 30);
        MezziTrasporto.setKgCarico(3, 40);
        MezziTrasporto.setKgCarico(4, 50);

                    System.out.println("------");

        MezziTrasporto.setIdTitolare(0, 10);
        MezziTrasporto.setIdTitolare(1, 11);
        MezziTrasporto.setIdTitolare(2, 12);
        MezziTrasporto.setIdTitolare(3, 13);
        MezziTrasporto.setIdTitolare(4, 14);

        System.out.println("------");

        MezziTrasporto.spostaCarico(1, 3, 5);
        MezziTrasporto.spostaCarico(2, 4, 999);

                    System.out.println("------");

        MezziTrasporto.cercaTitolare("Marco");
        MezziTrasporto.cercaTitolare("Giacomo");

        System.out.println("------");

        MezziTrasporto.setKgCarico(0, 10);
        MezziTrasporto.setKgCarico(1, 20);
        MezziTrasporto.setKgCarico(2, 30);
        MezziTrasporto.setKgCarico(3, 40);
        MezziTrasporto.setKgCarico(4, 50);

        System.out.println("------");

        MezziTrasporto.titolareMax();

        System.out.println("------");

        MezziTrasporto.controlloCarico(25);
        MezziTrasporto.controlloCarico(6);

        System.out.println("------");

        MezziTrasporto.ordinaVettore();



    }
}

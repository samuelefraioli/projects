import org.w3c.dom.ls.LSOutput;

public class MezziTrasporto extends Mezzo
{
    private static Mezzo[] arrayMezzi;
    //arrayMezzi è l'array, dentro ogni cella c'è un mezzo con id, titolare e carico


    public static void setArrayMezzi (int numMezzi)     //quanti mezzi ho nell'array
    {
        arrayMezzi = new Mezzo[numMezzi];

        for (int i=0; i<arrayMezzi.length; i++)
        {
            arrayMezzi[i] = new Mezzo();
        }
    }


    //cambiare nome del titolare del mezzo
    public static void setNomeTitolare(int i, String nomeTitolare)
    {
        arrayMezzi[i].setNomeTitolareMezzo(nomeTitolare);       //c'è gia il sout
    }


    //cambiare il carico di kg sul mezzo
    public static void setKgCarico (int i, int KgCarico)
    {
        arrayMezzi[i].setKgPeso(KgCarico);              //c'è gia il sout
    }

    //cambiare id del titolare del mezzo
    public static void setIdTitolare (int i, int idTitolare)
    {
        arrayMezzi[i].setIdMezzo(idTitolare);
    }

    //spostare carico dal mezzo i al mezzo j
    public static void spostaCarico( int i, int j, int KgSpostare)
    {
        if (arrayMezzi[j].getKgPeso()+KgSpostare <= 1000 && arrayMezzi[i].getKgPeso() >= KgSpostare)
        {
            arrayMezzi[j].setKgPeso(arrayMezzi[j].getKgPeso() + KgSpostare);
            arrayMezzi[i].setKgPeso(arrayMezzi[i].getKgPeso() - KgSpostare);

            System.out.println("Ho spostato " + KgSpostare + "kg dal mezzo i al mezzo j");

        }
        else
        {
            System.out.println("ERRORE: il carico supera i 1000kg o non c'erano abbastanza kg da spostare");
        }
    }


    //cercare un mezzo dato il titolare
    public static void cercaTitolare (String nomeCercato) {
        boolean trovato = false;
        int i;
        int posizione = 0;
        for ( i=0; i < arrayMezzi.length; i++ )
        {
            if (nomeCercato == arrayMezzi[i].getNomeTitolareMezzo())
            {
                trovato = true;
                posizione = i;
            }
        }
        if (trovato)
        {
            System.out.println("Al titolare che si chiama " + nomeCercato + " appartiene il mezzo che si trova in posizione " + posizione);
        }
        else
        {
            System.out.println("Nessun mezzo ha un titolare che si chiama " + nomeCercato);
        }
    }




    //cercare il titolare del mezzo con carico massimo

    public static void titolareMax()
    {
        int max = 0;

        for (int i=0; i<arrayMezzi.length-1; i++)
        {
                if (arrayMezzi[i].getKgPeso() < arrayMezzi[i+1].getKgPeso())
                {
                    max = i+1;

                }
            }
        System.out.println(arrayMezzi[max].getKgPeso());
        }






    //stampare i mezzi in ordine decrescente di carico
    public static void ordinaVettore() {
        Mezzo temp;
        for (int i=0; i<arrayMezzi.length; i++) {
            for (int j=1; j<(arrayMezzi.length -i); j++) {
                if (arrayMezzi[j-1].getKgPeso() < arrayMezzi[j].getKgPeso()) {
                    temp = arrayMezzi[j-1];
                    arrayMezzi[j-1] = arrayMezzi[j];
                    arrayMezzi[j] = temp;
                }

            }
        }
        for (int i=0; i<arrayMezzi.length;i++)
        {
            System.out.println(arrayMezzi[i].getIdMezzo());
        }
    }


    //stampare id e titolari del mezzo con carico minore di tot
    public static void controlloCarico(int kg)
    {
        System.out.println("I mezzi con carico minore di " + kg + " sono:");
        for (int i=0; i< arrayMezzi.length;i++)
        {
            if (arrayMezzi[i].getKgPeso()<kg)
            {
                System.out.println("Id: " + arrayMezzi[i].getIdMezzo() + " Titolare:" + " " + arrayMezzi[i].getNomeTitolareMezzo());
            }
        }
    }





    /*
    public static void controlloCarico(int x)

    {
        boolean trovato = false;
        String nome = "";
        int i = 0;
        int j = 0;
        int id = arrayMezzi[i].getIdMezzo();

        for (i=0; i<arrayMezzi.length -1; i++)
        {
            for (j=0; j<arrayMezzi.length -1; j++)
            {
                if (arrayMezzi[i].getKgPeso() < x)
                {
                    nome = arrayMezzi[i].getNomeTitolareMezzo();
                    trovato = true;
                }
            }
        }
        if (trovato)
        {
            System.out.println("Hanno peso minore di: " + x + " i titolari: " + nome + " con id " + id);
        }
        else
        {
            System.out.println(arrayMezzi[i].getKgPeso() + " è più grande di " + x + " quindi nessun mezzo pesa meno di " + x + "kg");
        }
    }

*/


}

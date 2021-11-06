
public class Mezzo
{
    private static int contaMezzi = 0;

    private String nomeTitolareMezzo;
    private int idMezzo;
    private int KgPeso;
    private int numeroOggetti;

    //costruttore di default (si può non mettere)
    public Mezzo()
    {
        nomeTitolareMezzo = "";
        idMezzo = 0;
        KgPeso = 0;
        numeroOggetti = 0;
    }


    //costruttore che assegna i valori alle variabili
    public Mezzo(String nomeTitolareMezzo, int idMezzo, int kgMateriale, int numeroOggetti) {
        this.nomeTitolareMezzo = nomeTitolareMezzo;
        this.idMezzo = idMezzo;
        this.KgPeso = kgMateriale;
        this.numeroOggetti = numeroOggetti;

        contaMezzi++;
    }


    //nome titolare del mezzo
    public void setNomeTitolareMezzo(String nomeTitolareMezzo)
    {
        this.nomeTitolareMezzo = nomeTitolareMezzo;
        System.out.println("Il titolare del mezzo si chiama: " + nomeTitolareMezzo);
    }


    public String getNomeTitolareMezzo()
    {
        return nomeTitolareMezzo;
    }


    // peso sul mezzo
   public void setKgPeso(int kgPeso) {
        KgPeso = kgPeso;
        System.out.println("I kg sul mezzo sono: " + KgPeso);
    }

    public int getKgPeso()
    {
        return KgPeso;
    }


    //id
    public void setIdMezzo(int idMezzo) {
        this.idMezzo = idMezzo;
    }

    public int getIdMezzo() {
        return idMezzo;
    }


    //oggetti
    public void setNumeroOggetti(int numeroOggetti)
    {
        this.numeroOggetti = numeroOggetti;
        System.out.println("Il numero di oggetti sul mezzo è: " + numeroOggetti);
    }


    public int getNumeroOggetti() {
        return numeroOggetti;
    }


    //azzerare carico e oggetti
    public void setAzzera ()
    {
        KgPeso = 0;
        numeroOggetti = 0;

        System.out.println("Hai azzerato il carico e gli oggetti");
        System.out.println("I kg sul mezzo sono: " + KgPeso);
        System.out.println("Il numero di oggetti sul mezzo è: " + numeroOggetti);
    }


    //caricare tot kg sul mezzo
    public void caricaKg(int nuovoKgPeso)
    {
        if (nuovoKgPeso < 1000)
        {
            KgPeso = KgPeso + nuovoKgPeso;
            System.out.println("Al mezzo sono stati aggiunti " + nuovoKgPeso + "kg");
        }
        else
        {
            System.out.println("ERRORE: Il carico supera i 1000kg");
        }
    }


    //metodi privati
    private int getCarico ()
    {
        return KgPeso;
    }

    private void setOggetti()
    {
        numeroOggetti = numeroOggetti + 1;
    }

    protected void setNomeTitolareMezzo() {
    }
}



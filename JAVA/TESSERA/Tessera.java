public class Tessera {

    private static int numeroTessere = 0;
    private final int ID;
    protected float cifra;
    protected String titolare;
    protected int utilizzi;

    public Tessera() {

        this.ID = numeroTessere + 1;
        numeroTessere++;
        this.cifra = 0;
        this.titolare = null;
        this.utilizzi = 0;

    }

    public Tessera (float cifra, String titolare) {

        this.ID = numeroTessere + 1;
        numeroTessere++;
        this.cifra = cifra;
        this.titolare = titolare;
        this.utilizzi = 0;
    }

    public static int getNumeroTessere() {
        return numeroTessere;
    }

    public int getID() {
        return ID;
    }

    public float getCifra() {
        return cifra;
    }

    public void setCifra(float cifra) {
        this.cifra = cifra;
    }

    public void ricarica(float cash) {
        this.cifra += cash;
    }

    public String getTitolare() {
        return titolare;
    }

    public int getUtilizzi() {
        return utilizzi;
    }

    public void setTitolare(String titolare) {
        this.titolare = titolare;
    }

    private void incrementa() {
        this.utilizzi++;
    }

    public void azzera() {
        this.cifra=0;
        this.utilizzi=0;
    }

    private boolean disponibile(float prezzo) {
        if (this.cifra > prezzo) {
            return true;
        } else {
            return false;
        }
    }

    public void acquisto(float prezzo) {

        if (disponibile(prezzo)) {

            incrementa();
            this.cifra -= prezzo;
        } else {
            System.out.println("Non ci sono abbastanza soldi sulla tessera");
        }

    }

    @Override
    public String toString() {
        return "Tessera{" +
                "ID=" + ID +
                ", cifra=" + cifra +
                ", titolare='" + titolare + '\'' +
                ", utilizzi=" + utilizzi +
                '}';
    }
}
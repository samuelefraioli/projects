public class TesseraGold extends Tessera {

    private float cashback;


    public TesseraGold (float cifra, String titolare) {

           super(cifra,titolare);
           this.cashback = 0;
    }

    public float getCashback() {
        return cashback;
    }

    @Override
    public void azzera() {
        super.azzera();
        this.cashback=0;
    }

    @Override
    public void acquisto(float prezzo) {
          super.acquisto(prezzo);
          cashback += (prezzo/10);
    }
}
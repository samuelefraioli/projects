public class SchedaGold extends Scheda {

    private float cashback ;

    // Costruttori
    public SchedaGold (float credito,String nome,String cognome) {
        super(credito,nome,cognome);
        this.cashback=0;
    }
    public SchedaGold (String nome,String cognome) {
        super(nome,cognome);
        this.cashback=0;
    }

    //Setter
    public void setCashback (float cashback) {
        this.cashback=cashback;
    }

    //Getter
    public float getCashback () {
        return cashback;
    }

    // Accumula 10% di ciò che viene speso in chiamataù

    public void chiama() { // da fare override

        super.chiama();
        float newcashback = super.costochiamata / 10 ;
        this.cashback = this.cashback + newcashback;
        System.out.println("Il tuo nuovo cashback è " + this.cashback);
    }

    // Azzerare credito e cashback tessera

    @Override
    public void reset_credito() {
        super.reset_credito();
        this.cashback=0;
        System.out.println("Il il tuo cashback è stato resettato insieme al credito.Cashback: " + this.cashback);
    }
}

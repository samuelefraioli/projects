public class SchedaYoung extends Scheda {

    private String tutor;


    // Costruttori

    public SchedaYoung (float credito,String nome,String cognome,String tutor) {
        super(credito,nome,cognome);
        this.tutor=tutor;
    }

    public SchedaYoung (String nome,String cognome,String tutor) {
        super(nome,cognome);
        this.tutor=tutor;
    }

    // Set
    public void setTutor(String tutor) {
        this.tutor = tutor;
    }

    //Get
    public String getTutor() {
        return tutor;
    }
}

public class TesseraYoung extends Tessera {

        private String tutor;


        public TesseraYoung (float cifra, String titolare,String tutor) {

                super(cifra,titolare);
                this.tutor = tutor;
        }

        public String getTutor() {
                return tutor;
        }

        public void setTutor(String tutor) {
                this.tutor = tutor;
        }

        @Override

        public void acquisto(float prezzo) {
                if (prezzo<=100) {
                        super.acquisto(prezzo);
                } else {
                        System.out.println("Errore, non puoi acquistare per più di 100 euro");
                }
        }
}
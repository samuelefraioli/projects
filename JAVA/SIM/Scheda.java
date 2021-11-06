
public class Scheda {
  // setto parametro di partenza per un counter schede
  private static int numeroScheda = 0;

  // dichiaro le variabili
  private final int ID;
  protected float credito;
  protected String nome;
  protected String cognome;
  protected int chiamate;
  protected float costochiamata;

  //Elenco i costruttori per definire una nuova scheda
  Scheda(float credito, String nome, String cognome) {
    // assegno l'ID in modo incrementale
    this.ID = numeroScheda + 1;
    this.credito = credito;
    this.nome = nome;
    this.cognome = cognome;
    this.chiamate = 0;
    // incremento il parametro statico
    numeroScheda++;
  }

  Scheda(String nome, String cognome) {
    // assegno l'ID in modo incrementale
    this.ID = numeroScheda + 1;
    this.credito = 0;
    this.nome = nome;
    this.cognome = cognome;
    this.chiamate = 0;
    // incremento il parametro statico nel secondo costruttore
    numeroScheda++;
  }

// Metodo per recuperare l'ID

  public int getID() {
    return ID;
  }

// Metodi per settare o recuperare informazioni sul titolare

  public void setNome(String nome) {
    this.nome = nome;
  }

  public String getTitolare() {
    return nome + " " + cognome;
  }

  // Sapere la disponibilità

  public float getCredito() {
    return credito;
  }

  // Caricare soldi sulla tessera

  public void setRicarica(float ricarica) {
    // System.out.println("Ricarica in corso");
    this.credito = credito + ricarica;
    //System.out.println("Il tuo nuovo credito,dopo la ricarica: " + getCredito() + ". Adesso puoi chiamare!");

  }
  // Set Credito
  public void setCredito(float cifra){
    this.credito=credito - cifra;
  }
  // Reset credito e numero di chiamate

  public void reset_credito() {

    System.out.println("Sto resettando il tuo credito..");
    this.credito = 0.00f;
    System.out.println("Il tuo nuovo credito,dopo il reset: " + this.credito);


  }

  public void reset_chiamate() {
    chiamate = 0;
  }

  // Recupera numero di chiamate effettuate

  public int getNumero_chiamate() {
    return chiamate;
  }

  //Metodo privato verifica credito

  private boolean disponibile() {
    return credito > 0;
  }

  // Diminuisce disponibilità di X dopo una chiamata (previa verifica credito).

  public void chiama() {
    if (disponibile()) {
      // dichiaro un costo chiamata indicativo che non tiene conto dei minuti trascorsi (mi serve soprattutto per il cashback)
      costochiamata = 0.1f;
      credito = credito - costochiamata;
      aumenta();
      System.out.println("Hai appena effettuato la chiamata numero: " + getNumero_chiamate());
      System.out.println("Il tuo nuovo credito è: " + getCredito());
    } else {
      System.out.println("Credito residuo insufficiente per effettuare la chiamata, si prega di ricaricare");
    }
  }

  //Metodo privato aumenta numero chiamate
  private int aumenta() {
    chiamate++;
    return chiamate;
  }

  @Override
  public String toString() {
    return "Scheda " + ID +
            ": ID=" + ID +
            ", credito=" + credito +
            ", nome='" + nome + '\'' +
            ", cognome='" + cognome + '\'' +
            ", chiamate effettuate=" + chiamate + ".";
  }
}
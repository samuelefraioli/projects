import java.sql.SQLOutput;

public class GestoreVettore {
    // variabili
    protected String nome;
    protected Tessera[] mio_array;

// costruttore
    public GestoreVettore(String nome, Tessera[] mio_array) {
        this.nome = nome;
        this.mio_array = mio_array;
    }

    public void sposta(int i, int j, int trasferiti) {
         if (this.mio_array[i].getCifra()>=trasferiti) {
        	 
             this.mio_array[j].ricarica(trasferiti);
             this.mio_array[i].acquisto(trasferiti);
             System.out.println("ora la disponibilità di t1 è: " + this.mio_array[i].getCifra());

         } else {
             System.out.println("THERE'S NO MONEY");
         }
    }

    public String cerca(String titolare){
    	String schedatrovata="null";
        for (int i=0;i<this.mio_array.length;i++){
            if (this.mio_array[i].getTitolare()==titolare){
                // stampo tutta la tessera
                schedatrovata=this.mio_array[i].toString();
            }
        }
        return schedatrovata;
    }
    
    public String cercamax(){
    	float max=0;
    	String nomemax= "null";
        for (int i=0;i<this.mio_array.length;i++){
            if (this.mio_array[i].getCifra()>max) {
                max=this.mio_array[i].getCifra();
                nomemax=this.mio_array[i].getTitolare();
            }
        } 
        return nomemax;
    }
    
    public void stampadec() {
      Tessera tmp;
    	for(int i=0; i<this.mio_array.length - 1; i++){
            for(int j=0; j<this.mio_array.length - i - 1; j++){
                if(this.mio_array[j].cifra<this.mio_array[j+1].cifra){
                    tmp=this.mio_array[j];
                    this.mio_array[j]=this.mio_array[j+1];
                    this.mio_array[j+1]=tmp;
                }
            }
        }
    	for(int i=0; i< this.mio_array.length; i++){
            System.out.println(this.mio_array[i].getTitolare());
        }
    }
    
    public  void stampamin(float cifraX) {
    	for (int i=0;i<this.mio_array.length;i++){
            if (this.mio_array[i].getCifra()<cifraX){
            	//stampa ID
                System.out.println(this.mio_array[i].getTitolare());
                System.out.println(this.mio_array[i].getID());

            }


        }
    	
    }

    public static void test(GestoreVettore x){
        // sposta
        System.out.println("Sposto disponibilità da tessera t1 a tessera t2 ");
        x.sposta(0,1,10);
        System.out.println("\n ");

        // cerca
        System.out.println("Ricerca tessera dato titolare:");
        System.out.println(x.cerca("Pluto"));
        System.out.println("\n ");

        // cerca max
        System.out.println("Ricerca tessera con titolare che ha disponibilità massima: ");
        System.out.println(x.cercamax());
        System.out.println("\n ");

        // stampa decrescente
        System.out.println("Stampo in ordine crescente di disponibilità");
        x.stampadec();
        System.out.println("\n ");

        // stampa minimo
        System.out.println("Stampo titolare e id, delle tessere con disponibilità minore a x: ");
        x.stampamin(1300);


    }

}
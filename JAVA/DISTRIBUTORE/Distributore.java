import java.util.Arrays;

public class Distributore

{ protected int iddistributore;             //dichiaro le variabili
  protected int bevandedisp;
  private String nometitolare;
  protected int ndistribuite;

 private Distributore[]dis;
  
   public Distributore ()                     //definisco nelle seguenti righe, due costruttori
   { iddistributore=0 ; bevandedisp=0 ;
     nometitolare="" ; ndistribuite=0 ;
   }
   public Distributore (int a, int b, String c, int d)
   { iddistributore= a ; bevandedisp=b ;
     nometitolare= c; ndistribuite=d;
   }
                                                     //inizio dei metodi pubblici
   public void setNometitolare (String b)            //setto il nome del titolare
   { nometitolare= b; }

   public String getNometitolare ()
   {return nometitolare;}
   
   public int getBevandedisp ()                   
   { return bevandedisp; }
   
   public int carica (int b)                         //ricarico il distributore
   { bevandedisp=bevandedisp+b; return bevandedisp;}
   
    public void reset()
   {bevandedisp=0; ndistribuite=0;}
   
   public boolean disponibile (int b)              // verifico la disponibilità
   { boolean z = (bevandedisp >= b) ; return z; }


   public int  versa (int b)                //distribuisco bevande, verificandone prima la disponibilità
   { if (disponibile (b))
	   { bevandedisp=bevandedisp-b; return bevandedisp; }
     else  { return -1 ;}
   }
   
   private int aumenta (int j)                  //aumento le bevande distribuite usando metodo privato
   { if (bevandedisp>=0)
	   ndistribuite++; bevandedisp=bevandedisp-j; return bevandedisp;}


       public void setIddistributore (int x)
       { iddistributore = x;}

       public int getIddistributore()
       { return iddistributore;}


    /*public boolean trasferimento ( Distributore[]dis, int i, int j, int bevandedisp)
    { boolean b= dis[i].disponibile(bevandedisp);
        if (b) { dis[j].carica(bevandedisp); }
        return b; }  */

    public int trasferimento ( int distr1, int distr2)
    { int versa = dis[distr1].getBevandedisp();
      int carica = dis[distr2].carica(getBevandedisp());
      return carica;}

    @Override
    public String toString() {
        return "Distributore{" +
                "iddistributore=" + iddistributore +
                ", bevandedisp=" + bevandedisp +
                ", nometitolare='" + nometitolare + '\'' +
                ", ndistribuite=" + ndistribuite +
                ", dis=" + Arrays.toString(dis) +
                '}';
    }
}
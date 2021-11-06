public class DistributoreDuplex extends Distributore 

{ private int bevanda2;

  public DistributoreDuplex ()
  { super ();
    bevanda2 = 10;
  }
  
  public DistributoreDuplex ( int a, int b, String c, int d, int e )
  { super ( a, b, c, d) ;
    this.bevanda2= e;
  }
  

  


	public int ricarica (int d)                         //ricarico il distributore 
    { bevandedisp=bevanda2+d; return bevandedisp;}



    public int distribuzione (int c)                //distribuisco la seconda bevanda
   
	   {bevanda2 =bevandedisp-c; return bevanda2;}


	public void reset()
    {bevandedisp=0; bevanda2=0;}

}

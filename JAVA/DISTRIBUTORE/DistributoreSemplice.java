public class DistributoreSemplice extends Distributore 

  { private String NomeTutor;
    private int MaxLitri=2;
  
   public DistributoreSemplice()
    {super ();
     NomeTutor=""; 
     MaxLitri=2;}

 
	
     public DistributoreSemplice ( int iddistributore , int bevandedisp, String nometitolare, int ndistribuite, String NomeTutor, int MaxLitri)
     { super ( iddistributore, bevandedisp, nometitolare, ndistribuite);
       this.NomeTutor = NomeTutor;
	   this.MaxLitri=MaxLitri;
  }
  
     public void setNomeTutor ( String c)
     { NomeTutor= c; }
  
     public String getNomeTutor ()
     { return NomeTutor; }
	 
     public int quantita (int b)                 //permettto distribuzione se meno di 2 l
     {if (b <= MaxLitri)
	   { ndistribuite ++; return ndistribuite;}
      else {return -1; }
  }
	
}

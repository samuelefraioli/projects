import java.util.ArrayList;
import java.util.Arrays;

public class UsaDistributore {
	public static void main(String[] args) { /* int x;                           //dichiaro due variabili usate successivamente
	  int y;
	  String j;
	  int e;
	  int f;



	  Distributore d1= new Distributore (1, 50, "Giorgio", 15);       //creo due istanze
	  Distributore d2= new Distributore (2, 70, "Emily", 20);
	  DistributoreSemplice s1= new DistributoreSemplice ();
	  DistributoreDuplex fanta = new DistributoreDuplex ();


	d1.setNometitolare ("Giorgio");
    System.out.println("il nome del titolare è "+"Giorgio");
	System.out.println("sono disponibili "+d1.getBevandedisp()+ " bevande");
	x=d1.carica(5);
	System.out.println(x);
    d1.reset();
	y=d1.versa(2);
	System.out.println(y);


	s1.setNometitolare("Alessia");
	s1.setNomeTutor("Lorenza");
	j=s1.getNomeTutor();
	System.out.println("il nome del tutor è "+j);
	int l=s1.quantita(5);
	System.out.println(l);

	fanta.setNometitolare("Antonio");
	e=fanta.ricarica(60);
	System.out.println("Dopo la ricarica ho disponibili "+e+ " bevande");
	f=fanta.distribuzione(2);
	System.out.println(f);
	fanta.reset();


	ArrayUtills q = new ArrayUtills (100);
		System.out.println(q);
    Distributore d3 = new Distributore ();
    Distributore d4 = new Distributore ();
    Distributore d5 = new Distributore ();
    q.setTitolare(0, "Morgan");
    q.setTitolare(1, "Bugo");
    q.setTitolare(2, "Elettra");

    q.setDistributore(0, d3);
    q.setDistributore(1, d4);
    q.setDistributore(2, d5);
    q.carica(0, 10);
    q.carica(1, 40);
    q.carica(2, 5);

    q.setId(0, 20);
    q.setId(1, 30);
    q.setId(2, 40);


    boolean b =	q.trasferimento(0,1,5);
		System.out.println(b);

		int m = q.disp(1);
		System.out.println("Dopo il trasferimento, sono disponibili "+m+ " bevande");

	 int a = q.cercaId(d5,"Elettra", 2);
		System.out.println(a);  */


		Distributore[] dis = new Distributore[4];
		dis[0] = new Distributore(1, 30, "Morgan", 10);
		dis[1] = new Distributore(2, 14, "Bugo", 5);
		dis[2] = new Distributore(3, 50, "Elettra", 6);
		dis[3] = new Distributore(4, 20, "Achille", 4);

	/*	// Metodo che stampa l'Id dato un nome del titolare

		for (int i = 0; i < dis.length; i++) {
			if (dis[i].getNometitolare().equals("Morgan")) {
				System.out.println("L'Id del distributore appartenente a " + dis[i].getNometitolare() + " é il " + dis[i].getIddistributore());
			}
		}


		// Metodo con cui Ricavare il nome del titolare del distributore con Quantità massima di bevande

		int quantitàMax = dis[0].getBevandedisp();
		int ind = 0;
		for (int i = 1; i < dis.length; i++) {
			if (dis[i].getBevandedisp() > quantitàMax) {
				quantitàMax = dis[i].getBevandedisp();
				ind = i;

			}
		}
		{
			System.out.println("Il titolare del distributore con disponibilità masssima é: " + dis[ind].getNometitolare());
		}*/

    //ordine decrescente		
		int x;
		int min;
		Distributore temp; // temp deve essere di tipo Distributore, perché deve contenere l'intero Distributore
		for (int i=0; i< dis.length; i++) {
			min = i; // qui mi salvo solo l'indice del minimo
			for (int j=i+1; j< dis.length; j++) {
				if (dis[j].getBevandedisp() < dis[min].getBevandedisp()) { // e qui lo utilizzo nell 'if
					min = j;
				} // chiudo l'if
				// e qui scambio
				temp = dis[i];
				dis[i] = dis[j];
				dis[j] = temp;
}
}


    /*    // Metodo che stampa il titolare e l'id di distributori con quantità minore di cifra data

		System.out.println("I distributori con quantità minore di 40 sono di: ");
		for (int i = 0; i < dis.length; i++) {
			int s = dis[i].getBevandedisp();
			int x = 40;

			if (s < x) {

				System.out.println(dis[i].getNometitolare() + " con id = "+ dis[i].getIddistributore());
			}


		}


*/

	}

}
package tp4.ej2;

public class Pastura extends Cereal{

	private int supMinReq;

	public Pastura(String n , int s) {
		super(n);
		supMinReq = s;
	}	

	public boolean apto ( Lote l ) {
		return super.apto(l) && l.getSuperficie() > supMinReq;
	}
}

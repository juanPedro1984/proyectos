package tp3.ej5;

public class Nitrogeno extends Congelado{
	
	private String metodo;
	private int tiempoExp;
	
	public Nitrogeno(String f, int l, String fE, String gO, String org, double t, String m, int tE) {
		super(f, l, fE, gO, org, t);
		// TODO Auto-generated constructor stub
		metodo = m;
		tiempoExp = tE;
	}
	
	public String generarEtiqueta() {
		String etiqueta = super.generarEtiqueta()+"\r\n"
				+"metodo: "+metodo +"\r\n"
				+"tiempoExp: "+tiempoExp ;
		return etiqueta;
	}

}

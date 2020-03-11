package tp3.ej5;

public class Aire extends Congelado {

	private double nitrogeno, oxigeno, dioxCarb , vapor;
	
	public Aire(String f, int l, String fE, String gO, String org, double t, double nit, double ox, double dC, double v ) {
		super(f, l, fE, gO, org, t);
		// TODO Auto-generated constructor stub
		nitrogeno = nit;
		oxigeno = ox;
		dioxCarb = dC;
		vapor = v;
	}
	
	public String generarEtiqueta() {
		String etiqueta = super.generarEtiqueta() +"\r\n"
				+"nitrogeno: "+nitrogeno +"\r\n"
				+"oxigeno: "+oxigeno +"\r\n"
				+"dioxCarb: "+dioxCarb +"\r\n"
				+"vapor: "+vapor;
		return etiqueta;
	}

}

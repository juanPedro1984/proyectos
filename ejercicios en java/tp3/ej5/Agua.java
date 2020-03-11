package tp3.ej5;

public class Agua extends Congelado{

	private double salinidad;
	
	public Agua(String f, int l, String fE, String gO, String org, double t, double s) {
		super(f, l, fE, gO, org, t);
		// TODO Auto-generated constructor stub
		salinidad = s;
	}
	
	public String generarEtiqueta() {
		String etiqueta = super.generarEtiqueta()+"\r\n" 
				+"salinidad: "+salinidad;
		return etiqueta;

	}

}

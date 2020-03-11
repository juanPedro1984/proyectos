package tp5.ej1;

import java.util.Vector;

public class ElementoFarmacia {
	
	private String nombre;
	private Vector < String > sintomas;

	public ElementoFarmacia(String n) {
		nombre = n;
		sintomas = new Vector(1,1);
	}
	public Vector getSintomas() {
		return sintomas;
	}
	public void addSintoma(String s) {
		sintomas.add(s);
	}
	
	public String getNombre() {
		return nombre;
	}

	
}

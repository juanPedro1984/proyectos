package tp5.ej1;

import java.util.Vector;

public class Medicamento extends ElementoFarmacia{

	private double precio;
	
	public Medicamento(String n, double p) {
		super(n);
		precio = p;
	}
	
	public double getPrecio() {
		return precio;
	}
}

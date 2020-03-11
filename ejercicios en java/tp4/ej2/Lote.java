package tp4.ej2;

import java.util.Vector;

public class Lote {

	private Vector minerales;
	private int tamano;
	private int numero;
	
	public Lote(int t, int n) {
		minerales = new Vector(1,1);
		tamano = t;
		numero = n;
	}
	
	public int getNum() {
		return numero;
	}
	public void addMinerales(String min) {
		minerales.add(min);
	}
	
	public boolean tieneMineral(String min) {
		return minerales.contains(min);
	}
	
	public int getSuperficie() {
		return tamano;
	}

}

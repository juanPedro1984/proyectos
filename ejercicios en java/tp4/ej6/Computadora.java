package tp4.ej6;

public class Computadora implements Comparable <Computadora> {
	private double velocidad;
	
	public Computadora(double v) {
		velocidad = v;
	}
	
	public double getVelocidad() {
		return velocidad;
	}
	
	public String procesar(Proceso p) {
		return "Proceso "+p.toString()+" terminado.";
	}
	
	public int compareTo(Computadora c) {
		if (velocidad > c.velocidad) {
			return 1;
		}else if (velocidad < c.velocidad) {
			return -1;
		}else {
			return 0;
		}
	}
}

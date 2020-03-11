package tp2;

/*Crear una clase Electrodoméstico con las siguientes características:
Atributos son nombre, precio base, color, consumo energético y peso.
Valores por defecto:
 El color por defecto es gris plata.
 El consumo energético 10 Kw.
 Precio base 100 pesos.
 El peso es 2 kg.
Implementar todos los constructores.
La funcionalidad de la clase es la siguiente:
 Todos los métodos get y set.
 Comprobar si el electrodoméstico es de bajo consumo (menor que 45 Kw)
 Calcular el balance, el mismo es el resultado de dividir el costo por el peso
 Indicar si un producto es de alta gama, el balance es mayor que 3*/


public class Electrodomestico {
		
	private String nombre, color;
	private double precioBase, peso;
	private int consEnergetico;
	
	public Electrodomestico(String n) {
		nombre = n;
		color = "gris plata";
		precioBase = 100.0;
		peso = 2.0;
		consEnergetico = 10;
	}
	
	
	public Electrodomestico(String n, String c) {
		nombre = n;
		color = c;
		precioBase = 100.0;
		peso = 2.0;
		consEnergetico = 10;
	}
	
	public Electrodomestico(String n, String c, double p) {
		nombre = n;
		color = c;
		precioBase = p;
		peso = 2.0;
		consEnergetico = 10;
	}
	
	public Electrodomestico(String n, String c, double p, double pe) {
		nombre = n;
		color = c;
		precioBase = p;
		peso = pe;
		consEnergetico = 10;
	}
	
	public Electrodomestico(String n, String c, double p, double pe, int ce) {
		nombre = n;
		color = c;
		precioBase = p;
		peso = pe;
		consEnergetico = ce;
	}
	
	//setters//
	
	public void setNombre(String n) {
		nombre = n;
	}
	
	public void setColor(String c) {
		color = c;
	}
	
	public void setPrecioBase(double p) {
		precioBase = p;
	}
	
	public void setPeso(double pe) {
		peso = pe;
	}
	
	public void setConsEnergetico( int ce) {
		consEnergetico = ce;
	}
	
	//getters//
	
	public String getNombre() {
		return nombre;
	}
	
	public String getColor() {
		return color;
	}
	
	public double getPrecioBase() {
		return precioBase;
	}
	
	public double getPeso() {
		return peso;
	}
	
	public int getConsEnergetico() {
		return consEnergetico;
	}
	
	// Comprobar si el electrodoméstico es de bajo consumo (menor que 45 Kw)//
	
	public String bajoCons() {
		int minWatts = 45;
		if (consEnergetico<minWatts) {
			return "Es de bajo consumo";
		}else {
			return "No es de bajo consumo";
		}
	}
	
	//Calcular el balance, el mismo es el resultado de dividir el costo por el peso//
	
	public double balance() {
		return precioBase/peso;
	}
	
	//Indicar si un producto es de alta gama, el balance es mayor que 3*
	
	public String gama() {
		int a = 3;
		if(this.balance() > a) {
			return "Es de alta gama";
		}else {
			return "No es de alta gama";
		}
	}
}

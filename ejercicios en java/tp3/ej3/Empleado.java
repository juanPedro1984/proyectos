package tp3.ej3;

public class Empleado {

	
	private double sueldoFijo;
	private String nombre , apellido;
	
	public Empleado(String nom, String ap, double s) {
		nombre = nom;
		apellido = ap;
		sueldoFijo = s;
	}
	
	public String getNombre() {
		return nombre;
	}
	public String getApellido() {
		return apellido;
	}
	public double getSueldo() {
		return sueldoFijo;
	}
	
	public void setNombre(String nom) {
		nombre = nom;
	}
	public void setApellido(String ap) {
		apellido = ap;
	}
	public void setSueldoFijo(double s) {
		sueldoFijo = s;
	}
	
	
}

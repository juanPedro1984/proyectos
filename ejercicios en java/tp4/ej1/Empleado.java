package tp4.ej1;

public abstract class Empleado {

	
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
	public String getSueldoBasico() {
		String s = "El sueldo basico es: "+sueldoFijo;
		return s;
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
	
	public abstract String getPago();
	
}

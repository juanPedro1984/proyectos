package tp3;

public class Sensor {

	private String nombre;
	private boolean activo;
	
	public Sensor(String nom) {
		nombre = nom;
		activo = false;
	}
	
	public void setNombre(String nom) {
		nombre = nom;
	}
	
	public String getNombre() {
		return nombre;
	}
	
	public void setSensor(boolean s) {
		activo = s;
	}
	
	public boolean getActivo() {
		return activo;
	}
	
}

package tp5.ej2;

public class Candidato{

	private String nombre, apellido, partido, agrupacion;

	public Candidato (String n, String ap, String p, String a) {
		nombre = n;
		apellido = ap;
		partido = p;
		agrupacion = a;
	}
	
	public String getNombre() {
		return nombre;
	}
	public String getApellido() {
		return apellido;
	}
	public String getPartido() {
		return partido;
	}
	public String getAgrupacion() {
		return agrupacion;
	}
	
	

	
}

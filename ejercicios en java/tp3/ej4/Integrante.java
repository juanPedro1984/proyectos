package tp3.ej4;

import java.util.Date;

public class Integrante {

	private String nombre, apellido, estado , ubicacion;
	private long nroPassport;
	private String fechaNac;
 
	
	public Integrante(String n, String a, long p, String f) {
		nombre = n;
		apellido = a;
		nroPassport = p;
		fechaNac = f;
	}
	
	public void setEstado(String e) {
		estado = e;
	}
	
	public String getEstado() {
		return estado;
	}
	
	public void setUbicacion(String u) {
		ubicacion = u;
	}
	
	public String disponible() {
		if((ubicacion == "origen")&&(estado != "concentracion")) {
			return "Disponible";
		}else {
			return "No disponible";
		}
	}
	
	
	
}

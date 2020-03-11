package tp3.ej4;

import java.util.Date;

public class Entrenador extends Integrante{

	private String idFederacion;
	
	public Entrenador(String n, String a, long p, String f,String id) {
		super(n, a, p, f);
		idFederacion = id;
	}
	

	
}

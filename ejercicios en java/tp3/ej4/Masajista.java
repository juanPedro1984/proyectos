package tp3.ej4;

import java.util.Date;

public class Masajista extends Integrante {

	
	private String titulo;
	private int experiencia;
	
	public Masajista(String n, String a, long p, String f,String t, int e) {
		super(n, a, p, f);
		titulo = t;
		experiencia = e;
	}

}

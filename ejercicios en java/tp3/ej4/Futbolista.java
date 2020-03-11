package tp3.ej4;

import java.util.Date;

public class Futbolista extends Integrante {

	private String posicion, pieHabil;
	private int goles;
	
	public Futbolista(String n, String a, long p, String f, String pos, String pH, int g) {
		super(n,a,p,f);
		posicion = pos;
		pieHabil = pH;
		goles = g;
	}
	
	
}

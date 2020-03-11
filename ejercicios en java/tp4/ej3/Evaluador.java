package tp4.ej3;

import java.util.Vector;

public class Evaluador {

	private String nombre;
	private Vector<String> temas;
	private Vector<Trabajo> trabajos;

	public Evaluador(String nom) {
		nombre = nom;
		temas = new Vector(1, 1);
		trabajos = new Vector(1, 1);
	}
	
	public void addTema(String t) {
		temas.add(t);
	}
	
	public String getNombre() {
		return nombre;
	}

	public boolean apto(Trabajo t) {
		if (t.esPoster()) {
			for(int i = 0 ; i < temas.size(); i++) {
				if(t.getTemas().contains(temas.elementAt(i))) {
					return true;
				}
			}
			return false;
		} else {
			return t.getTemas().containsAll(temas);
		}
	}
	
	public Vector getTemas() {
		return temas;
	}

	public Vector getTrabajos() {
		Vector res = new Vector (1,1);
		for(int i = 0 ; i < trabajos.size(); i ++) {
			res.add(trabajos.elementAt(i).getNombre());
		}
		return res;
	}
	
	public void addTrabajo(Trabajo t) {
		trabajos.add(t);
	}
}

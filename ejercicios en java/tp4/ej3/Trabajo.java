package tp4.ej3;

import java.util.Vector;

public class Trabajo {

	private String nombre, categoria;
	private Vector <String> temas;
	private Vector <Evaluador> evaluadores;
	
	public Trabajo (String n, String c) {
		nombre = n;
		categoria = c;
		temas = new Vector (1,1);
		evaluadores = new Vector (1,1);
	}
	
	public void addTema(String t) {
		temas.add(t);
	}
	
	public void setEvaluadores(Evaluador e) {
		evaluadores.add(e);
	}
	
	public Vector getEvaluadores() {
		Vector r = new Vector(1,1);
		for(int i = 0 ; i < evaluadores.size() ; i++) {
			r.add(evaluadores.elementAt(i).getNombre());
		}
		return r;
	}
	
	public String getNombre() {
		return nombre;
	}
	
	public Vector getTemas() {
		return temas;
	}
	
	public boolean esPoster() {
		return categoria == "poster";
	}
}

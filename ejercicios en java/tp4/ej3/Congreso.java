package tp4.ej3;

import java.util.Vector;

public class Congreso {

	private Vector <Evaluador> evaluadores;
	private Vector <String> temasEspeciales;
	private Vector <String> temasGenerales;
	
	public Congreso() {
		evaluadores = new Vector(1,1);
		temasEspeciales = new Vector(1,1);
		temasGenerales = new Vector(1,1);
	}
	
	public void addTemas(String t, boolean esp) {
		if (esp) {
			temasEspeciales.add(t);
		}else {
			temasGenerales.add(t);
		}
	}
	
	public void addEvaluadores(Evaluador e) {
		evaluadores.add(e);
	}
	
	public void asignarEval(Trabajo t) {
		for (int i = 0 ; i < evaluadores.size(); i ++) {
			if (evaluadores.elementAt(i).apto(t)) {
				t.setEvaluadores(evaluadores.elementAt(i));
				evaluadores.elementAt(i).addTrabajo(t);
			}
		}
	}
	
	public Vector getEvaluador(Trabajo t) {
		return t.getEvaluadores();
	}
	
	public Vector getTrabajos(Evaluador e) {
		return e.getTrabajos();
	
	}
	
	public boolean esExperto(Evaluador e) {
		boolean r = false;
		for (int i = 0 ; i < temasEspeciales.size() ; i++) {
			if(e.getTemas().contains(temasEspeciales.elementAt(i))) {
				r = true;
			}
		}
		return r;
		
	}
	
	
}

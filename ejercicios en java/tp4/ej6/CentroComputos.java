package tp4.ej6;

import java.util.Collections;
import java.util.Vector;

public class CentroComputos {

	Vector <Computadora> computadoras;
	Vector <Proceso> colaProcesos;
	private int indice;
	
	public CentroComputos() {
		computadoras = new Vector();
		colaProcesos = new Vector();
		indice = 0;
	}
	
	public void addComputadora(Computadora c) {
		computadoras.add(c);
		Collections.sort(computadoras);
	}
	
	public Vector getComputadoras() {
		return computadoras;
	}
	
	public void addColaProcesos(Proceso p) {
		colaProcesos.add(p);
		Collections.sort(colaProcesos);
	}
	
	public String procesar(Proceso p ) {
		String r;
		if(computadoras.size() > indice) {
		r = computadoras.elementAt(indice).procesar(p);
		indice++;
		return r;
		}else {
			r = "Proceso "+p.toString()+" en cola";
			addColaProcesos(p);
			indice++;
			return r;

		}
	}
}

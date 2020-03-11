package tp4.ej2;

import java.util.Vector;

public class Cereal {

	private Vector <String> reqSuelo;
	private String nombre;
	
	public Cereal(String n) {
		nombre = n;
		reqSuelo = new Vector(1,1);
	}
	public String getNombre() {
		return nombre;
	}
	
	public void addReqSuelo(String r) {
		reqSuelo.add(r);
	}
	public boolean apto(Lote l) {
		for(int i = 0; i < reqSuelo.size() ; i ++) {
			if(! l.tieneMineral(reqSuelo.elementAt(i))) {
				return false;
			}
		}
		return true;
	}
}

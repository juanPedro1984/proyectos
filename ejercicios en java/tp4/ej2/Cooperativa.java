package tp4.ej2;

import java.util.Vector;

public class Cooperativa {

	private Vector<Lote> lotes;
	private Vector<Cereal> cereales;
	private Vector<String> minP;
	private Vector<String> minS;

	public Cooperativa() {
		lotes = new Vector(1, 1);
		cereales = new Vector(1, 1);
		minP = new Vector(1, 1);
		minS = new Vector(1, 1);
	}

	public void addLote(Lote l) {
		lotes.add(l);
	}

	public void addCereal(Cereal c) {
		cereales.add(c);
	}

	public void addMineral(String m, boolean primario) {
		if (primario)
			minP.add(m);
		else
			minS.add(m);
	}

	public Vector getLoteApto(Cereal c) {
		Vector res = new Vector(1,1);
		for(int i = 0 ; i < lotes.size() ; i++) {
			if(c.apto(lotes.elementAt(i))) {
				res.add(lotes.elementAt(i).getNum());
			}
		}
		return res;
	}

	public Vector getCerealesXlote(Lote l) {
		Vector res = new Vector(1,1);
		for(int i = 0 ; i < cereales.size() ; i++) {
			if(cereales.elementAt(i).apto(l)) {
				res.add(cereales.elementAt(i).getNombre());
			}
		}
		return res;
	}

	public boolean LoteEspecial(Lote l) {
		for (int i = 0; i < minP.size(); i++) {
			if (l.tieneMineral(minP.elementAt(i))) {
				return true;
			}
		}
		return false;
	}

}

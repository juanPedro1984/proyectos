package tp6.ej1;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

public class Iterador implements Iterator<Integer> {
	
	private List <Integer> aux;
	private int pos;
	public Iterador ( List<Integer> n ) {
		aux = new ArrayList<Integer>(n);
		pos = 0 ;
	}

	public boolean hasNext() {
		return pos < aux.size();
	}
	
	public Integer next() {
		pos++;
		return aux.get(pos-1);
	}
}

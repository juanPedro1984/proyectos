package tp6.ej1;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

public class Coleccion implements Iterable <Integer> {

	private List <Integer> numeros;
	private int cont;
	
	
	public Coleccion() {
		numeros = new ArrayList<>();
		cont = 0;
		for(Integer i : numeros) {
			i = cont;
			cont++;
		}
	}
	
	public List<Integer> getNumeros(){
		return new ArrayList<Integer>(numeros);
	}
	
	public Iterator<Integer> iterator() {
		Iterator it = new Iterador(getNumeros());
		return it;
	}
}

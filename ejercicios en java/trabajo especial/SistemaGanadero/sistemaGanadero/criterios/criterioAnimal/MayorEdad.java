package criterios.criterioAnimal;

import base.Animal;

public class MayorEdad implements Criterio {
	
	private int meses;
	
	public MayorEdad(int m) {
		meses = m;
	}
	
	public boolean filtrar(Animal a) {
		return a.getEdad() > meses;
		}
	
}

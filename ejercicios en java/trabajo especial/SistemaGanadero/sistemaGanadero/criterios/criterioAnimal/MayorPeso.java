package criterios.criterioAnimal;

import base.Animal;

public class MayorPeso implements Criterio {

	private double peso;
	
	public MayorPeso ( double p ) {
		peso = p;
	}
	
	public boolean filtrar(Animal a) {
		return a.getPeso() > peso;
	}
	
}

package criterios.criterioAnimal;

import base.Animal;

public class MenorPeso implements Criterio {

	private double peso;
	
	public MenorPeso ( double p ) {
		peso = p;
	}
	
	public boolean filtrar(Animal a) {
		return a.getPeso() < peso;
	}
}

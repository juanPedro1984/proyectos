package criterios.criterioAnimal;

import base.Animal;

public class Peso implements Criterio {

	private double peso;
	
	public Peso(double p) {
		peso = p;
	}
	
	public boolean filtrar (Animal a){
		return (a.getPeso() == peso);
	}
	
}
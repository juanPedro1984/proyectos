package criterios.criterioAnimal;

import base.Animal;

public class Raza implements Criterio {

	private String raza;
	
	public Raza(String r) {
		raza = r;
	}
	
	public boolean filtrar (Animal a){
		return (a.getRaza() == raza);
	}

}

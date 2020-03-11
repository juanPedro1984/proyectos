package criterios.criterioAnimal;

import base.Animal;

public class Edad implements Criterio {
	
	private int meses;
	
	public Edad(int m) {
		meses = m;
	}
	public boolean filtrar (Animal a){
		return a.getEdad() == meses;
		
	}
	
	
	
	

}
package criterios.criterioAnimal;

import base.Animal;

public class TernerosParidos implements Criterio {

	public TernerosParidos() {
	}
	
	public boolean filtrar (Animal animal){
		return (animal.getTernerosParidos() > 0);
	}
	
}
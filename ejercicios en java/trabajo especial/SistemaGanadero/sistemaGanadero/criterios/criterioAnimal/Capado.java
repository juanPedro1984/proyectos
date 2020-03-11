package criterios.criterioAnimal;

import base.Animal;

public class Capado implements Criterio {

	private boolean capado;
	
	public Capado(boolean capado) {
		this.capado = capado;
	}
	
	public boolean filtrar (Animal animal){
		return (animal.getCapado() == capado);
	}

}

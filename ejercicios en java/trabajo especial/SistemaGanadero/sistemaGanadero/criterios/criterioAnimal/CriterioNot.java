package criterios.criterioAnimal;

import base.Animal;

public class CriterioNot implements Criterio {

	private Criterio c;
	
	public CriterioNot(Criterio c1) {
		c = c1;
	}
	
	public boolean filtrar(Animal a) {
		return c.filtrar(a);
	}
	
	public String clasificar(Animal a) {
		String clas = "";
		return clas;
	}
}
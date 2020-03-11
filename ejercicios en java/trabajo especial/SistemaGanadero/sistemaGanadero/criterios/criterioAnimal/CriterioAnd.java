package criterios.criterioAnimal;


import base.Animal;

public class CriterioAnd implements Criterio{

	private Criterio c1;
	private Criterio c2;
	
	public CriterioAnd(Criterio a, Criterio b) {
		c1 = a;
		c2 = b;
	}

	public boolean filtrar (Animal a){	
		return c1.filtrar(a) && c2.filtrar(a);
	}
	
	public String clasificar(Animal a) {
		String clas = "";
		return clas;
	}
}
package base;

import java.util.List;
import java.util.Vector;

import criterios.criterioAnimal.Criterio;

public class Camion {
	
	private Criterio criterio;	
	private int capacidad;
	private List<Animal> animales;
	
	public Camion(int capacidad, Criterio crit ) {
		this.capacidad = capacidad;
		criterio = crit;
		animales = new Vector<Animal>(1,1);
	}
	
	public void setGrupo(List<Animal> animal) {
		animales = animal;
	}
	public List<Animal> getGrupo() {
		return animales;
	}
	
	public Criterio getCriterio() {
		return criterio;
	}
	
	public int getCapacidad() {
		return capacidad;
	}
			
}
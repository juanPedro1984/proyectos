package base;

import java.util.Vector;

import criterios.criterioAnimal.Criterio;

public abstract class SisGanadero {

	public abstract int getCantidad ();
	public abstract double getPeso();
	public abstract int getEdad();
	public abstract String getRaza();
	public abstract String mostrarGrupo();
	public abstract Vector<Animal> cumple(Criterio c);
	public abstract boolean eliminar(Animal a);
	
	public double edadPromedio() {
		return getEdad() / getCantidad();
	}
	public double pesoPromedio() {
		return getPeso() / getCantidad();
	}

}

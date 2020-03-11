package base;

import java.util.Vector;

import criterios.criterioAnimal.Criterio;

public class Animal extends SisGanadero {

	private int id;
	private int meses;
	private int ternerosP;
	private String raza;
	private String sexo;
	private boolean capado;
	private double peso;
	
	public Animal(int id, int meses, int ternerosP, String raza, String sexo, boolean capado, double peso) {
		this.id = id;
		this.meses = meses;
		this.ternerosP = ternerosP;
		this.raza = raza;
		this.sexo = sexo;
		this.capado = capado;
		this.peso = peso;
	}
	

	public boolean eliminar(Animal a) {
		return false;
	}
	
	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + id;
		return result;
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Animal other = (Animal) obj;
		if (id != other.id)
			return false;
		return true;
	}

	public int getIdentificador() {
		return id;
	}	
	public int getCantidad() {
		return 1;
	}
	public int getEdad() {
		return meses;
	}
	
	public int getTernerosParidos() {
		return ternerosP;
	}
	
	public String getSexo() {
		return sexo;
	}
	
	public double getPeso() {
		return peso;
	}

	public boolean getCapado() {
		return capado;
	}
	
	public String getRaza() {
		return raza;
	}

	
	public Vector<Animal> cumple(Criterio c) {
		Vector<Animal> result = new Vector<Animal>();
		if (c.filtrar(this)) {
			result.add(this);
		}
		return result;
	}
	
	public String mostrarGrupo() {
		return " | " + "Animal ID: " + Integer.toString(this.id);
	}

}
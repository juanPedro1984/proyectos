package base;

import java.util.Vector;

import criterios.criterioAnimal.Criterio;

public class Grupo extends SisGanadero {

	private Vector<SisGanadero> grupos;

	public Grupo() {
		grupos = new Vector<SisGanadero>();
	}

	public boolean eliminar(Animal a) {
		if(grupos.contains(a)) {
			grupos.remove(a);
			return true;
		}else {
			for(SisGanadero sg : grupos) {
				if(sg.eliminar(a)){
					return true;
				}
			}
		}
		return false;
	}

	public void addGrupo(SisGanadero grupo) {
		grupos.add(grupo);
	}

	public String getRaza() {
		return "";
	}

	public int getCantidad() {
		int cant = 0;
		for (SisGanadero sg : grupos) {
			cant += sg.getCantidad();
		}
		return cant;
	}

	public double getPeso() {
		double p = 0;
		for (SisGanadero sg : grupos) {
			p += sg.getPeso();
		}
		return p;
	}

	public int getEdad() {
		int edadTotal = 0;
		for (SisGanadero sg : grupos) {
			edadTotal += sg.getEdad();
		}
		return edadTotal;
	}

	public Vector<Animal> cumple(Criterio criterio) {
		Vector<Animal> result = new Vector<Animal>();
		for (SisGanadero g : grupos) {
			result.addAll(g.cumple(criterio));
		}
		return result;
	}
	
	
	
	public String mostrarGrupo() {
		String descripcion = "";
		for (SisGanadero g : grupos) {
			descripcion = descripcion.concat(g.mostrarGrupo());
		}

		return descripcion;
	}

}

package clasificador;

import java.util.HashMap;
import java.util.Map;

import base.Animal;
import criterios.criterioAnimal.Criterio;

public class Categoria {

	private Map<String, Criterio> categorias;
	
	public Categoria() {
		categorias = new HashMap<String, Criterio>();
	}
	
	public void addCategoria(String categoria, Criterio clasificacion) {
		categorias.put(categoria, clasificacion);
	}
	
	public String categoriasAnimal(Animal animal) {
		String result = "";
		for (Map.Entry<String, Criterio> hash: categorias.entrySet()) {
			if (hash.getValue().filtrar(animal)) {
				result += hash.getKey() + " | ";
			}
		}
		return result;
	}
}

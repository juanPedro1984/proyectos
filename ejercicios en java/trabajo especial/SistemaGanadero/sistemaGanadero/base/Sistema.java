package base;

import java.util.List;
import java.util.Vector;

import criterios.criterioGrupo.CriterioGrupo;

public class Sistema {

	private SisGanadero grupos;

	public Sistema(SisGanadero s) {
		grupos = s;
	}
	
	public void armarCamion(Camion camion) {
		List<Animal> animales = new Vector<Animal>();
		animales = grupos.cumple(camion.getCriterio());
		if(animales.size()>camion.getCapacidad()) {
		animales = animales.subList(0, camion.getCapacidad());
		camion.setGrupo(animales);
		for(Animal a : animales) {
			grupos.eliminar(a);
		}
		}
	}
	
	public boolean aptoVenta(CriterioGrupo criterioGrupo) {
		return criterioGrupo.grupoApto(grupos);
	}	


}

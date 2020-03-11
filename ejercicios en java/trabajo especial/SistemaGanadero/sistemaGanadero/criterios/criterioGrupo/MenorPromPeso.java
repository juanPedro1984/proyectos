package criterios.criterioGrupo;

import base.SisGanadero;

public class MenorPromPeso implements CriterioGrupo {

	private double peso;
	
	public MenorPromPeso(double p) {
		peso = p ;
	}
	
	public boolean grupoApto(SisGanadero sg) {
		return sg.pesoPromedio() <= peso;
	}
}
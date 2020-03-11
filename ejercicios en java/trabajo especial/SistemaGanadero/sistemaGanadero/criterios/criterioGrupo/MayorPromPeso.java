package criterios.criterioGrupo;

import base.SisGanadero;

public class MayorPromPeso implements CriterioGrupo {

	private double peso;
	
	public MayorPromPeso(double p) {
		peso = p ;
	}
	
	public boolean grupoApto(SisGanadero sg) {
		return sg.pesoPromedio() > peso;
	}
}

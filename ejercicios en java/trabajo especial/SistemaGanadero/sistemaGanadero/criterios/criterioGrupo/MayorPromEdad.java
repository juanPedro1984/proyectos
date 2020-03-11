package criterios.criterioGrupo;

import base.SisGanadero;

public class MayorPromEdad implements CriterioGrupo {

	int meses;
	
	public MayorPromEdad(int m) {
		meses = m ;	}
	
	public boolean grupoApto(SisGanadero sg) {
		return sg.edadPromedio() > meses;
	}
}

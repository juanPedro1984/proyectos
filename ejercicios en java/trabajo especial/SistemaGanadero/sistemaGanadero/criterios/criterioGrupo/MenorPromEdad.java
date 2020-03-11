package criterios.criterioGrupo;

import base.SisGanadero;

public class MenorPromEdad implements CriterioGrupo {

	int meses;
	
	public MenorPromEdad(int m) {
		meses = m ;	}
	
	public boolean grupoApto(SisGanadero sg) {
		return sg.edadPromedio() <= meses;
	}
}

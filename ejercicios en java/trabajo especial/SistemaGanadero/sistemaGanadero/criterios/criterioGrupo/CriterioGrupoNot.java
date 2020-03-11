package criterios.criterioGrupo;

import base.SisGanadero;

public class CriterioGrupoNot implements CriterioGrupo {

	private CriterioGrupo c;
	
	public CriterioGrupoNot(CriterioGrupo c1) {
		c = c1;
	}
	
	public boolean grupoApto(SisGanadero sg) {	
		return !c.grupoApto(sg);
	}

}
package criterios.criterioGrupo;

import base.SisGanadero;

public class CriterioGrupoOr implements CriterioGrupo{

	private CriterioGrupo c1;
	private CriterioGrupo c2;
	
	public CriterioGrupoOr(CriterioGrupo a, CriterioGrupo b) {
		c1 = a;
		c2 = b;
	}
	
	public boolean grupoApto(SisGanadero sg) {	
		return c1.grupoApto(sg) || c2.grupoApto(sg);
	}
	
}
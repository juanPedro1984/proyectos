package tp3.ej5;

public class ProductoFrio extends Producto {

	private String orgSupAlim;
	private double tempMantenimiento;
	
	public ProductoFrio(String f, int l, String fE, String gO, String org, double t) {
		super(f, l, fE, gO);
		orgSupAlim = org;
		tempMantenimiento = t;
	}


	public String getOrgSupAlim() {
		return orgSupAlim;
	}
	
	public double getTempMantenimiento() {
		return tempMantenimiento;
	}
	
	public void setOrgSupAlim(String org) {
		orgSupAlim = org;
	}
	
	public void setTempMantenimiento(double t) {
		tempMantenimiento = t;
	}
	
	public String generarEtiqueta() {
	String etiqueta = super.generarEtiqueta() +"\r\n"
			+"orgSupAlim: "+orgSupAlim+"\r\n"
			+"tempMantenimiento: "+tempMantenimiento;
	return etiqueta;
			
	}


	
}

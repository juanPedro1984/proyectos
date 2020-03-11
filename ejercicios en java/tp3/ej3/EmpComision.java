package tp3.ej3;

public class EmpComision extends Empleado{

	private double comision;
	private double ventas;
	
	public EmpComision(String nom,String ap, double s, double c) {
		super(nom,ap,s);
		comision = c;
	}
	
	public double getSueldo() {
		return super.getSueldo() + (ventas * comision);
	}
	
	public void setVentas(double v) {
		ventas = v;
	}
}

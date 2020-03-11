package tp3.ej3;

public class EmpHoraExtra extends Empleado {

	private double extra;
	private int horas;
	
	public EmpHoraExtra(String nom,String ap, double s, double e) {
		super(nom,ap,s);
		extra = e;
	}
	
	public void setHoras(int h) {
		horas = h;
	}
	public double getSueldo() {
		return super.getSueldo() + (horas * extra);
	}
	
}

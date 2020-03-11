package tp4.ej1;

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
	public String getPago() {
		String s = super.getSueldoBasico()+"\r\n"
		        +"El pago por horas extra es: "+ (extra*horas);
		return s;
	}

	
}

package tp4.ej1;

public class EmpComision extends Empleado{

	private double comision;
	private double ventas;
	
	public EmpComision(String nom,String ap, double s, double c) {
		super(nom,ap,s);
		comision = c;
	}
	
	public String getPago() {
		String s = super.getSueldoBasico()+"\r\n"
					+"El pago por comision es: "+ (comision * ventas);
		return s;
	}
	
	public void setVentas(double v) {
		ventas = v;
	}
}

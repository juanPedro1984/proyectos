package tp4.ej1;

public class EmpleadoNormal extends Empleado
{

	public EmpleadoNormal(String nom, String ap, double s) {
		super(nom, ap, s);
		// TODO Auto-generated constructor stub
	}
	
	public String getPago() {
		return super.getSueldoBasico()+"\r\nNo posee pagos extra.";
	}

}

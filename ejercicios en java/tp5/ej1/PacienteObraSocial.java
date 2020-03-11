package tp5.ej1;

public class PacienteObraSocial extends Paciente{

	public PacienteObraSocial(String n) {
		super(n);
		// TODO Auto-generated constructor stub
	}

	public double calcularPrecio(Medicamento m) {
		return m.getPrecio()*0.5;
	}
}

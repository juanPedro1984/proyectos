package tp5.ej1;

public class PacientePrePaga extends Paciente {

	public PacientePrePaga(String n) {
		super(n);
	}
	
	public double calcularPrecio(Medicamento m) {
		return m.getPrecio()*0.6;
	}
	
	
}

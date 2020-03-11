package tp5.ej1;

import java.util.Vector;

public class Paciente extends ElementoFarmacia{

	private Vector <String> alergias;
	
	public Paciente(String n) {
		super(n);
		alergias = new Vector (1,1);
	}
	
	public void addAlergia(String a) {
		alergias.add(a);
	}
	
	public double calcularPrecio(Medicamento m) {
		return m.getPrecio();
	}
	
	public boolean tratamientoApto(Medicamento m) {
		return m.getSintomas().containsAll(getSintomas()) && alergicoA(m);
	}
	
	public boolean alergicoA(Medicamento m) {
		return !alergias.contains(m.getNombre());
	}
	
}

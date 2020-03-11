package tp5.ej2;

import java.util.Vector;

public class Establecimiento implements SisElectoral{

	private String nombre;
	private Vector <SisElectoral> mesas;
	
	public Establecimiento (String n) {
		nombre = n;
		mesas = new Vector (1,1);
	}
	
	public void addMesa(SisElectoral m) {
		mesas.add(m);
	}
	
	
	public int contarMesas() {
		int cont = 0;
		for (SisElectoral m : mesas) {
			cont += m.contarMesas();
		}
		return cont + 1;
	}
	
	public int getCantidad() {
		int cont = 0;
		for(SisElectoral per : mesas) {
			cont += per.getCantidad();
		}
		return cont;
	}
	
	public double porcentajeCandidato(Candidato c) {
		int cont = 0;
		for(SisElectoral m : mesas) {
			cont += m.porcentajeCandidato(c);
		}
		return cont / contarMesas();
	}

	public double porcentajeBlanco() {
		int cont = 0 ;
		for(SisElectoral m : mesas) {
			cont += m.porcentajeBlanco();
		}
		return cont / contarMesas();
	}
	
	public double porcetajeHora() {
		int cont = 0;
		for (SisElectoral m : mesas) {
			cont += m.porcetajeHora();
		}
		return cont / contarMesas();
	}
}

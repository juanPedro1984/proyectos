package tp5.ej2;

import java.util.Vector;

public class Mesa implements SisElectoral {

	private int nro;
	
	private Vector <Persona> padron;
	
	public Mesa(int n) {
		nro = n;
		padron = new Vector(1,1); 
	}
	
	public int contarMesas() {
		return 1;
	}
	
	public int getCantidad() {
		int cant = 0;
		for(Persona per : padron) {
			if(per.getVotado()) {
				cant++;
			}
		}
		return cant;
	}
	
	
	public int getNro() {
		return nro;
	}
	
	public void addPersona(Persona p) {
		padron.add(p);
	}
	
	public boolean puedeVotar(Persona p) {
		return padron.contains(p);
	}
	
	public void registrarVoto(Persona p, Candidato c) {
		for(Persona per : padron) {
			if(p==per) {
				p.setVoto(c);
				break;
			}
		}
	}
	
	public double porcentajeCandidato(Candidato c) {
		int cont = 0;
		for(Persona per : padron) {
			if((per.getVotado())&&(per.getVoto().equals(c))){
				cont++;
			}
		}
		return  (cont / getCantidad())*100;
	}
	
	public double porcentajeBlanco() {
		int cont = 0;
		for(Persona per : padron) {
			if(per.getVoto()==null){
				cont++;
			}
		}
		return cont;
	}
	
	public double porcetajeHora() {
		int cont = 0;
		for(Persona per : padron) {
			if(per.getVoto()==null){
				if((per.hora().getHours()>10)&&(per.hora().getHours()<11)) {
					cont++;
				}
			}
		}
		return (cont / getCantidad()) *100;
	}
}

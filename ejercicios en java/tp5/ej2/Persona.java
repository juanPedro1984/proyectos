package tp5.ej2;

import java.util.Date;

public class Persona {

	private long dni;
	private boolean votado;
	private Candidato voto;
	private Date horaVoto;
	
	public Persona(long d) {
		dni = d;
		voto = new Candidato("nn","nn","nn","nn");
	}
	public Date hora() {
		return horaVoto;
	}
	public long getDni() {
		return dni;
	}
	
	public Candidato getVoto() {
		return voto;
	}
	public void setVoto(Candidato c) {
		voto = c;
		votado = true;
		horaVoto = new Date();
	}
	
	public boolean getVotado() {
		return votado;
	}
	
}

package tp3.ej1;

public class Alarma {

	private boolean vidrio, abertura, movimiento;
	private Timbre timbre;
	public Alarma(){
		vidrio = false;
		abertura = false;
		movimiento = false;
		timbre = new Timbre();
	}
	
	public void setVidrio(boolean v) {
		vidrio = v;
	}
	public void setAbertura(boolean a) {
		abertura = a;
	}
	public void setMovimiento(boolean m) {
		movimiento = m;
	}
	
	public boolean getVidrio() {
		return vidrio;
	}
	
	public boolean getMovimiento() {
		return movimiento;
	}
	
	public boolean getAbertura() {
		return abertura;
	}
	
	public Timbre getTimbre() {
		return timbre;
	}
	
	public boolean comprobar() {
		return !((abertura==false)&&(vidrio==false)&&(movimiento==false));
	}
	
	public String activarAlarma() {
	return timbre.hacerSonar(comprobar());
	}

}

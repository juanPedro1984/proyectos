package tp3.ej1;

public class AlarmaLuminosa extends Alarma {

	private Luz luz;
	public AlarmaLuminosa(){
		luz = new Luz();
	}
	
	public String activarAlarma() {
		super.activarAlarma();
		return luz.encender(comprobar()) +" - "+ super.activarAlarma();
	}
	
	public Luz getLuz() {
		return luz;
	}
}

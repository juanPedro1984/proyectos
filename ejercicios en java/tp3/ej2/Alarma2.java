package tp3.ej2;

public class Alarma2 {

	private Sensor sensores [];
	private Timbre timbre;
	private static int pos = 0;
	
	public Alarma2(int cant) {
		sensores = new Sensor [cant];
		timbre =  new Timbre();
	}
	
	
	public String getSensor(String nom) {
		int i = 0;
		String m = "n";
			while(i<sensores.length) {
				if(sensores[i].getNombre() == nom) {
					m = sensores[i].getNombre();
				}
				i++;
			}
			return m;
		}
	
	public void setSensor(Sensor s) {
		sensores[pos] = s;
		pos++;
	}
	
	public void comprobar() {
		for(int i = 0 ; i < sensores.length ; i++) {
			if(sensores[i].getActivo()) {
				activarAlarma(i);
			}
		}
	}
	
	public String activarAlarma(int i) {
		timbre.hacerSonar(sensores[i].getActivo());
		return sensores[i].getNombre();
	}
	
}

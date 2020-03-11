package tp4.ej6;

public class Proceso implements Comparable <Proceso> {

	private double reqMemoria;
	
	public Proceso (double r) {
		reqMemoria = r;
	}
	
	public double getReqMemoria() {
		return reqMemoria;
	}
	
	public int compareTo(Proceso p) {
		if (reqMemoria > p.reqMemoria) {
			return 1;
		}else if (reqMemoria < p.reqMemoria) {
			return -1;
		}else {
			return 0;
		}
	}
}

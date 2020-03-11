package tp4.ej6;

import java.util.Vector;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Computadora c1 = new Computadora(2.0);
		Computadora c2 = new Computadora(2.1);
		Computadora c3 = new Computadora(2.2);
		Computadora c4 = new Computadora(2.3);
		Computadora c5 = new Computadora(2.4);
		
		CentroComputos cc = new CentroComputos();
		cc.addComputadora(c2);
		cc.addComputadora(c1);
		cc.addComputadora(c4);
		cc.addComputadora(c3);
		cc.addComputadora(c5);

		Vector comps = cc.getComputadoras();
		for (int i = 0 ; i < 5 ; i++) {
			System.out.println(((Computadora)comps.elementAt(i)).getVelocidad());
		}

		
		Proceso p1 = new Proceso(1.0);
		Proceso p2 = new Proceso(1.1);
		Proceso p3 = new Proceso(1.2);
		Proceso p4 = new Proceso(1.3);
		Proceso p5 = new Proceso(1.4);
		Proceso p6 = new Proceso(1.5);
		Proceso p7 = new Proceso(1.6);

		Vector proc = new Vector <Proceso>();
		proc.add(p2);
		proc.add(p1);
		proc.add(p4);
		proc.add(p3);
		proc.add(p6);
		proc.add(p5);
		proc.add(p7);
		System.out.println(proc);

		for (int i = 0 ; i < 7 ; i++) {
			System.out.println(((Proceso)proc.elementAt(i)).getReqMemoria());
		}

		for (int i = 0 ; i < 7 ; i++) {
			System.out.println(cc.procesar((Proceso)proc.elementAt(i)));
		}

		
	}

}

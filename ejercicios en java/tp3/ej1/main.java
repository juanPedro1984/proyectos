package tp3.ej1;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Alarma alarma = new Alarma();
		AlarmaLuminosa aLum = new AlarmaLuminosa();
		System.out.println("alarma.setAbertura(true);\r\n" + 
				           "alarma.activarAlarma();\r\n");
		alarma.setAbertura(true);
		System.out.println(alarma.activarAlarma());

		System.out.println("----------------------------");
		System.out.println("alarma.setAbertura(true);\r\n" + 
							"aLum.activarAlarma();\r\n"
							+ "");
		System.out.println(aLum.activarAlarma());
		System.out.println("----------------------------");
		System.out.println("aLum.setAbertura(true);\r\n" + 
						   "aLum.activarAlarma();\r\n");
		aLum.setAbertura(true);
		System.out.println(aLum.activarAlarma());
	
		System.out.println(); 

		
	
		
	}

}

package tp5.ej1;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		//crear pacientes
		
		Paciente pNormal = new Paciente("Juan");
		PacientePrePaga pPrePaga = new PacientePrePaga("Luis");
		PacienteObraSocial pObraS = new PacienteObraSocial("Carlos");
		
		//crear medicamentos
		
		Medicamento m1 = new Medicamento ("buscapina",100.00);
		Medicamento m2 = new Medicamento ("ibuprofeno", 200.00);
		Medicamento m3 = new Medicamento ("aspirina", 300.00);
		
		m1.addSintoma("mal estomacal");
		m1.addSintoma("dolor abdominal");
		m1.addSintoma("nauseas");
		m2.addSintoma("dolor muscular");
		m2.addSintoma("cefalea");
		m3.addSintoma("cefalea");
		m3.addSintoma("dolor articular");
		
		pNormal.addSintoma("mal estomacal");
		pNormal.addSintoma("dolor abdominal");
		
		pPrePaga.addSintoma("dolor muscular");
		pPrePaga.addSintoma("cefalea");
		pObraS.addSintoma("cefalea");
		pObraS.addSintoma("dolor articular");
		
		pPrePaga.addAlergia("ibuprofeno");
		
		System.out.println("pNormal - m1: "+pNormal.calcularPrecio(m1));
		System.out.println("pPrePaga - m1: "+pPrePaga.calcularPrecio(m1));
		System.out.println("pObraS - m1: "+pObraS.calcularPrecio(m1));
		System.out.println("aptoTratamiento pNormal - m1: "+pNormal.tratamientoApto(m1));
		System.out.println("aptoTratamiento pNormal - m2: "+pNormal.tratamientoApto(m2));
		System.out.println("aptoTratamiento pPrePaga - m2: "+pPrePaga.tratamientoApto(m2));


	}

}

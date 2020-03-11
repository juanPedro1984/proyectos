package tp5.ej2;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//crear candidatos
		
		Candidato macri = new Candidato("Mauricio","Macri","Juntos por el cambio","Pro");
		Candidato fernandez = new Candidato("Alberto","Fernandez","El frente de todos","Peronista");
		Candidato espert = new Candidato("Jose Luis","Espert","Frente Despertar ","Independiente");
		
		//crear personas
		
		Persona p1 = new Persona(1111);
		Persona p2 = new Persona(2222);
		Persona p3 = new Persona(3333);
		Persona p4 = new Persona(4444);
		Persona p5 = new Persona(5555);
		Persona p6 = new Persona(6666);
		Persona p7 = new Persona(7777);
		Persona p8 = new Persona(8888);
		Persona p9 = new Persona(9999);
		Persona p10 = new Persona(1010);
		Persona p11 = new Persona(1234);
		Persona p12 = new Persona(1212);
		
		//crear mesas
		
		Mesa m1 = new Mesa(1);
		m1.addPersona(p1);
		m1.addPersona(p2);
		Mesa m2 = new Mesa(2);
		m2.addPersona(p3);
		m2.addPersona(p4);
		Mesa m3 = new Mesa(3);
		m3.addPersona(p5);
		m3.addPersona(p6);
		Mesa m4 = new Mesa(4);
		m4.addPersona(p7);
		m4.addPersona(p8);
		Mesa m5 = new Mesa(5);
		m5.addPersona(p9);
		m5.addPersona(p10);
		Mesa m6 = new Mesa(6);
		m6.addPersona(p11);
		m6.addPersona(p12);

		// crear establecimiento
		
		Establecimiento e1 = new Establecimiento("Escuela San Martin");
		e1.addMesa(m1);
		e1.addMesa(m2);
		e1.addMesa(m3);
		Establecimiento e2 = new Establecimiento("Ciudad Tandil");
		e2.addMesa(m4);
		e2.addMesa(m5);
		e2.addMesa(m6);
		e2.addMesa(e1);

		//Sistema
		
		System.out.println("puede votar p1 en m1: "+m1.puedeVotar(p1));
		System.out.println("puede votar p3 en m1: "+m1.puedeVotar(p3));
		m1.registrarVoto(p1, macri);
		System.out.println("m1.registrarVoto(p1, macri);");
		System.out.println("registrar voto p1 en m1: "+p1.getVoto().getNombre());
		m1.registrarVoto(p3, fernandez);
		System.out.println("m1.registrarVoto(p3, fernandez);");
		System.out.println("registrar voto p3 en m1: "+p3.getVoto().getNombre());
		
		m1.registrarVoto(p2, null);
		m2.registrarVoto(p3, macri);
		m2.registrarVoto(p4, macri);
		m3.registrarVoto(p5, macri);
		m3.registrarVoto(p6, fernandez);
		m4.registrarVoto(p7, espert);
		m4.registrarVoto(p8, fernandez);
		m5.registrarVoto(p9, espert);
		m5.registrarVoto(p10, fernandez);
		m6.registrarVoto(p11, macri);
		m6.registrarVoto(p12, espert);
		
		//macri 5,espert 3,fernandez 4, null 1 = total 12
		
		System.out.println("cantidad total de votos e2: "+e2.getCantidad());
		System.out.println("porcentaje total de votos e2 macri: "+e2.porcentajeCandidato(macri));
		
	}

}

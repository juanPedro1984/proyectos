package tp4.ej3;

public class main {
	
	public static void main(String[] args ) {

	Congreso con = new Congreso();
	
	Evaluador e1 = new Evaluador("juan");
	Evaluador e2 = new Evaluador("pablo");
	Evaluador e3 = new Evaluador("raul");
	
	con.addEvaluadores(e1);
	con.addEvaluadores(e2);
	con.addEvaluadores(e3);
	con.addTemas("java", true);
	con.addTemas("redes", true);
	con.addTemas("dataBases", true);
	con.addTemas("html5", false);
	con.addTemas("css3", false);
	con.addTemas("angular", false);
	
	
	e1.addTema("java");
	e1.addTema("redes");
	e2.addTema("dataBases");
	e2.addTema("html5");
	e3.addTema("css3");
	e3.addTema("angular");
	
	Trabajo t1 = new Trabajo("algoritmos","articulo");
	Trabajo t2 = new Trabajo("lenguajes","poster");
	Trabajo t3 = new Trabajo("visualizacion","poster");
	
	t1.addTema("java");
	t1.addTema("redes");
	t2.addTema("dataBases");
	t2.addTema("css3");
	t3.addTema("css3");
	t3.addTema("angular");

	con.asignarEval(t1);
	con.asignarEval(t2);
	con.asignarEval(t3);
	
	System.out.println("con.asignarEval(t1): " + con.getEvaluador(t1));
	System.out.println("con.asignarEval(t2): " + con.getEvaluador(t2));
	System.out.println("con.asignarEval(t3): " + con.getEvaluador(t3));
	System.out.println("getTrabajos(e1):" + con.getTrabajos(e1));
	System.out.println("getTrabajos(e2):" + con.getTrabajos(e2));
	System.out.println("getTrabajos(e3):" + con.getTrabajos(e3));
	System.out.println("esExperto(e1): "+con.esExperto(e1));
	System.out.println("esExperto(e2): "+con.esExperto(e2));
	System.out.println("esExperto(e3): "+con.esExperto(e3));


	}

	
}


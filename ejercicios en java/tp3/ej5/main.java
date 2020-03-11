package tp3.ej5;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
//		String fechaVenc, int lote, String fechaEnv, String granja, String org, double temp,
		
		Producto f1 = new Fresco("20/10/2020",1,"20/9/2019","iris");
		Producto r1 = new Refrigerado("10/12/2020",2,"20/12/2019","dinas","brom",3.0);
		Producto c1 = new Congelado("15/8/2022",3,"4/6/2020","reencuentro","brom",-18.0);
//		double nit, double ox, double dC, double v
		Producto cAi1 = new Aire ("14/8/2022",4,"4/6/2020","reencuentro","brom",-18.0, 20.0, 0.12, 0.3, 12.0);
//		double s
		Producto cAg1 = new Agua ("21/8/2022",5,"6/7/2020","dinas","brom",-18.0, 25.0);
//		String m, int tE
		Producto cNi1 = new Nitrogeno("22/7/2022",6,"2/8/2020","iris","brom",-18.0, "rapido", 60);
		
		System.out.println("f1: "+f1.generarEtiqueta());
		System.out.println();
		System.out.println("r1: "+r1.generarEtiqueta());
		System.out.println();
		System.out.println("c1: "+c1.generarEtiqueta());
		System.out.println();
		System.out.println("cAi1: "+cAi1.generarEtiqueta());
		System.out.println();
		System.out.println("cAg1: "+cAg1.generarEtiqueta());
		System.out.println();
		System.out.println("cNi1: "+cNi1.generarEtiqueta());

	}

}

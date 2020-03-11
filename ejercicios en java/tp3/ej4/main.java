package tp3.ej4;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Integrante f1, f2, e1, e2, m1, m2;
		f1 = new Futbolista("lionel","messi",23422334,"10/10/2010","delantero","izquierdo",350);
		f1.setEstado("concentracion");
		f1.setUbicacion("Viajando");
		f2 = new Futbolista("gabriel","batistuta",9009787,"10/10/1985","delantero","derecho",250);
		f2.setEstado("entrenando");
		f2.setUbicacion("origen");
		e1 = new Entrenador("jorge","perez",77366366,"09/3/1976","ab-1234");
		e1.setEstado("concentracion");
		e1.setUbicacion("origen");
		e2 = new Entrenador("manuel","gomez",34434343,"09/5/1971","ac-4321");
		m1 = new Masajista("jose","gimenez",22334556,"07/08/1966","masajista",10);
		m1 = new Masajista("juan","garcia",31227887,"09/02/1977","masajista",5);
		
		System.out.println("f1"+f1.disponible());
		System.out.println("f2"+f2.disponible());
		System.out.println("e1"+e1.disponible());


	}

}

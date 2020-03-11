package tp4.ej2;


/*Una cooperativa de agricultores requiere un sistema que le aconseje cuál es el cereal que
puede sembrar en un determinado lote. Los lotes son clasificados como especiales cuando
contienen ciertos minerales de interés primario para la cooperativa, y comunes cuando
contienen sólo minerales secundarios en la composición de la tierra
Para poder sembrar un cereal en un lote éste debe contener determinados minerales. Los
cereales se clasifican en granos de cosecha gruesa (como girasol, maíz,...), granos de cosecha
fina (como trigo, avena,..) y pasturas (como alfalfa, trébol subterráneo,..). Un lote satisface
los requerimientos de un cereal si contiene todos los minerales que requiere ese cereal.
Adicionalmente, para el caso de las pasturas además de lo anterior se le suma que no se puede
sembrar en lotes menores a una superficie de 50 hectáreas.
Defina las clases para implementar una solución orientada a objetos para el problema e
implemente en Java todos los métodos involucrados en responder qué cereales se pueden
sembrar en un lote, qué lotes pueden ser utilizados para sembrar un determinado cereal, y en
la consulta de si un lote es común o especial.*/

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Lote l1 = new Lote (100,1);
		Lote l2 = new Lote (40,2);
		Lote l3 = new Lote (50,3);
		
		l1.addMinerales("hierro");
		l1.addMinerales("zinc");
		l2.addMinerales("arsenico");
		l2.addMinerales("aluminio");
		l3.addMinerales("zinc");
		l3.addMinerales("aluminio");
		
		Cereal c1 = new Cereal("trigo");
		Cereal c2 = new Cereal("avena");
		Cereal c3 = new Cereal("cebada");
		
		c1.addReqSuelo("hierro");
		c2.addReqSuelo("arsenico");
		c3.addReqSuelo("zinc");
		
		Pastura p1 = new Pastura ("pastura", 50);
		p1.addReqSuelo("aluminio");
		
		Cooperativa cop = new Cooperativa();
		
		cop.addCereal(c1);
		cop.addCereal(c2);
		cop.addCereal(c3);
		cop.addCereal(p1);
		
		cop.addLote(l1);
		cop.addLote(l2);
		cop.addLote(l3);
		
		cop.addMineral("hierro", true);
		cop.addMineral("zinc", false);
		cop.addMineral("arsenico", true);
		cop.addMineral("aluminio", false);
		//getLoteApto(Cereal c)
		System.out.println("getLoteApto(c1): "+cop.getLoteApto(c1));
		System.out.println("getLoteApto(c2): "+cop.getLoteApto(c2));
		System.out.println("getLoteApto(c3): "+cop.getLoteApto(c2));
		
		//getCerealesXlote(Lote l)
		System.out.println("getCerealesXlote(l1): "+cop.getCerealesXlote(l1));
		System.out.println("getCerealesXlote(l2): "+cop.getCerealesXlote(l2));
		System.out.println("getCerealesXlote(l3): "+cop.getCerealesXlote(l3));
		//LoteEspecial(Lote l)
		System.out.println("LoteEspecial(l1): "+cop.LoteEspecial(l1));
		System.out.println("LoteEspecial(l2): "+cop.LoteEspecial(l2));
		System.out.println("LoteEspecial(l3): "+cop.LoteEspecial(l3));
				
	}

}

package base;

import java.util.List;


import clasificador.Categoria;
import criterios.criterioAnimal.*;
import criterios.criterioGrupo.*;

public class SistemaGanaderoMain {

	public static void main(String[] args) {
		Grupo rodeo1 = new Grupo();
		Grupo rodeo2 = new Grupo();
		SisGanadero animal1 = new Animal(1, 48, 0, "Raza", "Macho", false, 145);
		SisGanadero animal2 = new Animal(2, 48, 0, "Raza", "Macho", false, 645);
		SisGanadero animal3 = new Animal(3, 48, 0, "Raza", "Macho", false, 1145);
		SisGanadero animal4 = new Animal(4, 25, 3, "Raza1", "Hembra", false, 145);
		
		SisGanadero animal5 = new Animal(5, 48, 0, "Raza", "Macho", false, 145);
		SisGanadero animal6 = new Animal(6, 48, 0, "Raza", "Macho", false, 645);
		SisGanadero animal7 = new Animal(7, 48, 0, "Raza", "Macho", false, 1145);
		SisGanadero animal8 = new Animal(8, 25, 1, "Raza1", "Hembra", false, 145);		
		
		rodeo1.addGrupo(animal1);
		rodeo1.addGrupo(animal2);
		rodeo1.addGrupo(animal3);
		rodeo1.addGrupo(animal4);
		
		rodeo2.addGrupo(animal5);
		rodeo2.addGrupo(animal6);
		rodeo2.addGrupo(animal7);
		rodeo2.addGrupo(animal8);
		rodeo2.addGrupo(rodeo1);

		System.out.println("Servicios Básicos :\r\n" + 
				"1. Obtener la cantidad de animales de un rodeo/establecimiento/empresa\r\n" + 
				"2. Obtener el promedio de edad de los animales de un rodeo/establecimiento/empresa\r\n" + 
				"3. Obtener el peso total de un rodeo/establecimiento/empresa\r\n" + 
				"4. Obtener el promedio de peso de cada animal en un rodeo/establecimiento/empresa");
		System.out.println("");
		System.out.println("RODEO 1");
		System.out.println("\nLa cantidad de animales es: " + rodeo1.getCantidad());
		System.out.println("\nEl peso total es: " + rodeo1.getPeso());
		System.out.println("\nEl peso promedio es: " + rodeo1.pesoPromedio());
		System.out.println("\nLa edad promedio es: " + rodeo1.edadPromedio());
		System.out.println("");
		System.out.println("RODEO 2");
		System.out.println("\nLa cantidad de animales es: " + rodeo2.getCantidad());
		System.out.println("\nEl peso total es: " + rodeo2.getPeso());
		System.out.println("\nEl peso promedio es: " + rodeo2.pesoPromedio());
		System.out.println("\nLa edad promedio es: " + rodeo2.edadPromedio());
		System.out.println("");
		System.out.println("Es posible consultar si un grupo de animales está listo para ser vendido. Existen diferentes\r\n" + 
				"condiciones para saber si es posible vender un grupo de animales, por ejemplo:\r\n" + 
				" Que el promedio del peso de cada animal del grupo sea superior a 650 Kg.\r\n" + 
				" Que el promedio de edad de cada animal del grupo sea mayor a 24 meses\r\n" + 
				" Que el promedio de edad del grupo de animales sea superior a 36 meses o que el peso\r\n" + 
				"sea mayor a 700 Kg.");
		System.out.println("");
		
		Sistema s = new Sistema(rodeo1);

		
		CriterioGrupo peso2 = new MayorPromPeso(650);
		System.out.println("");
		System.out.println("Grupo Apto - Criterio de Venta: Peso Promedio Mayor a 650 Kg");
		System.out.println("Rodeo 1: " + s.aptoVenta(peso2));
		
		CriterioGrupo edad2 = new MayorPromEdad(24);
		System.out.println("");
		System.out.println("Grupo Apto - Criterio de Venta: Edad Promedio Mayor a 24 Meses");
		System.out.println("Rodeo 1: " + s.aptoVenta(edad2));
		
		CriterioGrupo meses = new MayorPromEdad(36);
		CriterioGrupo peso = new MayorPromPeso(700.00);
		CriterioGrupo and = new CriterioGrupoAnd(meses,peso);
			
		CriterioGrupo meses1 = new MayorPromEdad(15);
		CriterioGrupo peso1 = new MayorPromPeso(100.00);
		CriterioGrupo and1 = new CriterioGrupoAnd(meses1,peso1);
		
		
		System.out.println("");
		System.out.println("Grupo Apto - Criterio de Venta: Edad promedio Mayor a 36 Meses y Peso Promedio Mayor a 700 Kg");
		System.out.println("Rodeo 1: " + s.aptoVenta(and));

		System.out.println("");
		System.out.println("Grupo Apto - Criterio de Venta: Edad Promedio Mayor a 15 Meses y Peso Promedio Mayor a 100 Kg");
		System.out.println("Rodeo 1: " + s.aptoVenta(and1));
		
		System.out.println("");
		System.out.println("Asimismo se debe proveer también mecanismos que permitan armar camiones para la venta\r\n" + 
				"de animales. Cada camión posee una capacidad (cantidad de animales) y ciertos requisitos\r\n" + 
				"que deben cumplir los animales que se carguen al mismo. Algunos ejemplos de restricciones\r\n" + 
				"son los siguientes:\r\n" + 
				" Todos los animales deben ser de la raza “aberdeen angus”\r\n" + 
				" Todos los animales deben tener un peso superior a 650 Kg.\r\n" + 
				" Todos los animales deben tener una edad superior a 4 años.\r\n" + 
				" Todos los animales deben tener un peso superior a 500 Kg o una edad superior a 5\r\n" + 
				"años.\r\n" + 
				" Todos los animales deben tener una edad superior a 3 años y ser de la raza\r\n" + 
				"“Hereford”.");

		Criterio c2 = new MayorEdad(24);
		Criterio c3 = new Raza("Raza");
		Criterio and2 = new CriterioAnd(c2,c3);
		Camion camion = new Camion (5,and2);
		
		System.out.println("");
		System.out.println("Armar camion con el rodeo 2, animales mayor a 24 meses y de raza -Raza-");
		System.out.println("Camion armado: ");
		System.out.println("");
		
//		rodeo2.armarCamion(camion);
		Sistema ac = new Sistema(rodeo2);
		ac.armarCamion(camion);
		List<Animal> grupo = camion.getGrupo();
		for (Animal a : grupo) {
			System.out.println("id del animal "+a.getIdentificador());

		}
	
		System.out.println("");
		System.out.println("Cuando a un rodeo/establecimiento/empresa se le solicita llenar un camión de venta se le\r\n" + 
				"indica la capacidad del camión y las condiciones que debe cumplir cada animal, y el\r\n" + 
				"rodeo/establecimiento/empresa devuelve los primeros animales que encuentra y que cumplen\r\n" + 
				"el criterio hasta llegar a la capacidad solicitada. Para completar este servicio luego de armado\r\n" + 
				"un camión se debe dar de baja cada uno de los animales, es decir eliminarlos del\r\n" + 
				"rodeo/establecimiento/empresa al que pertenecían.");
		System.out.println("");
		System.out.println("RODEO 2: "+rodeo2.mostrarGrupo());
		System.out.println("");
		System.out.println("El sistema ganadero debe poder clasificar a un animal acorde a lo determinado por Ministerio\r\n" + 
				"de Agricultura y Pesca, Alimentación y Medio Ambiente de España. Para esto dado un\r\n" + 
				"animal se retorna su categoría acorde a la siguiente clasificación:\r\n" + 
				" Lechal. Animales con una edad inferior a los 8 meses\r\n" + 
				" Ternero. Animales con una edad comprendida entre los 8 meses y el año de edad.\r\n" + 
				" Añojo. Son los animales que tienen entre 12 y 24 meses de edad.\r\n" + 
				" Novillo. Animales con una edad comprendida entre los 2 y los 4 años.\r\n" + 
				" Cebón. Es el macho capado al año de edad que no ha llegado a cumplir los 48\r\n" + 
				"meses\r\n" + 
				" Vaquillona: hembra mas de 15 meses, que nunca parió un ternero.\r\n" + 
				" Vaca. Vaquillona que ya ha parido un ternero."+
				" Buey. Ejemplar macho mayor de 48 meses y capado.\r\n" + 
				" Toro. Ejemplar macho que no fue capado.\r\n" + 
				"\r\n" + 
				"Tener en cuenta que un animal puede recibir varias categorías, por ejemplo un animal macho\r\n" + 
				"menor a 8 meses que no ha sido capado recibiría la categoría, Lechal-Toro\r\n" + 
				"\r\n" + 
				"La anterior es solo una forma de clasificación propuesta y si bien el mecanismo de\r\n" + 
				"clasificación va a ser el mismo, las categorías pueden variar en el futuro. Por ejemplo, la\r\n" + 
				"categorización podría simplificarse a: Si es Macho es TORO y si es Hembra es VACA.");
		System.out.println("");
		Animal animal1Categorizar= new Animal(1, 7, 0, "Raza", "Macho", true, 145);
		Animal animal2Categorizar= new Animal(1, 24, 1, "Raza", "Hembra", false, 145);
		Animal animal3Categorizar= new Animal(2, 10, 0, "Raza", "Macho", false, 145);
		Criterio menorEdadCategorizar = new MenorEdad(8);
		Criterio capadoCategorizar = new Capado(true);
		Criterio ternerosParidosCategorizar = new TernerosParidos();
		Criterio terneroMayorEdad = new MayorEdad(8);
		Criterio terneroMmenorEdad = new MenorEdad(12);
		Criterio andTerneroCategorizar = new CriterioAnd(terneroMayorEdad,terneroMmenorEdad);
		Categoria categoria = new Categoria();
		
		categoria.addCategoria("Lechal", menorEdadCategorizar); // Animal con Edad Menor a 8 meses
		categoria.addCategoria("Toro", capadoCategorizar); // Animal Capado
		categoria.addCategoria("Vaca", ternerosParidosCategorizar); // Animal con al menos un ternero Parido
		categoria.addCategoria("Ternero", andTerneroCategorizar);
		
		System.out.println("Categorias del animal 1: " + categoria.categoriasAnimal(animal1Categorizar));
		System.out.println("Categorias del animal 2: " + categoria.categoriasAnimal(animal2Categorizar));
		System.out.println("Categorias del animal 3: " + categoria.categoriasAnimal(animal3Categorizar));
		
	}

}

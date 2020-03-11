package tp2;

public class Principal {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Serie s1 = new Serie ("serie 1", "desc 1","creador 1", "genero 1", 2);
		Temporada t1 = new Temporada(1,2);
		Temporada t2 = new Temporada(2,3);
		Episodio ep1_t1 = new Episodio("episodio 1 t1", "desc-ep1-t1");
		Episodio ep2_t1 = new Episodio("episodio 2 t1", "desc-ep2-t1");
		Episodio ep1_t2 = new Episodio("episodio 1 t2", "desc-ep1-t2");
		Episodio ep2_t2 = new Episodio("episodio 2 t2", "desc-ep2-t2");
		Episodio ep3_t2 = new Episodio("episodio 3 t2", "desc-ep3-t2");
		
		s1.setTemporada(t1, 0);
		s1.setTemporada(t2, 1);
		t1.setEpisodios(ep1_t1, 0);
		t1.setEpisodios(ep2_t1, 1);
		t2.setEpisodios(ep1_t2, 0);
		t2.setEpisodios(ep2_t2, 1);
		t2.setEpisodios(ep3_t2, 2);
		
//		Ingresar la calificación de un episodio. Si el valor ingresado como calificación
//		no es correcto imprimir un mensaje por pantalla y no cambiar el valor anterior.
		
		System.out.println("set calificacion 3 ");
		s1.getTemporada(0).getEpisodio(0).setCalificacion(3);
		System.out.println("calificacion: "+s1.getTemporada(0).getEpisodio(0).getCalificacion());
		System.out.println("set calificacion 6 ");
		s1.getTemporada(0).getEpisodio(0).setCalificacion(6);
		System.out.println("calificacion: "+s1.getTemporada(0).getEpisodio(0).getCalificacion());
		
//		Obtener el total episodios vistos de una temporada particular.
//		Obtener el total de episodios vistos de una serie.
		
		s1.getTemporada(1).getEpisodio(1).setVisto(true);
		s1.getTemporada(1).getEpisodio(0).setVisto(true);
		s1.getTemporada(0).getEpisodio(0).setVisto(true);
		System.out.println("cant episodios vistos en la temporada 2: "+ s1.getTemporada(1).getEpisodiosVistos());
		System.out.println("cant episodios vistos en la temporada 1: "+ s1.getTemporada(0).getEpisodiosVistos());
		System.out.println("cant episodios vistos en la serie: "+ s1.getEpisodiosVistos());
		
		
//		Obtener el promedio de las calificaciones dadas por el usuario para una
//		temporada particular.
//		Obtener el promedio de las calificaciones dadas por el usuario para una serie.
		s1.getTemporada(0).getEpisodio(1).setCalificacion(5);
		s1.getTemporada(0).getEpisodio(1).setVisto(true);;
		System.out.println("calificacion promedio t1: "+ s1.getTemporada(0).promCalificacion());
		s1.getTemporada(1).getEpisodio(1).setCalificacion(3);
		s1.getTemporada(1).getEpisodio(0).setCalificacion(2);
		System.out.println("calificacion promedio t2: "+ s1.getTemporada(1).promCalificacion());

		System.out.println("calificacion promedio s1: "+ s1.promCalificacion());
		
//		Determinar si el usuario ya vio todos los episodios de la serie.
		
		System.out.println(s1.serieCompletada());
		s1.getTemporada(1).getEpisodio(2).setVisto(true);
		s1.getTemporada(0).getEpisodio(1).setVisto(true);
		System.out.println(s1.serieCompletada());
		
	}

}

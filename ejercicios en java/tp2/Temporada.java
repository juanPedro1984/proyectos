package tp2;

public class Temporada {
	
	private int cant,numero;
	private Episodio [] episodios;
	
	public Temporada() {
		
	}
	
	public Temporada(int num , int cant) {
		numero = num;
		this.cant = cant;
		episodios = new Episodio [cant];
	}
	
	public void setEpisodios(Episodio e , int pos) {
		episodios [pos] = e;
	}
	
	public void setNumero( int n ) {
		numero = n;
	}
	
	public void setCantEpisodios(int c) {
		cant = c;
		for (int i = 0 ; i < cant ; i ++) {
			episodios[i] = new Episodio(); 
		}
	}
	
	public int getCantEpisodios() {
		return cant;
	}
	
	public int getNumero() {
		return numero;
	}
	
	public Episodio getEpisodio(int pos) {
		return episodios[pos];
	}
	
	public int getEpisodiosVistos() {
		int i = 0;
		int cont = 0;
		while (i<cant) {
			if(episodios[i].getVisto()) {
				cont++;
			}
			i++;
		}
		return cont;
	}
	
	public boolean tempCompleta() {
		int i = 0;
		int cont = 0;
		while (i<cant) {
			if (episodios[i].getVisto()) {
				cont ++;
			}
			i++;
		}
		return cont == i;
	}
	
	public double promCalificacion() {
		int i = 0 ;
		int cont = 0;
		double suma = 0;
		double prom = 0.0; 
		while (i<cant) {
			if(episodios[i].getVisto()) {
				suma += episodios[i].getCalificacion();	
				cont++;
			}
			i++;
		}
		prom = suma / cont;
		return prom;
	}
}

package tp2;

public class Serie {
	
	private int cant;
	private Temporada [] temporadas;
	private String titulo, descripcion, creador, genero;
	
	public Serie(String tit, String des, String cre, String gen, int c) {
		titulo = tit;
		descripcion = des;
		creador = cre;
		genero = gen;
		cant = c;
		temporadas = new Temporada [cant];
		for ( int i = 0 ; i < cant ; i++) {
			temporadas[i] = new Temporada();
		}
		this.setNumTemporada();
	}
	
	private void setNumTemporada() {
		for ( int i = 0 ; i < cant ; i++) {
			temporadas[i].setNumero(i+1);
		}
	}
	
	public void setTemporada(Temporada t , int pos) {
		temporadas[pos] = t;
	}
	
	public void setTitulo(String tit) {
		titulo = tit;
	}
	
	public void setDescripcion(String des) {
		descripcion = des;
	}
	
	public void setCreador(String cre) {
		creador = cre;
	}
	
	public void setGenero(String gen) {
		genero = gen;
	}
	
	public String getTitulo() {
		return titulo;
	}
	
	public String getDescripcion() {
		return descripcion;
	}
	
	public String getCreador() {
		return creador;
	}
	
	public String getGenero() {
		return genero;
	}
	
	public int getCantTemporadas() {
		return cant;
	}
	
	public Temporada getTemporada(int pos) {
		return temporadas[pos];
	}
	
	public int getEpisodiosVistos() {
		int i = 0;
		int cont = 0;
		while(i<cant) {
			cont += temporadas[i].getEpisodiosVistos();
			i++;
		}
		return cont;	
	}
	
	public double promCalificacion() {
		int i = 0;
		double suma = 0;
		double prom = 0.0;
		while (i<cant) {
			suma += temporadas[i].promCalificacion();
			i++;
		}
		prom = suma / i;
		return prom;
	}
	
	public boolean serieCompletada() {
		int i = 0 ;
		int cont = 0;
		while (i<cant) {
			if (temporadas[i].tempCompleta()) {
				cont++;
			}
			i++;
		}
		return cont == i;
	}
	
}

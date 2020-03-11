package tp2;

public class Episodio {

	private String titulo, descripcion;
	private boolean visto;
	private double calificacion;
	
	public Episodio () {
		
	}
	
	public Episodio(String tit, String desc) {
		titulo = tit;
		descripcion = desc;
	}
	
	
	public void setTitulo(String tit) {
		titulo = tit;
	}
	
	public void setDescripcion(String desc) {
		descripcion = desc;
	}
	
	public void setVisto(boolean v) {
		visto = v;
	}
	
	public void setCalificacion(int cal) {
		if ((cal > 0)&&( cal < 6)) {
			calificacion = cal;
		}else {
			System.out.println ( "valor no valido ");
		}
	}
	
	public String getTitulo() {
		return titulo;
	}
	
	public String getDescripcion() {
		return descripcion;
	}
	
	public boolean getVisto() {
		return visto;
	}
	
	public double getCalificacion() {
		return calificacion;
	}
	
}

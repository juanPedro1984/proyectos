package tp3.ej5;

public class Producto {

	private String fechaVenc;
	private int lote;
	private String fechaEnv, granjaOrigen;

	public Producto(String f, int l, String fE, String gO) {
		fechaVenc = f;
		lote = l;
		fechaEnv = fE;
		granjaOrigen = gO;
	}
	
	public String generarEtiqueta() {
		String etiqueta = "fechaVenc: "+ fechaVenc+"\r\n"
		+ "lote: "+ lote +"\r\n"
		+ "fechaEnv: "+fechaEnv+"\r\n"
		+ "granjaOrigen: "+granjaOrigen;
		return etiqueta;
	}
	
	public String getfechaVenc() {
		return fechaVenc;
	}
	public String getfechaEnv() {
		return fechaEnv;
	}
	public String getGranjaOrigen() {
		return granjaOrigen;
	}
	public int getLote() {
		return lote;
	}
	public void setFechaVenc(String f) {
		fechaVenc = f;
	}
	public void setFechaEnv(String fE) {
		fechaEnv = fE;
	}
	public void setGranjaOrigen(String g) {
		granjaOrigen = g;
	}
	public void setLote(int l) {
		lote = l;
	}
}

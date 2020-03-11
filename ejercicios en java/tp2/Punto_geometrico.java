package tp2;

public class Punto_geometrico {
	
	private double x, y;
	
	public Punto_geometrico() {
		
		x = 0;
		y = 0;
		
	}
	
	public Punto_geometrico(double x, double y) {
		
		this.x = x;
		this.y = y;
		
	}
	
	public void desplazar(double dx, double dy) {
		x += dx;
		y += dy;
	}
	
	public double distancia(Punto_geometrico punto) {
		 double dist;
		 dist = Math.sqrt(Math.pow(x - punto.getX(),2)+(Math.pow((y - punto.getY()), 2)));
		 return dist;
	}
	
	public double getX() {
		return x;
	}
	
	public double getY() {
		return y;
	}
	
	public void setX(double x) {
		this.x = x;
	}
	
	public void setY(double y) {
		this.y = y;
	}
}

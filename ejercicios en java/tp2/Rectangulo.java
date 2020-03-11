package tp2;

//La funcionalidad que debe proveer un rectángulo es la siguiente
// Desplazarlo en el plano. Trasladar el rectángulo acorde a ciertos valores de X e
//Y.
// Calcular el Área del rectángulo.
// Compararlo con otro rectángulo. Devolver 1 si el rectángulo es mayor, 0 si son
//iguales y -1 si es menor. Se dice que un rectángulo es mayor que otro si el área
//del mismo es mayor que la del otro.
// Poder invertir el rectángulo. Si se toma el vértice, invertirlo es cambiar el
//sentido del rectángulo, si estaba hacia arriba, ahora esta hacia abajo y si estaba
//hacia adelante esta hacia atrás. El tamaño del rectángulo debe ser el mismo.
// Determinar si el rectángulo es un cuadrado, es decir, decidir si se cumplen las
//propiedades para que sea un cuadrado.
// Determinar el largo del lado superior.
// Determinar si esta acostado o parado (si el alto es más que el ancho).

 
public class Rectangulo {

	private Punto_geometrico v1, v2, v3, v4;
	private double base , altura;
	
	// x1 - y1 = vertice izquierdo inferior
	// x3 - y3 = vertice derecho superior
	
	public Rectangulo(double x1, double y1, double x3, double y3) {
		
		v1 = new Punto_geometrico(x1,y1);
		v2 = new Punto_geometrico(x3,y1);
		v3 = new Punto_geometrico(x3,y3);
		v4 = new Punto_geometrico(x1,y3);
		base = x3 - x1;
		altura = y3 - y1;
		
	}
	
	public double getBase() {
		return base;
	}
	public double getAltura() {
		return altura;
	}
	
	public Punto_geometrico getV1() {
		return v1;
	}

	public Punto_geometrico getV2() {
		return v2;
	}

	public Punto_geometrico getV3() {
		return v3;
	}

	public Punto_geometrico getV4() {
		return v4;
	}
	public void setV1(double x, double y) {
		v1.setX(x);
		v1.setY(y);
	}
	
	public void setV2(double x, double y) {
		v2.setX(x);
		v2.setY(y);
	}

	public void setV3(double x, double y) {
		v3.setX(x);
		v3.setY(y);
	}

	public void setV4(double x, double y) {
		v4.setX(x);
		v4.setY(y);
	}
	
	public void desplazar(double dx, double dy) {
		v1.desplazar(dx, dy);
		v2.desplazar(dx, dy);
		v3.desplazar(dx, dy);
		v4.desplazar(dx, dy);
	}
	
	public double calcularArea() {
		return base * altura;
	}
	
	public int compararTamano(Rectangulo r) {
		if (r.calcularArea() > this.calcularArea()) {
			return -1;
		}else if ( r.calcularArea() < this.calcularArea()) {
			return 1;
		}else {
			return 0;
		}
	}
	
	public String determinarPosicion() {
		if (base < altura) {
			return "Mayor altura";
		}else {
			return "Mayor base";
		}
		
	}
	
	public double ladoSuperior() {
		return v3.getX() - v2.getX();
	}
	
	public void invertirRec(Punto_geometrico v0) {
		if((v0.getX() == v1.getX())&&(v0.getY()==v1.getY())){
			this.setV2((v1.getX()-(v2.getX()-v1.getX())), v2.getY());
			this.setV3((v1.getX()-(v3.getX()-v1.getX())), (v1.getY()-(v3.getY()-v1.getY())));
			this.setV4((v1.getY()-(v4.getY()-v1.getY())), v4.getY());
		}else if((v0.getX() == v2.getX())&&(v0.getY()==v2.getY())) {
			this.setV1((v2.getX()+(v2.getX()-v1.getX())), v1.getY());
			this.setV3((v2.getY()-(v3.getY()-v3.getY())), v3.getY());
			this.setV4((v2.getX()+(v2.getX()-v4.getX())), (v2.getY()-(v4.getY()-v2.getY())));
		}else if ((v0.getX() == v3.getX())&&(v0.getY()==v3.getY())) {
			this.setV2( v2.getX() , (v3.getY()+(v3.getY()-v2.getY())));
			this.setV1((v3.getX()+(v3.getX()-v1.getX())), (v3.getY()+(v3.getY()-v1.getY())));
			this.setV4((v3.getX()+(v3.getX()-v4.getX())), v4.getY());
		}else if ((v0.getX() == v4.getX())&&(v0.getY()==v4.getY())) {
			this.setV2((v4.getX()-(v2.getX()-v4.getX())), (v4.getY()+(v4.getY()-v2.getY())));
			this.setV3((v4.getX()-(v3.getX()-v4.getX())), v4.getY());
			this.setV1( v1.getX() , (v4.getY()+(v4.getY()-v1.getY())));
		}else {
			System.out.println("no corresponde a un vertice del rectangulo");
		}
	}
	
	public boolean cuadrado() {
		return base == altura;
	}
}

package tp3.ej3;

public class Sistema {
	
	public double calcularSalario(Empleado emp, int diasHab , int diasTrab) {
		double jornada = emp.getSueldo()/diasHab;
		return jornada * diasTrab;
	}
	
}

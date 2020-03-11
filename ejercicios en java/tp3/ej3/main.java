package tp3.ej3;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		//crear empleados//
		Sistema s = new Sistema();
		Empleado emp1 = new Empleado("juan","perez",20000.00);
		Empleado emp2 = new EmpHoraExtra("jose","gomez",25000.00,150.00);
		Empleado emp3 = new EmpComision("javier","gonzales",40000.00,0.10);
		
		((EmpHoraExtra)emp2).setHoras(10);
		((EmpComision)emp3).setVentas(10000);
		
		System.out.println("emp1: "+emp1.getSueldo());
		System.out.println("emp2: "+emp2.getSueldo());
		System.out.println("emp3: "+emp3.getSueldo());
		System.out.println("sueldo semanal emp1: "+ s.calcularSalario(emp1 , 24 , 6));
		System.out.println("sueldo semanal emp2: "+ s.calcularSalario(emp2 , 24 , 5));
		System.out.println("sueldo semanal emp3: "+ s.calcularSalario(emp3 , 24 , 6));

	}

}

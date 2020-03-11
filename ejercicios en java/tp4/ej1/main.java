package tp4.ej1;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Empleado emp1 = new EmpleadoNormal("juan","perez",20000.00);
		Empleado emp2 = new EmpHoraExtra("jose","gomez",25000.00,150.00);
		Empleado emp3 = new EmpComision("javier","gonzales",40000.00,0.10);
		
		((EmpHoraExtra)emp2).setHoras(10);
		((EmpComision)emp3).setVentas(10000);
		
		System.out.println("emp1: \r\n"+emp1.getPago());
		System.out.println("emp2: \r\n"+emp2.getPago());
		System.out.println("emp3: \r\n"+emp3.getPago());

	}

}

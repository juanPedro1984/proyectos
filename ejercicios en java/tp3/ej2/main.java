package tp3.ej2;

public class main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
	Alarma2 al2 = new Alarma2(3);
		
		Sensor s1 = new Sensor ( "living" );
		Sensor s2 = new Sensor ( "cocina" );
		Sensor s3 = new Sensor ( "habitacion" );

		
		al2.setSensor(s1);
		al2.setSensor(s2);
		al2.setSensor(s3);
		
		
		
		System.out.println(al2.getSensor("living"));
		System.out.println(al2.getSensor("cocina"));
		System.out.println(al2.getSensor("habitacion"));
	}

}

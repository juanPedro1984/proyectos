package tp2;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.Instant;
import java.time.LocalDate;
import java.time.ZoneId;
import java.time.format.DateTimeFormatter;
import java.time.temporal.ChronoUnit;
import java.util.Date;

public class Persona {

	private String nombre, apellido, sexo;
	private int edad;
	private Date fechaNac;
	private long dni;
	private double peso, altura;
	private SimpleDateFormat sdf = new SimpleDateFormat ("yyyy-MM-dd");
	public Persona(long d) {
		dni = d;
		try {
			fechaNac = sdf.parse("2000-01-01");
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		sexo = "Femenino";
		edad = 0;
		nombre = "N";
		apellido = "N";
		peso = 1;
		altura = 1;
	}
	
	public Persona(long d, String nom, String ap) {
		dni = d;
		try {
			fechaNac = sdf.parse("2000-01-01");
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}		sexo = "Femenino";
		edad = 0;
		nombre = nom;
		apellido = ap;
		peso = 1;
		altura = 1;	
	}
	
	public Persona(long d, String nom, String ap, Date fec) {
		dni = d;
		try {
			fechaNac = sdf.parse("2000-01-01");
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}		sexo = "Femenino";
		edad = 0;
		nombre = nom;
		apellido = ap;
		peso = 1;
		altura = 1;	
	}
	
	
	//	 Métodos set de cada parámetro, excepto de DNI.
	
	
	public void setFechaNac(String fecha) {
		try {
			fechaNac = sdf.parse(fecha);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}	}
	public void setSexo(String s) {
		sexo = s;
	}
	public void setNombre(String n) {
		nombre = n;
	}
	public void setApellido(String a) {
		apellido = a;
	}
	public void setPeso(double p) {
		peso = p;
	}
	public void setAltura(double alt) {
		altura = alt;
	}
	public void setEdad(int e) {
		edad = e;
	}
	

	
	public double masaCorporal() {
//		 Cálculo del índice de masa Corporal. Una persona sabe calcular cuál es su índice
//		 de masa corporal el cual es peso / altura2
		return peso / altura;
		
	}
	
	public String estaEnForma() {
//		Saber si está en forma. Está en forma si el índice de masa corporal se encuentra
//		entre 18,5 y 25 (esto es solo un ejemplo para probar la funcionalidad).
		if((this.masaCorporal()>18.5)&&(this.masaCorporal()<25)) {
			return "Esta en forma";
		}else {
			return "No esta en forma";
			}
	}
	
	public String cumpleanos() {
//		 Saber si está cumpliendo años.
		if((fechaNac.getMonth()==LocalDate.now().getMonthValue())&&(fechaNac.getDate()==LocalDate.now().getDayOfMonth())) {
			return "Hoy es su cumpleaños";
		}else {
			return "No es su cumpleaños";
		}
	}
	
	
	public String mayoriaEdad() {
//		 Saber si es mayor de edad. Una persona es mayor de edad si es mayor de 18
//		 años
		int edad = 18; 		
		if(calcularEdad(edad)) {
			return "Es mayor de edad";
		}else {
			return "Es menor de edad";
		}
	}
	
	public boolean calcularEdad(long a) {
		LocalDate fecha = fechaNac.toInstant().atZone(ZoneId.systemDefault()).toLocalDate();
		if((fecha.plusYears(a).)<=(LocalDate.now().getYear())) {
			return true;
		}else {
			return false;
		}
		
	}
	
	public String puedeVotar() {
//		 Saber si puede votar. Es necesario ser mayor de 16 años.
		int edad = 16; 		
		if(calcularEdad(edad)) {
			return "Puede votar";
		}else {
			return "No puede votar";
		}
	}
	
	public String info() {
//		 Mostrar toda la información del objeto. Es decir devolver un String con la
//		 información del mismo.
		String info = "Nombre: "+nombre+" Apellido: "+apellido+" DNI: "+dni+" Fecha de Nacimiento: "+fechaNac+" Peso: "+peso
		+" Altura: "+ altura;
		return info;
	}

	
//	 Saber si es coherente. Que la fecha de nacimiento coincida con la edad.
	public String coherenciaEdad() {
	Instant fecha = fechaNac.toInstant();
		
		if(ChronoUnit.YEARS.between(Instant.now(), fecha)==edad) {
			return "Es coherente";
		}else {
			return "No es coherente";
		}
	}

}

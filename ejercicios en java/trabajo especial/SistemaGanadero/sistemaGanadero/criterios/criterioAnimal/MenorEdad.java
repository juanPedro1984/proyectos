package criterios.criterioAnimal;

import base.Animal;

public class MenorEdad implements Criterio{
		
		private int meses;
		
		public MenorEdad(int m) {
			meses = m;
		}
		
		public boolean filtrar(Animal a) {
			return a.getEdad() < meses;
			}
}

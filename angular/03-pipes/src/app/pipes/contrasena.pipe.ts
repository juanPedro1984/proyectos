import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'contrasena'
})
export class ContrasenaPipe implements PipeTransform {

  transform(value: string, arg:boolean = true): any {
    let oculto:string = "";
    if(arg){
      for(let i = 0 ; i<value.length ; i++){
        oculto+="*";
      }
      return oculto;
    }else{
      return value;
    }

  }

}

import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { NavController } from '@ionic/angular';

import { MUTANTES } from '../../data/mutantes/mutantes.list';

@Component({
  selector: 'app-pagina3',
  templateUrl: './pagina3.page.html',
  styleUrls: ['./pagina3.page.scss'],
})
export class Pagina3Page implements OnInit {

  nombre:string;
  poder:string;
  mutantes:any = [];
  constructor( private route : ActivatedRoute, private navCtrl : NavController ) {
    this.mutantes = MUTANTES;
  }

  ngOnInit() {
    this.nombre = this.route.snapshot.paramMap.get('mutante');
    for(let i = 0 ; i < this.mutantes.length ; i++){
      if(this.nombre == this.mutantes[i].nombre){
        this.poder = this.mutantes[i].poder;
      }
    }
  }

irAtras(){
  this.navCtrl.pop();
}

irAlRoot(){
  this.navCtrl.navigateRoot('principal');
}

}

import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

import { MUTANTES } from '../../data/mutantes/mutantes.list';
// import { Pagina3Page } from '../pagina3/pagina3.page';

@Component({
  selector: 'app-pagina2',
  templateUrl: './pagina2.page.html',
  styleUrls: ['./pagina2.page.scss'],
})
export class Pagina2Page implements OnInit {

  mutantes : any = [];
  // pagina3:any = Pagina3Page;

  constructor(private router : Router) {
    this.mutantes = MUTANTES;
  }

  ngOnInit() {
  }

  irPagina3( mutante : any)
  {
    console.log( mutante );
    this.router.navigate( ['pagina3/', mutante.nombre] );
  }
}

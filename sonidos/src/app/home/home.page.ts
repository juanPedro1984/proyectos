import { Component  } from '@angular/core';
import  { ANIMALES } from "../../data/data.animales"
import { Animal } from "../../interfaces/animal.interface"

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  animales:Animal[] = [];
  audio = new Audio();
  audioTiempo:any;
  ordenando:boolean = false;

  constructor(){
    this.animales = ANIMALES.slice(0);
  }

reproducir ( animal : Animal ){

  this.pausarAudio(animal);

  if (animal.reproduciendo){
    animal.reproduciendo = false;
    return;
  }
  console.log(animal)
  this.audio.src = animal.audio;
  this.audio.load();
  this.audio.play();
  animal.reproduciendo = true;
  this.audioTiempo = setTimeout(()=> animal.reproduciendo = false , animal.duracion * 1000);
}

private pausarAudio( animalSel:Animal ){
  clearTimeout(this.audioTiempo);
  this.audio.pause();
  this.audio.currentTime = 0;

  for ( let animal of this.animales ){
    if (animal.nombre != animalSel.nombre){
      animal.reproduciendo = false;
    }
  }
}

borrarAnimal(idx:number){
  this.animales.splice(idx,1);
}

doRefresh(event:any){
  setTimeout( ()=>{
    console.log("resfrescar");
    this.animales = ANIMALES.slice(0);
    event.target.complete();
  }, 1500)
}

doReorder(ev:any){
  console.log('Dragged from index', ev.detail.from, 'to', ev.detail.to);
  ev.detail.complete();
}
}

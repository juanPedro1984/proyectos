"use strict";

// mostrar comentarios en detalle
let templateComent;

fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(text => {
    templateComent = Handlebars.compile(text);
    getOpiniones();
});

function getOpiniones() {
  let id=document.querySelector('.Titulo').title;
  console.log(id);
    fetch('api/comentarios/'+id)
    .then(response =>response.json())
    .then(jsonComent =>{
      mostrarOpiniones(jsonComent);
      console.log(jsonComent);
    return jsonComent;
  })
}

function mostrarOpiniones(jsonComent) {
    let context = {
    opiniones :jsonComent,
}
    let html = templateComent(context);
    document.querySelector(".opi").innerHTML = html;
}

document.querySelector('.postComent').addEventListener('click',insertComent);


function insertComent() {
    event.preventDefault();
    let comentarios = document.querySelector('.comentarios').value;
    let checkedStar = getValue();
    let usuario =document.querySelector('.userId').value;
    let fecha = getFecha();
    let juego = document.querySelector('.Titulo').title;

    let data={
          "Comentarios": comentarios,
          "id_Juego": juego,
          "id_Usuario": usuario,
          "Fecha": fecha,
          "Valoracion": checkedStar
      }
      console.log(data);
    fetch('api/comentarios',{
      "method" : "POST",
      "mode" : 'cors',
      "headers" : {"Content-Type":"application/json"},
      "body" : JSON.stringify(data)
    })
      .then(function (r) {
        if(!r.ok){
          console.log("error")
        }
      return r.json();
    })
    .then(function(json) {
    console.log(JSON.stringify(json));
    })
    .catch(function(e) {
      console.log(e)
    })
    document.querySelector('.comentarios').value=null;
    setTimeout(getOpiniones,2000);
  }

function getFecha() {
  let f = new Date();
  let date = f.getFullYear()+"-"+(f.getMonth()+1)+"-"+f.getDate();
  return date;
}

function getValue() {
  let valoracion = document.querySelectorAll('.stars');
  for (var i = 0; i < valoracion.length; i++) {
    let star=valoracion[i];
    if (star.checked){
    return star.value;
  }
}
}

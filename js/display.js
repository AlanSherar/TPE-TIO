"use strict"


function computar(tipo){

    this.tipoOperacion !=='igual' && this.calcular();
    this.tipoOperacion = tipo ;
    this.valorAnterior = this.valorActual || this.valorAnterior;
    this.valorActual = '';
    this.imprimirValores();
}

function agregarNumero(numero){

   if(numero == '.' && this.valorActual.includes('.'))return
   this.valorActual = this.valorActual.toString() + numero.toString();
   this.imprimirValores(); 
}
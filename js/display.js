"use strict"


function computar(tipo){

    this.tipoOperacion !=='igual' && this.calcular();
    this.tipoOperacion = tipo ;
    this.valorAnterior = this.valorActual || this.valorAnterior;
    this.valorActual = '';
    this.imprimirValores();
}

function agregarNumero(numero){}
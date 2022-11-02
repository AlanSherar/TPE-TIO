"use strict"
class Display{
    constructor(displayValorAnterior , displayValorActual){
        this.displayValorAnterior = displayValorAnterior;
        this.valorActual = displayValorActual;
        this.calculadora = new Calculadora() ;
        this.valorAnterior = '' ;
        this.valorActual = '' ;
    }
     computar(tipo){

    this.tipoOperacion !=='igual' && this.calcular();
    this.tipoOperacion = tipo ;
    this.valorAnterior = this.valorActual || this.valorAnterior;
    this.valorActual = '';
    this.imprimirValores();
}
borrar(){
    this.valorActual = this.valorActual.toString().slice(0,-1) ;
    this.imprimirValores() ;
}

 agregarNumero(numero){

   if(numero == '.' && this.valorActual.includes('.'))return
   this.valorActual = this.valorActual.toString() + numero.toString();
   this.imprimirValores(); 
}
imprimirValores(){
    this.displayValorActual.textContent = this.valorActual ;
    this.displayValorAnterior.textContent = this.valorAnterior ;

}
}

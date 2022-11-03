<main>
        <section class="calculadora_cuerpo">
        <div class="calculadora_pantalla">
            <div id="valor-anterior"></div>
            <div id="valor-actual"></div>
        </div>
        <div class="calculadora_teclado">
                            
            <div class="teclado__fila">
                <button class="numero" type="submit" name="numero7" value="7">7</button>
                <button class="numero" type="submit" name="numero8" value="8">8</button>
                <button class="numero" type="submit" name="numero9" value="9">9</button>
                <button class="operador" name="multiplicacion" value="multiplicar">*</button>
                <button onclick="display.borrar()"><img src="imagenes/back-space.png" alt="back-space" style="height: 20px ; width: 20px;"></button>
            </div>
            <div class="teclado__fila">
                
                <button class="numero" type="submit" name="numero4" value="4">4</button>
                <button class="numero" class="numero" type="submit" name="numero5" value="5">5</button>
                <button class="numero" type="submit" name="numero6" value="6">6</button>
                <button class="operador" type="submit" name="resta" value="restar">-</button>
                <button onclick="display.borrarTodo()">C</button>
        </div>
            <div class="teclado__fila">
                <button class="numero" type="submit" name="numero1" value="1">1</button>
                <button class="numero" type="submit" name="numero2" value="2">2</button>
                <button class="numero" type="submit" name="numero3" value="3">3</button>
                <button class="operador" name="suma" value="sumar">+</button>
                <button  type="submit" ></button>
            </div>
            <div class="teclado__fila">  
                <button class="numero" value="0">0</button>
                <button class="numero" name="coma">,</button>
                <button class="operador" name="division"  value="dividir"> %</button>
                <button class="operador" value="=">=</button>
                <button></button>
            </div>

        </div>
    </section>
    </main>
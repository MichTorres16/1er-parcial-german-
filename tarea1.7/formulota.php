        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Problemas de OmegaUp</title>
            <link rel="stylesheet" href="styles.css">
        
            <body>
            <h1><span>18710. Formulota</span></h1>
            <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
        <li><a href="calculos-condicionales.php">calculos-condicionales</a></li>
        <li><a href="el-lado-mas-corto.php">el-lado-mas-corto</a></li>
        <li><a href="escalera-de-asteriscos.php">escalera-de-asteriscos</a></li>
        <li><a href="formulota.php">formulota</a></li>
            </ul>
            <div class="contenido">
                <!DOCTYPE html>
                <html >
                <body>
                <h2>Problemas 3 se la tarea 1.7 <hr></h2>
                <h3>18710. Formulota</h3>
                <h2>Descripcion</h2>
               <p>Diseñar un programa que pregunte los valores de las variables x,y,z <br>
                y evalue la función f(x,y,z).</p>
                    <img src="img/unnamed.jpg" alt="unnamed">
                <h2>Entrada</h2>
                <p>El programa pedirá tres números, uno por renglón, estos podrán ser positivos, <br>
                    negativos o cero, y pudieran tener decimales.</p>
                <h2>Salida</h2>
                <p>La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales. <br>
                 <br> "Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida."</p>

                <h2>Ejemplo</h2>
                <table border="1" cellspacing="3" cellspacing="3">
                <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>1 <br> 2 <br> 3</td>
            <td>0.235714 </td>
            <td>0.235714285714286</td>
        </tr>
        <tr>
            <td>4 <br> 5 <br> 6</td>
            <td>0.074477 </td>
            <td>0.0.0744773519163764</td>
        </tr>
        <tr>
            <td>7 <br> 8 <br> 9</td>
            <td>0.044525 </td>
            <td>0.04452474357713634</td>
        </tr>
                    </table>
                <h2>Resultado</h2>
                <?php
                $x = 7;
                $y = 2;
                $z = 9;
                function formula($x, $y, $z) 
                {
                    return ($x + (2 / (2 * $x)) + pow($x, 3) + (pow($y, 3) / (pow($x, 2) + pow($y, 2)))) / (pow($x, 2) + pow($y, 2) + pow($z, 2));
                }
                $resultado = formula($x, $y, $z);
                echo "El resultado es: " . $resultado . "<br>";

                $resultado_redondeado = number_format($resultado, 6);

                echo "El resultado redondeado a 6 es: " . $resultado_redondeado . "<br>";
                ?>
        </div>
        </body>
        </html>

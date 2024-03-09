
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Problemas de OmegaUp</title>
            <link rel="stylesheet" href="styles.css">
            <body>
            <h1>Problemas <span>omegaUp</span></h1>
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
                <h2>Problemas 4 se la tarea 1.7 <hr></h2>
                <h3>el lado maaass corto</h3>
                <h2>Descripcion</h2>
                <p>Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, <br>
                    calcule la longitud de su lado más corto.</p>
                    <img src="cap.jpg" alt="cap">
                <h2>Entrada</h2>
                <p> Ocho reales x1 y1 x2 y2 x3 y3 x4 y4. Puedes suponer que y que los vértices se listan ordenados en el sentido de las manecillas del reloj.</p>
                <h2>Salida</h2>
                <p>Un real que sea la longitud del lado más corto del cuadrilátero. <br>
                    Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta..</p>
                <h2>Ejemplo</h2>
                <table border="1" cellspacing="3" cellspacing="3">
                        <tr>
                            <th>Entrada</th>
                            <th>Salida</th>
                        </tr>
                        <tr>
                            <td>10.1 10.2 <br> 20.2 10.3 <br> 22.3 4.1 <br> 7.5 0.9
                            </td>
                            <td>6.545991<br>
                            </td>
                        
                    </table>
                </table>
                <h2>Resultado</h2>
                <?php

                function distancia($x1, $y1, $x2, $y2) {
    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}
$x1 = 9;
$y1 = 5;
$x2 = 4;
$y2 = 9;
$x3 = 3;
$y3 = 8;
$x4 = 2;
$y4 = 5;

$lado1 = distancia($x1, $y1, $x2, $y2);
$lado2 = distancia($x2, $y2, $x3, $y3);
$lado3 = distancia($x3, $y3, $x4, $y4);
$lado4 = distancia($x4, $y4, $x1, $y1);

$lado_mas_corto = min($lado1, $lado2, $lado3, $lado4);
echo "el lado mas corto es: " . $lado_mas_corto . "<br>";
?>



        </div>
        </body>
        </html>

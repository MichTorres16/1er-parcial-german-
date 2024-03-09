<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problemas de OmegaUP^_^</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Problemas de  <span>OmegaUP</span></h1>
    <ul id="menu">
        
    <li><a href="index.php">Inicio</a></li>
        <li><a href="adquisicion-de-letras.php">adquisicion de letras</a></li>
        <li><a href="autores.php">autores</a></li>
        <li><a href="bid-de-paridad.php">bid de paridad</a></li>
    </ul>
    <div class="contenido">
                <h2>Problemas 1 de la tarea 1.8 <hr></h2>
                <h3>4352. Bit de paridad</h3>
                <h2>Descripcion</h2>
                <p>Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método: <br>
                    -Bit de paridad par. <br>
                    -Bit de paridad impar. <br>
En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par.
Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
                </p> <br>
                <h2>Entrada</h2>
                <p>La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.</p>
                <h2>Salida</h2>
                <p>La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.</p>
                <h2>Ejemplo</h2>
                <table border="1" cellspacing="3" cellspacing="3">
                        <tr>
                            <th>Entrada</th>
                            <th>Salida</th>
                            <th>Descripcion</th>
                        </tr>
                        <tr>
                            <td>1010001
                            </td>
                            <td>10100011<br>
                            </td>
                            <td>
                            El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete bits de la entrada y se <br>añade un bit 1 para que en total el número de bits con valor 1 sea par.
                            </td>
                        </tr>
                        <tr>
                            <td>1101001
                            </td>
                            <td>	
                             11010010<br>
                            </td>
                            <td>
                            El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete bits de la entrada y se <br>añade un bit 1 para que en total el número de bits con valor 1 sea par.
                            </td>
                        </tr>
                        <tr>
                            <td>0000000
                            </td>
                            <td>0000000<br>
                            </td>
                            <td>
                            El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete bits de la entrada y se <br>añade un bit 1 para que en total el número de bits con valor 1 sea par.
                            </td>
                        </tr>
                        <tr>
                            <td>1111111
                            </td>
                            <td>1111111<br>
                            </td>
                            <td>
                            El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete bits de la entrada y se <br>añade un bit 1 para que en total el número de bits con valor 1 sea par.
                            </td>
                        </tr>
                    </table>
                </table>
                <h2>Resultado</h2>
<!-- //CODIGO PHP -->
<?php
function calcularParidadPar($bits) {
    $conteoUnos = substr_count($bits, '1');
    return $conteoUnos % 2 == 0 ? '0' : '1';
}

function agregarBitParidadPar($bits) {
    $bitParidad = calcularParidadPar($bits);
    return $bits . $bitParidad;
}

$entrada = "1100110"; 
$salida = agregarBitParidadPar($entrada);
echo "Secuencia de entrada: " . $entrada . "<br>";
echo "Secuencia de salida: " . $salida;
?>
</body>
</html>

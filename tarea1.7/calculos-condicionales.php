        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Problemas de OmegaUp</title>
            <link rel="stylesheet" href="styles.css">
        
            <body>
            <h1> <span>Problemas de OmegaUp</span></h1>
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
                <h2>Problemas 1 se la tarea 1.7 <hr></h2>
                <h3>7050. Cálculos condicionales</h3>
                <h2>Descripcion</h2>
                <p>Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo <br>
                    decidir en qué situaciones se deben hacer qué operaciones. Un compañero te sugirió un ejercicio 
                    de cálculo mental que consiste en, dado un número inicial N <br>
                     "realizar las siguientes operaciones en el orden indicado y con aritmética entera: "<br>
                    
                    1-. Si el valor actual de N
                     es par, divídelo entre 2. En caso contrario, súmale 1. <br>
                    2-. Si el valor actual de N
                     tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.<br>
                    3-. Si el valor actual de N
                     es un múltiplo de tres, réstale uno. <br>
                    Escribe un programa que te ayude a calcular el valor final de N y el número de veces que N fue modificado.</p> <br>
                <h2>Entrada</h2>
                <p>UN ENTERO N</p>
                <h2>Salida</h2>
                <p>Dos enteros que correspondan con el valor final de N y el número de veces que N fue modificado respectivamente.</p>
                <h2>Ejemplo</h2>
                <table border="1" cellspacing="3" cellspacing="3">
                        <tr>
                            <th>Entrada</th>
                            <th>Salida</th>
                        </tr>
                        <tr>
                            <td>7 <br>
                            </td>
                            <td>8 1<br>
                            </td>
                        
                    </table>
                </table>
                <h2>Resultado</h2>
                
<?php
function esPar($numero) 
{
    return $numero % 2 == 0;
}

function esMultiploDeTres($numero) 
{
    return $numero % 3 == 0;
}

$N = 7;
$modificaciones = 0;

while ($N >= 1) {
    if (esPar($N)) {
        $N /= 2;
    } else {
        $N += 1;
    }
    $modificaciones++;
    
    if ($N >= 100) {
        $N /= 100;
    } elseif ($N >= 10 && $N < 100) {
        $N /= 10;
    }
    
    if (esMultiploDeTres($N)) {
        $N -= 1;
    }
}

echo "Valor final de N: " . $N . "<br>";
echo "Número de veces que N fue modificado: " . $modificaciones , "<br>";
?>
        </div>
        </body>
        </html>

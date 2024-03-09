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
                <h3>4886. Autores</h3>
                <h2>Descripcion</h2>
                <p>
Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica más popular, 
RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos científicos anteriores funciona mucho y es frecuente
que un documento utilice dos convenciones de nomenclatura diferentes: 
la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. 
Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara variaciones largas en cortas
                </p> <br>
                <h2>Entrada</h2>
                <p>
La primera y única línea de entrada contendrá como máximo 100 caracteres, 
letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45). El primer carácter siempre será una letra mayúscula.
Los guiones siempre serán seguidos por una letra mayúscula. Todos los demás caracteres serán letras minúsculas.


                </p>
                <h2>Salida</h2>
                <p>
                La primera y única línea de salida debe contener la variación corta apropiada.
                </p>
                <table border="1" cellspacing="3" cellspacing="3">
                        <tr>
                            <th>Entrada</th>
                            <th>Salida</th>
                        </tr>
                        <tr>
                            <td>Knuth-Morris-Pratt
                            </td>
                            <td>KMP<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Mirko-Slavko
                            </td>
                            <td>	
                             M5<br>
                            </td>
                        </tr>
                        <tr>
                            <td>Pasko-Patak
                            </td>
                            <td>PP<br>
                            </td>
                        </tr>
                    </table>
                </table>
                <h2>Resultado</h2>
<!-- //CODIGO PHP -->
<?php
function transformarVariacionLargaACorta($variacionLarga) {
    $partes = explode("-", $variacionLarga);
    $variacionCorta = "";
    foreach ($partes as $parte) {
        $variacionCorta .= strtoupper(substr($parte, 0, 1));
    }
    return $variacionCorta;
}

$variacionLarga = "Knuth-Morris-Pratt";
$resultado = transformarVariacionLargaACorta($variacionLarga);
echo "Variación corta: " . $resultado;
?>
</body>
</html>
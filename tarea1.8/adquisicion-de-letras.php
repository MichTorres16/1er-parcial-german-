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
                <h3>3991. Adquisición de Letras</h3>
                <h2>Descripcion</h2>
                <p>
 En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y 
quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.
El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.
                </p> <br>
                <h2>Entrada</h2>
                <p>
                Un solo string de letras minúsculas.
                </p>
                <h2>Salida</h2>
                <p>
                La cantidad de veces que aparece la letra favorita de Miguel.
                </p>
                <table border="1" cellspacing="3" cellspacing="3">
                        <tr>
                            <th>Entrada</th>
                            <th>Salida</th>
                        </tr>
                        <tr>
                            <td>abcjdlllld
                            </td>
                            <td>2<br>
                            </td>
                        </tr>
                </table>
                <h2>Resultado</h2>
<!-- //CODIGO PHP -->
<?php
$datos = 'abcjdlllld';
$letra = substr_count($datos, 'd');

echo "El número de la letra fav de miguel son: " . $letra;
?>
</body>
</html>                
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
        <li><a href="cuantos-valen-7.php">cuantos valen 7</a></li>
        <li><a href="el-mayor-de-tres-numeros.php">el-mayor-de-tres-numeros</a></li>
        <li><a href="estaciones-del-año.php">estaciones del año</a></li>
       
    </ul>
    <div class="contenido">

    <h2>Problemas de la tarea 1.4 <hr></h2>
<h3>Mayor de 3 numeros</h3>
<h2>Descripcion</h2>
<p>Realiza un problema que imprima el mayor de tres números.</p>
<h2>Entrada</h2>
<p>Escribe 3 numeros enteros a,b,c</p>
<h2>Salida</h2>
<p>El número entero mayor de los tres números introducidos.</p>
<h2>Ejemplo</h2>
<table border="1" cellspacing="3" cellspacing="3">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>10 <br>
                8  <br>
               -7
            </td>
            <td>10</td>
        </tr>
        <tr>
            <td>10<br>
                81<br>
                101
            </td>
            <td>101</td>
        </tr>
        <tr>
            <td>11 <br>
                11 <br>
                11
            </td>
            <td>11</td>
        </tr>
        <tr>
            <td>10 <br>
                810 <br>
                101
            </td>
            <td>810</td>
        </tr>
    </table>
</table>
<h2>Resultado</h2>
<?php
//PRIMER CODIGO
$a=10;
$b=8;
$c=-7;
if($a>$b and $a>$c)
{
echo "El mayor es: ", $a, "<HR>";
}
?>



      
</div>
</body>
</html>

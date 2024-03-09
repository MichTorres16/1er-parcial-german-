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
    <h1>Estaciones del Año</h1>

<h2>Descripción</h2>
Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día
 y un mes
 según lo siguiente:
Winter del 21 de diciembre al 20 de marzo
Spring del 21 de marzo al 21 de junio
Summer del 22 de junio al 22 de septiembre
Fall del 23 de septiembre al 20 de diciembre
Considerando la siguiente cantidad de días para cada mes:

<h2>Entrada</h2>
Dos números enteros d y m ,separados por un espacio que corresponden al día y mes de una fecha determinada

<h2>Salida</h2>
Una cadena s que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida

<h2>Ejemplo</h2>
<table border="1" cellspacing="3" cellspacing="3">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td> 15 10</td>
            <td>Fall</td>
        </tr>
        <tr>
            <td> 22 3</td>
            <td>spring</td>
        </tr>
        <tr>
            <td> 31 4</td>
            <td>no existe la fecha</td>
        </tr>
    </table>

</table>
<h1>Resultado</h1>
<?php
$dia=15;
$mes=4;
if ($mes == 1) 
{ 
    if ($dia >= 21)
    {
       echo "Winter";
     }
} 
elseif ($mes == 2) 
{ 
    echo "Winter";
} 
elseif ($mes == 3) 
{ 
if ($dia <= 20)
{
 echo "Winter";
 } else 
    {
        echo "Spring";
    }
} 
elseif ($mes == 4) 
{ 
        echo "Spring";
}
elseif ($mes == 5) 
{ 
    echo "Spring";
} 
elseif ($mes == 6) 
{ 
if ($dia <= 21) 
    {
        echo"Spring";
    } else 
{
    echo "Summer";
}
} elseif ($mes == 7) 
{ 
    echo "Summer";
} 
elseif ($mes == 8) 
{ 
    echo "Summer";
} 
elseif ($mes == 9) 
{ 
    if ($dia <= 22)
        {
            echo "Summer";
        } 
    else {
            echo "Fall";
        }
     } 
     elseif ($mes == 10)
      { 
    echo "Fall";
    } 
    elseif ($mes == 11) 
    { 
        echo "Fall";
    } 
    elseif ($mes == 12)
     { 
        if ($dia <= 20) 
        {
            echo "Fall";
        }
    }
else 
{
  echo "la fecha no existe";
}
?>





      
</div>
</body>
</html>

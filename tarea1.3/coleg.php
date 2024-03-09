<!DOCTYPE html>
<html>
<head>
    <h3>Colegiatura (condicionales)</h3>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <table border="2" cellpadding="4">
    <tr>
        <th> puntos </th>
        <th> limite de tiempo (caso)</th>
        <th>tamaño limite de entrada (bytes)</th>
    </tr>
    <tr>
        <th>11.64</th>
        <th>1s</th>
        <th>10 kiB</th>
    </tr>
    <tr>
        <th>limite de memoria</th>
        <th>limite de tiempo (total)</th>
    </tr>
    <tr>
        <th>32 MIB</th>
        <th>1m0s</th>
    </tr>
</table>
<div class="container">
    <h1>5630. Colegiatura</h1>

    <h2>Descripción</h2>
    <h3>La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, 
    pero le preocupa cuanto vaya a pagar, y te pide <br>
     ayuda para que hagas un programa que le diga cuanto tenga que pagar.
     El esquema que maneja la prepa es este:</h3>
     <h2>*plan de pagos: </h2>
     <h3> 
        1- (￣﹏￣；)   la colegiatura se determina de acuerdo a la cantidad de materias
        que cursan. <br>
        el costo de cala materia es: (っ °Д °;)っ $1600.
        </h3>
        <h3>
            2- se ha establecido un programa para estimular a los alumnos <br>
            el cual consite en que.... <br>
            si su promedio es mayor o igual a 9 se realizara un descuento del 30% (❁´◡`❁) <br> ¡¡Y NO SE COBRARA IVA!!
            <br>
            pero si el promedio es menor a 9 debera pagar la colegiatura completa <br>
            mas el iva del 16%. <br>
            ＞﹏＜

        </h3>
 
   
    <h2>Entrada</h2>
     <h3>El numero de materias A
        que Esteban va a cursar. Y un numero con decimales B
        que es el promedio de Esteban.</h3>

    <h2>Salida</h2>
    <h3>
        Un numero entero C
 con el precio a pagar. Debe de ir con un $.
    </h3>

    <h2>Ejemplo</h2>
    <table border="2" cellpadding="4">
        <tr>
            <th>le pones</th>
            <th>resultado</th>
        </tr>
        <tr>
            <td>5 <br> 
            9.6</td>
            <td>$5,600</td>
        </tr>
        <tr>
            <td>8 <br> 
            7.8</td>
            <td>$14,848</td>
        </tr>
        <tr>
            <td>2 <br> 
            8</td>
            <td>$3,3712</td>
        </tr>
       
    </table>
    <H2> LIMITES</H2>
        •   1 < A < 20 <br>
        •   0 < B < 11
        <h2>resultado</h2>
        <?php

$numMaterias = 5;
$promedio = 9.6;
$costoMateria = 1600;
$colegiatura = $numMaterias * $costoMateria;

if ($promedio >= 9) 
{
    $descuento = 0.3 * $colegiatura;
    $colegiatura -= $descuento;
    
} 
else 
{
    
    $iva = 0.16 * $colegiatura;
    $colegiatura += $iva;
}
$precioAPagar = '$' . number_format($colegiatura, 2);

echo "El precio a pagar es: $precioAPagar";
?>
</div> 
</body>
</html>
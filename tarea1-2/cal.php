<!DOCTYPE html>
<html>
<head>
    <title>12618. Practicando con formulas</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>12618. Practicando con formulas</h1>

    <h2>Descripción</h2>
    Dado un valor real A, quieres resolver una serie de ecuaciones hasta obtener el valor de Z.
   
    <h2>Entrada</h2>
    Un real A. Puedes suponer que \( 1 < A < 100 \).

    <h2>Salida</h2>
    Un real que sea el valor de Z impreso con tres puntos decimales.

    <h2>Ejemplo</h2>
    <table border="2" cellpadding="4">
        <tr>
            <th>le pones</th>
            <th>resultado</th>
        </tr>
        <tr>
            <td>33.562</td>
            <td>0.148</td>
        </tr>
        <tr>
            <td>72.569</td>
            <td>0.069</td>
        </tr>
        <tr>
            <td>64.835</td>
            <td>0.077</td>
        </tr>
    </table> 

    <h1>EJECUCION DEL PROGRAMA</h1>
    <?php

    $a=33.562;
    # OPERACION
    $x = 3 * $a + 15;
    $y = ($x + 3) / ($x + 1);
    $z = (5 * $x + 7 * $y) / ($a * $x * $y);

    echo "resultado ", $x, "<br>";
    
?>
</body>
</html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <h1>2765. Sumando dos conjuntos</h1>
    <h3>DESCRIPCION</h3>
    Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4: <br>
    2 3 4 5 <br>
    6 7 1 3 <br>
    El resultado de sumarlos es: <br>
    8 10 5 8 <br>
    <h3>ENTRADA</h3>
    En la primera línea el entero N. En la segunda línea, <br>
    separados por un espacio, los números del primer conjunto.<br>
     En la tercera línea también separados por un espacio, los números del segundo<br>
     conjunto.<br>
     <H3>SALIDA</H3>
     Los números resultantes de sumar ambos conjuntos, separados por un espacio.
     <H3>resultadoooo</H3>
    
     <?php

$N = 4;
$conjunto1 = array(2, 3, 4, 5);
$conjunto2 = array(6, 7, 1, 3);
$resultado = array();

for ($i = 0; $i < $N; $i++) {
    $resultado[] = $conjunto1[$i] + $conjunto2[$i];
}

echo implode(' ', $resultado);
?>
    </body>
</html>

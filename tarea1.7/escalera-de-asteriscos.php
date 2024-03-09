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
                <h2>Problemas 2 se la tarea 1.7 <hr></h2>
                <h3>11338. Escalera De Asteriscos</h3>

                <h2>Descripcion</h2>
                <p>Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. <br>
                    Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura N <br>
                    hecha de asteriscos. <br>
                </p>
                <h2>Entrada</h2>
                <p>Se te darán como valor de entrada un numero entero N el cuál representa la longitud y altura de la escalera.</p>

                <h2>Salida</h2>
                <p>Deberás imprimir como salida una escalera de dimensiones N de largo y N de alto</p>

                <h2>Ejemplo</h2>
                <table border="1" cellspacing="3" cellspacing="3">
                <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>2</td>
            <td># <br>## <br>
        </tr>
        <tr>
        <tr>
            <td>3</td>
            <td># <br>## <br> ### <br>
        </tr>
        </tr>
        <tr>
            <<tr>
            <td>4</td>
            <td># <br>## <br>### <br>####<br>
        </tr>
        </tr>
        <tr>
        <td>5</td>
            <td># <br>## <br>### <br>#### <br>#####<br>
        </tr>
                    </table>
                </table>
                <h2>Resultado</h2>
                <?php
$altura = 9;
for ($i = 1; $i <= $altura; $i++) 
{
    for ($j = 1; $j <= $i; $j++) 
    {
        echo "#";
    }
    echo "<br>";
}
?>
        </div>
        </body>
        </html>

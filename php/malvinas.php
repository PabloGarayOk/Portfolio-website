<?php 
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fecha = date_create('1982-04-02');
    $hoy = date_create();
    $tiempo = date_diff($fecha, $hoy);
    foreach($tiempo as $valor){
        $datos[] = $valor;
    }
    $conmemoracion = $datos[0];

    // indice 0 = year
    // indice 1 = month
    // indice 2 = day
    // indice 3 = hour
    // indice 4 = minute
    // indice 5 = second
    // indice 11 = days passed
    // and more data...
    // echo "<pre>";
    // print_r ($tiempo);
    // echo "</pre>";
?>
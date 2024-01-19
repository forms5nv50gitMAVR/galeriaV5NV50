<?php
require 'funciones.php';
$fotos_por_pagina = 10;
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$inicio = ($pagina_actual > 1) ? ($pagina_actual * $fotos_por_pagina - $fotos_por_pagina) : 0;
$conexion = conexion('curso_galeria','root','');

if($conexion != false){
    $fotos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio,$fotos_por_pagina");
    $fotos->execute();
    $fotos = $fotos->fetchAll();
    if(!$fotos){
        header('location: subir.php');
    }

    $totalFotos = $conexion->query('SELECT FOUND_ROWS() as total');
    $totalFotos = $totalFotos->fetch()['total'];
    $totalPaginas = ceil( ($totalFotos / $fotos_por_pagina) ) ;
    
}
else{
    die();
}


require 'views/index.view.php';
?>
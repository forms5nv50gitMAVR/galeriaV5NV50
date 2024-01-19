<?php
require 'funciones.php';
$conexion = conexion('curso_galeria','root','');
if($conexion != false){
    echo 'Conexion exitosa';
}else{
    echo 'Conexion fallida';
    die();
}
//$FILES es una variable igual que $_POST,$_GET,$_SESSION, que te dan arreglos con informacion mandada por el formulario
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES) ){
    $check = @getimagesize($_FILES['foto']['tmp_name']);//Nos da datos de la foto, sino es una foto entonces retorna un false
    if($check !==  false){
        $carpeta_Destino = 'fotos/';
        $archivo_subido = $carpeta_Destino . $_FILES['foto']['name']; // 'fotos/name.jpg' así armamos la ruta que tendrá nuestra imagen subida
        move_uploaded_file($_FILES['foto']['tmp_name'] , $archivo_subido);
        echo $_POST['titulo'] . ' ' . $_FILES['foto']['name'] . ' ' . $_POST['texto'];
        $statement = $conexion->prepare('
        INSERT INTO fotos (titulo,imagen,texto) VALUES(:titulo,:imagen,:texto)
        ');
        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'],
            ':texto' => $_POST['texto']
        ));
        
    } else{
        $error = 'El archivo no es una imagen o el archivo es muy pesado';
    }

}
require 'views/subir.view.php';
?>
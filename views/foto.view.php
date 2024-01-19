<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <div class="contenedor">
            <a href="index.php">Galeria</a>
            <a href="">Biografía</a>
            <a href="contacto.php">Contacto</a>
        </div>
    </header>
    <section class="fotos">
        <h1>
        <?php if( !empty($foto['titulo']) ) {
            echo $foto['titulo'];
        } else{
            echo $foto['imagen'];
        }    
        ?>
        </h1>
        <div class="contenedor">
            <div class="foto">
                <div class="imagen">
                    <img src="fotos/<?php echo $foto['imagen'] ?>" alt="<?php echo $foto['titulo'] ?>">
                </div>
                <div class="info">
                    <p>
                        <?php         
                            echo $foto['texto'];
                        ?>
                    </p>
                </div>
            </div>
            <div class="paginacion">
                <a href="foto.php?id=<?php echo $id-1?>" class="izquierda boton"><i class="fa fa-long-arrow-left flecha-izquierda" aria-hidden="true"></i>  Anterior</a>
                <a href="foto.php?id=<?php echo $id+1?>" class="derecha boton">Siguiente <i class="fa fa-long-arrow-right flecha-derecha" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <footer>
        <p class="copyright">
            Galería creada por Alejandro Villarreal Reyes - Alexcoding 2021
        </P>
    </footer>
</body>
</html>
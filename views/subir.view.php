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
    <section class="fotos">
        <h1>Subir foto</h1>
        <div class="contenedor">
            <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                <label for="foto">Selecciona tu foto</label>
                <input type="file" name="foto" id="foto" class="inputFoto">

                <label for="titulo">Titulo de la foto</label>
                <input type="text" name="titulo" id="titulo" class="inputs" placeholder="Ingresa el titulo de tu foto">

                <label for="texto">Descripción:</label>
                <textarea name="texto" id="texto" placeholder="Ingresa una descripcion">

                </textarea>
                <?php if(isset($error)): ?>
                    <p class="error"><?php echo $error ?></p>
                <?php endif?>
                <input type="submit" value="Subir foto" class="inputs submit" >
            </form>
            <div class="paginacion">
                <a href="index.php" class="izquierda boton"><i class="fa fa-long-arrow-left flecha-izquierda" aria-hidden="true"></i>  Ir a Galeria</a>
                
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
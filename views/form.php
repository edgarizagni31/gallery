<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ee726eb0d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/form.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <button class="container__button">
            <i class="fas fa-long-arrow-alt-left icon"></i>
            <a href="../index.php">Ver galeria</a>
        </button>
        <form 
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);   ?>" 
            method="post"
            enctype="multipart/form-data"
            class="form"
        >
            <input 
                type="file" 
                name="image" 
                class="form__file"
            >
            <input 
                type="text" 
                name="title" 
                autocomplete="off" 
                class="form__input"
                placeholder="Titulo"
            >
            <input 
                type="text" 
                name="desc" 
                autocomplete="off" 
                class="form__input"
                placeholder="Descripción"
            >
            <button type="submit" class="form__btn">
                <div class="form__content">
                    <i class="fas fa-cloud-upload-alt icon"></i>
                    <p>Subir foto</p> 
                </div>
            </button>
        </form>
        <section class="content-result">
            <?php  
                if ($errors) {
                    echo "<ul class='error-list'>".$errors."</ul>";
                }

                if ( $insert ) {
                    echo "<p class='success'>Foto subida exitosamente</p>";
                }
        ?>
        </section> 
    </div>
</body>
</html>
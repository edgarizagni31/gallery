<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ee726eb0d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/gallery.css">
    <title>Galeria</title>
</head>
<body>
    <button class="button">
        <i class="fas fa-upload icon"></i>
        <a href="controllers/form.php">Subir</a>
    </button>
    <h1>Galeria</h1>
    <section class="gallery">
       <?php  
        show_photos();
       ?> 
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <form 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);   ?>" 
        method="post"
        enctype="multipart/form-data"
    >
        <input type="file" name="image">
        <input type="text" name="title">
        <input type="text" name="desc">
        <input type="submit" value="Subir">
    </form>
    <div>
        <?php  
            if ( empty($errors) ) {
                echo "<div><p>Todo correcto</p></div>";
            } else  {
                show_errors($errors);
            }
        ?>
    </div> 
</body>
</html>
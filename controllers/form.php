<?php  
    require '../models/form.php';
    
    $errors = "";

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES) ) {
        # extract data
        extract($_FILES['image']);
        extract($_POST);

        # get file extension
        $extension = explode('.', $name);
        $extension = $extension[ count($extension) - 1 ];
        
        $valid_extensions = ["jpg","png"];

        # validate text and desc
        if ( empty($title) || empty($desc)) {
            $errors .= "<li>Por favor complete los campos correctamente.</li>";
        } 

        # validate file
        if ( in_array($extension, $valid_extensions) ) {
            $res = move_uploaded_file($tmp_name, "../upload/images/".$name);

            if ( !$res ) {
                header('location: ../views/error.php');
            }
            
        } else {
            $errors .= "<li>Extension no valida. Solo se puede subir imagenes.</li>";
        }

        # insert in db
        if ( empty($errors) ) {
            insert_data($name,$title,$desc);
        }
    }

    # sanitize text
    function clean_text( string $str ): string {
        $str = filter_var($str, FILTER_SANITIZE_STRING);
        $str = stripcslashes($str);
        $str = trim($str);
        return $str;
    }

    function show_errors(string $errors): void{
        echo $errors;
    }
    
    require '../views/form.php';
?>
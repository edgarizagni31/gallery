<?php  
    require '../libs/connection_db.php';

    function insert_data( string $img, string $title, string $desc ): bool {
        $connect = connection_db();

        if ( !$connect ) {
            die();
        }

        $stm = $connect->prepare("INSERT INTO photos (image, title, description) VALUES (?, ?, ? )");
        $stm->bind_param("sss",$img,$title,$desc);
        $res = $stm->execute();
        
        return $res;
    }
?>
<?php  
    require 'libs/connection_db.php';

    function get_photos(): array {
        $connect = connection_db();

        if ( !$connect ) {
            die();
        }

        $result = $connect->query("SELECT * FROM photos;");

        if ( !$result ) {
            $result = [];
        }

        return $result->fetch_all();
    }
?>
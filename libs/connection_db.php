<?php
    require '../vendor/autoload.php';

    use Dotenv\Dotenv;

    # project path
    define("PATH", $_SERVER['DOCUMENT_ROOT']."/curso-php/galeria");
    
    function connection_db() {
        # load env
        $dotenv = Dotenv::createImmutable( PATH );
        $dotenv->load();
        extract($_ENV);

        # connect db
        $connect = new mysqli($DDBB_HOST,$DDBB_USER,$DDBB_PASS, $DDBB_NAME);

        if ( $connect->connect_errno ) {
            $connect = false;
        }

        return $connect;
    }    
?>
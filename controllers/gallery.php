<?php  
    require 'models/gallery.php';

    function show_photos() {
        # get photos 
        $photos = get_photos();

        foreach( $photos as $photo) {
            $path_img = "upload/images/".$photo[1];

            echo "<article>";
            echo "<img  src = '".$path_img. "' />";
            echo "<p>".$photo[2]."</p>";
            echo "<p>".$photo[3]."</p>";
            echo "</article>";
        }
    }

    require 'views/gallery.php';
?>
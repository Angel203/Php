<?php
    
    function greet(){
        $names = array("Mariah", "Robert", "Ezekiel", "Kailin");
        foreach ( $names as $currentName ) {
            echo $currentName . "<br>";
        }
        // if ($names)
        // echo("Hi how are you\n");
    }

    greet();
?>
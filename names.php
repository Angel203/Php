<?php
    
    function filterNames($names){
        $filteredNames = array();

        foreach ($names as $name){
            if (strlen($name)<= 7){
                $filteredNames[]= $name;
            }
        }
        return $filteredNames;
    }

    $names = array("Mariah", "RJ", "Ezekiel", "Kailina", "Zeek", "Lina");

    $filteredNames = filterNames($names);

    echo "Names with 7 or fewer letters: \n";
    foreach ($filteredNames as $name){
    
        echo $name . "\n";
    }


    // function greet(){
    //     $names = array("Mariah", "Robert", "Ezekiel", "Kailin");
    //     foreach ( $names as $currentName ) {
    //         echo $currentName . "<br>";
    //     }
    //     // if ($names)
    //     // echo("Hi how are you\n");
    // }

    // greet();
?>
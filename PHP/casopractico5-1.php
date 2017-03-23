<?php
    //Crea una función para sorteos que admita un número indeterminado de nombres como parámetro. Debe mostrar los nombres y elegir uno de ellos como ganador.
    function sorteo(...$players){
        $num = count($players);
        $rand = rand(0, --$num);
        echo "El ganador o ganadora es ".$players[$rand] ."<br>";
        echo "Los perdedores son:";
        foreach($players as $player => $perdedor){
            if($player != $rand){
                echo "<li>". $perdedor."</li>";
            }
        }
    }
    sorteo("Jero", "Julieta", "Pepe", "Juan", "Fran", "Bea", "David", "Lucas", "Jorge");
?>
<?php
    function limpiar($palabra){
    $palabra = str_replace(array('á','à','â','ã','ª','ä'),"a",$palabra);
    $palabra = str_replace(array('Á','À','Â','Ã','Ä'),"A",$palabra);
    $palabra = str_replace(array('Í','Ì','Î','Ï'),"I",$palabra);
    $palabra = str_replace(array('í','ì','î','ï'),"i",$palabra);
    $palabra = str_replace(array('é','è','ê','ë'),"e",$palabra);
    $palabra = str_replace(array('É','È','Ê','Ë'),"E",$palabra);
    $palabra = str_replace(array('ó','ò','ô','õ','ö','º'),"o",$palabra);
    $palabra = str_replace(array('Ó','Ò','Ô','Õ','Ö'),"O",$palabra);
    $palabra = str_replace(array('ú','ù','û','ü'),"u",$palabra);
    $palabra = str_replace(array('Ú','Ù','Û','Ü'),"U",$palabra);
    $palabra = str_replace(array('[','^','´','`','¨','~',']'),"",$palabra);
    $palabra = str_replace("ç","c",$palabra);
    $palabra = str_replace("Ç","C",$palabra);
    $palabra = str_replace("ñ","n",$palabra);
    $palabra = str_replace("Ñ","N",$palabra);
    $palabra = str_replace("Ý","Y",$palabra);
    $palabra = str_replace("ý","y",$palabra);

    $palabra = str_replace("&aacute;","a",$palabra);
    $palabra = str_replace("&Aacute;","A",$palabra);
    $palabra = str_replace("&eacute;","e",$palabra);
    $palabra = str_replace("&Eacute;","E",$palabra);
    $palabra = str_replace("&iacute;","i",$palabra);
    $palabra = str_replace("&Iacute;","I",$palabra);
    $palabra = str_replace("&oacute;","o",$palabra);
    $palabra = str_replace("&Oacute;","O",$palabra);
    $palabra = str_replace("&uacute;","u",$palabra);
    $palabra = str_replace("&Uacute;","U",$palabra);
    return $palabra;
    }

    function pal($palabra){
        $palabra1 = $palabra;
        $palabra2 = limpiar($palabra);
        $palabra = mb_strtolower($palabra);
        if ($palabra == strrev($palabra)){
            echo $palabra1 ." es palíndromo";
        }else{
            echo $palabra1 ." no es palíndromo";
        }
    }


    pal('¿Acaso hubo búhos acá?');
?>
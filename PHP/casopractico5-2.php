<?php
    function isPrime(int $num): bool{
        if($num == 1){
            return false;
        }
        if($num == 2){
            return true;
        }
        if($num % 2 == 0){
            return false;
        }
        for ($i = 3; $i < sqrt($num); $i += 2){
            if($num % $i == 0){
                return false;
            }
        }
        return true;
    }
    function tellIfPrime($num){
        if(isPrime($num)){
            echo "$num es primo <br>";
        }else{
            echo "$num no es primo <br>";
        }
    }
    tellIfPrime(1);
    tellIfPrime(2);
    tellIfPrime(3);
    tellIfPrime(6);
    tellIfPrime(7);
    tellIfPrime(104729);
    tellIfPrime(983);
    tellIfPrime(2147483647);
?>
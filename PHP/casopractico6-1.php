<?php
    function euroDolar($num){
        //pasar de euro a dolar
    	$dolar=1.057375;
    	$result=$num * $dolar;
    	printf ("%.2f %s en dólares son %s%.2f", $num, '€', '$', $result);
    	echo "<br>";
    }
    function dolarEuro($num){
        //pasar de dolar a euro
        $euro=0.945738267;
        $result=$num * $euro;
        printf ("%s%.2f en euros son %.2f %s", '$', $num, $result, '€');
    }
    $rates = [
        "USD_EUR" => 0.945760628,
        "EUR_USD" => 1.057375,
        "EUR_JPY" => 121.04751,
        "JPY_EUR" => 0.00826121909,
        "USD_JPY" => 114.481969,
        "JPY_USD" => 0.008735
        ];
    $currency = [
        "EUR" => "%.2f€",
        "USD" => "$%.2f",
        "JPY" => "¥%.2f"
        ];
    function conversion($num, $from, $to){
        global $rates;
        global $currency;
        $result=round($num*$rates[$from."_".$to], 2);
        return sprintf($currency[$to], $result);

    }
    conversion(2, 'USD', 'EUR');
?>
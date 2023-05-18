<?php

namespace App;

class RomanNumerals{

    const NUMERALS =[
        'C'=>100,
        'XC' => 90,
        'L'=>50,
        'X' => 10,
       'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    public static function generate($number){

        if ($number <= 0 || $number >= 4000){
            return false;
        }

        $result= '';
        foreach(static::NUMERALS as $numeral => $arabic){
    
        for(; $number >= $arabic; $number -= $arabic){
            $result .= $numeral;
        }
    }
        return $result;
    }

}
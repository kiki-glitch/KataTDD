<?php

namespace App;

class PrimeFactors{

    public function generate($number){

        $factors = [];
        // $divisor = 2;

        // 1. Is the number divisible by 2
        // 2. If true, then divisible by 2, if false, increase candidate and try again.
        // 3. Repeat
        for ($divisor=2; $number > 1; $divisor++){
            for (; $number % $divisor === 0; $number /= $divisor ){
            
                $factors[] = $divisor; // [2,2]
                
            }

    }
        return $factors;
    }

}
<?php

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
     /**
     * @test
     * @dataProvider checks
     */
    public function test_generates_the_roman_numeral_for_1($number, $numeral){

        $romans = new RomanNumerals;
        $this->assertEquals($numeral, $romans->generate($number));
    }
    public function test_cannot_generate_a_roman_numeral_for_less_than_1(){
        
        $romans = new RomanNumerals;
        $this->assertFalse( $romans->generate(0));
    }
    public function test_cannot_generate_a_roman_numeral_for_more_than_3999(){
        
        $romans = new RomanNumerals;
        $this->assertFalse( $romans->generate(4000));
    }
    public static function checks(){
        
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10,'X'],
            [19,'XIX'],
            [90,'XC'],
            [99, 'XCIX'],
            [100, 'C']
        ];
    }
}
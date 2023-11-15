<?php
namespace class;

class AllYourBase {
    private string $number;
    private float $base;

    public function __construct(string $n, float $b) {
        $this -> setNumber($n);
        $this -> setBase($b);
    }

    private function setNumber(string $n): void {
        $this -> number = $n;
    }

    private function setBase(float $b): void {
        $this -> base = $b;
    }

    public function getNumber(): string {
        return $this -> number;
    }

    public function getBase(): float {
        return $this -> base;
    }

    public function converter() : float {
        $a = $this -> getNumber();
        $b = $this -> getBase();
        $convertedNumber = 0;
        $j = strlen($a) - 1;

        for($i = 0; $i < strlen($a); $i++) {
            $n = $a[$i] * $b**$j;
            $convertedNumber += $n;
            $j--;
        };


        return $convertedNumber;
    }
};
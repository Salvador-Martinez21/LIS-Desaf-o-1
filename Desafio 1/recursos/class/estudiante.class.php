<?php
class estudiante {
    public $nota1;
    public $nota2;
    public $nota3;

    public function __construct($n1, $n2, $n3) {
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
    }

    public function calcularPromedio() {
        $total = $this->nota1 + $this->nota2 + $this->nota3;
        $promedio = $total / 3;
        return round($promedio, 2); 
    }
}
?>
<?php

class Complejo {
    public $real;          // Parte real del número complejo
    public $imaginaria;    // Parte imaginaria del número complejo

    // Constructor para inicializar un número complejo con sus partes real e imaginaria
    public function __construct($real, $imaginaria) {
        $this->real = $real;
        $this->imaginaria = $imaginaria;
    }

    // Método para sumar dos números complejos
    public function suma(Complejo $otro) {
        // Suma de las partes reales
        $nuevaReal = $this->real + $otro->real;
        // Suma de las partes imaginarias
        $nuevaImaginaria = $this->imaginaria + $otro->imaginaria;
        // Retorna un nuevo número complejo con el resultado de la suma
        return new Complejo($nuevaReal, $nuevaImaginaria);
    }

    // Método para restar dos números complejos
    public function resta(Complejo $otro) {
        // Resta de las partes reales
        $nuevaReal = $this->real - $otro->real;
        // Resta de las partes imaginarias
        $nuevaImaginaria = $this->imaginaria - $otro->imaginaria;
        // Retorna un nuevo número complejo con el resultado de la resta
        return new Complejo($nuevaReal, $nuevaImaginaria);
    }

    // Método para multiplicar dos números complejos
    public function multiplicacion(Complejo $otro) {
        // Fórmula para la parte real de la multiplicación
        $nuevaReal = ($this->real * $otro->real) - ($this->imaginaria * $otro->imaginaria);
        // Fórmula para la parte imaginaria de la multiplicación
        $nuevaImaginaria = ($this->real * $otro->imaginaria) + ($this->imaginaria * $otro->real);
        // Retorna un nuevo número complejo con el resultado de la multiplicación
        return new Complejo($nuevaReal, $nuevaImaginaria);
    }

    // Método para dividir dos números complejos
    public function division(Complejo $otro) {
        // Cálculo del denominador para la división
        $denominador = $otro->real**2 + $otro->imaginaria**2;
        // Fórmula para la parte real de la división
        $nuevaReal = (($this->real * $otro->real) + ($this->imaginaria * $otro->imaginaria)) / $denominador;
        // Fórmula para la parte imaginaria de la división
        $nuevaImaginaria = (($this->imaginaria * $otro->real) - ($this->real * $otro->imaginaria)) / $denominador;
        // Retorna un nuevo número complejo con el resultado de la división
        return new Complejo($nuevaReal, $nuevaImaginaria);
    }

    // Método para representar el número complejo como una cadena de texto
    public function __toString() {
        // Retorna la representación del número complejo en formato "a+bi" o "a-bi"
        return $this->real . ($this->imaginaria >= 0 ? '+' : '-') . abs($this->imaginaria) . 'i';
    }
}

// Crear dos números complejos
$complejo1 = new Complejo(2, 3);    // Primer número complejo: 2+3i
$complejo2 = new Complejo(1, -2);   // Segundo número complejo: 1-2i

// Sumar los dos números complejos
$suma = $complejo1->suma($complejo2);
echo "Suma: " . $suma . "\n";       // Imprime el resultado de la suma: 3+1i

// Multiplicar los dos números complejos
$multiplicacion = $complejo1->multiplicacion($complejo2);
echo "Multiplicación: " . $multiplicacion . "\n"; // Imprime el resultado de la multiplicación: 8+1i

?>

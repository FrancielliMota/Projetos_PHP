<?php

class Ponto {
    private $x; 
    private $y; 
    private static $contador = 0; // Contador de objetos criados

    // Construtor que recebe as coordenadas X e Y
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++; // Atualiza o contador de pontos
    }

    // Métodos get e set (X)
    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    // Métodos get e set (Y)
    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }

    // Método para deslocar o ponto em dx e dy
    public function deslocar($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }

    // Método para converter o ponto para string
    public function __toString() {
        return "(" . $this->x . ", " . $this->y . ")";
    }

    // Método de classe para retornar o valor do contador
    public static function getContador() {
        return self::$contador;
    }

    // Método para calcular a distância entre a instância do ponto e outro objeto Ponto
    public function calcularDistanciaOutroPonto(Ponto $outroPonto) {
        $dx = $outroPonto->getX() - $this->x;
        $dy = $outroPonto->getY() - $this->y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    // Método para calcular a distância entre a instância do ponto e coordenadas X e Y
    public function calcularDistanciaCoordenadas($x2, $y2) {
        $dx = $x2 - $this->x;
        $dy = $y2 - $this->y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    // Método de classe para calcular a distância entre dois pontos, dadas as coordenadas X1, Y1 e X2, Y2
    public static function calcularDistanciaEntrePontos($x1, $y1, $x2, $y2) {
        $dx = $x2 - $x1;
        $dy = $y2 - $y1;
        return sqrt(pow($dx, 2) + pow($dy, 2)); 
    }
}

// Implementação:
$ponto1 = new Ponto(3, 4);
$ponto2 = new Ponto(6, 8);

// Calculando a distância entre ponto1 e ponto2 (usando objetos Ponto)
echo "Distância entre dois objetos: " . $ponto1->calcularDistanciaOutroPonto($ponto2) . "\n";

// Calculando a distância entre ponto1 e coordenadas (7, 10)
echo "Distância entre ponto1 e coordenadas (7, 10): " . $ponto1->calcularDistanciaCoordenadas(7, 10) . "\n";

// Calculando a distância entre dois pontos diretamente via método estático
echo "Distância entre as coordenadas (3, 4) e (7, 10): " . Ponto::calcularDistanciaEntrePontos(3, 4, 7, 10) . "\n";

// Exibindo o número total de objetos criados
echo "Número de objetos criados: " . Ponto::getContador();

?>

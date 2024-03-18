<?php 

    function Calcular($num1, $num2, $op) {
    if ($num2 == 0 && $op == "divisao") {
        echo "Impossível dividir por 0";
    }
     else {
    switch ($op) {
        case "adicao":
            $resultado = $num1 + $num2;
            break;
            case "subtracao":
                $resultado = $num1 - $num2;
                break;
                case "multiplicacao":
                    $resultado = $num1 * $num2;
                    break;
                    case "divisao":
                        $resultado = $num1 / $num2;
                        break;
    }
    return $resultado;
}
}
?>
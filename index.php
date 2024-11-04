<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    # comentário de linha
    // comentário de linha
    /* comentario de bloco */

    // $fruta = "maçã";
    // $preco = 2.5;
    // $quantidade = 10;
    // echo "voce comprou $quantidade $fruta(s) a R$ $preco cada uma"

    // $quantidade = 3;
    // $preco_uni = 12.0;
    // $total = $quantidade * $preco_uni;
    // echo "voce comprou $quantidade hamburguer(es) - total: R$".$total;

    // $distancia = 15;

    // if ($distancia < 5) {
    //     echo " a distancia é: $distancia km,vá de bicicleta";
    // } elseif ($distancia < 20) {
    //     echo "a distancia é: $distancia km, pegue um onibus";
    // } else {
    //     echo "a distancia é: $distancia km, use um carro";
    // }

    // $caixas = 10;
    // echo "empilhando caixas: <br>";
    // for ($i = 1; $i <= $caixas; $i++) {
    //     echo "empilhando a caixa numero $i <br>";
    // }

    // $sabor = "morangolate";
    // $quantidade = 10;

    // if ($sabor == "morango"){
    //     $preco_sorvete = 4.5;   
    // } elseif ($sabor == "baunilha"){
    //     $preco_sorvete = 3.0;
    // } elseif ($sabor == "menta") {
    //     $preco_sorvete = 4.0;
    // } else {
    //     $preco_sorvete = 6.0;
    // }

    // $total = $quantidade * $preco_sorvete;

    // if ($quantidade > 5){
    //     $total *= 0.9;
    // }

    // echo "voce pediu $quantidade sorvete(s) de $sabor. total: R$".$total;

    function calcularComImposto($preco, $quantidade, $imposto = 0.1) {
        $total = $preco * $quantidade;
        $totalComImposto = $total + ($total * $imposto);
        return $totalComImposto;
    }

    $preco_unitario = 30;
    $quantidade = 2;

    echo "total com impostos = R$ ". calcularComImposto ($preco_unitario, $quantidade)

    ?>

</body>
</html>
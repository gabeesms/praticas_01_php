<html>
<body>
    <?php
    /*9 - As maçãs custam ​R$ 1,30​ cada se forem compradas ​menos de uma dúzia​, e ​R$ 1,00​ se forem
    compradas ​pelo menos 12​. Escreva um algoritmo que leia o número de maçãs compradas, calcule
    e escreva o custo total da compra.*/

    $metade = 1.30;
    $inteiro = 1;

    $qtd = 10;


    if($qtd >=12){
        echo "Total compra: " . $qtd*$inteiro;
    }else{
        echo "Total compra: " . $qtd*$metade;
    }

    ?>
</body>
</html>
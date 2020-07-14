<html>
<body>
    <?php
    /*12 - Um posto está vendendo combustíveis com a seguinte tabela de descontos:
    Álcool: até 20 litros​, desconto de ​3%​ por litro e ​acima de 20 litros​, desconto de ​5%​ por litro;
    Gasolina: até 20 litros​, desconto de ​4%​ por litro e ​acima de 20 litros​, desconto de ​6%​ por litro.
    Escreva um algoritmo que leia o número de litros vendidos, o tipo de combustível (A-álcool,
    G-gasolina) e imprima o valor a ser pago pelo cliente.
    Considere que o preço do litro da gasolina é ​R$ 2,99​ e o preço do litro do álcool é ​R$ 2,19​.*/
    
    $qtdalcool = 21;
    $qtdgasolina = 30;

    if($qtdalcool <= 20){
        $alcool = 2.19 - ((2.19*3)/100); 
        $totalalcool = $qtdalcool * $alcool;
        echo "Valor desconto alcool: $alcool  <br />\n";
        echo "Valor total alcool: $totalalcool  <br />\n";
    }else{
        $alcool = 2.19 - ((2.19*5)/100);
        $totalalcool = $qtdalcool * $alcool;
        echo "Valor desconto alcool: $alcool  <br />\n";
        echo "Valor total alcool: $totalalcool  <br />\n";
    }

    if($qtdgasolina <= 20){
        $gasolina = 2.99 - ((2.99*4)/100); 
        $totalgasolina = $qtdgasolina * $gasolina;
        echo "Valor desconto gasolina: $gasolina <br />\n";
        echo "Valor total gasolina: $totalgasolina  <br />\n";
    }else{
        $gasolina = 2.99 - ((2.19*6)/100);
        $totalgasolina = $qtdgasolina * $gasolina;
        echo "Valor desconto gasolina: $gasolina  <br />\n";
        echo "Valor total gasolina: $totalgasolina  <br />\n";
    }




    

    ?>
</body>
</html>
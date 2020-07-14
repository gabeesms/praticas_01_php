<html>
<body>
    <?php
    /*8 - Desenvolva um algoritmo que leia um número ​inteiro positivo​ e imprima a ​tabuada de multiplicar
    correspondente. Exemplo, para 6, devemos obter: 1 X 6 = 6, 2 X 6 = 12,..., 10 X 6 = 60.*/

    $num = 6;

    for($i=0; $i<=10; $i++){
       echo "$num x $i = " . $i*$num . "<br />\n";
    }

    ?>
</body>
</html>
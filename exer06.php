<html>
    <body> 
        <?php 
        /*6 - Crie um algoritmo que ​lê o ano de nascimento​ de uma pessoa e o ano atual. Calcule e
         mostre qual é: ​a idade da pessoa em anos​, ​a idade da pessoa em meses​, ​a idade da pessoa em
        dias​ e ​a idade da pessoa em semanas​. Considere que: ​(O ano tem 365 dias, o mês tem 30 dias).*/

        $anonasc = 1994;
        $anoatual = 2020;

        $idade = $anoatual - $anonasc;
        echo "$idade anos<br />\n";

        $meses = $idade * 12;
        echo "idade em meses: $meses<br />\n";

        $dias = $idade*365;
        echo "idade em dias: $dias<br />\n"

         ?>
    </body>
</html>
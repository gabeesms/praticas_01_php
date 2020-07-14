<html>
    <body> 
        <?php 
        /*7 - Escreva um algoritmo que converta um ​intervalo de tempo dado em minutos​, ​em horas​, ​minutos
        e ​segundos​. Por exemplo, se for dado 145,87 minutos, o programa deve fornecer ​2 h 25 min 52,2 s​.*/

        $min = 20000;
        $horas = floor($min / 3600);
        $minutos = floor(($min / 60) % 60);
        $segundos = $min % 60;
        
        echo "$horas:$minutos:$segundos";

         ?>
    </body>
</html>
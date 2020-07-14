<html>
    <body> 
        <?php 
        /*3 - Temos um lista com nomes de irmãos, mas esqueceram de colocar o sobrenome de ambos,
        faça um programa que insira o sobrenome "Silva" após cada nome e mostre o resultado.
        $nomes​ = ​array​(​"Maria"​, ​"João"​, ​"Ana"​, ​"Carlos"​, ​"Cristina"​);*/

        $nomes = array("Maria", "João", "Ana", "Carlos", "Cristina");

        foreach($nomes as $nome){
            echo "$nome Silva <br />\n";
        }
       
         ?>
    </body>
</html>
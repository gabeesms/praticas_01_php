<html>
    <body> 
        <?php 
        /*4 - Dado a lista de números, imprima quantos deles são negativos.
        $numeros ​= ​array​(​3​, ​5​, ​-2​, ​6​, ​9​, ​7​, ​-8​, ​-3​);*/

        $numeros = array(3,5,-2,6,9,7,-8,-3);

        $cont=0;

        foreach($numeros as $numero){
            if($numero < 0){
                $cont++;
            }
        }

        echo "Quantidade número negativo: $cont";
       
         ?>
    </body>
</html>
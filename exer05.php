<html>
    <body> 
        <?php 
        /*5 - Ler três notas de um aluno, calcular a média e informar se ele foi aprovado (​Média ≥ 7​),
        reprovado (​Média < 7​).*/

        $n1=1;
        $n2=6;
        $n3=7;

        $media = ($n1+$n2+$n3)/3;

        if($media >= 7){
            echo "APROVADO";
        }else{
            echo "REPROVADO";
        }
       
         ?>
    </body>
</html>
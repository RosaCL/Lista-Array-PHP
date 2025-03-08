<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nome=$_POST['nome'];
        $nota=$_POST['nota'];
        $alunos =[];
        $soma=0;
        $maiorNota=-1;
        $alunoMaiornota="";
    ?>
    <main>
        <section class="pergunta">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <?php for ($i=0; $i<10; $i++):?>
                        <div class="form-content" <?php echo $i;?>>
                            <fieldset><legend><h3 class="title" >Dados Aluno <?php echo $i +1;?></h3></legend>
                            <label class="dado-label" for="nome">Nome:</label><br>
                            <input class="dado-input" type="text"  id="nome" name="nome" value="<?=$nome?>"><br>
                            <label  class="dado-label" for="nota">Nota</label><br>
                            <input class="dado-input" type="number"  id="nota" name="nota" step="0.01" value="<?=$nota?>">     
                        </fieldset>
                        </div>
                        <?php endfor;?>
                        <div>                            
                            <input class="enviar" type="submit" value="Enviar">
                        </div>
            
                </form>

        </section>
        
    </main>
    <section class="resposta">
        <div class="form-content">
            <fieldset><legend> <h1 class="title">Dados Recebidos</h1></legend>
            <div class="res">
            <?php       
                if ($_SERVER["REQUEST_METHOD"] === 'POST' ){
                            
                        for ($i = 0; $i < 10; $i++){
                            $alunos[] =[
                                'nome' => $nome[$i],
                                'nota' => $nota[$i]
                            ];
            
            
                        $soma+=$nota[$i];
            
                        if ($nota[$i]>$maiorNota){
                            $maiorNota=$nota[$i];
                            $alunoMaiornota=$nome[$i];
                        }
                    }
                        $media=$soma/$i;
                    }        
                    echo "<ul>
                            <li><strong>Média da turma: </strong> $media</li>
                            <li><strong>Maior nota: </strong>$alunoMaiornota</li>
                        </ul>";
            ?>   
            </div>
            </fieldset>  
        </div>
    
                    

        


    </section>
    <footer>
            <a href="https://github.com/RosaCL"><img src="./costurezaa.png" alt=""></a>
        </footer>
    
</body>
</html>
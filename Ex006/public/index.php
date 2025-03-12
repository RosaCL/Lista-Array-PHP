<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inverso</title>
    <link rel="stylesheet" href="../resources/style.css">
</head>
<body>
    <main>
        <section class="pergunta">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <?php for($i=0; $i<10;$i++):?>
                    <div class="form-content <?php echo$i?>" >
                        <fieldset><legend><h1 class="title">Dados</h1></legend>
                        <label class="dado-label" for="number">Número</label><br>
                        <input class="dado-input" type="number" name="number[]" id="numero <?php echo$i?>">
                        </fieldset>
                    </div>
                <?php endfor;?><br>
                <input class="enviar" type="submit" value="Enviar">
            </form>
        </section>
    </main>
    <section class="resposta">
        <div class="form-content">
            <fieldset><legend> <h1 class="title">Dados Recebidos</h1></legend>
            <div class="res">
                <?php
                $numbers = [];
                $inverse = [];

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $numbers = $_POST['number'];

                    for ($i = 9; $i >= 0; $i--) { 
                        $inverse[] = $numbers[$i];
                    }
                }

                echo "Vetor Normal: [" . implode(", ", $numbers) . "]<br>
                Vetor Contrário: [" . implode(", ", $inverse) . "]";
                
                ?>
            </div>
            </fieldset>
        </div>
    
    <footer>
        <a href="https://github.com/RosaCL" target="_blank"><img src="../public/img/costurezaa.png" alt=""></a>
    </footer>
</body>
</html>
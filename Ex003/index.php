<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="pergunta">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <?php for($i=0; $i<10; $i++):?>
                <div class="form-content <?php echo$i?>" >
                    <fieldset><legend><h1 class="title">Dados</h1></legend>
                    <label class="dado-label" for="number">Número</label><br>
                    <input class="dado-input" type="number" name="number[]" id="number <?php $i;?>">                    
                </fieldset>
            </div>
            <?php endfor;?><br>

            <label class="dado-label" for="mult">Multiplicador</label><br>
            <input class="dado-input" type="number" name="mult" id="mult"><br>
            <input class="enviar" type="submit" value="Enviar">

                
            </form>

        </section>
        

    </main>
    <section class="resposta">
        <div class="form-content">
            <fieldset><legend> <h1 class="title">Dados Recebidos</h1></legend>
            <div class="res">
                
            <?php      
            $numbers=[];
            $multiplication = null;
            $result=[];
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST["number"])) {
                    $numbers = $_POST["number"];
                }
                if (isset($_POST["mult"])) {
                    $multiplication = (int)$_POST["mult"];
                }
                if (!empty($numbers) && $multiplication !== null) {
                    foreach ($numbers as $number) {
                        $result[] = (int)$number * $multiplication;
                    }
                }

                if (!empty($result)) {
                    foreach ($result as $value) {
                        echo $value . ", ";
                    }
                }               

            }
            ?>
            </div>
            
            </fieldset>  
            </div>
        
    <footer>
        <a href="https://github.com/RosaCL"><img src="./costurezaa.png" alt=""></a>
    </footer>
    
    
    
</body>
</html>
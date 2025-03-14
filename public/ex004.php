<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicar vetores</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>
<body>
    <main>
        <section class="pergunta">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <?php for($i=0; $i<10;$i++):?>
                    <div class="form-content <?php echo$i?>" >
                        <fieldset><legend><h1 class="title">Dados</h1></legend>
                        <label class="dado-label" for="number">Número</label><br>
                        <input class="dado-input" type="number" name="number[]" id="number <?php echo$i?>">
                        </fieldset>
                    </div>
                <?php endfor;?><br>
                <?php for($i=0; $i<10;$i++):?>
                    <div class="form-content <?php echo$i?>" >
                        <fieldset><legend><h1 class="title">Dados</h1></legend>
                        <label class="dado-label" for="number">Número</label><br>
                        <input class="dado-input" type="number" name="number2[]" id="number2 <?php echo$i?>">
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
                $numberONe = [];
                $numbertwo = [];
                $result = [];

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['number'])) {
                        $numberONe = $_POST['number'];
                    }
                    if (isset($_POST['number2'])) {
                        $numbertwo = $_POST['number2'];
                    }

                    if (count($numberONe) === count($numbertwo)) {
                        for ($i = 0; $i < count($numberONe); $i++) {
                            $result[] = (int)$numberONe[$i] * (int)$numbertwo[$i];
                        }
                    }

                    if (!empty($result)) {
                        foreach ($result as $value) {
                            echo $value . " ";
                        }
                    }
                    
                }
                ?>
            </div>
            </fieldset>
        </div>
    <footer>
        <a href="https://github.com/RosaCL" target="_blank"><img src="../public/img/costurezaa.png" alt=""></a>
    </footer>
</body>
</html>
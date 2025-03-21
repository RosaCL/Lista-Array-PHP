<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mês</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>
<body>
<header>
        <ul>
            <button>
                <li><a href="./ex001.php">Ex001</a></li>
            </button>
            <button>
                <li><a href="./ex002.php">Ex002</a></li>
            </button>
            <button>                
                <li><a href="./ex003.php">Ex003</a></li>
            </button>
            <button>                
                <li><a href="./ex004.php">Ex004</a></li>
            </button>
            <button>
                <li><a href="./ex005.php">Ex005</a></li>                
            </button>
            <button>                
                <li><a href="./ex006.php">Ex006</a></li>
            </button>       
            <button>                
                <li><a href="./ex007.php">Ex007</a></li>
            </button>
            <button>                
                <li><a href="./ex008.php">Ex008</a></li>
            </button>
        </ul>
    </header>
    <main>
        <section class="pergunta">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <div class="form-content">
                    <fieldset><legend><h1 class="title">Digite o mês desejado</h1></legend>
                        <label class="dado-label" for="mes">Meses</label><br>
                        <input class="dado-input" type="number" name="mes" id="mes">
                    </fieldset>
                </div>
                <input class="enviar" type="submit" value="Enviar">
            </form>
        </section>
    </main>
    <section class="resposta">
        <div class="form-content">
            <fieldset><legend><h1 class="title">Dados Recebidos</h1></legend>
                <div class="res">
                    <?php
                    $meses = [
                        1 => 'Janeiro',
                        2 => 'Fevereiro',
                        3 => 'Março',
                        4 => 'Abril',
                        5 => 'Maio',
                        6 => 'Junho',
                        7 => 'Julho',
                        8 => 'Agosto',
                        9 => 'Setembro',
                        10 => 'Outubro',
                        11 => 'Novembro',
                        12 => 'Dezembro'
                    ];
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $mes = $_POST['mes'];
                        if (isset($meses[$mes])) {
                            echo "<p>O mês selecionado foi <strong> $meses[$mes]</strong></p>";
                        } else {
                            echo "<p>Não existe</p>";
                        }
                    }
                    ?>
                </div>
            </fieldset>
        </div>
    </section>
    <footer>
        <a href="https://github.com/RosaCL" target="_blank"><img src="../public/img/costurezaa.png" alt=""></a>
    </footer>
</body>
</html>
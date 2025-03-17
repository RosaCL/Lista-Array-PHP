<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
                <?php for($i=0; $i<10;$i++):?>
                <div class="form-content <?php echo$i?>" >
                    <fieldset><legend><h1 class="title">Dados</h1></legend>
                    <label for="name<?=$i?>" class="dado-label">Nome</label><br>
                    <input type="text" class="dado-input" name="name<?=$i?>" id="name<?=$i?>"><br>
                    <label for="city<?=$i?>" class="dado-label">Cidade</label><br>
                    <input type="text" class="dado-input" name="city<?=$i?>" id="city<?=$i?>"><br>
                    <label for="sex<?=$i?>" class="dado-label">Sexo</label><br>
                    <input type="text" class="dado-input" name="sex<?=$i?>" id="sex<?=$i?>"><br>
                    <label class="dado-label" for="age<?=$i?>">Idade</label><br>
                    <input class="dado-input" type="number" name="age<?=$i?>" id="age<?=$i?>">
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
                $peoples = [];
                $masculino = 0;

                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    for ($i = 0; $i < 10; $i++) {
                        $peoples[] = [
                            "name" => $_POST["name".$i],
                            "city" => $_POST["city".$i],
                            "age" => $_POST["age".$i],
                            "sex" => $_POST["sex".$i],
                        ];
                    }
                    echo "<h2>Listagem de Nomes e Idades:</h2>";
                    foreach ($peoples as $people) {
                        echo $people["name"] . " - " . $people["age"] . " anos<br>";
                    }
                    echo "<h2>Nomes de quem mora em Santos:</h2>";
                    foreach ($peoples as $people) {
                        if (strtolower($people["city"]) == "santos") {
                            echo $people["name"] . "<br>";
                        }
                    }
                    echo "<h2>Nomes de quem tem mais de 18 anos:</h2>";
                    foreach ($peoples as $people) {
                        if ($people["age"] > 18) {
                            echo $people["name"] . "<br>";
                        }
                    }
                    foreach ($peoples as $people) {
                        if (strtolower($people["sex"]) == "masculino" || strtolower($people["sex"]) == "m") {
                            $masculino++;
                        }
                    }
                    echo "<h2>Foram registradas: </h2>";
                    echo  " $masculino Pessoas do sexo masculino";
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
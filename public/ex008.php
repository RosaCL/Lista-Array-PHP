<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
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
                    <label for="model" class="dado-label">Modelo</label><br>
                    <input type="text" name="veiculo[$i][model]" id="model"><br> 
                    <label for="fabricante" class="dado-label">Fabricante</label><br>
                    <input type="text" name="veiculo[$i][fabricante]" id="fabricante"><br> 
                    <label for="color" class="dado-label">Cor</label><br>
                    <input type="text" name="veiculo[$i][color]" id="color"><br> 
                    <label for="portas" class="dado-label">Portas</label><br>
                    <input class="dado-input" type="number" name="veiculo[$i][portas]" id="portas" max="5"><br>   
                    <label for="number" class="dado-label">Ano</label><br>
                    <input class="dado-input" type="number" name="veiculo[$i][age]" id="age"><br>                
                </fieldset>                
                </div>
                <?php endfor;?><br>
                
                    <input class="enviar" type="submit" value="Enviar">
                
            </form>
            
            

        </section>
        
    </main>
    <section class="resposta">
        <div class="form-content">
            <fieldset> <legend><h1 class="title">Dados analisados</h1></legend> 
            <div class="res">
                <?php
                if($_SERVER['REQUEST_METHOD']==='POST'){
                    $vehicles=$_POST['veiculo'];
                    
                    echo "<h2>Modelos e anos dos Veículos:</h2>";
                    foreach ($vehicles as $vehicle) {
                        echo "Modelo: " . $vehicle["model"] . ", Fabricante: " . $vehicle["fabricante"] . ", Ano: " . $vehicle["age"] .
                            "<br>";
                    }
                    echo "<h3>Veículos Cor Prata:</h3>";
                    foreach ($vehicles as $vehicle) {
                        if (strtolower($vehicle["color"]) == "prata"){
                            echo "Modelo: " . $vehicle["model"] . ", Fabricante: " . $vehicle["fabricante"] . ", Ano: " .
                                $vehicle["age"] . "<br>";
                        }
                    }
                    echo "<h3>Veículos, cor e quantidade de portas:</h3>";
                    foreach($vehicles as $vehicle){
                        echo "Modelo: " . $vehicle["model"] . ", Cor: " . $vehicle["color"] . ", Quantidade de Portas: " .
                        $vehicle["portas"] . "<br>";
                    }
                    echo "<h3>Veículos da Ford</h3>";
                    foreach ($vehicles as $vehicle) {
                        if (strtolower($vehicle["fabricante"]) == "ford"){
                            echo "Modelo: " . $vehicle["model"] . ", Ano: " . $vehicle["age"] . "<br>";
                        }
                    }
                    echo "<h3>Veículos a partir de 2013:</h3>";
                    foreach ($vehicles as $vehicle) {
                        if($vehicle["age"] >= 2013){
                            echo "Modelo: " . $vehicle["model"] . ", Ano: " . $vehicle["age"] . "<br>";
                        }
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
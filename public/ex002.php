<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+/-</title>
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
                    <label class="dado-label" for="number">Número</label><br>
                    <input class="dado-input" type="number" name="numero[]" id="numero <?php echo$i?>">                    
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
            $positive=0;
            $negative=0;
            $par=0;
            $impar=0;
            
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                for($i= 0; $i< 10;$i++){
                    $number = $_POST['numero'][$i];

                if($number >= 0){
                    $positive++;
                }else{
                    $negative++;
                }

                if($number % 2 == 0) {
                    $par++;
                }else{
                    $impar++;
                }
            }
        }
                    echo "<p><strong>Números Pares: </strong> $par <br>
                    <strong>Números Impares:</strong> $impar<br>
                    <strong>Números Positivos:</strong> $positive<br>
                    <strong>Números Negativos:</strong> $negative<br>
                    </p>"     
            
                
                ?>   
            </div>
            </fieldset>  
        </div>
    <footer>
        <a href="https://github.com/RosaCL" target="_blank"><img src="../public/img/costurezaa.png" alt=""></a>
    </footer>
    
    
</body>
</html>
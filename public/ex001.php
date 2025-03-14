<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior Nota</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>
<body>
    <main>
        <section class="pergunta">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <?php for ($i = 0; $i < 10; $i++): ?>
                    <div class="form-content" id="form-content-<?php echo $i;?>">
                        <fieldset><legend><h3 class="title">Dados Aluno <?php echo $i + 1; ?></h3></legend>
                            <label class="dado-label" for="nome<?php echo $i;?>">Nome:</label><br>
                            <input class="dado-input" type="text" id="nome<?php echo $i;?>" name="nome[]"><br>
                            <label class="dado-label" for="nota<?php echo $i;?>">Nota</label><br>
                            <input class="dado-input" type="number" id="nota<?php echo $i;?>" name="nota[]" step="0.01">
                        </fieldset>
                    </div>
                <?php endfor; ?>
                <div>
                    <input class="enviar" type="submit" value="Enviar">
                </div>
            </form>
        </section>
    </main>
    <section class="resposta">
        <div class="form-content">
            <fieldset><legend><h1 class="title">Dados Recebidos</h1></legend>
                <div class="res">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
                        $nomes = $_POST['nome'];
                        $notas = $_POST['nota'];
                        $alunos = [];
                        $soma = 0;
                        $maiorNota = -1;
                        $alunoMaiorNota = "";

                        for ($i = 0; $i < 10; $i++) {
                            $alunos[] = [
                                'nome' => $nomes[$i],
                                'nota' => $notas[$i]
                            ];

                            $soma += $notas[$i];

                            if ($notas[$i] > $maiorNota) {
                                $maiorNota = $notas[$i];
                                $alunoMaiorNota = $nomes[$i];
                            }
                        }

                        $media = $soma / 10;

                        echo "<ul>
                                <li><strong>Média da turma: </strong> $media</li>
                                <li><strong>Maior nota: </strong> $alunoMaiorNota</li>
                            </ul>";
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
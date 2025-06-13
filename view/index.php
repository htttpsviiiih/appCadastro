<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../model/Filme.php';
require_once '../dao/FilmeDao.php';

$filmeDao = new FilmeDao();   
$filmes = $filmeDao->listar();


///criar objeto filme pegar os dados e chamar o insert 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Filmes</title>
</head>

<body>
    <h1>Listagem</h1>
    <div class="tabelaFilmes">
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Diretor</td>
                <td>Classificação Indicativa</td>
                <td>Gênero</td>
                <td>Ano</td>


            </tr>
            <?php foreach ($filmes as $filme): ?>
                <tr>
                    <td><?= $filme['id'] //htmlspecialchars, perguntar para o professor, pois quero utilizar mas n entendi o uso
                        ?></td>
                    <td><?= $filme['nome'] ?></td>
                    <td><?= $filme['diretor'] ?></td>
                    <td><?= match ($filme['classificacao_indicativa']) {
                            '00' => 'Livre',
                            '10' => '10 anos',
                            '12' => '12 anos',
                            '14' => '14 anos',
                            '16' => '16 anos',
                            '18' => '18 anos',
                            default => 'Não especificado'
                        } ?></td>


                    <td>
                        <?= match ($filme['genero']) { //estrutura de repetição match, similar ao switch, com a diferença de que não é necessário o break
                            'A' => 'Ação',
                            'C' => 'Comédia',
                            'D' => 'Drama',
                            'T' => 'Terror',
                            'R' => 'Romance',
                            'S' => 'Suspense',
                            'F' => 'Ficção Científica',
                            'O' => 'Outro',
                            default => 'Outro'
                        } ?>
                    </td>
                    <td><?= $filme['ano_lancamento'] ?></td>

                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <h1>Cadastro de filmes</h1>
    <div class="container">
        <form action="..\controll\filmesControll.php" method="post">
            <div>
                <label for="titulo">Nome:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div>
                <label for="diretor">Diretor:</label>
                <input type="text" id="diretor" name="diretor" required>
            </div>
            <div>
                <select name="classIndicativa" id="classIndicativa">
                    <option value="" disabled selected>Selecione a classificação indicativa</option>
                    <option value="00">Livre</option>
                    <option value="10">10 anos</option>
                    <option value="12">12 anos</option>
                    <option value="14">14 anos</option>
                    <option value="16">16 anos</option>
                    <option value="18">18 anos</option>
                </select>
            </div>

            <div>
                <select name="genero" id="genero">
                    <option value="" disabled selected>Selecione o gênero</option>
                    <option value="A">Ação</option>
                    <option value="C">Comédia</option>
                    <option value="D">Drama</option>
                    <option value="T">Terror</option>
                    <option value="R">Romance</option>
                    <option value="S">Suspense</option>
                    <option value="F">Ficção Científica</option>
                    <option value="O">Outro</option>
                </select>
            </div>

            <div>
                <label for="ano">Ano:</label>
                <input type="number" id="ano" name="ano">
            </div>
            
          
            

            <button type="submit">Cadastrar</button>
        </form>

    </div>
</body>

</html>
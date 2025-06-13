<?php
include_once '../util/Conexao.php';
include_once '../model/Filme.php';

class FilmeDao
{
    private $conn;
    public function __construct()
    {
        $this->conn = Conexao::getConexao();
    }




    public function insert(Filme $filme)
    {
        $sql = "INSERT INTO filmes (nome ,diretor, classificacao_indicativa, genero, ano_lancamento) 
            VALUES (?, ?, ?, ?, ?)";
        $stm = $this->conn->prepare($sql);
        $stm->execute([
            $filme->getNome(),
            $filme->getDiretor(),
            $filme->getClassIndicativa(),
            $filme->getGenero(),
            $filme->getAno()
        ]);
    }

    public function listar()
    {
        $sql = "SELECT * FROM filmes";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $filmesCadastrados = $stm->FETCHAll(PDO::FETCH_ASSOC);

        if (!$filmesCadastrados) {
            return [];
        }
        return $this->mapFilmesCadastrados($filmesCadastrados);
    }
    private function mapFilmesCadastrados(array $filmesCadastrados)
    {
        $filmes = [];
        foreach ($filmesCadastrados as $f) {
            $filme = new Filme('', '', '', '', '', '');
            $filme->setId($f['id']);
            $filme->setNome($f['nome']);
            $filme->setDiretor($f['diretor']);
            $filme->setClassIndicativa($_POST['classificacao_indicativa']);
            $filme->setAno($f['ano']);
            $filme->setGenero($f['genero']);
        }

        array_push($filmes, $f);

        return $filmes;
    }
    //return $stmt->execute([$titulo,  $diretor, $genero, $classIndicativa, $ano ]);

}

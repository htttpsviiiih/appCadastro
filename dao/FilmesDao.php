<?php
include_once '../util/Conexao.php';
include_once '../model/Filmes.php';

class FilmesDao{
    private $conn;
    public function __construct() {
        $this->conn = Conexao::getConexao();
    }

    public function listar(){
        $sql = "SELECT * FROM filmes";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $filmes;
    }

    public function insert($titulo, $diretor, $genero, $classIndicativa, $ano ) {
    $sql = "INSERT INTO filmes (nome ,diretor, classificacao_indicativa, genero, ano_lancamento) 
            VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $this->conn->prepare($sql);
    
    return $stmt->execute([$titulo,  $diretor, $genero, $classIndicativa, $ano ]);
}
}
<?php
require_once '../util/Conexao.php';
require_once '../model/Filmes.php';
require_once '../dao/FilmesDao.php';

if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $ano = $_POST['ano'];
    $diretor = $_POST['diretor'];
    $genero = $_POST['genero'];
    $classIndicativa = $_POST['classIndicativa'];

    $filmesControll = new FilmesDao();
    $filmesControll->insert($titulo, $ano, $genero, $diretor, $classIndicativa);
    
    header("Location: ../view/index.php?success=1");
    exit();
}

function listarFilmes() {
    $dao = new FilmesDao();
    return $dao->listar();
}
if (!empty($_POST)) {  //cerifica se o formulario foi enviad

    $dao = new FilmesDao();
    $dao->insert(
        $_POST['titulo'],
        $_POST['ano'],
        $_POST['diretor'],
        $_POST['genero'],
        $_POST['classIndicativa']
    );
    header("Location: ../view/index.php");
    exit();
}
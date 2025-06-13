 <?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// require_once '../util/Conexao.php';
// require_once '../model/Filmes.php';
// require_once '../dao/FilmesDao.php';

// if (isset($_POST['titulo'])) { 
//     $ano = $_POST['ano'];
//     $diretor = $_POST['diretor'];
//     $genero = $_POST['genero'];
//     $classIndicativa = $_POST['classIndicativa'];

//     $filmesControll = new FilmesDao();
//     $filmesControll->insert($titulo,$diretor,$classIndicativa,$genero,$ano); 
    
//     header("Location: ../view/index.php?success=1");
//     exit();
// }   

// function listarFilmes() {
//     $dao = new FilmesDao();
//     return $dao->listar();
// }
// if (!empty($_POST)) {  
    
//     $dao = new FilmesDao();
//     $dao->insert(
//         $_POST['titulo'],
//         $_POST['ano'],
//         $_POST['genero'],
//         $_POST['diretor'],
//         $_POST['classIndicativa']
//     );
//     header("Location: ../view/index.php");
//     exit();
// }
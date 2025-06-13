<?php

class Conexao {

    private static $conn = null;

    public static function getConexao() {
        if(self::$conn == null) {
            $opcoes = array(
                //Define o charset da conexão
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                //Define o tipo do erro como exceção
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Define o tipo do retorno das consultas
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
            
            self::$conn = 
                new PDO("mysql:host=localhost;port=3306;dbname=filmes_bd", 
                        "root", 
                        "bancodedados", //pc da escola, em casa não tem senha  
                        $opcoes);
        }
        //Retorna a conexão
        if (self::$conn === false) {
            throw new Exception("Erro ao conectar ao banco de dados.");
        }else
        return self::$conn;
    }

}
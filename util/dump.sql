
CREATE TABLE filmes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    diretor VARCHAR(50) NOT NULL,
    classificacao_indicativa INT(2) NOT NULL,
    genero CHAR(1) NOT NULL,
    ano_lancamento INT(4) NOT NULL
);
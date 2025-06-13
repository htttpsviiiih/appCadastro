<?php
require_once "../util/Conexao.php";

class Filme {

    private $id;
    private $nome;
    private $diretor;
    private $classIndicativa;
    private $genero;
    private $ano;
   
  

    public function __construct($id, $nome, $diretor, $classIndicativa,$ano, $genero,  ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->ano = $ano;
        $this->genero = $genero;
        $this->diretor = $diretor;
        $this->classIndicativa = $classIndicativa;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of diretor
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor($diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of classIndicativa
     */
    public function getClassIndicativa()
    {
        return $this->classIndicativa;
    }

    /**
     * Set the value of classIndicativa
     */
    public function setClassIndicativa($classIndicativa): self
    {
        $this->classIndicativa = $classIndicativa;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }
}
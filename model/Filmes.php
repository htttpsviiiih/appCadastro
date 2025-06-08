<?php

class Filmes {

    private $id;
    private $titulo;
    private $ano;
    private $genero;
    private $diretor;
    private $classificacao_indicativa;

    public function __construct($id, $titulo, $ano, $genero, $diretor, $classificacao_indicativa) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->ano = $ano;
        $this->genero = $genero;
        $this->diretor = $diretor;
        $this->classificacao_indicativa = $classificacao_indicativa;
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
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

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
     * Get the value of classificacao_indicativa
     */
    public function getClassificacaoIndicativa()
    {
        return $this->classificacao_indicativa;
    }

    /**
     * Set the value of classificacao_indicativa
     */
    public function setClassificacaoIndicativa($classificacao_indicativa): self
    {
        $this->classificacao_indicativa = $classificacao_indicativa;

        return $this;
    }
}
<?php

class Colaborador
{
    private $nome;
    private $cnh;
    private $matricula;
    private $dataNascimento;
    private $atribuicao;

    public function __construct($nome, $cnh, $matricula, $dataNascimento, $atribuicao)
    {
        $this->nome = $nome;
        $this->cnh = $cnh;
        $this->matricula = $matricula;
        $this->dataNascimento = $dataNascimento;
        $this->atribuicao = $atribuicao;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCnh(): string
    {
        return $this->cnh;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function getAtribuicao(): string 
    {
        return $this->atribuicao;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function setCnh($cnh): void
    {
        $this->cnh = $cnh;
    }

    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }

    public function setDataNascimento($dataNascimento): void
     {
        $this->dataNascimento = $dataNascimento;
    }

    public function setAtribuicao($atribuicao): void 
    {
        $this->atribuicao = $atribuicao;
    }

}
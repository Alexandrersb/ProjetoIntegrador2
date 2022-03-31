<?php

class Veiculo
{
    private $modelo;
    private $autonomia;
    private $ano;
    private $motor;
    private $marca;

    public function __construct($modelo, $autonomia, $ano, $motor, $marca)
    {
        $this->modelo = $modelo;
        $this->autonomia = $autonomia;
        $this->ano = $ano;
        $this->motor = $motor;
        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAutonomia(): float
    {
        return $this->autonomia;
    }

    public function getAno(): string
    {
        return $this->ano;
    }

    public function getMotor(): string
    {
        return $this->motor;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setModelo($modelo): void
    {
        $this->model = $modelo;
    }

    public function setAutonomia($autonomia): void
    {
        $this->autonomia = $autonomia;
    }

    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    public function setMotor($motor): void 
    {
        $this->motor = $motor;
    }

    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }
}
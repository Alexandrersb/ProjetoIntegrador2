<?php

class Chamado
{
    private $km;
    private $endereco;
    private $status;

    public function __construct($km, $endereco, $status)
    {
        $this->km = $km;
        $this->endereco = $endereco;
        $this->status = $status;
    }

    public function getKm(): float
    {
        return $this->km;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function setKm($km): void
    {
        $this->km = $km;
    }

    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }
}
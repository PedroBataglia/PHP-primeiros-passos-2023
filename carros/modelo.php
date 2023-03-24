<?php

class Carro
{
    public string $modelo;
    public string $marca;
    public float $ano;
    public string $dono;

    public function trocarModelo($novoModelo)
    {
        $this->modelo = $novoModelo;
    }
}


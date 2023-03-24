<?php

class Carro
{
    public string $modelo;
    public string $marca;
    public int $ano;
    public string $dono;

    public function trocarModelo($novoModelo)
    {
        $this->modelo = $novoModelo;
    }
}


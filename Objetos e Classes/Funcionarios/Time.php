<?php

namespace Funcionarios;

class Time
{
    protected string $id;
    protected static $numeroDeMembros = 0;

    public function __construct(string $id )
    {
        $this->id = $id;
        self::$numeroDeMembros++;
    }

    public function recuperaId()
    {
        return $this->id;
    }

    public function recuperaNumeroDeMembros()
    {
        return Time::$numeroDeMembros;
    }

}


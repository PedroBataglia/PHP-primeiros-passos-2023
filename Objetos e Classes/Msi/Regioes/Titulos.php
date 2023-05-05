<?php

namespace Msi;

class Titulos
{
    protected float $tituloRegional;
    protected float $midSeassonInvitation;
    protected float $tituloMundial;

    public function __construct(float $tituloRegional, float $midSeassonInvitation, float $tituloMundial)
    {
        $this->tituloRegional = $tituloRegional;
        $this->midSeassonInvitation = $midSeassonInvitation;
        $this->tituloMundial = $tituloMundial;
    }

}

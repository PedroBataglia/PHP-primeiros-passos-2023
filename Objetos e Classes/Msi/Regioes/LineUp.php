<?php

namespace Msi;

class LineUp
{
    protected string $top;
    protected string $jg;
    protected string $mid;
    protected string $adc;
    protected string $sup;

    public function __construct(string $top, string $jg, string $mid, string $adc, string $sup)
    {
        $this->top = $top;
        $this->jg = $jg;
        $this->mid = $mid;
        $this->adc = $adc;
        $this->sup = $sup;
    }
}

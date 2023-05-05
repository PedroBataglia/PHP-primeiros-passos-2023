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

    public function recuperaTop()
    {
        return $this->top;
    }

    public function recuperaJg()
    {
        return $this->jg;
    }

    public function recuperaMid()
    {
        return $this->adc;
    }

    public function recuperaSup()
    {
        return $this->sup;
    }
}

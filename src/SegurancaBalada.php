<?php

class SegurancaBalada
{
    public function deixaEntrar(Pessoa $pessoa): bool
    {
        return $pessoa->idade() >= 18;
    }
}

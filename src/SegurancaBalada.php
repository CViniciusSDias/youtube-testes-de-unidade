<?php

class SegurancaBalada
{
    public function deixaEntrar(
        Pessoa $pessoa,
        \DateTimeInterface $diaDoEvento
    ): bool
    {
        return $pessoa->idade($diaDoEvento) >= 18;
    }
}

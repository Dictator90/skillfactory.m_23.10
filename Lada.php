<?php

class Lada extends CarAbstract
{
    public function getOuterColor(): string
    {
        return 'red';
    }

    public function activateN2O(): bool
    {
        return false;
    }
}

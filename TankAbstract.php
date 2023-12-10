<?php

abstract class TankAbstract extends TransportAbstract
{
    abstract public function shot():bool;

    public function getOuterColor(): string
    {
        return 'military';
    }

    public function getInnerColor(): string
    {
        return 'black';
    }
}
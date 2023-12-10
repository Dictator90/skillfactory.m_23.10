<?php

abstract class TankAbstract extends TransportAbstract
{
    public function shot()
    {
        //todo: shot function
    }

    public function getOuterColor(): string
    {
        return 'military';
    }

    public function getInnerColor(): string
    {
        return 'black';
    }
}
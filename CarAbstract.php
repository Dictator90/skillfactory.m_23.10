<?php

abstract class CarAbstract extends TransportAbstract
{
    public function beep(): ?string
    {
        return 'beeep';
    }
    public function toggleWipers(): ?bool
    {
        return true;
    }

    public function getInnerColor(): string
    {
        return 'black';
    }

    public function getOuterColor(): string
    {
        return 'black';
    }
}
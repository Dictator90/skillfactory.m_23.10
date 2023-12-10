<?php

abstract class SpecialTechAbstract extends TransportAbstract
{
    abstract public function ability();

    public function beep(): ?string
    {
        return 'doooooo';
    }
    public function toggleWipers(): ?bool
    {
        return true;
    }

    public function getInnerColor(): string
    {
        return 'yellow';
    }

    public function getOuterColor(): string
    {
        return 'black';
    }
}
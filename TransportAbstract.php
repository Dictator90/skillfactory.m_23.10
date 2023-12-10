<?php

abstract class TransportAbstract
    implements TransportInterface
{
    public function driveForward(): bool
    {
        return true;
    }

    public function driveBack(): bool
    {
        return true;
    }

    public function driveLeft(): bool
    {
        return true;
    }

    public function driveRight(): bool
    {
        return true;
    }
}
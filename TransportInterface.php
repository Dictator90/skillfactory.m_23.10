<?php

interface TransportInterface
{
    public function driveForward():bool;

    public function driveBack():bool;

    public function driveLeft():bool;

    public function driveRight():bool;

    public function getInnerColor():string;

    public function getOuterColor():string;
}
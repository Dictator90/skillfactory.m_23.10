<?php

function transportControl(TransportAbstract $transport)
{
    $transport->driveForward();

    if ($transport instanceof CarAbstract)
    {
        $transport->activateN2O();
    }
    elseif ($transport instanceof SpecialTechAbstract)
    {
        $transport->ability();
    }
    elseif ($transport instanceof TankAbstract)
    {
        $transport->shot();
    }
}
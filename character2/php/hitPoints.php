<?php


function getHitPoints($level, $conMod)
{
    $hitPoints = 0;

    for($i = 0; $i < $level; ++$i)
    {

        if($i < 9)
        {
            $levelHP = rand(2, 4);
        }

        if($i >= 9)
        {
            $levelHP = 2;
        }

        $levelHP += $conMod;

        if($levelHP < 2)
        {
            $levelHP = 2;
        }

        $hitPoints += $levelHP;

    }

    return $hitPoints;
}


?>
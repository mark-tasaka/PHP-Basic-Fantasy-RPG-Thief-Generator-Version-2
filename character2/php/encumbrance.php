<?php

function lightLoad ($race, $strengthMod)
{
    $load = 60;
    
    if($race === "Halfling")
    {
            if($strengthMod == -3)
            {
                $load = 20;
            }
            else if($strengthMod == -2)
            {
                $load = 30;
            }
            else if($strengthMod == -1)
            {
                $load = 40;
            }
            else if($strengthMod == 1)
            {
                $load = 55;
            }
            else if($strengthMod == 2)
            {
                $load = 60;
            }
            else if($strengthMod == 3)
            {
                $load = 65;
            }
            else
            {
                $load = 50;
            }
    }
    else
        {
            if($strengthMod == -3)
            {
                $load = 25;
            }
            else if($strengthMod == -2)
            {
                $load = 35;
            }
            else if($strengthMod == -1)
            {
                $load = 50;
            }
            else if($strengthMod == 1)
            {
                $load = 65;
            }
            else if($strengthMod == 2)
            {
                $load = 70;
            }
            else if($strengthMod == 3)
            {
                $load = 80;
            }
        }
    
    return $load;
    
}


function heavyLoad ($race, $strengthMod)
{
    $load = 150;
    
    if($race === "Halfling")
    {
            if($strengthMod == -3)
            {
                $load = 40;
            }
            else if($strengthMod == -2)
            {
                $load = 60;
            }
            else if($strengthMod == -1)
            {
                $load = 80;
            }
            else if($strengthMod == 1)
            {
                $load = 110;
            }
            else if($strengthMod == 2)
            {
                $load = 120;
            }
            else if($strengthMod == 3)
            {
                $load = 130;
            }
            else
            {
                $load = 100;
            }
    }
    else
        {
            if($strengthMod == -3)
            {
                $load = 60;
            }
            else if($strengthMod == -2)
            {
                $load = 90;
            }
            else if($strengthMod == -1)
            {
                $load = 120;
            }
            else if($strengthMod == 1)
            {
                $load = 165;
            }
            else if($strengthMod == 2)
            {
                $load = 180;
            }
            else if($strengthMod == 3)
            {
                $load = 195;
            }
        }
    
    return $load;
    
}

function lightLoadCheck ($lightLoad, $encumbrance)
{
    $checked = "";
    
    if($encumbrance <= $lightLoad)
        {
            $checked = "X";
        }
    else
        {
            $checked = "";
        }
    
    return $checked;
}

function heavyLoadCheck ($lightLoad, $encumbrance)
{
    $checked = "";
    
    if($encumbrance > $lightLoad)
        {
            $checked = "X";
        }
    else
        {
            $checked = "";
        }
    
    return $checked;
}

function encumberanceMove ($lightLoad, $encumbrance, $armour)
{
    $move = 40;
    
    $adjustedMove = 40;

    $heavyDeduction = 0;
    
    $armourDeduction = 0;
    
    if($encumbrance > $lightLoad)
        {
            $heavyDeduction = 10;
        }
    
    if($armour == "Leather Armour")
        {
            $armourDeduction = 10;
        }
    else if($armour == "Chain Mail")
        {
            $armourDeduction = 20;
        }
    else if($armour == "Plate Mail")
        {
            $armourDeduction = 20;
        }
    
    $adjustedMove = $move - $heavyDeduction - $armourDeduction;
    
    return $adjustedMove;

}





?>
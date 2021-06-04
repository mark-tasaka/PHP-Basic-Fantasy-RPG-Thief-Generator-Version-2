<?php


function minScore9($input)
{
    if($input < 9)
    {
        $input = 9;

    }

    return $input;

}

function dwarfMinCon($characterRace, $con)
{
    if($characterRace == "Dwarf")
    {
        if($con < 9)
        {
            $con = 9;

        }
    }

    return $con;
}


function dwarfMaxChar($characterRace, $char)
{
    if($characterRace == "Dwarf")
    {
        if($char > 17)
        {
            $char = 17;

        }
    }

    return $char;
}

function elfMinInt($characterRace, $int)
{
    if($characterRace == "Elf")
    {
        if($int < 9)
        {
            $int = 9;

        }
    }

    return $int;
}


function elfMaxCon($characterRace, $con)
{
    if($characterRace == "Elf")
    {
        if($con > 17)
        {
            $con = 17;

        }
    }

    return $con;
}

function halflingMinDex($characterRace, $dex)
{
    if($characterRace == "Halfling")
    {
        if($dex < 9)
        {
            $dex = 9;

        }
    }

    return $dex;
}


function halflingMaxStr($characterRace, $str)
{
    if($characterRace == "Halfling")
    {
        if($str > 17)
        {
            $str = 17;

        }
    }

    return $str;
}

?>
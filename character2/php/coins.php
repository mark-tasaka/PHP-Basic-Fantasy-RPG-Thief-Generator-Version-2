<?php

function getCoins($input)
{
        $coinArray = array();
        $silver = 0;
        $electrum = 0;
        $gold = 0;
        $platinum = 0;

        if($input == 1)
        {
                $silver = rand(1, 12) + rand(1, 12) + rand(1, 12);
                $electrum = rand(1, 12) + rand(1, 12);
                $gold = rand(1, 8) + rand(1, 8);
        }

        if($input == 2)
        {
                $silver = rand(1, 12) + rand(1, 12) + rand(1, 12);
                $electrum = rand(1, 12) + rand(1, 12) + rand(1, 12);
                $gold = rand(1, 12) + rand(1, 12) + rand(1, 12);
        }

        if($input == 3)
        {
                $silver = rand(1, 12) + rand(1, 12) + rand(1, 12);
                $electrum = rand(1, 12) + rand(1, 12) + rand(1, 12);
                $gold = rand(1, 12) + rand(1, 12) + rand(1, 12);
                $platinum = rand(1, 6) + rand(1, 6);
        }

        if($input == 4)
        {
                $electrum = rand(1, 12) + rand(1, 12) + rand(1, 12);
                $gold = rand(1, 12) + rand(1, 12) + rand(1, 12);
                $platinum = rand(1, 12) + rand(1, 12) + rand(1, 12);
        }

        if($input == 5)
        {
                $gold = rand(1, 10) + rand(1, 10) + rand(1, 10) + rand(1, 10) + rand(1, 10);
                $platinum = rand(1, 10) + rand(1, 10) + rand(1, 10) + rand(1, 10) + rand(1, 10);
        }

        array_push($coinArray, $platinum);
        array_push($coinArray, $gold);
        array_push($coinArray, $electrum);
        array_push($coinArray, $silver);

        return $coinArray;
}


function getCoinDescription($input)
{
        $descArray = array();

        if($input[0] != 0)
        {
                array_push($descArray, 'pp: ');
                array_push($descArray, $input[0]);
                array_push($descArray, '<br/>');
        }

        if($input[1] != 0)
        {
                array_push($descArray, 'gp: ');
                array_push($descArray, $input[1]);
                array_push($descArray, '<br/>');
        }

        if($input[2] != 0)
        {
                
                array_push($descArray, 'ep: ');
                array_push($descArray, $input[2]);
                array_push($descArray, '<br/>');
        }

        if($input[3] != 0)
        {
                array_push($descArray, 'sp: ');
                array_push($descArray, $input[3]);
        }

        return $descArray;
        
}



?>
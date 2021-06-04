<?php


    function getWeapon($input)
    {
        $a00 = array("Hand Axe", "", 5);
        $a01 = array("Battle Axe", "", 7);
        $a02 = array("Great Axe", "", 15);
        $a03 = array("Shortbow", "__/20 arrows", 2);
        $a04 = array("Longbow", "__/20 arrows", 2);
        $a05 = array("Light Crossbow", "__/20 quarrels", 7);
        $a06 = array("Heavy Crossbow", "__/20 quarrels", 14);
        $a07 = array("Dagger", "", 1);
        $a08 = array("Silver Dagger", "", 1);
        $a09 = array("Shortsword", "", 3);
        $a10 = array("Longsword/Scimitar", "", 4);
        $a11 = array("Two-Handed Sword", "", 10);
        $a12 = array("Warhammer", "", 6);
        $a13 = array("Mace", "", 10);
        $a14 = array("Maul", "", 16);
        $a15 = array("Club/Cudgel", "", 1);
        $a16 = array("Quarter Staff", "", 4);
        $a17 = array("Pole Arm", "", 15);
        $a18 = array("Sling", "__/12 bullets", 0);
        $a19 = array("Spear", "", 5);


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19);
        
        return $array1[$input];
        
    }


    function getRandomWeapons()
    {
        $weaponsCarried = array();
        $weaponsMelee = array(0, 1, 2, 9, 10, 11, 12, 13, 19);
        $weaponsAux = array(8, 14, 15, 16, 17, 18);
        $weaponsRange = array(3, 5);

        shuffle($weaponsMelee);
        shuffle($weaponsAux);
        shuffle($weaponsRange);

        $melee = rand(1,4);
        $aux = rand(0,2);

        for($i = 0; $i < $melee; ++$i)
        {
            array_push($weaponsCarried, $weaponsMelee[$i]);
        }

        array_push($weaponsCarried, $weaponsRange[0]);
        
        for($i = 0; $i < $aux; ++$i)
        {
            array_push($weaponsCarried, $weaponsAux[$i]);
        }

        return $weaponsCarried;

    }






?>
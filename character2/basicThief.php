<!DOCTYPE html>
<html>
<head>
<title>Basic Fantasy RPG Thief Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Basic Fantasy RPG thief Character Generator. Chris Gonnerman.">
	<meta name="keywords" content="Basic Fantasy RPG, Chris Gonnerman,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2021">
		

	<link rel="stylesheet" type="text/css" href="css/ll_thief.css">
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/armour.php';
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/coins.php';
    include 'php/classDetails.php';
    include 'php/characterRace.php';
    include 'php/demiHumanSaveModifier.php';
    include 'php/abilityScoreGen.php';
    include 'php/randomName.php';
    include 'php/minAbilityScore.php';
    include 'php/attackBonus.php';
    include 'php/primeRec.php';
    include 'php/encumbrance.php';
    include 'php/hitPoints.php';
    include 'php/thiefSkills.php';
    
    
        if(isset($_POST["theCharacterNameV2"]))
        {
            $characterName = $_POST["theCharacterNameV2"];
    
        }

                
        if(isset($_POST["theGenderV2"]))
        {
            $gender = $_POST["theGenderV2"];
        }
        
        if(isset($_POST['theCheckBoxRandomName']) && $_POST['theCheckBoxRandomName'] == 1) 
        {
            $characterName = getRandomName($gender) . " " . getSurname();
        } 

    
        if(isset($_POST["thePlayerNameV2"]))
        {
            $playerName = $_POST["thePlayerNameV2"];
        
        }    
    
        
        if(isset($_POST["theCharacterRaceV2"]))
        {
            $characterRace = $_POST["theCharacterRaceV2"];
        }
    
        if(isset($_POST["theLevelV2"]))
        {
            $level = $_POST["theLevelV2"];
        
        } 
    
    
    $exNext = experienceNextLevel($level);

            
    if(isset($_POST["theAbilityScoreV2"]))
    {
        $abilityScoreGen = $_POST["theAbilityScoreV2"];
    
    }
    
    
            
    $abilityScoreArray = array();
        
    for($i = 0; $i < 6; ++$i)
    {
        $abilityScore = rollAbilityScores ($abilityScoreGen);

        array_push($abilityScoreArray, $abilityScore);

    }       

    $strength = $abilityScoreArray[0];
    $intelligence = $abilityScoreArray[1];
    $wisdom = $abilityScoreArray[2];
    $dexterity = $abilityScoreArray[3];
    $constitution = $abilityScoreArray[4];
    $charisma = $abilityScoreArray[5];

    $strength = minScore9($strength);
    $constitution =  dwarfMinCon($characterRace, $constitution);
    $charisma = dwarfMaxChar($characterRace, $charisma);
    $intelligence = elfMinInt($characterRace, $intelligence);
    $constitution = elfMaxCon($characterRace, $constitution);
    $dexterity = halflingMinDex($characterRace, $dexterity);
    $strength = halflingMaxStr($characterRace, $strength);
    
    $strengthMod = getAbilityModifier($strength);
    $intelligenceMod = getAbilityModifier($intelligence);
    $wisdomMod = getAbilityModifier($wisdom);
    $dexterityMod = getAbilityModifier($dexterity);
    $constitutionMod = getAbilityModifier($constitution);
    $charismaMod = getAbilityModifier($charisma);


    $generationMessage = generationMesssage ($abilityScoreGen);

    
        if(isset($_POST["theArmourV2"]))
        {
            $armour = $_POST["theArmourV2"];
        }
    
        $armourName = getArmour($armour)[0];
        $armourDefense = getArmour($armour)[1];
        $armourWeight = getArmour($armour)[2];
    
        $totalAcDefense = $armourDefense;
        $totalArmourWeight = $armourWeight;
    
    
        if(isset($_POST["theGoldV2"]))
        {
            $coins = $_POST["theGoldV2"];
        }

        $coinArray = array();
        $coinDescArray = array();
        $coinWeight = 0;
        
        $coinArray = getCoins($coins);

        foreach($coinArray as $coin)
        {
            $coinWeight += $coin;
        }

        $coinWeight = ($coinWeight/10);
        $coinWeight = round($coinWeight);

        $coinDescArray = getCoinDescription($coinArray);

    
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
        $weaponWeight = array();
    
        if(isset($_POST['thecheckBoxRandomWeaponsV2']) && $_POST['thecheckBoxRandomWeaponsV2'] == 1) 
        {
            $weaponArray = getRandomWeapons();
    
        }
        else
        {
            if(isset($_POST["theWeaponsV2"]))
            {
                foreach($_POST["theWeaponsV2"] as $weapon)
                {
                    array_push($weaponArray, $weapon);
                }
            }
        }

    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
    $totalWeaponWeight = 0;
    
    foreach($weaponArray as $select)
    {
        array_push($weaponWeight, getWeapon($select)[2]);
        $totalWeaponWeight += getWeapon($select)[2];
    }

        $gearArray = array();
        $gearNames = array();
        $gearWeight = array();
    
    
        if(isset($_POST["theGearV2"]))
        {
            foreach($_POST["theGearV2"] as $weapon)
            {
                array_push($gearArray, $weapon);
            }
        }
    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }
        
        $totalGearWeight = 0;
    
        $gearArray = array();
        $gearNames = array();
        $gearWeight = array();

    //For Random Select gear
    if(isset($_POST['theCheckBoxRandomGear']) && $_POST['theCheckBoxRandomGear'] == 1) 
    {
        $gearArray = getRandomGear();

    }
    else
    {
        //For Manually select gear
        if(isset($_POST["theGearV2"]))
            {
                foreach($_POST["theGearV2"] as $gear)
                {
                    array_push($gearArray, $gear);
                }
            }

    }

        
    foreach($gearArray as $select)
    {
        array_push($gearNames, getGear($select)[0]);
        array_push($gearWeight, getGear($select)[1]);
    }

    foreach($gearWeight as $select)
    {
        $totalGearWeight += $select;
    }


    
    $totalWeightCarried = $totalArmourWeight + $totalWeaponWeight + $totalGearWeight + $coinWeight;

    $lightLoad = lightLoad ($characterRace, $strengthMod);
    $heavyLoad = heavyLoad ($characterRace, $strengthMod);
    $lightLoadChecked = lightLoadCheck ($lightLoad, $totalWeightCarried);
    $heavyLoadChecked = heavyLoadCheck ($lightLoad, $totalWeightCarried);
    $move = encumberanceMove ($lightLoad, $totalWeightCarried, $armourName);

    $hitPoints = getHitPoints($level, $constitutionMod);

    $baseAC = 11 + $dexterityMod;
    $armourClass = $baseAC + $totalAcDefense;

    $attackBonus = attackBonus ($level);
    $meleeAttack = $strengthMod + $attackBonus;
    $rangeAttack = $dexterityMod + $attackBonus;

    
    $demiHumanBreathSave = demiHumanBreathMod ($characterRace);
    $demiHumanPoisonSave = demiHumanPoisonMod($characterRace);
    $demiHumanPetrifySave = demiHumanPetrifyMod($characterRace);
    $demiHumanWandSave = demiHumanWandMod($characterRace);
    $demiHumanSpellSave = demiHumanSpellMod($characterRace);
    
    $vsBreathAttacks = saveBreathAttacks($level) - $demiHumanBreathSave;
    $vsPoisonDeath = savePoisonDeath ($level) - $demiHumanPoisonSave;
    $vsPetrify = savePetrify ($level) - $demiHumanPetrifySave;
    $vsWand = saveWand ($level) - $demiHumanWandSave;
    $vsSpell = saveSpell ($level) - $demiHumanSpellSave;
    
    $characterRaceTraits = demiHumanTraits ($characterRace);
    $primeReqBonus = primeReq($dexterity);
    $secondAttack = secondAttack($level);

    $openLocks = openLocks ($level);
    $removeTraps = removeTraps ($level);
    $pickPockets = pickPockets ($level);
    $moveSilently = moveSilently ($level);
    $climbWalls = climbWalls ($level);
    $hide = hide ($level);
    $listen = listen ($level);
    
    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
           
   <span id="strength">
        <?php
            echo $strength;
            ?>
        </span>

        
        <span id="strengthMod">
        <?php
            $strengthMod = getModSign($strengthMod);
            echo $strengthMod;
            ?>
        </span>

		<span id="intelligence">
        <?php
            echo $intelligence;
            ?>
        </span>

          <span id="intelligenceMod">
        <?php
            $intelligenceMod = getModSign($intelligenceMod);
            echo $intelligenceMod;
            ?>
        </span>

           

		<span id="wisdom">
        <?php
            echo $wisdom;
            ?>
        </span>

         <span id="wisdomMod">
        <?php
            $wisdomMod = getModSign($wisdomMod);
            echo $wisdomMod;
            ?>
        </span>

		<span id="dexterity">
        <?php
            echo $dexterity;
            ?>
        </span>

         <span id="dexterityMod">
        <?php
            $dexterityMod = getModSign($dexterityMod);
            echo $dexterityMod;
            ?>
        </span>
        
		<span id="constitution">
        <?php
            echo $constitution;
            ?>
        </span>

          <span id="constitutionMod">
        <?php
            $constitutionMod = getModSign($constitutionMod);
            echo $constitutionMod;
            ?>
        </span>

		<span id="charisma">
        <?php
            echo $charisma;
            ?>
        </span>

         <span id="charismaMod">
        <?php
            $charismaMod = getModSign($charismaMod);
            echo $charismaMod;
            ?>
        </span>

		  
        <span id="gender">
           <?php
           echo $gender;
           ?>
       </span>
       
       <span id="race">
           <?php
           echo $characterRace;
           ?>
       </span>

       
       <span id="saveBreathAttack">
           <?php
           echo $vsBreathAttacks;
           ?>
           </span>
       
       <span id="savePoisonDeath">
           <?php
           echo $vsPoisonDeath;
           ?>
           </span>

       <span id="savePetrify">
           <?php
           echo $vsPetrify;
           ?>
           </span>

       <span id="saveWands">
           <?php
           echo $vsWand;
           ?>
           </span>

       <span id="saveSpell">
           <?php
           echo $vsSpell;
           ?>
           </span>

           <!--
    $openLocks = openLocks ($level);
    $removeTraps = removeTraps ($level);
    $pickPockets = pickPockets ($level);
    $moveSilently = moveSilently ($level);
    $climbWalls = climbWalls ($level);
    $hide = hide ($level);
    $listen = listen ($level);-->
       
       <span id="openLocks">
       <?php
        echo $openLocks;
        ?>
       </span>
       
       <span id="removeTraps">
       <?php
        echo $removeTraps;
        ?>
       </span>
       
       <span id="pickPockets">
       <?php
        echo $pickPockets;
        ?>
       </span>
       
       <span id="moveSilently">
       <?php
        echo $moveSilently;
        ?>
       </span>
       
       <span id="climbWalls">
       <?php
        echo $climbWalls;
        ?>
       </span>
       
       <span id="hide">
       <?php
        echo $hide;
        ?>
       </span>
       
       <span id="listen">
       <?php
        echo $listen;
        ?>
       </span>





       
       <span id="dieRollMethod">
       <?php
        echo $generationMessage;
        ?>
       </span>
       
       <span id="melee">
       <?php
            $meleeAttack = getModSign($meleeAttack);
        echo $meleeAttack . '/' . $strengthMod;
        ?>
       </span>
       
       <span id="range">
       <?php
            $rangeAttack = getModSign($rangeAttack);
        echo $rangeAttack;
        ?>
       </span>
       
       
       <span id="lightLoad">
       <?php
        echo $lightLoad . ' lb';
        ?>
       </span>

       <span id="heavyLoad">
       <?php
        echo $heavyLoad . ' lb';
        ?>
       </span>
       
       <span id="lightLoadChecked">
       <?php
        echo $lightLoadChecked;
        ?>
       </span>
       
       <span id="heavyLoadChecked">
       <?php
        echo $heavyLoadChecked;
        ?>
       </span>
       
       
       <span id="move">
       <?php
        echo $move . '\'';
        ?>
       </span>
       
       
       <span id="class">Thief</span>
       
       
       
       <span id="exNextLevel">
           <?php
           echo $exNext;
           ?>
       
       </span>
       
  

       <span id="baseAc2">
           <?php
           echo $armourClass . ' (' . $baseAC . ')';
           ?>
       
       </span>
       
       <span id="hitPoints">
           <?php
                echo $hitPoints;
           ?>
       </span>
       
       
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>
       
              
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
	                 

              
       <span id="armourName">
           <?php
                echo $armourName;
           ?>
        </span>
              
              
       <span id="totalArmourWeight">
            <?php
                echo "Armour weight: " . $totalArmourWeight . " lb";
            ?>
       </span>
              
       
       <span id="weaponsList">
           <?php
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           ?>  
        </span>
       
            
       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       


       <span id="totalWeaponWeight">
           <?php
           echo "Weapons weight: " . $totalWeaponWeight . " lb";
           ?>
       </span>

              
       <span id="gearList">
           <?php
           
           $counter = count($gearNames);
           
           foreach($gearNames as $theGear)
           {
               --$counter;
               
               if($counter >= 1)
               {
                    echo $theGear;
                    echo ", ";
               }
               else
               {
                   echo " and "; 
                   echo $theGear;
               }
               
           }
           ?>
       </span>
           

	   	   
       
       <span id="totalGearWeight">
           <?php
           echo "Equipment weight: " . $totalGearWeight . " lb";
           ?>
       </span>
       


       
       <span id="totalWeightCarried">
           <?php
           echo $totalWeightCarried . " lb";
           ?>
       </span>
              
       
       <span id="wealth">
           <?php
           foreach($coinDescArray as $coin)
           {
               echo $coin;
           }
           ?>
       </span>
       
       <span id="coinWeight">
           <?php
               
           if($coinWeight === 0)
           {
               echo "";
           }
           else
           {
                echo "Coin weight: " . $coinWeight . " lb";
           }
           ?>
       </span>
       

       
       <span id="characterRaceTrait">
           <?php
           echo $characterRaceTraits . $primeReqBonus . $secondAttack;
           ?>
       </span>
       

       
	</section>
	

		
  <script>
      
  
       let imgData = "images/thief.png";
        $("#character_sheet").attr("src", imgData);
      

    
      
	 
  </script>
		
	
    
</body>
</html>
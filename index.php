<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Thief Character Generator Basic Fantasy RPG</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2021">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="launchPage/css/githubMCC.css"/> 
	<link rel="stylesheet" href="launchPage/css/bf_additions.css"/> 
	<link rel="stylesheet" href="launchPage/css/bf_additions2.css"/> 
	<link rel="stylesheet" href="launchPage/css/general.css"/> 
	<link rel="stylesheet" href="launchPage/css/basic_style.css"/> 
	
	<script type="text/javascript" src="launchPage/js/characterMenu.js"></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="launchPage/images/title.png" alt="Thief Character Generator Basic Fantasy RPG" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The Basic Fantasy RPG Thief Character Generator Version 2 has been designed primarily with PHP. Several functions are stored in external files, as a means of creating greater design efficiency, with the goal of writing a program with high cohesion and low coupling. In this way, this program simulates Object-Oriented design.</p>

        <br/>
        <br/>
            
  

            
		<form action="" id ="ThiefFormV3"  target="_blank" method="post">
    
  
 
    <div class="content9">
  
  <div id="characterNameV2">
  <span class="formIputDescription">Character's Name:</span>
  <input type="text" id="characterName" name="theCharacterNameV2" value="" class="nameBox">

  <br/>
  <br/>
            </div>
           

                  
           <div class="formIputDescription">
           <span class="footnote3"><input type="checkbox" id="checkBoxRandomNameV2" value="1" name="theCheckBoxRandomName" onClick="hideCharacterName()">Use Randomly Generated Name</span>
           </div>

           <br/>
  
  
  <span class="formIputDescription">Player's Name:</span>
  <input type="text" id="playerName" name="thePlayerNameV2" value="" class="nameBox">
  
  <br/>
  <br/>
                    
                           
  <span class="formIputDescription">Gender:</span>	
			  <select id="genderV2" name="theGenderV2" class="alignmentBox">	
				<option value="Male" selected>Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				<option value="Blank">Blank</option>
        </select>
        
        <br/>
        <br/>
            
      
                  
  <span class="formIputDescription">Character Level:</span>	
<select id="level" name="theLevelV2" class="alignmentBox">	
<option value="1" selected>1st Level, Thief</option>
<option value="2">2nd Level, Thief</option>
<option value="3">3rd Level, Thief</option>
<option value="4">4th Level, Thief</option>
<option value="5">5th Level, Thief</option>
<option value="6">6th Level, Thief</option>
<option value="7">7th Level, Thief</option>
<option value="8">8th Level, Thief</option>
<option value="9">9th Level, Thief</option>
<option value="10">10th Level, Thief</option>
<option value="11">11th Level, Thief</option>
<option value="12">12th Level, Thief</option>
<option value="13">13th Level, Thief</option>
<option value="14">14th Level, Thief</option>
<option value="15">15th Level, Thief</option>
<option value="16">16th Level, Thief</option>
<option value="17">17th Level, Thief</option>
<option value="18">18th Level, Thief</option>
<option value="19">19th Level, Thief</option>
<option value="20">20th Level, Thief</option>
</select>
  
  <br/>
  <br/>
      
          
      <span class="formIputDescription">Race:</span>	
<select id="chracterRace" name="theCharacterRaceV2" class="alignmentBox">	
<option value="Human" selected>Human</option>
<option value="Dwarf">Dwarf</option>
<option value="Elf">Elf</option>
<option value="Halfling">Halfling</option>
</select>
      
      
  <br/>
  <br/>
                  
      <span class="formIputDescription">Ability Scores:</span>	
<select id="abilityScores" name="theAbilityScoreV2" class="alignmentBox">	
			<option value="1" selected>3d6 (Old School)</option>
			<option value="2">4d6, drop the lowest</option>
			<option value="3">5d6, use the 3 highest</option>
			<option value="4">2d6 + 6</option>
</select>
  
      
  <br/>
  <br/>
      
                  

                  
  <span class="formIputDescription">Armour:</span>	
<select id="armour" name="theArmourV2" class="alignmentBox">			
      <option value="0" >No Armour</option>
<option value="1" selected>Leather Armour</option>
</select>
  
  <br/>
  <br/>         
      
      
  <span class="formIputDescription">Wealth:</span>	
<select id="gold" name="theGoldV2" class="alignmentBox">			
      <option value="0" >None</option>
<option value="1">3d12 sp, 2d12 ep, 2d8 gp&#42;</option>
<option value="2">3d12 sp, 3d12 ep, 3d12 gp&#42;</option>
<option value="3" selected>3d12 sp, 3d12 ep, 3d12 gp, 2d6 pp&#42;</option>
<option value="4">3d12 ep, 3d12 gp, 2d12 pp&#42;</option>
<option value="5">5d10 gp, 5d10 pp&#42;</option>
</select>
      <p>
     <span class="footnote2">&#42;sp = silver, ep = electrum, gp = gold, pp = platinum</span></p>
  
  <br/>
      
  <div class="formIputDescription2">
                  <span class="weaponBoxHeader"><input type="checkbox" id="checkBoxRandomWeaponsV2" value="1" name="thecheckBoxRandomWeaponsV2" onClick="hideWeapons()">&nbsp&nbspRandomly Generate Weapons</span>
                  </div>
       
                  <br/>


                <div id="weaponsSelectionV2">
      <span class="weaponBoxHeader">Weapons:</span>
      <br/><br/>
      
  <div id="weaponsGroupings">
  <span class="weaponSubHead">Axes:</span><br/>
  <input type="checkbox" name="theWeaponsV2[]" value="0"> Hand Axe<br/>
      <input type="checkbox" name="theWeaponsV2[]" value="1"> Battle Axe<br/>  
      <input type="checkbox" name="theWeaponsV2[]" value="2"> Great Axe<br/>  
      <span class="weaponSubHead">Bows:</span><br/>
      <input type="checkbox" name="theWeaponsV2[]" value="3"> Shortbow<br/>  
      <input type="checkbox" name="theWeaponsV2[]" value="4"> Longbow<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="5"> Light Crossbow<br/>   
      <input type="checkbox" name="theWeaponsV2[]" value="6"> Heavy Crossbow<br/> 
     
      <span class="weaponSubHead">Daggers:</span><br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="7"> Dagger<br/>  
      <input type="checkbox" name="theWeaponsV2[]" value="8"> Silver Dagger<br/> 
      <span class="weaponSubHead">Swords:</span><br/>
      <input type="checkbox" name="theWeaponsV2[]" value="9"> Shortsword<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="10"> Longsword/Scimitar<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="11"> Two-handed Sword<br/> 
      <span class="weaponSubHead">Hammers and Maces:</span><br/>
      <input type="checkbox" name="theWeaponsV2[]" value="12"> Warhammer<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="13"> Mace<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="14"> Maul<br/> 
      <span class="weaponSubHead">Other:</span><br/>
      <input type="checkbox" name="theWeaponsV2[]" value="15"> Club/Crugel<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="16"> Quarterstaff<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="17"> Pole Arm<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="18"> Sling<br/> 
      <input type="checkbox" name="theWeaponsV2[]" value="19"> Spear<br/> 

      
      
      </div>
      <br/>
      <br/>
      </div>

      
      <div class="formIputDescription2">
                  <span class="weaponBoxHeader"><input type="checkbox" id="checkBoxRandomGearV2" value="1" name="theCheckBoxRandomGear" onClick="hideGear()">&nbsp&nbspRandomly Generated Gear</span>
                  </div>
       


                <div id="gearSelectionV2">
                  <br/>
                
      
      <span class="weaponBoxHeader">Equipment:</span>
      <br/><br/>
      
  <div id="gearGroupings">
  <input type="checkbox" name="theGearV2[]" value="0"> Backpack<br/>
      <input type="checkbox" name="theGearV2[]" value="1"> Belt Pouch<br/>  
      <input type="checkbox" name="theGearV2[]" value="2"> Bit and bridle<br/>  
      <input type="checkbox" name="theGearV2[]" value="3"> Candles, 12<br/>  
      <input type="checkbox" name="theGearV2[]" value="4"> Chalk, small bag<br/>  
      <input type="checkbox" name="theGearV2[]" value="5"> Cloak<br/>   
      <input type="checkbox" name="theGearV2[]" value="6"> Clothing, commoners<br/>  
      <input type="checkbox" name="theGearV2[]" value="7"> Glass bottle or vial<br/>  
      <input type="checkbox" name="theGearV2[]" value="8"> Grappling Hook<br/> 
      <input type="checkbox" name="theGearV2[]" value="9"> Holy Symbol<br/> 
      <input type="checkbox" name="theGearV2[]" value="10"> Holy Water, vial<br/> 
      <input type="checkbox" name="theGearV2[]" value="11"> Ink, jar<br/> 
      <input type="checkbox" name="theGearV2[]" value="12"> Iron Spikes, 12<br/> 
      <input type="checkbox" name="theGearV2[]" value="13"> Ladder, 10 feet<br/> 
      <input type="checkbox" name="theGearV2[]" value="14"> Lantern<br/> 
      <input type="checkbox" name="theGearV2[]" value="15"> Lantern Bullseye<br/> 
      <input type="checkbox" name="theGearV2[]" value="16"> Lantern, Hooded<br/> 
      <input type="checkbox" name="theGearV2[]" value="17"> Map or Scroll case<br/> 
      <input type="checkbox" name="theGearV2[]" value="18"> Mirror, small metal<br/> 
      <input type="checkbox" name="theGearV2[]" value="19"> Oil, flask<br/> 
      <input type="checkbox" name="theGearV2[]" value="20"> Padlock, 2 keys<br/> 
      <input type="checkbox" name="theGearV2[]" value="21"> Paper, sheet<br/> 
      <input type="checkbox" name="theGearV2[]" value="22"> Pole, 10' wooded<br/> 
      <input type="checkbox" name="theGearV2[]" value="23"> Quill<br/> 
      <input type="checkbox" name="theGearV2[]" value="24"> Quill Knife<br/> 
      <input type="checkbox" name="theGearV2[]" value="25"> Quiver or Bolt Case<br/> 
      <input type="checkbox" name="theGearV2[]" value="26"> Rations (dry), 1 week<br/> 
      <input type="checkbox" name="theGearV2[]" value="27"> Rope, Hemp (50')<br/> 
      <input type="checkbox" name="theGearV2[]" value="28"> Rope, Silk (50')<br/> 
      <input type="checkbox" name="theGearV2[]" value="29"> Sack, Large<br/>  
      <input type="checkbox" name="theGearV2[]" value="30"> Sack, Small<br/>  
      <input type="checkbox" name="theGearV2[]" value="31"> Saddle, Pack<br/>  
      <input type="checkbox" name="theGearV2[]" value="32"> Saddle, Riding<br/>  
      <input type="checkbox" name="theGearV2[]" value="33"> Saddlebags, pair<br/>  
      <input type="checkbox" name="theGearV2[]" value="34"> Spellbook (128 pages)<br/>   
      <input type="checkbox" name="theGearV2[]" value="35"> Tent, large (10 men)<br/>   
      <input type="checkbox" name="theGearV2[]" value="36"> Tent, small (1 man)<br/>   
      <input type="checkbox" name="theGearV2[]" value="37"> Thieves' Tools<br/>   
      <input type="checkbox" name="theGearV2[]" value="38"> Tinderbox<br/>   
      <input type="checkbox" name="theGearV2[]" value="39"> Torches, 6<br/>   
      <input type="checkbox" name="theGearV2[]" value="40"> Whetstone<br/>   
      <input type="checkbox" name="theGearV2[]" value="41"> Whistle<br/>   
      <input type="checkbox" name="theGearV2[]" value="42"> Waterskin/wineskin<br/>   
      <input type="checkbox" name="theGearV2[]" value="43"> Winter blanket<br/>   
      </div>

      </div>
      
      <br/>
      <br/>


    
    
            
		<div class="content8">
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
            <br/>
            <br/>
            
				
            </div>
            
            </form>

    
                
                	
                <script>
        
                    
                    $("#generate_characters2").click(function(){
         
    
                   $("#ThiefFormV3").attr('action', "character2/basicThief.php");

                     });


     
                    
                </script>
        
                
    
                
    </section>


</body>
</html>
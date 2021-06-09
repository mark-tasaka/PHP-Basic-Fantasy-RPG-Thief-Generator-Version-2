

//Version 2: Hide unhide character's name field
                
function hideCharacterName()               
 {    

    if ($('#checkBoxRandomNameV2').is(":checked"))
    {
      $('#characterNameV2').hide();
    }
    else
    {
      $('#characterNameV2').show();
    }


}

function hideGear()        
{

    if ($('#checkBoxRandomGearV2').is(":checked"))
    {
      $('#gearSelectionV2').hide();
    }
    else
    {
      $('#gearSelectionV2').show();
    }

}
  


function hideWeapons()        
{

    if ($('#checkBoxRandomWeaponsV2').is(":checked"))
    {
      $('#weaponsSelectionV2').hide();
    }
    else
    {
      $('#weaponsSelectionV2').show();
    }

}
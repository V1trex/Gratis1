<?php

if(!isset($_POST['submit'])) {
    
    echo "
        <form action = '' method='POST'>
            <input type = 'text' name = 'level' placeholder = 'Enter character level'/> - Level of your character (for item stats) <br />
            <input type = 'text' name = 'req_level' placeholder = 'Enter req level'/> - Req level for IlVL and stats<br />
            <input type = 'text' name = 'type' placeholder = 'Role'/> - Enter role caster/healer/melee in lowercase ! <br />
            <input type = 'text' name = 'armor' placeholder = 'Enter armor type'/> - Enter armor type plate/mail/leather/cloth in lowercase !<br />
            <input type = 'text' name = 'multiplier' placeholder = 'multiplier' value = '1'/> - Multiplies values by X (Deafault 1)<br />
            <input type = 'submit' name = 'submit' value = 'calculate'/>
        </form>
    ";
    
    
} else {

    $level = $_POST['level'];
    $req = $_POST['req_level'];
    $type = $_POST['type'];
    $itemMaterial = $_POST['armor'];
    $str = $level * 2 / 1.2;
    $attackPower = $level * 3 / 1.2;
    $int = $level * 2 / 1.2;
    $spellPower = $level * 6 / 1.2;
    $spirit = $level * 2 / 1.2;
    $multiplier = $_POST['multiplier'];

    $crit = array(
        'plate' => '4',
        'mail' => '3.5',
        'leather' => '3.2',
        'cloth' => '2.9'
    );


    $stamina = array(
        'plate'=>'3',
        'mail'=>'2.7',
        'leather'=>'2.4',
        'cloth'=>'2.1'
    );
    
    

    $armor = array(
        'plate' => '4',
        'mail' => '3.5',
        'leather' => '3.2',
        'cloth' => '2.9',
    );

    $armorPenetration = array (
        'plate' => '3',
        'mail' => '3.2',
        'leather' => '3.4',
    );

    switch($itemMaterial){
        
        case 'plate':
            $armorC = $level * $armor['plate'] ;
            $staminaC =  $stamina['plate'] * $level;
            $critC = $level * 1.5 / $crit['plate'];
            $hasteC = $level * 1.9 / $crit['plate'];
            $armorPenetrationC = $level * 1.2 / $crit['plate'];
        Break;
          case 'mail':
            $armorC =  $level * $armor['mail'] ;
            $staminaC =  $stamina['mail'] * $level;
            $critC = $level * 1.5 / $crit['mail'];
            $hasteC = $level * 1.9 / $crit['mail'];
            $armorPenetrationC = $level * 1.2 / $crit['plate'];
        Break;
          case 'leather':
            $armorC =  $level * $armor['leather'] ;
            $staminaC =  $stamina['leather'] * $level;
            $critC = $level * 1.5 / $crit['leather'];
            $hasteC = $level * 1.9 / $crit['leather'];
            $armorPenetrationC = $level * 1.2 / $crit['plate'];
        Break;
          case 'cloth':
            $armorC =  $level * $armor['cloth'] ;
            $staminaC =  $stamina['cloth'] * $level;
            $critC = $level * 1.5 / $crit['cloth'];
            $hasteC = $level * 1.9 / $crit['cloth'];
        Break;
        
        Default:
        Break;
        
    }
    


    switch($type) {
        
        case 'melee' :
            $mainStat = $str;
            $mainStat1 = $attackPower;
            $mainStat3 = "";
            $name = "strength";
            $name2 = "Attack power";
            $name3 = "Spirit";
            $offStat1 = $critC;
            $offStat2 = $hasteC;
            $offStat3 = $armorPenetrationC;
            $offStatname1 = "Critical Strike";
            $offStatname2 = "Haste Rating";
            $offStatname3 = "Armor Penetration";
        Break;
         case 'caster' :
            $mainStat = $int;
            $mainStat1 = $spellPower;
            $mainStat3 = "";
            $name = "Intelect";
            $name2 = "Spell power";
            $name3 = "Spirit";
            $offStat1 = $critC;
            $offStat2 = $hasteC;
            $offStat3 = "";
            $offStatname1 = "Critical Strike";
            $offStatname2 = "Haste Rating";
            $offStatname3 = "Armor penetration";
        Break;
        
         case 'healer' :
            $mainStat = $int;
            $mainStat1 = $spellPower / 1.20;
            $mainStat3 = $spirit;
            $name = "Intelect";
            $name2 = "Spell power";
            $name3 = "Spirit";
            $offStat1 = $critC / 1.20;
            $offStat2 = $hasteC;
            $offStat3 = "";
            $offStatname1 = "Critical Strike";
            $offStatname2 = "Haste Rating";
            $offStatname3 = "Armor Penetration";
        Break;
        
        
        Default:
        Break;
    }
    
    $ilvl = pow($req,1.5) / 10;

    echo "Items for level $level <br />
    iLVL ".round($ilvl)." <br />
    Armor : ". round($armorC) ." <br />
    + ".round($staminaC*$multiplier)." Stamina<br />
    + ".round($mainStat*$multiplier)." $name<br />
    + ".round($mainStat1*$multiplier)." $name2<br />
    + ".round($mainStat3*$multiplier)." $name3<br />
    + ".round($offStat1)." $offStatname1<br />
    + ".round($offStat2*$multiplier)." $offStatname2<br />
    + ".round($offStat3)." $offStatname3<br />
    ";
}
?>
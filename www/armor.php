<html>
<head>
        <style>
                body {
                        font-size:11px;
                        color:#000;
                        font-family:tahoma;
                        background-color:#eee;
                }
        </style>
		  <title>Gratis</title>
</head>
<?php

if(isset($_POST['submit'])) {

    
    echo "
            REPLACE INTO `item_template` (`entry`, `class`, `subclass`, `SoundOverrideSubclass`, `name`, `displayid`, `Quality`, `Flags`, `FlagsExtra`, `BuyCount`, `BuyPrice`, `SellPrice`, `InventoryType`, `AllowableClass`, `AllowableRace`, `ItemLevel`, `RequiredLevel`, `RequiredSkill`, `RequiredSkillRank`, `requiredspell`, `requiredhonorrank`, `RequiredCityRank`, `RequiredReputationFaction`, `RequiredReputationRank`, `maxcount`, `stackable`, `ContainerSlots`, `StatsCount`, `stat_type1`, `stat_value1`, `stat_type2`, `stat_value2`, `stat_type3`, `stat_value3`, `stat_type4`, `stat_value4`, `stat_type5`, `stat_value5`, `stat_type6`, `stat_value6`, `stat_type7`, `stat_value7`, `stat_type8`, `stat_value8`, `stat_type9`, `stat_value9`, `stat_type10`, `stat_value10`, `ScalingStatDistribution`, `ScalingStatValue`, `dmg_min1`, `dmg_max1`, `dmg_type1`, `dmg_min2`, `dmg_max2`, `dmg_type2`, `armor`, `holy_res`, `fire_res`, `nature_res`, `frost_res`, `shadow_res`, `arcane_res`, `delay`, `ammo_type`, `RangedModRange`, `spellid_1`, `spelltrigger_1`, `spellcharges_1`, `spellppmRate_1`, `spellcooldown_1`, `spellcategory_1`, `spellcategorycooldown_1`, `spellid_2`, `spelltrigger_2`, `spellcharges_2`, `spellppmRate_2`, `spellcooldown_2`, `spellcategory_2`, `spellcategorycooldown_2`, `spellid_3`, `spelltrigger_3`, `spellcharges_3`, `spellppmRate_3`, `spellcooldown_3`, `spellcategory_3`, `spellcategorycooldown_3`, `spellid_4`, `spelltrigger_4`, `spellcharges_4`, `spellppmRate_4`, `spellcooldown_4`, `spellcategory_4`, `spellcategorycooldown_4`, `spellid_5`, `spelltrigger_5`, `spellcharges_5`, `spellppmRate_5`, `spellcooldown_5`, `spellcategory_5`, `spellcategorycooldown_5`, `bonding`, `description`, `PageText`, `LanguageID`, `PageMaterial`, `startquest`, `lockid`, `Material`, `sheath`, `RandomProperty`, `RandomSuffix`, `block`, `itemset`, `MaxDurability`, `area`, `Map`, `BagFamily`, `TotemCategory`, `socketColor_1`, `socketContent_1`, `socketColor_2`, `socketContent_2`, `socketColor_3`, `socketContent_3`, `socketBonus`, `GemProperties`, `RequiredDisenchantSkill`, `ArmorDamageModifier`, `duration`, `ItemLimitCategory`, `HolidayId`, `ScriptName`, `DisenchantID`, `FoodType`, `minMoneyLoot`, `maxMoneyLoot`, `flagsCustom`, `VerifiedBuild`)
            VALUES
    ";

    $i = -1; // shut up the error
    $count = $_POST['count']; // tiers count
    while ($i++ < $count) {


    // configs

    $multiplier = pow($_POST['multiplier'],$i); // multiplier old item stat * x %
    //$ilvlmultipler = pow(1.10,$i); // ilvl multiplier

    $reqlvl = $_POST['req'];
    $ilvl = $_POST['ilvl']; // ilvl for first tier

    $stat_type1 =
    array(
    '1' => $_POST['stat_1-1'],
    '2' => $_POST['stat_2-1'],
    '3' => $_POST['stat_3-1'],
    '4' => $_POST['stat_4-1'],
    '5' => $_POST['stat_5-1'],
    '6' => $_POST['stat_6-1'],
    '7' => $_POST['stat_7-1'],
    '8' => $_POST['stat_8-1'],
    '9' => $_POST['stat_9-1'],
    '10' => $_POST['stat_10-1']
    );
        $stat_type2 =
    array(
    '1' => $_POST['stat_1-2'],
    '2' => $_POST['stat_2-2'],
    '3' => $_POST['stat_3-2'],
    '4' => $_POST['stat_4-2'],
    '5' => $_POST['stat_5-2'],
    '6' => $_POST['stat_6-2'],
    '7' => $_POST['stat_7-2'],
    '8' => $_POST['stat_8-2'],
    '9' => $_POST['stat_9-2'],
    '10' => $_POST['stat_10-2']
    );
        $stat_type3 =
    array(
    '1' => $_POST['stat_1-3'],
    '2' => $_POST['stat_2-3'],
    '3' => $_POST['stat_3-3'],
    '4' => $_POST['stat_4-3'],
    '5' => $_POST['stat_5-3'],
    '6' => $_POST['stat_6-3'],
    '7' => $_POST['stat_7-3'],
    '8' => $_POST['stat_8-3'],
    '9' => $_POST['stat_9-3'],
    '10' => $_POST['stat_10-3']
    );
        $stat_type4 =
    array(
    '1' => $_POST['stat_1-4'],
    '2' => $_POST['stat_2-4'],
    '3' => $_POST['stat_3-4'],
    '4' => $_POST['stat_4-4'],
    '5' => $_POST['stat_5-4'],
    '6' => $_POST['stat_6-4'],
    '7' => $_POST['stat_7-4'],
    '8' => $_POST['stat_8-4'],
    '9' => $_POST['stat_9-4'],
    '10' => $_POST['stat_10-4']
    );
             $stat_type5 =
    array(
    '1' => $_POST['stat_1-5'],
    '2' => $_POST['stat_2-5'],
    '3' => $_POST['stat_3-5'],
    '4' => $_POST['stat_4-5'],
    '5' => $_POST['stat_5-5'],
    '6' => $_POST['stat_6-5'],
    '7' => $_POST['stat_7-5'],
    '8' => $_POST['stat_8-5'],
    '9' => $_POST['stat_9-5'],
    '10' => $_POST['stat_10-5']
    );
             $stat_type6 =
    array(
    '1' => $_POST['stat_1-6'],
    '2' => $_POST['stat_2-6'],
    '3' => $_POST['stat_3-6'],
    '4' => $_POST['stat_4-6'],
    '5' => $_POST['stat_5-6'],
    '6' => $_POST['stat_6-6'],
    '7' => $_POST['stat_7-6'],
    '8' => $_POST['stat_8-6'],
    '9' => $_POST['stat_9-6'],
    '10' => $_POST['stat_10-6']
    );
             $stat_type7 =
    array(
    '1' => $_POST['stat_1-7'],
    '2' => $_POST['stat_2-7'],
    '3' => $_POST['stat_3-7'],
    '4' => $_POST['stat_4-7'],
    '5' => $_POST['stat_5-7'],
    '6' => $_POST['stat_6-7'],
    '7' => $_POST['stat_7-7'],
    '8' => $_POST['stat_8-7'],
    '9' => $_POST['stat_9-7'],
    '10' => $_POST['stat_10-7']
    );
             $stat_type8 =
    array(
    '1' => $_POST['stat_1-8'],
    '2' => $_POST['stat_2-8'],
    '3' => $_POST['stat_3-8'],
    '4' => $_POST['stat_4-8'],
    '5' => $_POST['stat_5-8'],
    '6' => $_POST['stat_6-8'],
    '7' => $_POST['stat_7-8'],
    '8' => $_POST['stat_8-8'],
    '9' => $_POST['stat_9-8'],
    '10' => $_POST['stat_10-8']
    );
    //

    // edit stat value
    $stat_value1 =
    array(
    '1' => $_POST['stat_value_1-1'],
    '2' => $_POST['stat_value_2-1'],
    '3' => $_POST['stat_value_3-1'],
    '4' => $_POST['stat_value_4-1'],
    '5' => $_POST['stat_value_5-1'],
    '6' => $_POST['stat_value_6-1'],
    '7' => $_POST['stat_value_7-1'],
    '8' => $_POST['stat_value_8-1'],
    '9' => $_POST['stat_value_9-1'],
    '10' => $_POST['stat_value_10-1']
    );
        
    $stat_value2 =
    array(
    '1' => $_POST['stat_value_1-2'],
    '2' => $_POST['stat_value_2-2'],
    '3' => $_POST['stat_value_3-2'],
    '4' => $_POST['stat_value_4-2'],
    '5' => $_POST['stat_value_5-2'],
    '6' => $_POST['stat_value_6-2'],
    '7' => $_POST['stat_value_7-2'],
    '8' => $_POST['stat_value_8-2'],
    '9' => $_POST['stat_value_9-2'],
    '10' => $_POST['stat_value_10-2']
    );
        
    $stat_value3 =
    array(
    '1' => $_POST['stat_value_1-3'],
    '2' => $_POST['stat_value_2-3'],
    '3' => $_POST['stat_value_3-3'],
    '4' => $_POST['stat_value_4-3'],
    '5' => $_POST['stat_value_5-3'],
    '6' => $_POST['stat_value_6-3'],
    '7' => $_POST['stat_value_7-3'],
    '8' => $_POST['stat_value_8-3'],
    '9' => $_POST['stat_value_9-3'],
    '10' => $_POST['stat_value_10-3']
    );
        
    $stat_value4 =
    array(
    '1' => $_POST['stat_value_1-4'],
    '2' => $_POST['stat_value_2-4'],
    '3' => $_POST['stat_value_3-4'],
    '4' => $_POST['stat_value_4-4'],
    '5' => $_POST['stat_value_5-4'],
    '6' => $_POST['stat_value_6-4'],
    '7' => $_POST['stat_value_7-4'],
    '8' => $_POST['stat_value_8-4'],
    '9' => $_POST['stat_value_9-4'],
    '10' => $_POST['stat_value_10-4']
    );
        
    $stat_value5 =
    array(
    '1' => $_POST['stat_value_1-5'],
    '2' => $_POST['stat_value_2-5'],
    '3' => $_POST['stat_value_3-5'],
    '4' => $_POST['stat_value_4-5'],
    '5' => $_POST['stat_value_5-5'],
    '6' => $_POST['stat_value_6-5'],
    '7' => $_POST['stat_value_7-5'],
    '8' => $_POST['stat_value_8-5'],
    '9' => $_POST['stat_value_9-5'],
    '10' => $_POST['stat_value_10-5']
    );
     $stat_value6 =
    array(
    '1' => $_POST['stat_value_1-6'],
    '2' => $_POST['stat_value_2-6'],
    '3' => $_POST['stat_value_3-6'],
    '4' => $_POST['stat_value_4-6'],
    '5' => $_POST['stat_value_5-6'],
    '6' => $_POST['stat_value_6-6'],
    '7' => $_POST['stat_value_7-6'],
    '8' => $_POST['stat_value_8-6'],
    '9' => $_POST['stat_value_9-6'],
    '10' => $_POST['stat_value_10-6']
    );
         $stat_value7 =
    array(
    '1' => $_POST['stat_value_1-7'],
    '2' => $_POST['stat_value_2-7'],
    '3' => $_POST['stat_value_3-7'],
    '4' => $_POST['stat_value_4-7'],
    '5' => $_POST['stat_value_5-7'],
    '6' => $_POST['stat_value_6-7'],
    '7' => $_POST['stat_value_7-7'],
    '8' => $_POST['stat_value_8-7'],
    '9' => $_POST['stat_value_9-7'],
    '10' => $_POST['stat_value_10-7']
    );
         $stat_value8 =
    array(
    '1' => $_POST['stat_value_1-8'],
    '2' => $_POST['stat_value_2-8'],
    '3' => $_POST['stat_value_3-8'],
    '4' => $_POST['stat_value_4-8'],
    '5' => $_POST['stat_value_5-8'],
    '6' => $_POST['stat_value_6-8'],
    '7' => $_POST['stat_value_7-8'],
    '8' => $_POST['stat_value_8-8'],
    '9' => $_POST['stat_value_9-8'],
    '10' => $_POST['stat_value_10-8']
    );
    // edit if stat will be affected or no by multiplier 0 affect 1 disable
    $effect1 =
   @array(
    '1' => $_POST['affect_1-1'],
    '2' => $_POST['affect_2-1'],
    '3' => $_POST['affect_3-1'],
    '4' => $_POST['affect_4-1'],
    '5' => $_POST['affect_5-1'],
    '6' => $_POST['affect_6-1'],
    '7' => $_POST['affect_7-1'],
    '8' => $_POST['affect_8-1'],
    '9' => $_POST['affect_9-1'],
    '10' => $_POST['affect_10-1']
    );
    
    $effect2 =
   @array(
    '1' => $_POST['affect_1-2'],
    '2' => $_POST['affect_2-2'],
    '3' => $_POST['affect_3-2'],
    '4' => $_POST['affect_4-2'],
    '5' => $_POST['affect_5-2'],
    '6' => $_POST['affect_6-2'],
    '7' => $_POST['affect_7-2'],
    '8' => $_POST['affect_8-2'],
    '9' => $_POST['affect_9-2'],
    '10' => $_POST['affect_10-2']
    );
        
    $effect3 =
   @array(
    '1' => $_POST['affect_1-3'],
    '2' => $_POST['affect_2-3'],
    '3' => $_POST['affect_3-3'],
    '4' => $_POST['affect_4-3'],
    '5' => $_POST['affect_5-3'],
    '6' => $_POST['affect_6-3'],
    '7' => $_POST['affect_7-3'],
    '8' => $_POST['affect_8-3'],
    '9' => $_POST['affect_9-3'],
    '10' => $_POST['affect_10-3']
    );
      $effect4 =
   @array(
    '1' => $_POST['affect_1-4'],
    '2' => $_POST['affect_2-4'],
    '3' => $_POST['affect_3-4'],
    '4' => $_POST['affect_4-4'],
    '5' => $_POST['affect_5-4'],
    '6' => $_POST['affect_6-4'],
    '7' => $_POST['affect_7-4'],
    '8' => $_POST['affect_8-4'],
    '9' => $_POST['affect_9-4'],
    '10' => $_POST['affect_10-4']
    );
      $effect5 =
   @array(
    '1' => $_POST['affect_1-5'],
    '2' => $_POST['affect_2-5'],
    '3' => $_POST['affect_3-5'],
    '4' => $_POST['affect_4-5'],
    '5' => $_POST['affect_5-5'],
    '6' => $_POST['affect_6-5'],
    '7' => $_POST['affect_7-5'],
    '8' => $_POST['affect_8-5'],
    '9' => $_POST['affect_9-5'],
    '10' => $_POST['affect_10-5']
    );
      $effect6 =
   @array(
    '1' => $_POST['affect_1-6'],
    '2' => $_POST['affect_2-6'],
    '3' => $_POST['affect_3-6'],
    '4' => $_POST['affect_4-6'],
    '5' => $_POST['affect_5-6'],
    '6' => $_POST['affect_6-6'],
    '7' => $_POST['affect_7-6'],
    '8' => $_POST['affect_8-6'],
    '9' => $_POST['affect_9-6'],
    '10' => $_POST['affect_10-6']
    );
      $effect7 =
   @array(
    '1' => $_POST['affect_1-7'],
    '2' => $_POST['affect_2-7'],
    '3' => $_POST['affect_3-7'],
    '4' => $_POST['affect_4-7'],
    '5' => $_POST['affect_5-7'],
    '6' => $_POST['affect_6-7'],
    '7' => $_POST['affect_7-7'],
    '8' => $_POST['affect_8-7'],
    '9' => $_POST['affect_9-7'],
    '10' => $_POST['affect_10-7']
    );
      $effect8 =
   @array(
    '1' => $_POST['affect_1-8'],
    '2' => $_POST['affect_2-8'],
    '3' => $_POST['affect_3-8'],
    '4' => $_POST['affect_4-8'],
    '5' => $_POST['affect_5-8'],
    '6' => $_POST['affect_6-8'],
    '7' => $_POST['affect_7-8'],
    '8' => $_POST['affect_8-8'],
    '9' => $_POST['affect_9-8'],
    '10' => $_POST['affect_10-8']
    );
        



    $quality = $_POST['quality']; // 0 = Poor 1 = Common 2 = Uncommon 3 = Rare 4 = Epic 5 = Legendary 6 = Artifact 7 = Heirloom
    $armor = $_POST['armor']; // armor
    $armor *= $multiplier;
    $armor = round($armor);
    $start_entry = $_POST['entry']; // start entry
    $aclass = $_POST['aclass']; // allowable class number
    $material = $_POST['material']; // item material, usually subclass // 4 plate // 3 mail // 2 leather // 1 cloth
    //
    
        
	$cname = isset($_POST['cname']) ? $_POST['cname'] : NULL;
    $c_name = "";
        
    if($cname > 0) {
        
        switch($aclass) {
            
            case '1':
            $c_name = "Warior";
            Break; 
            
            case '2':
            $c_name = "Paladin";
            Break; 
            
            case '4':
            $c_name = "Hunter";
            Break; 
            
            case '8':
            $c_name = "Rogue";
            Break;
            
            case '16':
            $c_name = "Priest";
            Break; 
            
            case '32':
            $c_name = "Death Knight";
            Break;
            
            case '64':
            $c_name = "Shaman";
            Break; 
            
            case '128':
            $c_name = "Mage";
            Break;
            
			case '256':
            $c_name = "Warlock";
            Break;
            
			case '1024':
            $c_name = "Druid";
            Break;
			
			Default:
			echo "";
			Break;
            
            
        }
        
        
    }
        
    $ending = "";
    $ending1 = "";
        
        if(isset($_POST['item_color'])) {
            $ending1 = "|r";
            
            if($cname > 0 && $_POST['item_color'] != "") {
            
                $ending = "|r";
                
            }
            
        }
        
        
    $colors = isset($_POST['colors']) ? $_POST['colors'] : NULL;
    $c_color = "";
        
    if($colors > 0) {
        
        switch($aclass) {
            
            case '1':
            $c_color = "|cffC79C6E";  // warrior
            Break; 
            
            case '2':
            $c_color = "|cffF58CBA"; // paladin
            Break;  
            
            case '4':
            $c_color = "|cffABD473"; // hunter 
            Break;
            
            case '8':
            $c_color = "|cffFFF569"; // Rogue
            Break;
            
			case '16':
            $c_color = "|cffFFFFFF"; // Priest
            Break;
            
            case '32':
            $c_color = "|cffC41F3B"; // Death Kknight
            Break; 
            
            case '62':
            $c_color = "|cff0070DE"; // Shaman
            Break;
            
			case '128':
            $c_color = "|cff69CCF0"; // Mage
            Break;
            
			case '256':
            $c_color = "|cff9482C9"; // Warlock
            Break;
            
            case '1024':
            $c_color = "|cffFF7D0A"; // Druid
            Break;
			
			Default:
			echo "";
			Break;
            
            
        }
        
        
    }
    
        $item_color = $_POST['item_color'];
        
    $name = "$c_color$c_name$ending$item_color Tier($i) "; // item generated near item type.
        
    // displays
    $helmet_display = "64577"; // helmet displayid
    $shoulders_display = "65000"; // helmet displayid
    $chest_display = "64695"; // helmet displayid
    $waist_display = "65000"; // helmet displayid
    $legplates_display = "64674"; // helmet displayid
    $boots_display = "48669"; // helmet displayid
    $wrist_display = "48664"; // helmet displayid
    $gloves_display = "64578"; // helmet displayid
    //
        $a = 0;
      while($a++ < 10)  {
        
           if($stat_type1[$a] == $effect1[$a] || $effect1[$a] != 0) {

                    $stat_value1[$a] = $stat_value1[$a];



            } else {

                    $stat_value1[$a] = $stat_value1[$a] * $multiplier;

            }
          
           if($stat_type2[$a] == $effect2[$a] || $effect2[$a] != 0) {

                    $stat_value2[$a] = $stat_value2[$a];



            } else {

                    $stat_value2[$a] = $stat_value2[$a] * $multiplier;

            }
          
           if($stat_type3[$a] == $effect3[$a] || $effect3[$a] != 0) {

                    $stat_value3[$a] = $stat_value3[$a];



            } else {

                    $stat_value3[$a] = $stat_value3[$a] * $multiplier;

            }
          if($stat_type4[$a] == $effect4[$a] || $effect4[$a] != 0) {

                    $stat_value4[$a] = $stat_value4[$a];



            } else {

                    $stat_value4[$a] = $stat_value4[$a] * $multiplier;

            }
          if($stat_type5[$a] == $effect5[$a] || $effect5[$a] != 0) {

                    $stat_value5[$a] = $stat_value5[$a];



            } else {

                    $stat_value5[$a] = $stat_value5[$a] * $multiplier;

            }
          if($stat_type6[$a] == $effect6[$a] || $effect6[$a] != 0) {

                    $stat_value6[$a] = $stat_value6[$a];



            } else {

                    $stat_value6[$a] = $stat_value6[$a] * $multiplier;

            }
          if($stat_type7[$a] == $effect7[$a] || $effect7[$a] != 0) {

                    $stat_value7[$a] = $stat_value7[$a];



            } else {

                    $stat_value7[$a] = $stat_value7[$a] * $multiplier;

            }
          if($stat_type8[$a] == $effect8[$a] || $effect8[$a] != 0) {

                    $stat_value8[$a] = $stat_value8[$a];



            } else {

                    $stat_value8[$a] = $stat_value8[$a] * $multiplier;

            }
      }
        
        $c = 0;
        

        
    // do not touch this
            if ($i == 0) {

                            $entry = $start_entry + $i;

            }
    //
            echo "
            <p>## Tier $i</p>
            (".$entry++.", 4, $material, -1, '$name Gloves', $gloves_display, $quality, 0, 0, 1, 0, 0, 10, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,
            {$stat_type1[1]}, ".round($stat_value1[1]).",
            {$stat_type1[2]}, ".round($stat_value1[2]).",
            {$stat_type1[3]}, ".round($stat_value1[3]).",
            {$stat_type1[4]}, ".round($stat_value1[4]).",
            {$stat_type1[5]}, ".round($stat_value1[5]).",
            {$stat_type1[6]}, ".round($stat_value1[6]).",
            {$stat_type1[7]}, ".round($stat_value1[7]).",
            {$stat_type1[8]}, ".round($stat_value1[8]).",
            {$stat_type1[9]}, ".round($stat_value1[9]).",
            {$stat_type1[10]}, ".round($stat_value1[10]).",
            0, 0, 0, 0, 0, 0, 0, 0,
            $armor, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Tier [$i]', 0, 0, 0, 0, 0, -1, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, ".$_POST['socket_1-1'].", 0, ".$_POST['socket_1-2'].", 0, ".$_POST['socket_1-3'].", 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340),
            <br />
            (".$entry++.", 4, $material, -1, '$name Wrist', $wrist_display, $quality, 0, 0, 1, 0, 0, 9, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,
            {$stat_type2[1]}, ".round($stat_value2[1]).",
            {$stat_type2[2]}, ".round($stat_value2[2]).",
            {$stat_type2[3]}, ".round($stat_value2[3]).",
            {$stat_type2[4]}, ".round($stat_value2[4]).",
            {$stat_type2[5]}, ".round($stat_value2[5]).",
            {$stat_type2[6]}, ".round($stat_value2[6]).",
            {$stat_type2[7]}, ".round($stat_value2[7]).",
            {$stat_type2[8]}, ".round($stat_value2[8]).",
            {$stat_type2[9]}, ".round($stat_value2[9]).",
            {$stat_type2[10]}, ".round($stat_value2[10]).",
            0, 0, 0, 0, 0, 0, 0, 0,
            $armor, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Tier [$i]', 0, 0, 0, 0, 0, -1, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, ".$_POST['socket_1-2'].", 0, ".$_POST['socket_2-2'].", 0,".$_POST['socket_3-2'].", 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340),
            <br />
            (".$entry++.", 4, $material, -1, '$name Boots', $boots_display, $quality, 0, 0, 1, 0, 0, 8, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,    
            {$stat_type3[1]}, ".round($stat_value3[1]).",
            {$stat_type3[2]}, ".round($stat_value3[2]).",
            {$stat_type3[3]}, ".round($stat_value3[3]).",
            {$stat_type3[4]}, ".round($stat_value3[4]).",
            {$stat_type3[5]}, ".round($stat_value3[5]).",
            {$stat_type3[6]}, ".round($stat_value3[6]).",
            {$stat_type3[7]}, ".round($stat_value3[7]).",
            {$stat_type3[8]}, ".round($stat_value3[8]).",
            {$stat_type3[9]}, ".round($stat_value3[9]).",
            {$stat_type3[10]}, ".round($stat_value3[10]).",
            0, 0, 0, 0, 0, 0, 0, 0,
            $armor, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Tier [$i]', 0, 0, 0, 0, 0, -1, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, ".$_POST['socket_1-3'].", 0, ".$_POST['socket_2-3'].", 0, ".$_POST['socket_3-3'].", 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340),
            <br />
            (".$entry++.", 4, $material, -1, '$name Legplates', $legplates_display, $quality, 0, 0, 1, 0, 0, 7, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,
            {$stat_type4[1]}, ".round($stat_value4[1]).",
            {$stat_type4[2]}, ".round($stat_value4[2]).",
            {$stat_type4[3]}, ".round($stat_value4[3]).",
            {$stat_type4[4]}, ".round($stat_value4[4]).",
            {$stat_type4[5]}, ".round($stat_value4[5]).",
            {$stat_type4[6]}, ".round($stat_value4[6]).",
            {$stat_type4[7]}, ".round($stat_value4[7]).",
            {$stat_type4[8]}, ".round($stat_value4[8]).",
            {$stat_type4[9]}, ".round($stat_value4[9]).",
            {$stat_type4[10]}, ".round($stat_value4[10]).",
            0, 0, 0, 0, 0, 0, 0, 0,
            $armor, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Tier [$i]', 0, 0, 0, 0, 0, -1, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, ".$_POST['socket_1-4'].", 0, ".$_POST['socket_2-4'].", 0, ".$_POST['socket_3-4'].", 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340),
            <br />
            (".$entry++.", 4, $material, -1, '$name Waist', $waist_display, $quality, 0, 0, 1, 0, 0, 6, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,
            {$stat_type5[1]}, ".round($stat_value5[1]).",
            {$stat_type5[2]}, ".round($stat_value5[2]).",
            {$stat_type5[3]}, ".round($stat_value5[3]).",
            {$stat_type5[4]}, ".round($stat_value5[4]).",
            {$stat_type5[5]}, ".round($stat_value5[5]).",
            {$stat_type5[6]}, ".round($stat_value5[6]).",
            {$stat_type5[7]}, ".round($stat_value5[7]).",
            {$stat_type5[8]}, ".round($stat_value5[8]).",
            {$stat_type5[9]}, ".round($stat_value5[9]).",
            {$stat_type5[10]}, ".round($stat_value5[10]).",
            0, 0, 0, 0, 0, 0, 0, 0,
            $armor, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Tier [$i]', 0, 0, 0, 0, 0, -1, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, ".$_POST['socket_1-5'].", 0, ".$_POST['socket_2-5'].", 0, ".$_POST['socket_3-5'].", 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340),
            <br />
            (".$entry++.", 4, $material, -1, '$name Chest', $chest_display, $quality, 0, 0, 1, 0, 0, 5, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,
            {$stat_type6[1]}, ".round($stat_value6[1]).",
            {$stat_type6[2]}, ".round($stat_value6[2]).",
            {$stat_type6[3]}, ".round($stat_value6[3]).",
            {$stat_type6[4]}, ".round($stat_value6[4]).",
            {$stat_type6[5]}, ".round($stat_value6[5]).",
            {$stat_type6[6]}, ".round($stat_value6[6]).",
            {$stat_type6[7]}, ".round($stat_value6[7]).",
            {$stat_type6[8]}, ".round($stat_value6[8]).",
            {$stat_type6[9]}, ".round($stat_value6[9]).",
            {$stat_type6[10]}, ".round($stat_value6[10]).",
            0, 0, 0, 0, 0, 0, 0, 0,
            $armor, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Tier [$i]', 0, 0, 0, 0, 0, -1, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, ".$_POST['socket_1-6'].", 0, ".$_POST['socket_2-6'].", 0, ".$_POST['socket_3-6'].", 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340),
            <br />
            (".$entry++.", 4, $material, -1, '$name Shoulders', $shoulders_display, $quality, 0, 0, 1, 0, 0, 3, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,
            {$stat_type7[1]}, ".round($stat_value7[1]).",
            {$stat_type7[2]}, ".round($stat_value7[2]).",
            {$stat_type7[3]}, ".round($stat_value7[3]).",
            {$stat_type7[4]}, ".round($stat_value7[4]).",
            {$stat_type7[5]}, ".round($stat_value7[5]).",
            {$stat_type7[6]}, ".round($stat_value7[6]).",
            {$stat_type7[7]}, ".round($stat_value7[7]).",
            {$stat_type7[8]}, ".round($stat_value7[8]).",
            {$stat_type7[9]}, ".round($stat_value7[9]).",
            {$stat_type7[10]}, ".round($stat_value7[10]).",
            0, 0, 0, 0, 0, 0, 0, 0,
            $armor, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Tier [$i]', 0, 0, 0, 0, 0, -1, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, ".$_POST['socket_1-7'].", 0,".$_POST['socket_2-7'].", 0, ".$_POST['socket_3-7'].", 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340),
            <br />
            (".$entry++.", 4, $material, -1, '$name Helmet', $helmet_display, $quality, 0, 0, 1, 0, 0, 1, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,
            {$stat_type8[1]}, ".round($stat_value8[1]).",
            {$stat_type8[2]}, ".round($stat_value8[2]).",
            {$stat_type8[3]}, ".round($stat_value8[3]).",
            {$stat_type8[4]}, ".round($stat_value8[4]).",
            {$stat_type8[5]}, ".round($stat_value8[5]).",
            {$stat_type8[6]}, ".round($stat_value8[6]).",
            {$stat_type8[7]}, ".round($stat_value8[7]).",
            {$stat_type8[8]}, ".round($stat_value8[8]).",
            {$stat_type8[9]}, ".round($stat_value8[9]).",
            {$stat_type8[10]}, ".round($stat_value8[10]).",
            0, 0, 0, 0, 0, 0, 0, 0,
            $armor, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Tier [$i]', 0, 0, 0, 0, 0, -1, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, ".$_POST['socket_1-8'].", 0, ".$_POST['socket_2-8'].", 0, ".$_POST['socket_3-8'].", 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340)";

                    if($count == $i) {
                            echo ";";
                    } else {
                            echo ",";
                    }

    }

} else {
    echo "Armor (Main parts 8/8) creator <br /><br />"; 
    
    echo "<form action = 'index.php?page=armor' method = 'post'>";
    
    echo "<b>Main Settings</b><br />";
    
        echo "<input type = 'text' name = 'count' placeholder='Count of copies'/>";
        echo "<input type = 'text' name = 'armor' placeholder='Enter armor'/>";
        echo "<input type = 'text' name = 'material' placeholder='Enter material'/> 4 plate // 3 mail // 2 leather // 1 cloth <br />";
        echo "<input type = 'text' name = 'entry' placeholder='Enter start entry'/>- Read about that <a href = 'index.php?page=wiki&id=entry'>Here</a><br />";
        echo "<input type = 'text' name = 'quality' placeholder='Enter quality'/>- Read about that <a href = 'index.php?page=wiki&id=quality'>Here</a>";
        echo "<input type = 'text' name = 'bond' placeholder='Enter item bonding'/>- Read about that <a href = 'index.php?page=wiki&id=bonding'>Here</a><br />";
        echo "<input type = 'text' name = 'req' placeholder='Req Level'/>";
        echo "<input type = 'text' name = 'ilvl' placeholder='Item level'/>";
        echo "<input type = 'text' name = 'multiplier' placeholder='Multiplier'/>";
        echo "<input type = 'text' name = 'aclass' placeholder='AllowableClass'/> - Read about that <a href = 'index.php?page=wiki&id=aclass'>Here</a><br />";
    echo "<b>Custom Settings</b><br />";
    
        echo "<br />Enable class colors : <input type = 'radio' name = 'colors' value = '1' /><br />";
    
        echo "Class name near item name : <input type = 'radio' name = 'cname' value = '1' /><br />";
    
        echo "Select Item Color :";
        echo "<select name = 'item_color'>";
            echo '<option value = "">Select Color</option>';
            echo '<option style="color:#F0F8FF;" value="|cFFF0F8FF">ALICEBLUE</option>';
echo '			<option style="color:#FAEBD7;" value="|cFFFAEBD7">ANTIQUEWHITE</option>';
echo '			<option style="color:#00FFFF  ;" value="|cFF00FFFF">AQUA</option>';
echo '			<option style="color:#7FFFD4;" value="|cFF7FFFD4">AQUAMARINE</option>';
echo '			<option style="color:#F0FFFF;" value="|cFFF0FFFF">AZURE</option>';
echo '			<option style="color:#F5F5DC ;" value="|cFFF5F5DC">BEIGE</option>';
echo '			<option style="color:#FFE4C4;" value="|cFFFFE4C4">BISQUE</option>';
echo '			<option style="color:#000000;" value="|cFF000000">BLACK</option>';
echo '			<option style="color:#FFEBCD;" value="|cFFFFEBCD">BLANCHEDALMOND</option>';
echo '			<option style="color:#0000FF;" value="|cFF0000FF">BLUE</option>';
echo '			<option style="color:#8A2BE2;" value="|cFF8A2BE2">BLUEVIOLET</option>';
echo '			<option style="color:#A52A2A;" value="|cFFA52A2A">BROWN</option>';
echo '			<option style="color:#DEB887;" value="|cFFDEB887">BURLYWOOD</option>';
echo '			<option style="color:#5F9EA0;" value="|cFF5F9EA0">CADETBLUE</option>';
echo '			<option style="color:#7FFF00;" value="|cFF7FFF00">CHARTREUSE</option>';
echo '			<option style="color:#D2691E;" value="|cFFD2691E">CHOCOLATE</option>';
echo '			<option style="color:#FF7F50;" value="|cFFFF7F50">CORAL</option>';
echo '			<option style="color:#6495ED;" value="|cFF6495ED">CORNFLOWERBLUE</option>';
echo '			<option style="color:#FFF8DC;" value="|cFFFFF8DC">CORNSILK</option>';
echo '			<option style="color:#DC143C;" value="|cFFDC143C">CRIMSON</option>';
echo '			<option style="color:#00FFFF;" value="|cFF00FFFF">CYAN</option>';
echo '			<option style="color:#00008B;" value="|cFF00008B">DARKBLUE</option>';
echo '			<option style="color:#008B8B;" value="|cFF008B8B">DARKCYAN</option>';
echo '			<option style="color:#B8860B;" value="|cFFB8860B">DARKGOLDENROD</option>';
echo '			<option style="color:#A9A9A9;" value="|cFFA9A9A9">DARKGRAY</option>';
echo '			<option style="color:#006400;" value="|cFF006400">DARKGREEN</option>';
echo '			<option style="color:#BDB76B;" value="|cFFBDB76B">DARKKHAKI</option>';
echo '			<option style="color:#8B008B;" value="|cFF8B008B">DARKMAGENTA</option>';
echo '			<option style="color:#556B2F;" value="|cFF556B2F">DARKOLIVEGREEN</option>';
echo '			<option style="color:#FF8C00;" value="|cFFFF8C00">DARKORANGE</option>';
echo '			<option style="color:#9932CC;" value="|cFF9932CC">DARKORCHID</option>';
echo '			<option style="color:#8B0000;" value="|cFF8B0000">DARKRED</option>';
echo '			<option style="color:#E9967A;" value="|cFFE9967A">DARKSALMON</option>';
echo '			<option style="color:#8FBC8B;" value="|cFF8FBC8B">DARKSEAGREEN</option>';
echo '			<option style="color:#483D8B;" value="|cFF483D8B">DARKSLATEBLUE</option>';
echo '			<option style="color:#2F4F4F;" value="|cFF2F4F4F">DARKSLATEGRAY</option>';
echo '			<option style="color:#00CED1;" value="|cFF00CED1">DARKTURQUOISE</option>';
echo '			<option style="color:#9400D3;" value="|cFF9400D3">DARKVIOLET</option>';
echo '			<option style="color:#FF1493;" value="|cFFFF1493">DEEPPINK</option>';
echo '			<option style="color:#00BFFF;" value="|cFF00BFFF">DEEPSKYBLUE</option>';
echo '			<option style="color:#696969;" value="|cFF696969">DIMGRAY</option>';
echo '			<option style="color:#1E90FF;" value="|cFF1E90FF">DODGERBLUE</option>';
echo '			<option style="color:#B22222;" value="|cFFB22222">FIREBRICK</option>';
echo '			<option style="color:#FFFAF0;" value="|cFFFFFAF0">FLORALWHITE</option>';
echo '			<option style="color:#228B22;" value="|cFF228B22">FORESTGREEN</option>';
echo '			<option style="color:#FF00FF;" value="|cFFFF00FF">FUCHSIA</option>';
echo '			<option style="color:#DCDCDC;" value="|cFFDCDCDC">GAINSBORO</option>';
echo '			<option style="color:#F8F8FF;" value="|cFFF8F8FF">GHOSTWHITE</option>';
echo '			<option style="color:#FFD700;" value="|cFFFFD700">GOLD</option>';
echo '			<option style="color:#DAA520;" value="|cFFDAA520">GOLDENROD</option>';
echo '			<option style="color:#808080;" value="|cFF808080">GRAY</option>';
echo '			<option style="color:#008000;" value="|cFF008000">GREEN</option>';
echo '			<option style="color:#ADFF2F;" value="|cFFADFF2F">GREENYELLOW</option>';
echo '			<option style="color:#F0FFF0;" value="|cFFF0FFF0">HONEYDEW</option>';
echo '			<option style="color:#FF69B4;" value="|cFFFF69B4">HOTPINK</option>';
echo '			<option style="color:#CD5C5C;" value="|cFFCD5C5C">INDIANRED</option>';
echo '			<option style="color:#4B0082;" value="|cFF4B0082">INDIGO</option>';
echo '			<option style="color:#FFFFF0;" value="|cFFFFFFF0">IVORY</option>';
echo '			<option style="color:#F0E68C;" value="|cFFF0E68C">KHAKI</option>';
echo '			<option style="color:#E6E6FA;" value="|cFFE6E6FA">LAVENDER</option>';
echo '			<option style="color:#FFF0F5;" value="|cFFFFF0F5">LAVENDERBLUSH</option>';
echo '			<option style="color:#7CFC00;" value="|cFF7CFC00">LAWNGREEN</option>';
echo '			<option style="color:#FFFACD;" value="|cFFFFFACD">LEMONCHIFFON</option>';
echo '			<option style="color:#ADD8E6;" value="|cFFADD8E6">LIGHTBLUE</option>';
echo '			<option style="color:#F08080;" value="|cFFF08080">LIGHTCORAL</option>';
echo '			<option style="color:#E0FFFF;" value="|cFFE0FFFF">LIGHTCYAN</option>';
echo '			<option style="color:#D3D3D3;" value="|cFFD3D3D3">LIGHTGRAY</option>';
echo '			<option style="color:#90EE90;" value="|cFF90EE90">LIGHTGREEN</option>';
echo '			<option style="color:#FFB6C1;" value="|cFFFFB6C1">LIGHTPINK</option>';
echo '			<option style="color:#FF6060;" value="|cFFFF6060">LIGHTRED</option>';
echo '			<option style="color:#FFA07A;" value="|cFFFFA07A">LIGHTSALMON</option>';
echo '			<option style="color:#20B2AA;" value="|cFF20B2AA">LIGHTSEAGREEN</option>';
echo '			<option style="color:#87CEFA;" value="|cFF87CEFA">LIGHTSKYBLUE</option>';
echo '			<option style="color:#778899;" value="|cFF778899">LIGHTSLATEGRAY</option>';
echo '			<option style="color:#B0C4DE;" value="|cFFB0C4DE">LIGHTSTEELBLUE</option>';
echo '			<option style="color:#FFFFE0;" value="|cFFFFFFE0">LIGHTYELLOW</option>';
echo '			<option style="color:#00FF00;" value="|cFF00FF00">LIME</option>';
echo '			<option style="color:#32CD32;" value="|cFF32CD32">LIMEGREEN</option>';
echo '			<option style="color:#FAF0E6;" value="|cFFFAF0E6">LINEN</option>';
echo '			<option style="color:#FF00FF;" value="|cFFFF00FF">MAGENTA</option>';
echo '			<option style="color:#800000;" value="|cFF800000">MAROON</option>';
echo '			<option style="color:#66CDAA;" value="|cFF66CDAA">MEDIUMAQUAMARINE</option>';
echo '			<option style="color:#0000CD;" value="|cFF0000CD">MEDIUMBLUE</option>';
echo '			<option style="color:#BA55D3;" value="|cFFBA55D3">MEDIUMORCHID</option>';
echo '			<option style="color:#9370DB;" value="|cFF9370DB">MEDIUMPURPLE</option>';
echo '			<option style="color:#3CB371;" value="|cFF3CB371">MEDIUMSEAGREEN</option>';
echo '			<option style="color:#7B68EE;" value="|cFF7B68EE">MEDIUMSLATEBLUE</option>';
echo '			<option style="color:#00FA9A;" value="|cFF00FA9A">MEDIUMSPRINGGREEN</option>';
echo '			<option style="color:#48D1CC;" value="|cFF48D1CC">MEDIUMTURQUOISE</option>';
echo '			<option style="color:#C71585;" value="|cFFC71585">MEDIUMVIOLETRED</option>';
echo '			<option style="color:#191970;" value="|cFF191970">MIDNIGHTBLUE</option>';
echo '			<option style="color:#F5FFFA;" value="|cFFF5FFFA">MINTCREAM</option>';
echo '			<option style="color:#FFE4E1;" value="|cFFFFE4E1">MISTYROSE</option>';
echo '			<option style="color:#FFE4B5;" value="|cFFFFE4B5">MOCCASIN</option>';
echo '			<option style="color:#FFDEAD;" value="|cFFFFDEAD">NAVAJOWHITE</option>';
echo '			<option style="color:#000080;" value="|cFF000080">NAVY</option>';
echo '			<option style="color:#FDF5E6;" value="|cFFFDF5E6">OLDLACE</option>';
echo '			<option style="color:#808000;" value="|cFF808000">OLIVE</option>';
echo '			<option style="color:#6B8E23;" value="|cFF6B8E23">OLIVEDRAB</option>';
echo '			<option style="color:#FFA500;" value="|cFFFFA500">ORANGE</option>';
echo '			<option style="color:#FF4500;" value="|cFFFF4500">ORANGERED</option>';
echo '			<option style="color:#DA70D6;" value="|cFFDA70D6">ORCHID</option>';
echo '			<option style="color:#EEE8AA;" value="|cFFEEE8AA">PALEGOLDENROD</option>';
echo '			<option style="color:#98FB98;" value="|cFF98FB98">PALEGREEN</option>';
echo '			<option style="color:#AFEEEE;" value="|cFFAFEEEE">PALETURQUOISE</option>';
echo '			<option style="color:#DB7093;" value="|cFFDB7093">PALEVIOLETRED</option>';
echo '			<option style="color:#FFEFD5;" value="|cFFFFEFD5">PAPAYAWHIP</option>';
echo '			<option style="color:#FFDAB9 ;" value="|cFFFFDAB9">PEACHPUFF</option>';
echo '			<option style="color:#CD853F;" value="|cFFCD853F">PERU</option>';
echo '			<option style="color:#FFC0CB ;" value="|cFFFFC0CB">PINK</option>';
echo '			<option style="color:#DDA0DD;" value="|cFFDDA0DD">PLUM</option>';
echo '			<option style="color:#B0E0E6;" value="|cFFB0E0E6">POWDERBLUE</option>';
echo '			<option style="color:#800080;" value="|cFF800080">PURPLE</option>';
echo '			<option style="color:#FF0000;" value="|cFFFF0000">RED</option>';
echo '			<option style="color:#BC8F8F;" value="|cFFBC8F8F">ROSYBROWN</option>';
echo '			<option style="color:#4169E1 ;" value="|cFF4169E1">ROYALBLUE</option>';
echo '			<option style="color:#8B4513 ;" value="|cFF8B4513">SADDLEBROWN</option>';
echo '			<option style="color:#FA8072 ;" value="|cFFFA8072">SALMON</option>';
echo '			<option style="color:#F4A460;" value="|cFFF4A460">SANDYBROWN</option>';
echo '			<option style="color:#2E8B57;" value="|cFF2E8B57">SEAGREEN</option>';
echo '			<option style="color:#FFF5EE;" value="|cFFFFF5EE">SEASHELL</option>';
echo '			<option style="color:#A0522D;" value="|cFFA0522D">SIENNA</option>';
echo '			<option style="color:#C0C0C0;" value="|cFFC0C0C0">SILVER</option>';
echo '			<option style="color:#87CEEB ;" value="|cFF87CEEB">SKYBLUE</option>';
echo '			<option style="color:#6A5ACD;" value="|cFF6A5ACD">SLATEBLUE</option>';
echo '			<option style="color:#708090;" value="|cFF708090">SLATEGRAY</option>';
echo '			<option style="color:#FFFAFA  ;" value="|cFFFFFAFA">SNOW</option>';
echo '			<option style="color:#00FF7F  ;" value="|cFF00FF7F">SPRINGGREEN</option>';
echo '			<option style="color:#4682B4;" value="|cFF4682B4">STEELBLUE</option>';
echo '			<option style="color:#D2B48C ;" value="|cFFD2B48C">TAN</option>';
echo '			<option style="color:#008080;" value="|cFF008080">TEAL</option>';
echo '			<option style="color:#D8BFD8;" value="|cFFD8BFD8">THISTLE</option>';
echo '			<option style="color:#FF6347  ;" value="|cFFFF6347">TOMATO</option>';
echo '			<option style="color:#FFFFFF;" value="|c00FFFFFF">TRANSPARENT</option>';
echo '			<option style="color:#40E0D0;" value="|cFF40E0D0">TURQUOISE</option>';
echo '			<option style="color:#EE82EE ;" value="|cFFEE82EE">VIOLET</option>';
echo '			<option style="color:#F5DEB3;" value="|cFFF5DEB3">WHEAT</option>';
echo '			<option style="color:#FFFFFF;" value="|cFFFFFFFF">WHITE</option>';
echo '			<option style="color:#F5F5F5;" value="|cFFF5F5F5">WHITESMOKE</option>';
echo '			<option style="color:#FFFF00;" value="|cFFFFFF00">YELLOW</option>';

        echo "</select> <br />";
    
    echo "<br /><b>Stats Settings</b><br />";
   
    $a = 0;
    
    while($a++ < 8) {
        
        $i = 0;
        
        switch($a) {
            
                case '1' :
                    $icon = 'http://vignette3.wikia.nocookie.net/wowwiki/images/2/22/Ui-paperdoll-slot-hands.png/revision/latest?cb=20070607015036&format=webp';
                    $name = "Gloves";
                Break;
                case '2' :
                    $icon = 'http://vignette3.wikia.nocookie.net/wowwiki/images/1/1d/Ui-paperdoll-slot-wrists.png/revision/latest?cb=20070607015415';
                    $name = "Wrist";
                Break;
                case '3' :
                    $icon = 'http://vignette3.wikia.nocookie.net/wowwiki/images/a/a5/Ui-paperdoll-slot-feet.png/revision/latest?cb=20070607015023&format=webp';
                $name = "Boots";
                Break;
                case '4' :
                    $icon = 'http://vignette3.wikia.nocookie.net/wowwiki/images/1/14/Ui-paperdoll-slot-legs.png/revision/latest?cb=20070607015103&format=webp';
                $name = "Legplates";
                Break;
                case '5' :
                    $icon = 'http://vignette1.wikia.nocookie.net/wowwiki/images/c/cd/Ui-paperdoll-slot-waist.png/revision/latest?cb=20070607015409&format=webp';
                $name = "Waist";
                Break;
                case '6' :
                    $icon = 'http://vignette4.wikia.nocookie.net/wowwiki/images/b/b7/Ui-paperdoll-slot-chest.png/revision/latest?cb=20070606225854';
                $name = "Chest";
                Break;
                case '7' :
                    $icon = 'http://vignette1.wikia.nocookie.net/wowwiki/images/f/fa/Ui-paperdoll-slot-shoulder.png/revision/latest?cb=20070607015347';
                $name = "Shoulder";
                Break;
                case '8' :
                    $icon = 'http://vignette2.wikia.nocookie.net/wowwiki/images/c/c3/Ui-paperdoll-slot-head.png/revision/latest?cb=20070607015044';
                $name = "Head";
                Break;
                Default:
                    $icon = "";
                Break;
            
            
            }

            echo "<table cellpading = '0' cellspacing = '0'>
                    <tr valign = 'mid'>
                        <td>
                            <img src = '$icon' width = '100px'/> 
                        </td>
                        <td class = 'middle'>
                            - RED <br />
                            - YELLOW <br />
                            - BLUE <br />
                            - META <br />
                            - NONE <br />
                        </td>
                        <td class = 'middle'>
                            <input type = 'radio' value = '2' name = 'socket_1-$a' />
                            <input type = 'radio' value = '2' name = 'socket_2-$a' />
                            <input type = 'radio' value = '2' name = 'socket_3-$a' />
                            <br />
                            <input type = 'radio' value = '4' name = 'socket_1-$a' />
                            <input type = 'radio' value = '4' name = 'socket_2-$a' />
                            <input type = 'radio' value = '4' name = 'socket_3-$a' />
                            <br />
                            <input type = 'radio' value = '8' name = 'socket_1-$a' />
                            <input type = 'radio' value = '8' name = 'socket_2-$a' />
                            <input type = 'radio' value = '8' name = 'socket_3-$a' />
                            <br />
                            <input type = 'radio' value = '1' name = 'socket_1-$a' />
                            <input type = 'radio' value = '1' name = 'socket_2-$a' />
                            <input type = 'radio' value = '1' name = 'socket_3-$a' />
                            <br />
                            <input type = 'radio' value = '0' name = 'socket_1-$a' checked/>
                            <input type = 'radio' value = '0' name = 'socket_2-$a' checked/>
                            <input type = 'radio' value = '0' name = 'socket_3-$a' checked/>
                            
                            <br />
                        </td>
                    </tr>      
            </table>
            <h3> $name </h3><br />
            ";
        
        while($i++ < 10) {
            
            echo "<br />";
            

                echo "<select name = 'stat_$i-$a'>";
                        echo '<option value="0">Select stat type</option>';
                        echo '<option value="0">Mana</option>';
                        echo '<option value="1">Health</option>';
                        echo '<option value="3">Agility</option>';
                        echo '<option value="4">Strength</option>';
                        echo '<option value="5">Intellect</option>';
                        echo '<option value="6">Spirit</option>';
                        echo '<option value="7">Stamina</option>';
                        echo '<option value="12">Defense Rating</option>';
                        echo '<option value="13">Dodge Rating</option>';
                        echo '<option value="14">Parry Rating</option>';
                        echo '<option value="15">Block Rating</option>';
                        echo '<option value="16">Melee Hit Rating</option>';
                        echo '<option value="17">Ranged Hit Rating</option>';
                        echo '<option value="18">Spell Hit Rating</option>';
                        echo '<option value="19">Melee Crit Rating</option>';
                        echo '<option value="20">Ranged Crit Rating</option>';
                        echo '<option value="21">Spell Crit Rating</option>';
                        echo '<option value="22">Melee Hit Taken Rating</option>';
                        echo '<option value="23">Ranged Hit Taken Rating</option>';
                        echo '<option value="24">Spell Hit Taken Rating</option>';
                        echo '<option value="25">Melee Crit Taken Rating</option>';
                        echo '<option value="26">Ranged Crit Taken Rating</option>';
                        echo '<option value="27">Spell Crit Taken Rating</option>';
                        echo '<option value="28">Melee Haste Rating</option>';
                        echo '<option value="29">Ranged Haste Rating</option>';
                        echo '<option value="30">Spell Haste Rating</option>';
                        echo '<option value="31">Hit Rating</option>';
                        echo '<option value="32">Crit Rating</option>';
                        echo '<option value="33">Hit Taken Rating</option>';
                        echo '<option value="34">Crit Taken Rating</option>';
                        echo '<option value="35">Resilience Rating</option>';
                        echo '<option value="36">Haste Rating</option>';
                        echo '<option value="37">Expertise Rating</option>';
                        echo '<option value="38">Attack Power</option>';
                        echo '<option value="39">Ranged Attack Power</option>';
                        echo '<option value="41">Spell Healing Rating</option>';
                        echo '<option value="42">Spell Damage Rating</option>';
                        echo '<option value="43">Mana Regeneration</option>';
                        echo '<option value="44">Armor Penetration</option>';
                        echo '<option value="45">Spell Power</option>';
                        echo '<option value="46">Health Regeneration</option>';
                        echo '<option value="47">Spell Penetration</option>';
                        echo '<option value="48">Block Value</option>';

                echo "</select>";
                echo "<input type = 'text' name = 'stat_value_$i-$a' placeholder = 'stat value'/>";
                echo " Do not affect by multiplier <input type = 'radio' name = 'affect_$i-$a' value = '1'/>";
            echo "<br />";

        }
    
    }
    
        echo "<br /><input type = 'submit' name = 'submit' value = 'Generate'/>";
    echo "</form>";
}
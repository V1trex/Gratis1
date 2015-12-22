<html>
<head>
        <style>
                body {
                        font-size:11px;
                        font-color:#000;
                        font-family:tahoma;
                        background-color:#eee;
                }
        </style>
		<title>Gratis</title>
</head>

<body>
	
<?php
if(isset($_POST['submit'])) {

    echo "
            REPLACE INTO `item_template` (`entry`, `class`, `subclass`, `SoundOverrideSubclass`, `name`, `displayid`, `Quality`, `Flags`, `FlagsExtra`, `BuyCount`, `BuyPrice`, `SellPrice`, `InventoryType`, `AllowableClass`, `AllowableRace`, `ItemLevel`, `RequiredLevel`, `RequiredSkill`, `RequiredSkillRank`, `requiredspell`, `requiredhonorrank`, `RequiredCityRank`, `RequiredReputationFaction`, `RequiredReputationRank`, `maxcount`, `stackable`, `ContainerSlots`, `StatsCount`, `stat_type1`, `stat_value1`, `stat_type2`, `stat_value2`, `stat_type3`, `stat_value3`, `stat_type4`, `stat_value4`, `stat_type5`, `stat_value5`, `stat_type6`, `stat_value6`, `stat_type7`, `stat_value7`, `stat_type8`, `stat_value8`, `stat_type9`, `stat_value9`, `stat_type10`, `stat_value10`, `ScalingStatDistribution`, `ScalingStatValue`, `dmg_min1`, `dmg_max1`, `dmg_type1`, `dmg_min2`, `dmg_max2`, `dmg_type2`, `armor`, `holy_res`, `fire_res`, `nature_res`, `frost_res`, `shadow_res`, `arcane_res`, `delay`, `ammo_type`, `RangedModRange`, `spellid_1`, `spelltrigger_1`, `spellcharges_1`, `spellppmRate_1`, `spellcooldown_1`, `spellcategory_1`, `spellcategorycooldown_1`, `spellid_2`, `spelltrigger_2`, `spellcharges_2`, `spellppmRate_2`, `spellcooldown_2`, `spellcategory_2`, `spellcategorycooldown_2`, `spellid_3`, `spelltrigger_3`, `spellcharges_3`, `spellppmRate_3`, `spellcooldown_3`, `spellcategory_3`, `spellcategorycooldown_3`, `spellid_4`, `spelltrigger_4`, `spellcharges_4`, `spellppmRate_4`, `spellcooldown_4`, `spellcategory_4`, `spellcategorycooldown_4`, `spellid_5`, `spelltrigger_5`, `spellcharges_5`, `spellppmRate_5`, `spellcooldown_5`, `spellcategory_5`, `spellcategorycooldown_5`, `bonding`, `description`, `PageText`, `LanguageID`, `PageMaterial`, `startquest`, `lockid`, `Material`, `sheath`, `RandomProperty`, `RandomSuffix`, `block`, `itemset`, `MaxDurability`, `area`, `Map`, `BagFamily`, `TotemCategory`, `socketColor_1`, `socketContent_1`, `socketColor_2`, `socketContent_2`, `socketColor_3`, `socketContent_3`, `socketBonus`, `GemProperties`, `RequiredDisenchantSkill`, `ArmorDamageModifier`, `duration`, `ItemLimitCategory`, `HolidayId`, `ScriptName`, `DisenchantID`, `FoodType`, `minMoneyLoot`, `maxMoneyLoot`, `flagsCustom`, `VerifiedBuild`)
            VALUES
    ";

    $i = -1; // shut up the error
    $count = 20; // tiers count
    while ($i++ < $count) {


    // configs

    $multiplier = pow(1.15,$i); // multiplier old item stat * x %
    $multiplier2 = pow(1.10,$i); // multiplier old item stat * x %
    //$ilvlmultipler = pow(1.10,$i); // ilvl multiplier

    $reqlvl = "95";
    $ilvl = "15"; // ilvl for first tier

    /*
     ID Name
     0  =  Mana
     1  =  HEALTH
     2  =  UNKNOWN
     3  =  AGILITY
     4  =  STRENGTH
     5  =  INTELLECT
     6  =  SPIRIT
     7  =  STAMINA
    11  =  WEAPON_SKILL_RATING
    12  =  DEFENSE_RATING
    13  =  DODGE_RATING
    14  =  PARRY_RATING
    15  =  SHIELD_BLOCK_RATING
    16  =  MELEE_HIT_RATING
    17  =  RANGED_HIT_RATING
    18  =  SPELL_HIT_RATING
    19  =  MELEE_CRITICAL_STRIKE_RATING
    20  =  RANGED_CRITICAL_STRIKE_RATING
    21  =  SPELL_CRITICAL_STRIKE_RATING
    22  =  MELEE_HIT_AVOIDANCE_RATING
    23  =  RANGED_HIT_AVOIDANCE_RATING
    24  =  SPELL_HIT_AVOIDANCE_RATING
    25  =  MELEE_CRITICAL_AVOIDANCE_RATING
    26  =  RANGED_CRITICAL_AVOIDANCE_RATING
    27  =  SPELL_CRITICAL_AVOIDANCE_RATING
    28  =  MELEE_HASTE_RATING
    29  =  RANGED_HASTE_RATING
    30  =  SPELL_HASTE_RATING
    31  =  HIT_RATING
    32  =  CRITICAL_STRIKE_RATING
    33  =  HIT_AVOIDANCE_RATING
    34  =  EXPERTISE_RATING
    35  =  RESILIENCE_RATING
    36  =  HASTE_RATING
    37  =  EXPERTISE_RATING_2
    38  =  ATTACK_POWER
    39  =  RANGED_ATTACK_POWER
    40  =  FERAL_ATTACK_POWER
    41  =  SPELL_HEALING_DONE
    42  =  SPELL_DAMAGE_DONE
    43  =  MANA_REGENERATION
    44  =  ARMOR_PENETRATION_RATING
    45  =  SPELL_POWER
    46  =  HEALTH_REGEN
    47  =  SPELL_PENETRATION  
    48  =  BLOCK_VALUE
    */
    $stat_type =
    array(
    '1' => '5',
    '2' => '7',
    '3' => '32',
    '4' => '45',
    '5' => '36',
    '6' => '35',
    '7' => '6',
    '8' => '0',
    '9' => '0',
    '10' => '0'
    );
    //

    // edit stat value
    $stat_value =
    array(
    '1' => '22',
    '2' => '154',
    '3' => '12',
    '4' => '94',
    '5' => '20',
    '6' => '6',
    '7' => '115',
    '8' => '0',
    '9' => '0',
    '10' => '0'
    );

    // edit if stat will be affected or no by multiplier 0 affect 1 disable
    $effect =
    array(
    '1' => '0',
    '2' => '0',
    '3' => '0',
    '4' => '0',
    '5' => '1',
    '6' => '0',
    '7' => '0',
    '8' => '0',
    '9' => '0',
    '10' => '0'
    );

    $subclass = "19";
    $speed = "1900";
    $inventory = "26";
    $quality = "2"; // 0 = Poor 1 = Common 2 = Uncommon 3 = Rare 4 = Epic 5 = Legendary 6 = Artifact 7 = Heirloom
    $start_entry = 97252; // start entry
    $aclass = "-1"; // allowable class number
    $name = "[A-$i] - Wand"; // item generated near item type.
    //

    // displays
    $display = "65364"; // weapon displayid
    //

    $dmgmin = "1";
    $dmgmax = "100";

    $dmgmin = round($dmgmin * $multiplier2);
    $dmgmax = round($dmgmax * $multiplier2);
    $a = 0;

    while ($a++ < 10) {

            if($stat_type[$a] == $effect[$a] || $effect[$a] != 0) {

                    $stat_value[$a] = $stat_value[$a];

            } else {

                    $stat_value[$a] = $stat_value[$a] * $multiplier;

            }

    }

    // do not touch this
            if ($i == 0) {

                            $entry = $start_entry + $i;

            }

            echo "
            <p>## Tier $i</p>
            (".$entry++.", 2, $subclass, -1, '$name', $display, $quality, 0, 0, 1, 0, 0, $inventory, $aclass, -1,".round($ilvl * $multiplier).", $reqlvl, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0,
            10,
            {$stat_type[1]}, ".round($stat_value[1]).",
            {$stat_type[2]}, ".round($stat_value[2]).",
            {$stat_type[3]}, ".round($stat_value[3]).",
            {$stat_type[4]}, ".round($stat_value[4]).",
            {$stat_type[5]}, ".round($stat_value[5]).",
            {$stat_type[6]}, ".round($stat_value[6]).",
            {$stat_type[7]}, ".round($stat_value[7]).",
            {$stat_type[8]}, ".round($stat_value[8]).",
            {$stat_type[9]}, ".round($stat_value[9]).",
            {$stat_type[10]}, ".round($stat_value[10]).",
            0, 0, 
            $dmgmin, $dmgmax, 
            0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, $speed, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '$name Tier $i', 0, 0, 0, 0, 0, -1, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'internalitemhanler', 0, 0, 0, 0, 0, 12340)";

              if($count == $i) {
                            echo ";";
                    } else {
                            echo ",";
                    }
    }

} else {
    echo "Weapons creator <br />"; 
    
    echo "<form action = 'index.php?page=weapon' method = 'post'>";
        echo "<input type = 'text' name = ''/>";
        echo "<input type = 'text' name = ''/>";
        echo "<input type = 'text' name = ''/>";
        echo "<input type = 'submit' name = 'submit' value = 'Generate'/>";
    echo "</form>";
}
?>

</html>


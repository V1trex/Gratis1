<?php

if(!isset($_POST['submit'])) {
    
    echo "
        <form action = '' method='POST'>
            <input type = 'text' name = 'level' placeholder = 'Enter character level'/> - Level of your character (for item stats) <br />
            <input type = 'text' name = 'req_level' placeholder = 'Enter req level'/> - Req level for IlVL and stats<br />
            <input type = 'text' name = 'type' placeholder = 'weapon type'/> - 1hand, 2hand, dagger, bow, wand, thorwn!<br />
            <input type = 'text' name = 'multiplier' placeholder = 'multiplier' value = '1'/> - Multiplies values by X (Deafault 1)<br />
            <input type = 'submit' name = 'submit' value = 'calculate'/>
        </form>
    ";
    
    
} else {
        
        $level = $_POST['level'];
        $reqLevel = $_POST['req_level'];
        $multiplier = $_POST['multiplier'];
        
        $speed = array (
            '1hand' => '2.1',
            '2hand' => '3.6',
            'dagger' => '1.6',
            'bow' => '3.6',
            'wand' => '1.1',
            'thrown' => '1.1',
        );
        
       $mindmg = $level * 10 * $speed[$_POST['type']] * 2;
       $maxdmg = $level * 10 * $speed[$_POST['type']] * 2 * 1.7;
    
        echo "
            waepon for $level <br />
            Require level $reqLevel <br />
            Weapon type : ".$_POST['type']." <br />
            Weapon damage - ".round($mindmg*$multiplier)." - ".round($maxdmg*$multiplier)."
        ";
}
?>
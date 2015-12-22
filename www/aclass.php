<?php 

    echo "Available classes is a interger value every class have their own 'number',here are table with class id , value, name <br/ ><br/ >";
    echo "<table border = '1'cellpagin = '0' cellspacing = '0' style='text-align:center;'>";
        echo "<tr>";
            echo "<td>Id.</td>";
            echo "<td>Value.</td>";
            echo "<td>Name.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>1.</td>";
            echo "<td>1.</td>";
            echo "<td>Warrior.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>2.</td>";
            echo "<td>2.</td>";
            echo "<td>Paladin.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>3.</td>";
            echo "<td>4.</td>";
            echo "<td>Hunter.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>4.</td>";
            echo "<td>8.</td>";
            echo "<td>Rogue.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>5.</td>";
            echo "<td>16.</td>";
            echo "<td>Priest.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>6.</td>";
            echo "<td>32.</td>";
            echo "<td>Death Knight.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>7.</td>";
            echo "<td>64.</td>";
            echo "<td>Shaman.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>8.</td>";
            echo "<td>128.</td>";
            echo "<td>Mage.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>9.</td>";
            echo "<td>256.</td>";
            echo "<td>Warlock.</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>11.</td>";
            echo "<td>1024.</td>";
            echo "<td>Druid.</td>";
        echo "</tr>";

    echo "</table>";

echo "<br />Now when you have the value of class u need , if u wanna make it for few classes not one just make a simple composition class value + class value, for example i wanna make item for rogue / druid i will do next 1024 + 8 and my value will be 1032 i enter it in input allowableclass for items available for all classes just enter -1<br/ >";

?>
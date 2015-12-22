<?php
    echo "<h3>Users Manual</h3>";

    if(isset($_GET['id'])) {
        
        include $_GET['id'].'.php';
        
    } else {
        
        echo "-- ><a href = 'index.php?page=wiki&id=aclass'>Available class explanation</a>";
    }
?>
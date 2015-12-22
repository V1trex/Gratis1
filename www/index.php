<html>
    <head>
        <link href="styles.css" rel="stylesheet" type="text/css">
        <title>Gratis V1.0 BETA</title>
    </head>
<body>
    <div class = "web_container">
        <span id = "head_text" >Gratis V1.0</span>
        
        <div class = "spacer"></div>
        
            <div class = "main container">
                
                <div class = "left">
                    Select your tool. <br />
                    <a href = "index.php?page=armor">Armor Creator</a> <br />
                    <a href = "index.php?page=weapons">Weapons Creator</a> <br />
                    <a href = "index.php?page=wiki">User Manual</a> <br />
                    <a href = "index.php?page=itemcreator">Itemcreator(armor)</a> <br />
                    <a href = "index.php?page=itemcreator2">Itemcreator(weapon)</a> <br />
                    <?php if(isset($_GET['page'])) { echo "<a href = 'index.php'>Main page</a>"; } else { } ?>
                </div>
                
                <div class = "right">
                    <?php
                        if(isset($_GET['page'])) {
                            include $_GET['page'].'.php';
                        } else {
                            echo "Welcome to gratis, here is code output window, select                                 menu which tool u wanna use !";
                        }
                    ?>
                    <div class = "spacer"> <br />
                        ##Created by <span class = "names">Vitrex</span>, Release for <span class = "names">EmuDevs</span>, thank you for <span class = "names">Tommy</span>, <span class = "names">Faded</span>, <span class = "names">Nandi</span> ,<span class = "names">Jamey</span> and <span class = "names">other part of communyti</span> that created this amazing support!</div>
                </div>
            </div>
    </div>
    
    <?php if(isset($_GET['page'])) { } else { ?>
    <div class = "footer_container">
        [BETA V1.0] &copy; Gratis 2015
    </div>
    <?php }?>
    
</body>
</html>
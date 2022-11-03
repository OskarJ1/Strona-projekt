<?php
if(isset($_GET["page"]))
	$strona = $_GET["page"];
else
	$strona = null;
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>login tutorial</title>
</head> 


<body>

   <div class="header">
        <nav>
            <img src="gryf4.png" class="logo">
            
            <ul class="nav-links">
                <li><a href="strona.php?page=stronaglowna"> Strona główna </a></li>
                <li><a href="strona.php?page=tekstkontakt"> Kontakt</a></li>
                <li><a href="strona.php?page=ciekawostki">Ciekawostki</a></li>
                <li><a href="strona.php?page=mapa">Mapa</a></li>
                <li class="btn">Sign Up</li>
            </ul>
        </nav>
    </div>

    <div class="content">
        <?php
        
            $strona = "stronaglowna";
            if(isset($_GET['page'])) {
                $strona = $_GET['page'];
            }

            include($strona.'.php');
        
        ?>
    </div>
    

</body>
</html>
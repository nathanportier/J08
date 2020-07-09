<html lang="fr">
<head>
    <title>INDEX</title>
    <link rel="stylesheet" href= "vitrine.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
include ("header.php");
?>
    <?php

    if(isset($_GET['page'])){
        switch (strtolower($_GET['page'])) {
            case 'accueil':
                include("vitrine-accueil.php");
             break;
            case 'programme':
                include("vitrine-programme.php");
            break;
            case 'contact':
                include("vitrine-contact.php");
            break;
            case 'contact-form':
                include("contact-form.php");
            break;

            default :
                include("404.php");
            break;
        }
    }
    
    
    ?>

<?php
include ("footer.php");
?>


</body>
</html>
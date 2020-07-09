<html>
<head>
    <title>Vitrine Summer Code Camp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/vitrine.css">
</head>
<body>
    
<?php
$page_title="contact_form.php"
?>

<?php

if (isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['subject']) && $_POST['name']!="" && $_POST['email']!="" && $_POST['subject']!="") {
    echo "Nom et Prénom : " .$_POST['name'];
    echo "<br>Email : " .$_POST['email'];
    echo "<br>Message : " .$_POST['subject'];
}

else {
    echo "Aucune données reçues" ; 
    
}
 
?>

</body>
</html>

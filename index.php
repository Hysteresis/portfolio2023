<?php
if(!isset($_GET['uc']) ){
    header('Location: index.php?uc=home');
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>
        
    <?php
        if(isset($_GET['uc'])){
            echo ucfirst($_GET['uc']);

        }
        ?>
    </title>

</head>
<body>

<?php 
include 'env.php';
$urlprod = 'Location: https://www.gameauver.com/index.php?uc=home';
$urldev = 'Location: index.php?uc=home';

// header($urldev);



if(isset($_GET['uc'])){
    include './controller/' . $_GET['uc'] . '_controller.php';
} else {
    header($urlprod);
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    <script src="js/navbar_active.js"></script>
    <script src="js/body_contact.js"></script>
    <script src="js/animation_texte_accueil.js"></script>



</body>

</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only Protect</title>
    <!-- Icône haut de page -->
    <link rel="icon" type="image/png" href="img/logo.png" />
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!-- Police texte -->
    
    <!-- CDN Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php

        include 'html/header.html';

        if(isset($_GET['page'])){
            switch($_GET['page']){
                case 'accueil' :
                    include 'html/accueil.html';
                break;
                case 'services' :
                    include 'html/services.html';
                break;
                case 'alarmes' :
                    include 'html/alarmes.html';
                break;
                case 'vidéosurveillance' :
                    include 'html/videosurveillance.html';
                break;
                case 'controle-acces' :
                    include 'html/controle-acces.html';
                break;
                case 'mentions-legales' :
                    include 'html/mentions-legales.html';
                break;
                case 'pdc' :
                    include 'html/pdc.html';
                break;
                case 'contact' :
                    include 'contact.php';
                break;
                default :
                echo "erreur";
                break;
            }
        }else{
            include 'html/accueil.html';
        }

        include 'html/footer.html';

    ?>
</body>
</html>
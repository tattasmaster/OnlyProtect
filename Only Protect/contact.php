<?php 
if($_POST){
    $emailTo="contact@onlyprotect.fr";
    $message='Nom : '.$_POST['nom']. "\r\n";
    $message.='Email : '.$_POST['mail']. "\r\n";
    $message.='Numéro de téléphone : '.$_POST['numero']. "\r\n \r\n";
    $message.=$_POST['message'];
    $headers='De : ' .$_POST['mail'];

    if(mail($emailTo, "CONTACT - Only Protect", $message, $headers)){
        $msg="Votre message a bien été envoyé.";
    }else{
        $msg="Tous les champs doivent être complétés.";
    }
}
?>
<main class="page-contact">
    <section class="section-un-contact">
        <div class="titre-contact">
            <h1>CONTACT</h1>
        </div>
        <div class="info-contact">
                <p><a href="https://goo.gl/maps/E6RLcz47fRbdWtyPA">230 Avenue du Prado - 13008 Marseille</a></p>
                <p><a href="mailto:contact@onlyprotect.fr">contact@onlyprotect.fr</a> /
                    <a class="telephone" href="Tel:06 37 85 29 98">06 18 29 92 97</a>
                </p>
        </div>
    </section>
    <section class="section-form-contact">
        <form class="form-contact" method="POST" action="">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input class="input-form" type="text" id="nom" name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="input-form" type="email" id="email" name="mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
            </div>
            <div class="form-group">
                <label for="numero">Numero de téléphone</label>
                <input class="input-form" type="text" id="numero" name="numero" size="14" maxlength="14" value="<?php if(isset($_POST['numero'])) { echo $_POST['numero']; } ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
            </div>
            <button type="submit" class="boutonForm">ENVOYER</button>
            <?php 
            if(isset($msg)) {
                echo $msg;
            }    
            ?>
        </form>
    </section>
</main>
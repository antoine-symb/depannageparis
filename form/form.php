<?php include ('form_process.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../style.css" type="text/css"/>
        <script src="https://kit.fontawesome.com/194400d1db.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chango&family=Handlee&display=swap" rel="stylesheet">
        <title>Contact page</title>
    </head>
    <body>             
        <main>
            <div class="formulaire">
            <p class="supertitle">Envoyer un mail</p>
            <form class="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset class="zone-formulaire">
                <input type="text" name="name" placeholder="Nom Prenom" value="<?= $name ?>">
                <span class="error"><?= $name_error ?></span>
            </fieldset>
            <fieldset class="zone-formulaire">
                <input type="text" name="phone" placeholder="Telephone" value="<?= $phone ?>">
                <span class="error"><?= $phone_error ?></span>
            </fieldset>
            <fieldset>
                <input type="text" name="email" placeholder="Email" value="<?= $email ?>">
                <span class="error"><?= $email_error ?></span>
            </fieldset>
            <fieldset>
                <input type="text" name="subject" placeholder="Objet de la demande" value="<?= $subject ?>">
                <span class="error"><?= $subject_error ?></span>
            </fieldset>
            <fieldset>
                <textarea name="message" placeholder="Votre message" value="<?= $message ?>"></textarea>
                <span class="error"><?= $message_error ?></span>
            </fieldset>
            <fieldset>
                <textarea name="message" placeholder="Votre message" value="<?= $message ?>"></textarea>
                <span class="error"><?= $message_error ?></span>
            </fieldset>
            <fieldset>
                <textarea name="message" placeholder="Votre message" value="<?= $message ?>"></textarea>
                <span class="error"><?= $message_error ?></span>
            </fieldset>
                <button type="submit" name="Envoyer">Envoyer votre message</button>
            </div>
        </main>
    </body>
</html>
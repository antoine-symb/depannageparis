<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact page</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <main>
            <p>Envoyer un mail</p>
            <form class="contact-mail" action="contactform.php" method="post">
                <input type="text" name="name" placeholder="Nom Prenom">
                <input type="text" name="phone" placeholder="Telephone">
                <input type="text" name="mail" placeholder="Email">
                <input type="text" name="subject" placeholder="Objet de la demande">
                <textarea name="message" placeholder="Votre message"></textarea>
                <button type="submit" name="Envoyer">Envoyer votre message</button>
        </main>
    </body>
</html>
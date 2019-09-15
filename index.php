<!DOCTYPE html>

<html lang="de">
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <title>Kontakt</title>
    </head>
    <body>
        <div id="form">
        <form method="POST" action="./php/send.php">
            <input type="text" name="name" placeholder="Ihr Name"> <br> <br>
            <input type="text" name="email" placeholder="Ihre Email"> <br> <br>
            <input type="text" id="anliegen" name="anliegen" placeholder="Ihr Anliegen"> <br> <br>
            <input type="submit" value="abschicken">
        </form>
        </div>
    </body>
</html>
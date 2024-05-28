<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inscription</title>

</head>
<body>
    <section>
        <form action="traitement.php" method="post">
            <div class="pom">
                <Strong>Prénom et Nom</Strong><br>
                <input type="text" name="nom" placeholder="Your Name" required>
                <i class='bx bxs-user'></i>
            </div>
            <Strong>Adresse Mail </Strong><br>
             <div>
                 <input type="email" name="email" placeholder="Email address" required>
                 <i class='bx bxl-gmail'></i>
             </div>
             
             <div class="pom1">
             <Strong>Numéro de téléphone </Strong><br>
                 <input type="texte" name="num" placeholder="Phone Number" required>
                 <i class='bx bxs-phone'></i>
             </div>
             <div class="pom5">
             <Strong>Insérer votre photo(Une seule) </Strong><br>
            <input type="file" id="photo" name="photo" accept="image/*" required>
            <i class='bx bx-image'></i>
             </div class="send">
           <button type="submit">
                <h1>Register</h1>
            </button>
           
        </form>
                <a href="accueuil.php">Retour à la page d'accueuil</a>
    </section>  
</body>
</html>
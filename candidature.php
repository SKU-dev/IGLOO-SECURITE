<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>IGLOO - Candidature</title>
</head>
<body>
  <?php require('header.php'); ?>
  <div class="block-candidature">
      <h1>Candidature</h1>
      <p>Remplir le formulaire ci-dessous</p>
  </div>
  <section class="formulaire">
    <form method="post" action="traitement.php">
      <div class="box-name-surname">
        <div class="box-form">
          <label for="Prénom">Prénom</label>
          <input type="text" id="Prénom" name="prénom">
        </div>
        <div class="box-form">
          <label for="Nomdefamille">Nom de famille</label>
          <input type="text" id="Nomdefamille" name="Nomdefamille">
        </div>
      </div>
      <div class="box-form">
        <label for="mail">E-mail</label>
        <input type="text" id="mail" name="mail">
      </div>
      <div class="box-txt">
        <label for="text">Rédigez un message</label>
        <textarea name="" id="text" cols="20" rows="10"></textarea>
      </div>
      <button>Envoyer</button>
    </form>
  </section>
  <?php require('footer.php'); ?>
</body>
</html>
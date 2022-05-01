<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>IGLOO SECURITE</title>
</head>
<body>
  <?php require('header.php'); ?>
  <div class="lineSeparation"></div>
  <section class="accueil">
    <div class="blockAccueil">
      <h1>Igloo</h1>
      <p>IGLOO est  une société de sécurité  privé de taille humaine. IGLOO apporte à ses clients tout son savoir-faire professionnel. Nous sommes avant tout une équipe d'hommes et de femmes  passionnés par leur métier et engagés dans les missions qui nous sont confiées. Mais c'est aussi une entreprise qui est consciente de sa responsabilité vis-à-vis:</p><br>
      <li>son environnement , en prêtant attention au bien-être de ses salariés. Assumant que ce bien-être ne pourra être positif que dans la réalisation de ses missions pour ses clients.</li><br>
      <li>l'écologie et des missions de gaz en essayant d'avoir un impact le plus neutre possible et en développant un maximum de nouvelles technologies afin de réduire celui-ci.  </li><br>
    </div>
  </section>
  <div class="lineSeparation lineMargin"></div>
  <section class="blockService ">
    <div class="blockPicture block-picture-right">
      <img src="pictures/Gardiennage et surveillance.webp">
    </div>
    <div class="blockTxt block-txt-right">
      <h2>Gardiennage et surveillance</h2>
      <p>La réglementation en matière de sécurité incendie est la référence pour garantir la sécurité d'un établissement.</p>
      <button>Savoir +</button>
    </div>
  </section>
  <div class="lineSeparation lineMargin"></div>
  <section class="blockService">
    <div class="blockTxt block-txt-left">
      <h2>Agent cynophile</h2>
      <p>Communément attribuées, les missions de nos agents de sécurité cynophile conducteurs de chiens d'intervention consistent à...</p>
      <button>Savoir +</button>
    </div>
    <div class="blockPicture block-picture-left">
      <img src="pictures/Agent cynophile.webp">
    </div>
  </section>
  <div class="lineSeparation lineMargin"></div>
  <section class="blockService">
    <div class="blockTxt block-txt-left">
      <h2>Sécurité Incendie</h2>
      <p>La réglementation en matière de sécurité incendie est la référence pour garantir la sécurité d'un établissement.</p>
      <button>Savoir +</button>
    </div>
    <div class="blockPicture block-picture-left">
      <img src="pictures/Sécurité Incendie.webp">
    </div>
  </section>
  <div class="lineSeparation lineMargin"></div>
  <section class="blockService ">
    <div class="blockPicture block-picture-right">
      <img src="pictures/Agent Vidéo.webp">
    </div>
    <div class="blockTxt block-txt-right">
      <h2>Agent Vidéo</h2>
      <p>Nos agents exercent une mission d'observation, de détection et de prévention à l'intérieur des établissements et ses annexes dans la limite du périmètre des caméras de surveillance.</p>
      <button>Savoir +</button>
    </div>
  </section>
  <div class="lineSeparation lineMargin"></div>
  <section class="formulaire">
      <h2>Contactez-nous</h2>
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

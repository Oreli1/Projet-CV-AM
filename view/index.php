<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <title>@M Developper & Webdesigner</title>
    <!-- SEO -->
    <meta name="title" content="@M Developper & Webdesigner">
    <meta name="description" content="@M Developper & Webdesigner">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <!-- CSS JQuery UI-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <!-- CSS fancybox-->
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <!-- mon CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav>
      <span id="logo1">@</span><span id="logo2">M</span>
      <i class="fa fa-bars" aria-hidden="true"></i>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="#itSkills">IT Skills</a></li>
        <li><a href="#Professional">Professional</a></li>
        <li><a href="#Portfolio">Portfolio</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>
    <header>
      <h1>Aurelien MOJAK</h1>
        <h2>WEB DEVELOPPER & DESIGNER </h2>
        <img src="img/am.jpg" alt="photo am" height="100">
        <div class="pitch">
          <p>Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.</p>
        </div>
    </header>
    <main>
      <div id="itSkills">
        <h2>IT SKILLS</h2>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
      </div>
      <div id="Professional">
        <h2>PROFESSIONAL</h2>
        <section id="xp1">
          <p>De décembre 2007 à septembre 2017 : Webshop Manager / Assistant commercial chez Global Sat à Mondorf
 Mise à jour du website ◦Contenu éditorial et visuel ◦Création des fiches articles ◦Création des fichiers clients  Diffusion et création de newsletters, flyers  Encodage des back orders et commandes clients /  fournisseurs</p>
        </section>

      </div>
      <div id="Portfolio">
        <h2>PORTFOLIO</h2>
        <a class="grouped_elements" rel="group1" href="img\book\Action-S5-Gear-fit.jpg" height="300" width="200"><img src="img\little\Action-S5-Gear-fit.jpg" alt=""/></a>
        <a class="grouped_elements" rel="group1" href="img\book\color_is_everywhere.jpg"><img src="img\little\color_is_everywhere.jpg" alt=""/></a>
        <a class="grouped_elements" rel="group1" href="img\book\De-Stock-161215.jpg"><img src="img\little\De-Stock-161215.jpg" alt=""/></a>

      </div>
    </main>
    <footer>
      <p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y');?> | by @ Mojak</p>
      <span><a href="<?= $socialLinksPage->facebook->shareUrl?>">Facebook</a> | <a href="<?= $socialLinksPage->twitter->shareUrl?>">Twitter</a> | <a href="<?= $socialLinksPage->linkedin->shareUrl?>">Linkedin</a></span>
    </footer>
    <!--scritp-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  </body>
</html>

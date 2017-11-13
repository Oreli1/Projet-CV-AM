<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- SEO -->
  <meta name="title" content="Mon titre">
  <meta name="description" content="Une chouette description">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <!-- CSS JQuery UI-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"> </script>
  <!-- mon CSS -->
  <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <nav>
      <span id="logo1">@</span><span id="logo2">M</span>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button"><a href="#itSkills">IT Skills</a></button>
            <button class="dropdown-item" type="button"><a href="#Professional">Professional</a></button>
            <button class="dropdown-item" type="button"><a href="#Portfolio">Portfolio</a></button>
            <button class="dropdown-item" type="button"><a href="#Contact">Contact</a></button>
          </div>
        </div>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="#itSkills">IT Skills</a></li>
        <li><a href="#Professional">Professional</a></li>
        <li><a href="#Portfolio">Portfolio</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>
    <header>
      <h1 id="prenom">AURELIEN</h1>
      <h1 id="nom">MOJAK<span> .</span></h1>
        <h2>UX/UI DESIGNER </h2>
        <h2><span>& </span> WEB DEVELOPER </h2>
        <img src="img/am.jpg" alt="photo am" height="100">
        <div class="pitch">
          <p>Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.</p>
        </div>
    </header>
    <main>
      <div id="itSkills">
        <h2>IT SKILLS</h2>
          <section id="html5">
            <div class="progress">
              <h6>HTML5</h6>
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
          </section>
            <div class="progress">
              <h6>CSS3 </h6>
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
          </section>
            <div class="progress">
              <h6>JavaScript </h6>
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>
            <div class="progress">
              <h6>PHP </h6>
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
            </div>
            <div class="progress">
              <h6>MySQL </h6>
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
            </div>
            <div class="progress">
              <h6>Wordpress </h6>
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
          </section>
      </div>

      <div id="Professional">
        <h2>PROFESSIONAL</h2>
        <section id="xp1">
          <p>Depuis <span>janvier 2017</span> : Développeur & Webdesigner chez Global Media Systems à Luxembourg</p>
          <p>De <span>décembre 2007 à septembre 2017 </span>: Webshop Manager / Assistant commercial chez Global Sat à Mondorf</p>
          <p>De <span>décembre 2006 à décembre 2007</span> : Responsable du site internet (www.jardinsdaromes.com) chez Brezilia à Thionville</p>
        </section>

      </div>
      <div id="Portfolio">
        <h2>PORTFOLIO</h2>
        <button type="button" class="btn btn-success">DOWNLOAD</button>
        <!--<a class="grouped_elements" rel="group1" href="img\book\Action-S5-Gear-fit.jpg" height="300" width="200"><img src="img\little\Action-S5-Gear-fit.jpg" alt=""/></a>
        <a class="grouped_elements" rel="group1" href="img\book\color_is_everywhere.jpg"><img src="img\little\color_is_everywhere.jpg" alt=""/></a>
        <a class="grouped_elements" rel="group1" href="img\book\De-Stock-161215.jpg"><img src="img\little\De-Stock-161215.jpg" alt=""/></a>-->

      </div>
    </main>
    <footer>
      <p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y');?> | by @ Mojak</p>
      <p><i class="fa fa-linkedin" aria-hidden="true"></i> <i class="fa fa-facebook" aria-hidden="true"></i></p>
    </footer>
    <!--script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


  </body>
</html>

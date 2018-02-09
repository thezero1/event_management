<?php
include "../../Class/evenement.class.php";
$E=new Evenement();
$res=$E->selectEvenement();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>iheb</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
</head>
<body id="page-top">




  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Commencer à crée vos évènements</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#inscription">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="connexion.php#connexion">Connexion </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#evenement">Evenement</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in text-uppercase">Vous avez plusieurs évènements professionnels?</div>
        <div class="intro-heading">ICI vous pouvez les gérés par une seule clique</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#inscription">Inscrivez-Vous</a>
      </div>
    </div>
  </header>





  <!-- Formulaire d'inscrition -->
  <section id="inscription">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Inscription</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="Inscription" name="Inscription" method="POST" action="../../Controller/insertsession.php">
            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" name="nom" type="text" placeholder="Votre Nom & Prénom *" required data-validation-required-message="Enter Votre nom et prenom">
                  <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                  <input class="form-control" id="phone" name="tel" type="tel" placeholder="Votre numero de téléphone *" required data-validation-required-message="Entrer votre numero de téléphone.">
                  <p class="help-block text-danger"></p>
                  

                  <select class="form-control" name="type">
                    <option>Type</option>
                    <option>Admin</option>
                    <option>Membre</option>
                  </select>


                </div>
              </div>

              <div class="col-md-5">
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Votre Email *" required data-validation-required-message="Entrer Votre adresse Email.">
                  <p class="help-block text-danger"></p>
                </div>   
                <div class="form-group">
                  <input class="form-control" id="pass" name="mdp" type="password" placeholder="Votre Mot de passe *" />
                  <p class="help-block text-danger"></p>
                  <!-- Base de donnee-->

                </div>
              </div> 
            </div>
          </div>



          <div class="clearfix"></div>
          <div class="col-lg-12 text-center">
            <div id="success"></div>
            <input id="inscription" class="btn btn-primary btn-xl text-uppercase" type="submit" value="Inscription"/>
            <input id="reset" class="btn btn-primary btn-xl text-uppercase" type="reset" value="Annuler"/>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>






<!-- evenement Grid -->
<section class="bg-light" id="evenement">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Evenement</h2>
        <h3 class="section-subheading text-muted">Liste des évènements</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 evenement-item">
        <a class="evenement-link" data-toggle="modal" href="#evenementModal1">
          <div class="evenement-hover">
            <div class="evenement-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>

          <img class="img-fluid" src="images/1.jpg" alt="">
        </a>
        <div class="evenement-caption">
          
          <?php 
          foreach ($res as $row) {
            # code...
          
          echo "<h4>$row[1]</h4>";
          echo "<p class='text-muted'>$row[2]</p>";
        }
          ?>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 evenement-item">
        <a class="evenement-link" data-toggle="modal" href="#evenementModal2">
          <div class="evenement-hover">
            <div class="evenement-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php?>/evenement/02-thumbnail.jpg" alt="">
        </a>
        <div class="evenement-caption">
          <h4>Explore</h4>
          <p class="text-muted">Graphic Design</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 evenement-item">
        <a class="evenement-link" data-toggle="modal" href="#evenementModal3">
          <div class="evenement-hover">
            <div class="evenement-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/evenement/03-thumbnail.jpg" alt="">
        </a>
        <div class="evenement-caption">
          <h4>Finish</h4>
          <p class="text-muted">Identity</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 evenement-item">
        <a class="evenement-link" data-toggle="modal" href="#evenementModal4">
          <div class="evenement-hover">
            <div class="evenement-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/evenement/04-thumbnail.jpg" alt="">
        </a>
        <div class="evenement-caption">
          <h4>Lines</h4>
          <p class="text-muted">Branding</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 evenement-item">
        <a class="evenement-link" data-toggle="modal" href="#evenementModal5">
          <div class="evenement-hover">
            <div class="evenement-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/evenement/05-thumbnail.jpg" alt="">
        </a>
        <div class="evenement-caption">
          <h4>Southwest</h4>
          <p class="text-muted">Website Design</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 evenement-item">
        <a class="evenement-link" data-toggle="modal" href="#evenementModal6">
          <div class="evenement-hover">
            <div class="evenement-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/evenement/06-thumbnail.jpg" alt="">
        </a>
        <div class="evenement-caption">
          <h4>Window</h4>
          <p class="text-muted">Photography</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <span class="copyright">Copyright &copy; Akrimi Iheb DSI21 2017</span>
      </div>
    </div>
  </div>
</footer>

<!-- evenement Modals -->

<!-- Modal 1 -->
<div class="evenement-modal modal fade" id="evenementModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase"><?php echo "$title"?>Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="img/evenement/01-full.jpg" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Threads</li>
                <li>Category: Illustration</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
              Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="evenement-modal modal fade" id="evenementModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="img/evenement/02-full.jpg" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Explore</li>
                <li>Category: Graphic Design</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
              Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="evenement-modal modal fade" id="evenementModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="img/evenement/03-full.jpg" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Finish</li>
                <li>Category: Identity</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
              Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4 -->
<div class="evenement-modal modal fade" id="evenementModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="img/evenement/04-full.jpg" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Lines</li>
                <li>Category: Branding</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
              Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 5 -->
<div class="evenement-modal modal fade" id="evenementModal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="img/evenement/05-full.jpg" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Southwest</li>
                <li>Category: Website Design</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
              Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 6 -->
<div class="evenement-modal modal fade" id="evenementModal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Project Name</h2>
              <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
              <img class="img-fluid d-block mx-auto" src="img/evenement/06-full.jpg" alt="">
              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
              <ul class="list-inline">
                <li>Date: January 2017</li>
                <li>Client: Window</li>
                <li>Category: Photography</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fa fa-times"></i>
              Close Project</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>



<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>

</body>

</html>

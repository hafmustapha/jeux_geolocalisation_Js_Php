<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> GuessThePlace </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\style.css">

  </head>
  <body>
    <!-- header -->
        <!--bar de navigation-->
    <header class="container-fluid">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">GuessThePlace</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="#"> à propos </a></li>
            <li><a href="#contact">contacter nous</a></li>
          </ul>
          <div class="nav navbar-nav navbar-right">
          <li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span>S'inscrire </a></li>
          </div>
        </div>
        <!-- fin e la bar de navigation-->
      </nav>
    </header>


        <!-- formulaire de connexion-->
        <div class="bg-image">
          <form action="#" class="form">
            <h2>Connecter vous</h2>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-12">
                <div  class="input-container">
                  <i class="fa fa-envelope icon"></i>
                  <input class="input-field" type="text" placeholder="Email" name="email">
                </div>

                <div class="input-container">
                  <i class="fa fa-key icon"></i>
                  <input class="input-field" type="password" placeholder="Mot de passe" name="psw">
                </div>

                <button type="submit" class="btn btn-primary">Connecter</button>
              </div>
            </div>
          </form>
        </div>


    <!-- fin du formulaire de connexion-->
    <footer class="container-fluid footer">
      <div class="container">
        <div class="row">
          <h2 id="contact"> Contactez-nous ! </h2>
            <hr class="separator">
              <div class="span6">
                    <form class="formulaireContact">

                            <div class="input-container">
                              <input type="text" id="name" name="name" class="input-field" placeholder="Nom">
                            </div>
                            <div class="input-container">
                              <input type="text" id="email" name="email" class="input-field" placeholder="Email">
                            </div>
                            <div class="input-container">
                              <textarea rows="5" id="description" name="description" class="input-field" placeholder="Description"></textarea>
                            </div>
                            <div class="controls">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                      </form>

              </div>
        </div>
      </div>
    </footer>




  </body>
</html>

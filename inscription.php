<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> GuessThePlace </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">

  </head>
  <body>
    <!-- header -->
    <header class="container-fluid">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">GuessThePlace</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Accueil</a></li>
            <li><a href="#"> à propos  </a></li>
            <li><a href="#contact">contacter nous</a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
        </ul>
        </div>
      </nav>
    </header>
    <!-- début de formulaire-->
    <div class="bg-image">

        <form action="php/insc.php" method="post" class="form">
          <h2>Inscrivez vous</h2>
          <div class="form-group">
            <label >Civilité:</label>
              <label class="radio-inline"><input type="radio" name="civilité">M</label>
              <label class="radio-inline"><input type="radio" name="civilité">Mme</label>
              <label class="radio-inline"><input type="radio" name="civilité">Melle</label>
          </div>
          <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="input-field" id="nom" placeholder="Nom" name="nom" required>
          </div>
          <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" class="input-field" id="prenom" placeholder="Prénom" name="prénom" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="input-field" id="email" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="input-field" id="pwd" placeholder="Enter password" name="pwd" required>
          </div>
          <div class="form-group">
            <label for="pwd2">confirmer votre mot de passe:</label>
            <input type="password" class="input-field" id="pwd2" placeholder="Enter password" name="pwd2" required>
          </div>
          <div class="form-group">
            <label for="date">Date de naissance:</label>
            <input type="date" class="input-field" name="date_naiss" id="date">
          </div>

          <button type="submit" class="btn btn-primary" name="forminscr">Submit</button>
        </form>
      </div>

    <!--fin du formulaire-->

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

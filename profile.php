<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil utilisateur</title>
    <link rel="stylesheet" href="style/profile.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
  </head>
  <body>
    <h1>
      <?= "Bienvenue ".$_GET["name"]." !"?>
    </h1>
    <div class="cards-container">
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="personal-info">
              <p class="name">Profil</p>
            </div>
            <button class="card-name">
              <span>Voir mon profil</span>
              <i class="fas fa-angle-up"></i>
            </button>
          </div>

          <div class="card-footer">
            <p>Voir mon profil</p>
          </div>
        </div>

        <section class="dropdown" style="display: none">
          <div class="dropdown-card linkedin">
            <i class="fab fa-profile"></i>
            <div class="info">
              <label>Editer mon profil</label>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>

          <div class="dropdown-card github">
            <i class="fab fa-user"></i>
            <div class="info">
              <p>
                Nom : Barenne <br />
                Prénom : Julie <br />
                Adresse : 286 rue des Grèzes <br />
                Ville : Montpellier <br />
                Age : 31
              </p>
            </div>
          </div>
        </section>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="personal-info">
              <p class="name">Favoris</p>
            </div>
            <button class="card-name">
              <span>Voir mes favoris</span>
              <i class="fas fa-angle-up"></i>
            </button>
          </div>

          <div class="card-footer">
            <p>Voir mes favoris</p>
          </div>
        </div>

        <section class="dropdown" style="display: none">
          <div class="dropdown-card linkedin">
            <i class="fab fa-linkedin-in"></i>
            <div class="info">
              <label>Linkedin</label>
              <p>linkedin.com/markmcgraw</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>

          <div class="dropdown-card github">
            <i class="fab fa-github"></i>
            <div class="info">
              <label>Github</label>
              <p>github.com/markmcgraw</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>

          <div class="dropdown-card email">
            <i class="far fa-envelope"></i>
            <div class="info">
              <label>Email</label>
              <p>markmcgraw@gmail.com</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>
        </section>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="personal-info">
              <p class="name">Porte-monnaie</p>
            </div>
            <button class="card-name">
              <span>Voir mon porte-monnaie</span>
              <i class="fas fa-angle-up"></i>
            </button>
          </div>

          <div class="card-footer">
            <p>Voir mon porte-monnaie</p>
          </div>
        </div>

        <section class="dropdown" style="display: none">
          <div class="dropdown-card linkedin">
            <i class="fab fa-linkedin-in"></i>
            <div class="info">
              <label>Linkedin</label>
              <p>linkedin.com/markmcgraw</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>

          <div class="dropdown-card github">
            <i class="fab fa-github"></i>
            <div class="info">
              <label>Github</label>
              <p>github.com/markmcgraw</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>

          <div class="dropdown-card email">
            <i class="far fa-envelope"></i>
            <div class="info">
              <label>Email</label>
              <p>markmcgraw@gmail.com</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>
        </section>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="personal-info">
              <p class="name">Transactions</p>
            </div>
            <button class="card-name">
              <span>Voir mes transactions</span>
              <i class="fas fa-angle-up"></i>
            </button>
          </div>

          <div class="card-footer">
            <p>Voir mes transactions</p>
          </div>
        </div>

        <section class="dropdown" style="display: none">
          <div class="dropdown-card linkedin">
            <i class="fab fa-linkedin-in"></i>
            <div class="info">
              <label>Linkedin</label>
              <p>linkedin.com/markmcgraw</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>

          <div class="dropdown-card github">
            <i class="fab fa-github"></i>
            <div class="info">
              <label>Github</label>
              <p>github.com/markmcgraw</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>

          <div class="dropdown-card email">
            <i class="far fa-envelope"></i>
            <div class="info">
              <label>Email</label>
              <p>markmcgraw@gmail.com</p>
            </div>
            <i class="fas fa-angle-right"></i>
          </div>
        </section>
      </div>
    </div>

    <script>
      var container = document.querySelector(".container");
      var btn = document.querySelectorAll(".card-name");
      for (let i = 0; i < btn.length; i++) {
        btn[i].addEventListener("click", function () {
          /* toggle container 'opened' class */
          container = btn[i].parentNode.parentNode.parentNode;
          container.classList.toggle("opened");
          var dropdown = container.querySelector(".dropdown");
          if (dropdown.style.display === "none") {
            dropdown.style.display = "block";
          } else {
            dropdown.style.display = "none";
          }
        });
      }
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./css/style.css" />
    <script
      defer
      src="https://kit.fontawesome.com/f198221260.js"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <script src="./js/script.js" defer></script>
    <title>QuickyMeals</title>
  </head>
  <body>
    <?php
      include("./php/server.php");
    ?>
  <header class="header-container">
      <nav class="nav-container">
        <div class="icon-container"><p>QuickyMeals.com</p></div>
        <div class="bar-container">
          <input
            type="text"
            name="search-bar"
            id="search-bar"
            placeholder="Empieza a buscar recetas"
          />
          <div class="bar-icon">
            <i class="fa-solid fa-magnifying-glass" style="color: #fbfdfc"></i>
          </div>
        </div>
        <div class="links-container">
          <ul>
            <li>
              <a href="">
                <i class="fa-solid fa-chevron-down" style="color: #fbfdfc"></i>
                <p>Categorias</p>
              </a>
            </li>
            <li>
              <a href="">
                <p>Ver recetas</p>
              </a>
            </li>
            <li>
              <a href="">
                <p>Aprende</p>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa-solid fa-plus" style="color: #fbfdfc"></i>
                <p>Subir receta</p>
              </a>
            </li>
            <li>
              <a href="./php/login.php" class="full-btn">
                <p>Unete</p>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="main-container">
      <div class="img-main-container">
        <img src="./src/imgs/orange-background.png" alt="imagen main" />
      </div>
      <div class="text-main-container">
        <h1>
          Un mundo de recetas, <br />
          en un solo lugar.
        </h1>
        <button class="btn-main-explorar">Empieza a explorar</button>
      </div>
      <div class="icon-main-container">
        <i class="fa-solid fa-chevron-down" style="color: #fbfdfc"></i>
      </div>
    </main>
    <section class="content-container">
      <!-- =========================================== -->
      <!-- Recipes section 1-->
      <!-- =========================================== -->
      <section
        class="section-recipes-container popular-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">Recetas mas populares</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div
          class="recipes-container popular-recipes-container"
          data-section="1"
        >
        <?php
          include("./php/receta-main.php");

        ?>
          <div class="btn-next-recipes" data-section="1">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="1">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
        </div>
      </section>

      <!-- =========================================== -->
      <!-- Recipes section 2-->
      <!-- =========================================== -->


      <section
        class="section-recipes-container recomended-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">Recetas que te recomendamos probar</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="recipes-container vegan-recipes-container" data-section="2">
          <?php 
            include('./php/receta-recomendada.php')
          ?>
        <div class="btn-next-recipes" data-section="2">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="2">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
      </div>
    </section>
  <!-- =========================================== -->
      <!-- Section promo fav -->
      <!-- =========================================== -->
      <section class="promo-fav-section">
        <h3>Nuestras recetas verificadas:</h3>
        <div class="fav-carousel-container">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <?php
                include("./php/promo-carousel.php");
              ?>
               </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
            </div>
           
            
          </div>
        </div>
      </section>

      <!-- =========================================== -->
      <!-- Recipes section 4-->
      <!-- =========================================== -->

      <section
        class="section-recipes-container brakefast-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">Inicia bien tus mañanas. Desayunos</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="recipes-container brakefast-recipes-container" data-section="4">
          <?php 
            include('./php/receta-desayuno.php')
          ?>
        <div class="btn-next-recipes" data-section="4">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="4">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
      </div>
    </section>
      <!-- =========================================== -->
      <!-- Recipes section 5-->
      <!-- =========================================== -->

      <section
        class="section-recipes-container brakefast-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">Tienes mucha hambre? Comidas fuertes</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="recipes-container brakefast-recipes-container" data-section="5">
          <?php 
            include('./php/receta-comida.php')
          ?>
        <div class="btn-next-recipes" data-section="5">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="5">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
        </div>
      </section>


       <!-- =========================================== -->
      <!-- Recipes section 6-->
      <!-- =========================================== -->

      <section
        class="section-recipes-container snacks-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">No te quedes con el antojo. Postres y snacks</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="recipes-container snacks-recipes-container" data-section="6">
          <?php 
            include('./php/receta-snack.php')
          ?>
        <div class="btn-next-recipes" data-section="6">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="6">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
      </div>
    </section>
     <!-- =========================================== -->
      <!-- Icons popular section -->
      <!-- =========================================== -->
      <section class="section-icons-categories">
        <div class="icons-categorias-container">
          <a href="#" class="icon-categoria" title="Dulce">
            <img src="./src/icons/pretzel.png" alt="Icon of a pretzel" />
          </a>
          <a href="#" class="icon-categoria" title="Cocteles">
            <img src="./src/icons/cocktail.png" alt="Icon of a cocktail" />
          </a>
          <a href="#" class="icon-categoria" title="Cortes">
            <img src="./src/icons/meat.png" alt="Icon of a pice of meat" />
          </a>
          <a href="#" class="icon-categoria" title="Sushi">
            <img src="./src/icons/sushi.png" alt="Icon of sushi" />
          </a>
          <a href="#" class="icon-categoria" title="Pastas">
            <img src="./src/icons/spaguetti.png" alt="Icon of spaguetti" />
          </a>
          <a href="#" class="icon-categoria" title="Tacos">
            <img src="./src/icons/taco.png" alt="Icon of a taco" />
          </a>
        </div>
      </section>
       <!-- =========================================== -->
      <!-- Recipe Section 7 -->
      <!-- =========================================== -->
      <section
        class="section-recipes-container dinner-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">Noches de inspiracion? Cenas</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="recipes-container dinner-recipes-container" data-section="7">
          <?php 
            include('./php/receta-cena.php')
          ?>
        <div class="btn-next-recipes" data-section="7">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="7">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
      </div>
    </section>
      <!-- =========================================== -->
      <!-- Recipe Section 8 -->
      <!-- =========================================== -->
      <section
        class="section-recipes-container dinner-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">Delicias nacionales.</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="recipes-container dinner-recipes-container" data-section="8">
          <?php 
            include('./php/receta-mexico.php')
          ?>
        <div class="btn-next-recipes" data-section="8">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="8">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
      </div>
    </section>
      <!-- =========================================== -->
      <!-- Promo drinks section -->
      <!-- =========================================== -->

      <section class="section-promo-bebidas">
        <div class="section-promo-bebidas-container">
          <div class="txt-drinks">
            <p>¿Algo para acompañar tu comida?</p>
            <h4>Descubre Bebidas</h4>
            <button>Mas información</button>
          </div>
          <div class="img-drink img-drink-purple">
            <img
              src="./src/imgs/purple-drink.png"
              alt="Image of purple drink"
            />
          </div>
          <div class="img-drink img-drink-yellow">
            <img
              src="./src/imgs/yellow-drink.png"
              alt="Image of yellow drink"
            />
          </div>
          <div class="img-drink img-drink-orange">
            <img
              src="./src/imgs/orange-drink.png"
              alt="Image of orange drink"
            />
          </div>
          <div class="img-drink img-drink-blue">
            <img src="./src/imgs/blue-drink.png" alt="Image of blue drink" />
          </div>
        </div>
      </section>
      <!-- =========================================== -->
      <!-- Recipe Section 9 -->
      <!-- =========================================== -->
      <section
        class="section-recipes-container dinner-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">Recetas veganas.</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="recipes-container dinner-recipes-container" data-section="9">
          <?php 
            include('./php/receta-vegana.php')
          ?>
        <div class="btn-next-recipes" data-section="9">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="9">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
      </div>
      </section>
       <!-- =========================================== -->
      <!-- Recipe Section 10 -->
      <!-- =========================================== -->
      <section
        class="section-recipes-container drinks-section-recipes-container"
      >
        <div class="section-top-info">
          <h3 class="section-title">No te quedes con sed. Bebidas</h3>
          <div class="see-everything">
            <a href="#">Ver todos</a>
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
        <div class="recipes-container drinks-recipes-container" data-section="10">
          <?php 
            include('./php/receta-drinks.php')
          ?>
        <div class="btn-next-recipes" data-section="10">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
          <div class="btn-previous-recipes" data-section="10">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
      </div>
    </section>
    
    </section>
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-logo-section">
          <div class="footer-logo"></div>
          <h4><a href="#">QuickyMeals.com</a></h4>

          <p class="footer-logo-txt"></p>
        </div>

        <div class="footer-pages-sections">
          <h4>Servicios</h4>
          <div class="footer-pages">
            <p class="footer-page-list"><a href="#">Inicio</a></p>
            <p class="footer-page-list"><a href="#">Ver recetas</a></p>
            <p class="footer-page-list"><a href="#">Subir receta</a></p>
            <p class="footer-page-list"><a href="#">Aprende</a></p>
            <p class="footer-page-list"><a href="#">Unete</a></p>
            <p class="footer-page-list"><a href="#">Contacto</a></p>
          </div>
        </div>

        <div class="footer-thanks-section">
          <h4>Gracias a los siguientes recursos por hacer posible QM :&#41;</h4>
          <div class="footer-thanks">
            <p class="footer-page-list">
              <a
                href="https://www.flaticon.com/free-icons/pastry"
                title="pastry icons"
                >Pastry icons created by Freepik - Flaticon</a
              >
            </p>
            <p>
              <a
                href="https://www.flaticon.com/free-icons/cocktail"
                title="cocktail icons"
                >Cocktail icons created by Freepik - Flaticon</a
              >
            </p>
            <p>
              <a
                href="https://www.flaticon.com/free-icons/meat"
                title="meat icons"
                >Meat icons created by Freepik - Flaticon</a
              >
            </p>
            <p>
              <a
                href="https://www.flaticon.com/free-icons/sushi"
                title="sushi icons"
                >Sushi icons created by Pixel perfect - Flaticon</a
              >
            </p>
            <p>
              <a
                href="https://www.flaticon.com/free-icons/pasta"
                title="pasta icons"
                >Pasta icons created by monkik - Flaticon</a
              >
            </p>
            <p>
              <a
                href="https://www.flaticon.com/free-icons/taco"
                title="taco icons"
                >Taco icons created by Freepik - Flaticon</a
              >
            </p>
            <p><a href="https://unsplash.com/">Unsplash</a></p>
          </div>
        </div>
        <div class="footer-social">
          <div class="icon-instagram">
            <a href="#"> <i class="fa-brands fa-instagram"></i></a>
          </div>
          <div class="icon-facebook">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
          </div>
          <div class="icon-twitter">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </div>
          <div class="icon-youtube">
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
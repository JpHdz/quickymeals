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

    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/login.css" />
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

    <script src="../js/login.js" defer></script>
    <title>QuickyMeals</title>
  </head>
  <body>
    <div class="login-template">
      <section class="login-section">
        <div class="login-forms-container">
          <!-- ============== -->
          <!-- Sign up -->
          <!-- ==========s==== -->
          <div class="sign-up-template hidden">
            <div class="qm-login-logo">
            <a href="../index.php">QuickyMeals.com</a>
            </div>
            <div class="sign-up-content">
              <div class="top-sign-up-txt">
                <h3>QuickyMeals te da la bienvenida</h3>
                <p>
                  Por favor, rellene los siguientes campos para crear una cuenta
                </p>
              </div>
              <div class="bottom-sign-up-txt">
                <form action="" class="sign-up-form">
                  <input
                    type="text"
                    name="sign-up-username"
                    id="sign-up-username"
                    placeholder="Nombre de usuario"
                  />

                  <input
                    type="mail"
                    name="sign-up-mail"
                    id="sign-up-mail"
                    placeholder="Correo Electronico"
                  />

                  <input
                    type="password"
                    name="sign-up-password"
                    id="sign-up-password"
                    placeholder="Contraseña"
                  />

                  <input
                    type="password"
                    name="sign-up-confirm-password"
                    id="sign-up-confirm-password"
                    placeholder="Confirmar contraseña"
                  />
                  <button type="submit" class="btn-create-acc">
                    Crear cuenta
                  </button>
                </form>
                <div class="log-in-link-container">
                  Ya tienes una cuenta?
                  <span class="log-in-link">Inicia sesion</span>
                </div>
              </div>
            </div>
          </div>
          <!-- ============== -->
          <!-- Log in -->
          <!-- ============== -->

          <div class="log-in-template">
            <div class="qm-login-logo">
            <a href="../index.php">QuickyMeals.com</a>
            </div>
            <div class="log-in-content">
              <div class="top-log-in-txt">
                <h3>Bienvenido de vuelta</h3>
                <p>
                  Por favor, rellene los siguientes campos para iniciar sesion
                </p>
              </div>
              <div class="bottom-log-in-txt">
                <form action="" class="log-in-form">
                  <label for="log-in-mail"
                    >Por favor introduzca su correo electronico:</label
                  >
                  <input type="mail" name="log-in-mail" id="log-in-mail" />
                  <label for="log-in-password"
                    >Por favor introduzca su contraseña:</label
                  >
                  <input
                    type="password"
                    name="log-in-password"
                    id="log-in-password"
                  />

                  <button type="submit" class="btn-log-in">
                    Iniciar sesion
                  </button>
                </form>
                <div class="sign-up-link-container">
                  No tienes cuenta?
                  <span class="sign-up-link">Crea una gratis</span>
                </div>
              </div>
            </div>
          </div>

          <div class="log-in-template"></div>
        </div>
        <div class="login-img-container"></div>
      </section>
      <section class="login-img-container">
        <img src="../src/imgs/ice-cream.jpg" alt="Image of an icecream" />
      </section>
    </div> 
  </body>
</html>
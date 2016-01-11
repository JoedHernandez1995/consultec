<?php
include("form.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CONTACTOS | CONSULTEC</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <!--NavBar with mobile collapse button-->
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!" class="grey-text text-darken-4">Apoyo Gerencial</a></li>
      <li class="divider"></li>
      <li><a href="#!" class="grey-text text-darken-4">Asesorias Financieras</a></li>
      <li class="divider"></li>
      <li><a href="#!" class="grey-text text-darken-4">Asesoria En Imagen Corporativa</a></li>
      <li class="divider"></li>
      <li><a href="#!" class="grey-text text-darken-4">Sistemas De Informacion</a></li>
      <li class="divider"></li>
      <li><a href="#!" class="grey-text text-darken-4">Gobierno Corporativo</a></li>
    </ul>
    <nav>
      <div class="nav-wrapper grey darken-4">
        <a href="#!" class="brand-logo">CONSULTEC S de R.L.</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="vision.html">Visi&oacuten</a></li>
          <li><a href="mision.html">Misi&oacuten</a></li>
          <li><a href="nosotros.html">Nosotros</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="collapsible.html">Clientes</a></li>
          <li><a href="contact.php">Contactos</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="vision.html">Visi&oacuten</a></li>
          <li><a href="mision.html">Misi&oacuten</a></li>
          <li><a href="nosotros.html">Nosotros</a></li>
          <li><a href="collapsible.html">Servicios</a></li>
          <li><a href="collapsible.html">Clientes</a></li>
          <li><a href="contact.php">Contactos</a></li>
        </ul>
      </div>
    </nav>

    <h1 class="center grey-text text-darken-3">Contactos</h1>

    <div class="container">
      <div class="row">
        <div class="col s4">
          <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-4">
                <div class="card-content grey-text text-lighten-2">
                  <img class="responsive-img circle" src="images/profile.jpg">
                  <span class="card-title"></span>
                  <p></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col s4">
          <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-4">
                <div class="card-content grey-text text-lighten-2">
                  <img class="responsive-img circle" src="images/profile.jpg">
                  <span class="card-title center"></span>
                  <p></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col s4">
          <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-4">
                <div class="card-content grey-text text-lighten-2">
                  <img class="responsive-img circle" src="images/profile.jpg">
                  <span class="card-title center"></span>
                  <p></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

  </br>

    <h1 class="center grey-text text-darken-3">Escribanos</h1>

    <div class="row">
      <div class="center">
        <?php
          if($error){
            echo '<div class="red-text text-darken-1">'.addslashes($error).'</div>';
          }
          if($success == 1){
            echo '<div class="green-text text-lighten-1">Su Mensaje Fue Enviado Con Exito</div>';
          }else if($success == 2){
            echo '<div class="red-text text-darken-1">Ocurrio Un Error Al Enviar El Mensaje</div>';
          }
        ?>
      </div>
    </div>

    <div class="container">
      <form method="post">
        <div class="row">
          <div class="input-field col s6 push-s3 center">
            <input id="name" type="text" class="validate" name="name">
            <label for="name">Nombre (Requerido)</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 push-s3 center">
            <input id="email" type="email" class="validate" name="email">
            <label for="email">Email (Requerido)</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 push-s3 center">
            <input id="subject" type="text" class="validate" name="subject">
            <label for="name">Asunto</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8 push-s3 center">
            <textarea id="message" class="materialize-textarea" name="message"></textarea>
            <label for="textarea1">Mensaje</label>
          </div>
        </div>
        <div class="row">
          <div class="col s6 push-s3">
            <button class="btn waves-effect waves-light grey darken-4" type="submit" name="submit" value="submit">Enviar
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>

  </br>

    <!--Footer-->
    <footer class="page-footer grey darken-4">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">CONSULTEC S. de R.L.</h5>
            <p class="grey-text text-lighten-4">Contactenos</p>
            <ul class="grey-text text-lighten-4">
              <li>Telefono de Oficina: </li>
              <li>Celular: </li>
              <li>Correo Electronico: </li>
            </ul>
          </div>
          <div class="col l4 offset-l2 s12">
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Consultorias</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Apoyo Gerencial</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Asesoria Financiera</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Sistemas de Informacion</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Gobierno Corporativo</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          Todos los Derechos Reservados 2015 CONSULTEC S de R.L.
          <a class="grey-text text-lighten-4 right" href="#!">|Politicas</a>
          <a class="grey-text text-lighten-4 right" href="#!">|Contratos</a>
          <a class="grey-text text-lighten-4 right" href="#!">Mapa Del Sitio</a>
        </div>
      </div>
    </footer>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
  </body>
</html>

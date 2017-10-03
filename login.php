<!DOCTYPE html>
<html>
  <head>
    <?php include "head.html" ?>
    <title>Ipama - Login</title>
  </head>
  <body>
    <div>
      <?php include "header.html" ?>

    <section class="container-registro">
      <div class="image-registro">
        <img src="images/images-formulario.jpg" alt="ropa">
      </div>
      <form action="script.php" method="post" class="formulario">
        <h2 class="titulo-formulario">Identificacion de usuario</h2>
        <br>


        <label for="usuario">Nombre de usuario</label><br>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>

        <label for="correo">Contraseña</label><br>
        <input type="password" name="pass" id="pass" required>
        <br><br>



        <button type="submit">Ingresar</button>

      </form>
    </section>

    <?php include "footer.html" ?>

  </div>


  </body>
</html>

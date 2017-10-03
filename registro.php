<!DOCTYPE html>
<html>
  <head>
    <?php include "head.html" ?>
    <title>Ipama - Registro de usuario</title>
  </head>
  <body>
    <div>
      <?php include "header.html" ?>

    <section class="container-registro">
      <div class="image-registro">
        <img src="images/images-formulario.jpg" alt="ropa">
      </div>
      <form action="script.php" method="post" class="formulario">
        <h2 class="titulo-formulario">Registro de usuario</h2>
        <br>


        <label for="usuario">Nombre de usuario</label><br>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>

        <label for="correo">Contraseña</label><br>
        <input type="password" name="pass" id="pass" required>
        <br><br>

        <label for="correo">Reingrese contraseña</label><br>
        <input type="password" name="pass2" id="pass2" required>
        <br><br>

        <label for="correo">Correo Electronico</label><br>
        <input type="email" name="correo" id="correo" placeholder="email@email.com" required>
        <br><br>

        <label for="nombre">Nombre completo</label><br>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>

        <label>  Asunto</label><br>
        <select name="asunto" required>
          <option value="comprar">Comprar</option>
          <option value="vender">Vender</option>
          <option value="comprar/vender">Comprar/Vender</option>
          <option value="conocer">Conocer</option>
        </select>
        <br><br>

        <label>  Genero</label><br>
        <label>
          <input type="radio" name="genero" checked>
          Masculino
        </label>
        <label>
          <input type="radio" name="genero">
          Femenino
        </label>
        <label>
          <input type="radio" name="genero">
          No Responde
        </label>
        <br><br>


        <label>  Comentarios</label><br>
        <textarea name="comentarios" required></textarea>
        <br><br>


        <button type="submit">Enviar</button>


        <button type="reset">Borrar</button>
        <br><br>
        
      </form>
    </section>

    <?php include "footer.html" ?>

  </div>


  </body>
</html>

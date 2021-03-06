<?php 
      include "../../functions/conecta-banco.php";
      require "base.php";
      //session_start() já está dentro desse include...
  
      // RETORNA O NOME DA IMAGEM DO RESTAURANTE JUNTAMENTE COM SUA EXTENSÃO
      $email = $_SESSION['email_restaurante'];
      $comandoSQL = "SELECT img_restaurante from tb_restaurante WHERE email_restaurante='$email'";
      $resultado_usuario = mysqli_query($con, $comandoSQL);
      $total = mysqli_num_rows($resultado_usuario);
      if($total === 1){
        $pegaimg = mysqli_fetch_array($resultado_usuario);
        $_SESSION['img_restaurante'] = $pegaimg['img_restaurante'];
      }
?>
  <main>
    <div class="espacamento"></div>
    <div class="container">
      <div class="row">
        <div class="col s12 l6 offset-l3 white-text card hoverable">
          <div class="col s12 center">
            <h1 class="text-center teal-text light"><small>Reportar Bug</small></h1>
            <p class="justificar black-text">
              Olá, tendo em vista que nosso sistema foi recém implementado, pode surgir alguns bugs, caso encontre algo, nos mande por aqui.
            </p>
          </div>
          <div class="input-field col s12">
            <textarea class="validate materialize-textarea" placeholder="Descrição do pedido" name="descricao" required></textarea>
            <label for="message">Descreva o bug</label>
          </div>
          <div class="center-align">
            <input type="submit" value="Reportar Bug" class="btn">
          </div>
          <div class="col s12">&nbsp;</div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="teal darken-4 section white-text center">
    <p class="flow-text">Conéctar Todos os Direitos Reservados &copy; 2020</p>
  </footer>

  <!-- ADICIONANDO JQUERY -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <!--Import JqueryMask-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="../../scripts/paginas-dentro.js"></script>
</body>

</html>
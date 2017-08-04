<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Social Media Generator</title>
  </head>
  <link rel="stylesheet" href="assets/semantic/semantic.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <body>

    <?php include('connect.php'); ?>
    <?php $id = $_GET['ID']; ?>

    <?php   $query = "SELECT * from pecas WHERE ID=$id";
                 if ($result = mysqli_query($conn, $query)){
                         //data
                          while ($row = mysqli_fetch_array($result))  { ?>


  <div class="ui inverted vertical segment">
    <div class="ui two column grid container stackable" style="margin:2em 0">
      <div class="middle aligned column">
        <a href="#">
        <h1 class="ui header inverted">Comunicação Digital
        <div class="sub header inverted">Gerência de Comunicação e Relações Institucionais</div>
        </h1>
        </a>
      </div>
      <div class="right aligned column">
        <img src="http://cd.intranet.sp.senac.br/wp-content/themes/comunicacao-digital/images/logo-senac-branco.png" width="130">
      </div>
    </div>
  </div>

  <div class="ui attached stackable inverted menu" style="border: 1px solid rgba(255, 255, 255, 0.1);">
    <div class="ui container" style="border-left:1px solid rgba(255, 255, 255, 0.1); border-right:1px solid rgba(255, 255, 255, 0.1)">
      <a href="#" class="item"><i class="setting icon"></i> Configurações</a>
    </div>
  </div>

  <div class="cd-push"></div>

  <div class="ui horizontal divider"></div>

  <div class="ui">
    <div class="ui grid container">
      <div class="eight wide column">
        <div class="ui segment">
            <h1 class="ui large header">Nova peça</h1>

            <form class="ui form" action="update.php?ID=<?php echo ($row['ID']);?>" method="post">
              <div class="field">
                <label for="mainTitle">Título</label>
                <input type="text" name="mainTitle" id="mainTitle" value="<?php echo ($row['mainTitle']);?>" placeholder="Título">
              </div>
              <div class="field">
                <label for="mainImage">Imagem</label>
                <input type="file" name="mainImage" id="mainImage" value="">
              </div>
              <div class="field">
                <label for="">Template:</label>
                <div class="ui three column grid">
                  <div class="column">
                    <div class="ui segment">
                      <input type="radio" id="template01" name="template" value="template01">
                      <label for="template01"><img width="100%" id="template01Thumb" src="assets/images/templates/01.png"></label>
                    </div>
                  </div>
                  <div class="column">
                    <div class="ui segment">
                      <input type="radio" id="template02" name="template" value="template02">
                      <label for="template02"><img width="100%" id="template01Thumb" src="assets/images/templates/02.png"></label>
                    </div>
                  </div>
                  <div class="column">
                    <div class="ui segment">
                      <input type="radio" id="template03" name="template" value="template03">
                      <label for="template03"><img width="100%" id="template01Thumb" src="assets/images/templates/03.png"></label>
                    </div>
                  </div>
                </div>
              <div class="field">
                <br><label for="mainText">Chamada</label>
                <input type="text" name="mainText" id="mainText" value="" placeholder="Título">
              </div>
              <input name="mainTemplate" id="mainTemplate" val="" type="text">
              <input name="data" id="data" val="" type="text">
              <input name="imageX" id="imageX" val="" type="text">
              <input name="imageY" id="imageY" val="" type="text">
              <input name="textX" id="textX" val="" type="text">
              <input name="textY" id="textY" val="" type="text">
              <input name="imageScaleVal" id="imageScaleVal" val="" type="text">
              <input name="imageRotateVal" id="imageRotateVal" val="" type="text">
              <div class="field">
                <input type="submit" class="fluid large primary ui button" name="" value="Criar">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="eight wide column">
        <div class="ui segment">
          <h1 class="ui large header">Preview</h1>
          <div id="mainStage">
            <div id="mainTextContent"></div>
            <div id="previewImageWrapper">
              <div id="imageRotateImage">
                <img src="#" id="previewImage" alt="">
              </div>
            </div>
            <div id="mainTemplateWrapper">
              <img width="100%" src="#" id="mainTemplateImg" alt="" >
            </div>
          </div>
      </div>
      <div class="ui segment" id="imageAjustment">
        <h1 class="ui small header">Ajustes de imagem</h1>
        <div class="ui form">
          <div class="two fields">
            <div class="field">
              <label>Escala</label>
              <input name="imageScale" id="imageScale" value="1"  min="0.25" max="2" step="0.01" type="range">
            </div>
            <div class="field">
              <label>Rotacionar</label>
              <input name="imageRotate" id="imageRotate" value="0" min="0" max="180" type="range">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
}
}

mysqli_free_result($result);
mysqli_close($conn);

?>


    <script src="assets/js/vendors/vendors.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="assets/js/new.js"></script>
    <script src="assets/semantic/semantic.js"></script>
  </body>
</html>

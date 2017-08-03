<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Social Media Generator</title>
  </head>
  <link rel="stylesheet" href="assets/semantic/semantic.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <body>


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

  <div class="ui basic segment">
    <div class="ui center aligned container">
      <h2 class="ui center aligned header" style="margin:2em 0;">
      <i class="grid layout icon"></i>Catálogo</h2>
      <form class="ui form" method="get" action="#" role="search">
        <div class="ui action left icon huge input fluid">
          <i class="search icon"></i>
          <input name="post_type" value="curso" type="hidden">
          <input id="campo-pesquisa" name="s" placeholder="Pesquisar..." type="search">
          <button type="submit" class="ui secondary huge button">Pesquisar</button>
        </div>
      </form>
    </div>
  </div>

  <div class="ui basic segment">
    <div class="ui center container">
      <table class="ui celled table">
        <thead>
          <tr class="center aligned">
            <th width="120">Data</th>
            <th class="left aligned">Título</th>
            <th width="120">Editar</th>
            <th width="120">Deletar</th>
          </tr>
        </thead>
      </table>
      <table class="ui celled table">
        <tbody>
          <tr class="center aligned">
            <td width="120">02/10/2017</td>
            <td class="left aligned">Lorem ipsum dolor sit amet</td>
            <td width="120"><a href="#"><i class="edit icon"></i></a></td>
            <td width="120"><a href="#"><i class="trash icon"></i></a></td>
          </tr>
          <tr class="center aligned">
            <td width="120">02/10/2017</td>
            <td class="left aligned">Lorem ipsum dolor sit amet</td>
            <td width="120"><a href="#"><i class="edit icon"></i></a></td>
            <td width="120"><a href="#"><i class="trash icon"></i></a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="4">
              <div class="ui right floated pagination menu">
                <a class="icon item">
                  <i class="left chevron icon"></i>
                </a>
                <a class="item">1</a>
                <a class="item">2</a>
                <a class="item">3</a>
                <a class="item">4</a>
                <a class="icon item">
                  <i class="right chevron icon"></i>
                </a>
              </div>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

    <script src="assets/semantic/semantic.js"></script>
  </body>
</html>

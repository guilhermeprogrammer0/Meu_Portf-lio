<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="reset.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="style_cadastrados.css">

  <link rel="sortcut icon" href="icone.png" type="image/x-icon" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área Cadastrados</title>

</head>

<body>

  <header class="cabecalho">
    <h1 class="display-3">ÁREA DOS CADASTRADOS</h1>
  </header>
  <?php
  require_once "conexao.php";

  $sql = "SELECT * FROM usuarios";

  $consulta = mysqli_query($conexao, $sql);
  $qtd_cadastrados = mysqli_num_rows($consulta);
  ?>
  <section class="tabela">
    <table class="table" style="color:white;">
      <thead>
        <?php
        if ($qtd_cadastrados == 0) {
        ?>
          <td>
            <h2 style="color:	#FA8072;"> Nenhum Cadastro
          </td>
          </h2><?php

              } else {
                ?>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Data Cadastro</th>
          </tr>
      </thead>
      <tbody>

        <tr>
          <?php

                while ($linhas = mysqli_fetch_array($consulta)) {
          ?>


            <td><?php echo $linhas['id_usuario']; ?></td>
            <td><?php echo $linhas['nome']; ?></td>
            <td><?php echo $linhas['email']; ?></td>
            <td><?php echo $linhas['data']; ?></td>

        </tr>


      </tbody>
  <?php
                }
              }
  ?>
    </table>
  </section>

  <div class="area">
    <h3> Excluir cadastro </h3>
    <div class="item1">
      <form action="area_cadastrados.php" method="POST">
        <input class="form-control form-control-sm" name="id_usuario" type="text" placeholder="id usuário">

    </div>
    <div class="item2">
      <input type="submit" name="enviar" class="btn btn-primary" value="Excluir por ID">
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Excluir Tudo
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h5> Deseja mesmo Excluir? </h5>
              <p> Obs: Se confirmar não tem como reverter. </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
              <input type="submit" name="Excluir_Tudo" class="btn btn-danger" value="Sim">
            </div>
          </div>
        </div>
      </div>


      </form>


    </div>
  </div>
  <?php

  error_reporting(0);
  if ($_POST['Excluir_Tudo']) {

    if ($qtd_cadastrados > 0) {
      $sql_excluir_tudo = "TRUNCATE usuarios";
      $excluido1 = mysqli_query($conexao, $sql_excluir_tudo);
      if ($excluido1) {
  ?>
        <script>
          alert("Usuários Excluídos com Sucesso!");
        </script>
      <?php
      } else {
      ?>
        <script>
          alert("[ERRO]");
        </script>
      <?php
      }
    } else {
      ?>
      <script>
        alert("NÃO EXISTE USUÁRIOS!");
      </script>
  <?php
    }
  }
  ?>






  <h3 id="qtd_c"> Cadastrados: <?php echo "<strong>  $qtd_cadastrados </strong>" ?> </h3>

  <?php
  error_reporting(0);
  if ($_POST['enviar']) {
    if (strlen($_POST['id_usuario']) == 0) {
  ?>
      <script>
        alert("Preencha o Campo");
      </script>
      <?php
    } else {
      $id_usuario = $_POST['id_usuario'];
      $sql_V = "SELECT id_usuario from usuarios WHERE id_usuario = '$id_usuario'";
      $verificado = mysqli_query($conexao, $sql_V);
      $qtd_V = mysqli_num_rows($verificado);

      if ($qtd_V >= 1) {
        $sql_excluir = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";
        $excluido = mysqli_query($conexao, $sql_excluir);

        if ($verificado) {
      ?>
          <script>
            alert('Usuário EXCLUÍDO com sucesso!!');
          </script>
        <?php
        } else {
        ?>
          <script>
            alert('[ERRO]');
          </script>
        <?php
        }
      } else {
        ?>
        <script>
          alert('USUÁRIO NÃO EXISTE!!!');
        </script>
  <?php
      }
    }
  }









  ?>
























  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



</body>

</html>
<?php
  include_once("conexao.php");
  include_once("session.php");

  if (isset($_POST['deletar'])) {
    $f_email    =   mysqli_real_escape_string($link, $_POST['f_email']);
    $sql        =   mysqli_query($link, "DELETE FROM smartway.funcionario WHERE f_email='$f_email'");
    $u_email    =   mysqli_real_escape_string($link, $_POST['f_email']);
    $sql        =   mysqli_query($link, "DELETE FROM smartway.usuario WHERE u_email='$u_email'");
    echo "<center><h3>Funcionário Não faz mais Parte da Equipe :(</center></h3>";
  }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Smart Way Assistencia</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <!-- Icons font CSS-->
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">

  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</head>

<body>

  <div class="d-flex" id="wrapper">

  <?php
  include_once("slide.php"); 
  ?>

      <div class="container-fluid">
      

<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Funcionarios</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
    <form method="POST">
      <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Email</th>
                <th class="text-center">Senha</th>
              </tr>
            </thead>
            <tbody>

            <div class="main">
            <div class="form-group has-search">
              <input type="text" name="f_email" class="form-control" placeholder="Delete um Funcionário Por EMAIL">
            </div>
            </div>

              <?php
                include_once("partial.php");
              ?>    
            </tbody>
      </table>
    </div>
    
  </div>
    <button type="submit" name="deletar" class="btn btn-danger" value="Input">Excluir</button>

</div>
</form>
</div>

</div>
 

  </div>
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- 
    <script type="text/javascript" src="toledo.js">
    </script>
  -->
</body>

</html>
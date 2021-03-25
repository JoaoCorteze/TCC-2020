<?php
  include_once("conexao.php");
  include_once("session.php");

  if (isset($_POST['funcionario'])){

    $f_email  = mysqli_real_escape_string($link, $_POST['f_email']);

    $querida  = "SELECT f_email FROM smartway.funcionario WHERE f_email = '$f_email'";

    $result  = mysqli_query($link, $querida);
    $row     = mysqli_fetch_array($result);
    $row     = mysqli_num_rows($result);

      if ($row == 0) {
        $f_email     =   mysqli_real_escape_string($link, $_POST['f_email']);
        $f_nome      =   mysqli_real_escape_string($link, $_POST['f_nome']);
        $f_senha     =   mysqli_real_escape_string($link, $_POST['f_senha']); $f_senha = md5($f_senha);
    
        $qry = "INSERT INTO smartway.funcionario (f_email, f_nome, f_senha)VALUES('$f_email', '$f_nome', '$f_senha')";
        $qra = "INSERT INTO smartway.usuario (u_email, u_senha, u_nivel, u_endereco, u_telefone)VALUES('$f_email', '$f_senha', '2', 'Do Trabalho', 'De Casa')";
          if (mysqli_query($link, $qry)){
              if (mysqli_query($link, $qra)) {
                echo "<center><h3>Funcionário Cadastrado com Sucesso</h3></center>";
              }
          }
        }elseif ($row == 1) {
          echo "<center><h3>Funcionário já Consta no Sistema</h3></center>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SmartWay Assistencia</title>
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

</head>

<body>

  <div class="d-flex" id="wrapper">

  <?php 
    include_once("slide.php"); 
  ?>

      <div class="container-fluid">
        
        <div class="container-fluid">
        
          <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Cadastrar funcionario</h2>
                    </div>
                    <div class="card-body">



                                        <form method="POST">
                                            <div class="form-row m-b-55">
                                                <div class="name">Nome</div>
                                                <div class="value">
                                                    <div class="row row-space">
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input class="input--style-5" type="text" name="f_nome" required>                                             
                                                            </div>
                                                        </div>
                                                        <div class="col-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                            <div class="form-row">
                                                <div class="name">E-mail</div>
                                                <div class="value">
                                                    <div class="input-group">
                                                        <input class="input--style-5" type="email" name="f_email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                              <div class="name">Senha</div>
                                              <div class="value">
                                                  <div class="input-group">
                                                      <input class="input--style-5" type="password" name="f_senha" required>
                                                  </div>
                                              </div>
                                          </div>
                                                                    
                                            <div>
                                                <button name="funcionario" class="btn btn--radius-2 btn--blue" type="submit">Cadastrar</button>
                                            </div>
                                        </form>



                    </div>
                </div>
            </div>
        </div>
      
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


<script>
  
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
</body>

</html>

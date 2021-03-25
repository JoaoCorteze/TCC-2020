<?php
    include_once("session.php");
    include_once("conexao.php");
    if (isset($_POST['pedir'])){
        $os_nome       =   mysqli_real_escape_string($link, $_POST['os_nome']);
        $os_defeito    =   mysqli_real_escape_string($link, $_POST['os_defeito']);
        $os_produto    =   mysqli_real_escape_string($link, $_POST['os_produto']);
        $os_detalhe    =   mysqli_real_escape_string($link, $_POST['os_detalhe']);
        $os_email      =   $_SESSION['u_email'];
        
        $query = "INSERT INTO smartway.ordem_servico (os_nome, os_produto, os_defeito, os_detalhe, os_email)
        VALUES('$os_nome', '$os_produto', '$os_defeito', '$os_detalhe', '$os_email')";
        
            if (mysqli_query($link, $query)){
                echo "<center>Problema reportado com sucesso</center>";

                }
        }
       
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Smart Way Assistencia</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
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

    <!-- Sidebar -->
<?php
include_once("slide.php"); 
?>

<!-- Form para solicitar chamado -->
      <div class="container-fluid">
        
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
          <div class="wrapper wrapper--w790">
              <div class="card card-5">
                  <div class="card-heading">
                      <h2 class="title">Abrir Chamado</h2>
                  </div>
                  <div class="card-body">
                      <form method="POST">
                          <div class="form-row m-b-55">
                              <div class="name">Nome</div>
                              <div class="value">
                                  <div class="row row-space">
                                      <div class="col-12">
                                          <div class="input-group-desc">
                                              <input class="input--style-5" type="text" name="os_nome" required>                                             
                                          </div>
                                      </div>
                                      <div class="col-0">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="name">Produto</div>
                              <div class="value">
                                  <div class="input-group">
                                    <select name="os_produto" class="form-control" id="sel1" required>
                                        <option>Notebook</option>
                                        <option>Computador de mesa</option>
                                        <option>Perifericos (Mouse, Teclado, Fone)</option>
                                        <option>Celular</option>
                                    </select>
                                  </div>
                              </div>
                          </div>   
                          <div class="form-row">
                              <div class="name">Defeito</div>
                              <div class="value">
                                  <div class="input-group">
                                      <input name="os_defeito" class="input--style-5" type="text" name="os_defeito" required>
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                            <div class="name">Detalhes do defeito apresentado</div>
                            <div class="value">
                            <center>
                                <div class="input-group">
                                    <div class="form-group form-group-textarea mb-md-0">
                                    <textarea class="form-control" name="os_detalhe" id="message" placeholder="Detalhe Aqui o Ocorrido" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                </div>
                                </center>
                            </div>
                        </div>                         
                          <div>
                              <center><button name="pedir" class="btn btn--radius-2 btn--blue" type="submit">Solicitar</button></center>
                            
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- Jquery JS-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <!-- Vendor JS-->
      <script src="vendor/select2/select2.min.js"></script>
      <script src="vendor/datepicker/moment.min.js"></script>
      <script src="vendor/datepicker/daterangepicker.js"></script>
  
      <!-- Main JS-->
      <script src="js/global.js"></script> 
      
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



</body>

</html>
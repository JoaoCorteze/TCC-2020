<?php
  include_once("conexao.php");
  include_once("session.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Smartway Assistencia</title>
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
      
<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Seus Chamados</h3>
  <div class="card-body">
    <div id="table" class="table-editable">

      <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
              <tr>
                <th class="text-center">Solicitante</th>
                <th class="text-center">Produto</th>
                <th class="text-center">Defeito</th>
                <th class="text-center">Detalhes</th>
                <th class="text-center">Contato</th>
                <th class="text-center">Andamento</th>
            </tr>
            </thead>
            <tbody>
              <!-- This is our clonable table line -->
              <?php
                $os_email = $_SESSION['u_email'];
                $sql = mysqli_query($link, "SELECT os_nome, os_produto, os_defeito, os_detalhe, os_email, os_andamento FROM smartway.ordem_servico WHERE os_email='$os_email'") or die("Erro");
                while($dados=mysqli_fetch_assoc($sql)){
              ?>
              <tr>
                  <td class="pt-3-half" contenteditable="true"><?php echo $dados ['os_nome']        ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $dados ['os_produto']     ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $dados ['os_defeito']     ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $dados ['os_detalhe']     ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $dados ['os_email']       ?></td>
                  <td class="pt-3-half" contenteditable="true"><?php echo $dados ['os_andamento']   ?></td>     
                </tr>
                <?php } ?>
              </tr>
              <!-- This is our clonable table line -->
            </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- 
    <script type="text/javascript" src="toledo.js">
    </script>
  -->
</body>

</html>
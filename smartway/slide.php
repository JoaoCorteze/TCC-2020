<?php
  include_once("session.php");
  
?>
<div class="bg-dark border-right" id="sidebar-wrapper">
<div class="bg-dark sidebar-heading text-white">Seja Bem Vindo <? echo $_SESSION['u_email']; ?> </div>
  <div class="bg-dark list-group list-group-flush">
      <a href="dashboard.php" class="list-group-item list-group-item-action bg-dark text-white">Abrir Chamado</a>
      <a href="andamento.php" class="list-group-item list-group-item-action bg-dark text-white">Andamento do Chamado</a>

  <?php
    $u_email  =  $_SESSION['u_email'];
    $sql      =  "SELECT u_nivel FROM smartway.usuario WHERE u_email='$u_email'";
    $abner    =  mysqli_query($link, $sql);
    $dados    =  mysqli_fetch_assoc($abner);
    $res      =  $dados ['u_nivel'];
      if ($res == 2) {
        include_once("nice.php");
      }
  ?>
      <a href="unset.php" class="list-group-item list-group-item-action bg-dark text-white">Sair</a>
  </div>
</div>
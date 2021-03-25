<?php
include_once("conexao.php");

  if (isset($_POST['cadastrar'])){
    $u_email  = mysqli_real_escape_string($link, $_POST['u_email']);

    $querida  = "SELECT u_email FROM usuario WHERE u_email = '$u_email'";

    $result  = mysqli_query($link, $querida);
   // $row     = mysqli_fetch_array($result);
    $row     = mysqli_num_rows($result);

        if ($row == 0) {
        $u_email     =   mysqli_real_escape_string($link, $_POST['u_email']);
        $u_telefone  =   mysqli_real_escape_string($link, $_POST['u_telefone']);
        $u_endereco  =   mysqli_real_escape_string($link, $_POST['u_endereco']);
        $u_senha     =   mysqli_real_escape_string($link, $_POST['u_senha']); $u_senha = md5($u_senha);
    
        $qry = "INSERT INTO smartway.usuario (u_email, u_telefone, u_endereco, u_senha)
        VALUES('$u_email', '$u_telefone', '$u_endereco', '$u_senha')";
    
          if (mysqli_query($link, $qry)) {
            echo "<center><h3>Cadastrado com Sucesso</h3></center>";
          }
      }elseif ($row == 1) {
        echo "<center><h3>Email Já Está Em Uso</h3></center>";
      }
    }

/// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


  if (isset($_POST['acesso'])) {
    


  $email = $_POST['u_email'];
  $senha = $_POST['u_senha'];

  $u_email  = mysqli_real_escape_string($link, $_POST['u_email']);

  $querida  = "SELECT * FROM usuario WHERE u_email = '$u_email'";
   $result        = mysqli_query($link, $querida);
   $resultado     = mysqli_fetch_array($result);
   $row           = mysqli_num_rows($result);

  if($row > 0){
    if($resultado['u_senha'] == md5($senha)){
      session_start();

      $_SESSION['isLoggedIn'] = true;
      $_SESSION['u_email'] = $resultado['u_email'];

      header('Location: dashboard.php');

    }else{
        echo 'Email ou senha incorretos';
    }

  }else{
    echo 'Email ou senha incorretos';
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

  <link href="/smartway/css/login.css" rel="stylesheet" media="all">
<!-- Main CSS-->


</head>

<body style="background-image: url("www.codingdojo.com/blog/wp-content/uploads/Screen-Shot-2020-01-08-at-3.44.24-PM.png");">

    <section class="user">
        <div class="user_options-container">
          <div class="user_options-text">
            <div class="user_options-unregistered">
              <h2 class="user_unregistered-title">Não possui conta?</h2>
              <p class="user_unregistered-text">Crie uma conta agora</p>
              <button class="user_unregistered-signup" id="signup-button">Crie uma conta</button>
            </div>
      
            <div class="user_options-registered">
              <h2 class="user_registered-title">Já possui uma conta?</h2>
              <p class="user_registered-text">Entre agora mesmo..</p>
              <button class="user_registered-login" id="login-button">Login</button>
            </div>
          </div>
          
          <div class="user_options-forms" id="user_options-forms">
            <div class="user_forms-login">
              <h2 class="forms_title">Entrar</h2>
              
              <form method="POST" class="forms_form">
                <fieldset class="forms_fieldset">
                    <div class="forms_field"><input type="email" name="u_email" placeholder="E-mail" class="forms_field-input" required autofocus /></div>
                    <div class="forms_field"><input type="password" name="u_senha" placeholder="Senha" class="forms_field-input" required /></div>
                </fieldset>
                    <div class="forms_buttons"><input type="submit" name="acesso" value="Entrar" class="forms_buttons-action"></div>
              </form>
            
            </div>
            <div class="user_forms-signup">
              <h2 class="forms_title">Registrar-se</h2>
              
              <form method="POST" class="forms_form">
                  <fieldset class="forms_fieldset">
                      <div class="forms_field">
                        <input type="text" id="u_telefone" name="u_telefone" placeholder="Telefone de Contato" class="forms_field-input" required />
                      </div>
                      <div class="forms_field">
                        <input type="email" id="u_email" name="u_email" placeholder="E-mail" class="forms_field-input" required />
                      </div>
                      <div class="forms_field">
                        <input type="text" id="u_endereco" name="u_endereco" placeholder="Endereço, Ex: ''Rua das gloxineas Guarujá'' " class="forms_field-input" required />
                      </div>
                      <div class="forms_field">
                        <input type="password" id="u_senha" name="u_senha" placeholder="Senha" class="forms_field-input" required />
                      </div>
                  </fieldset>
                  <div class="forms_buttons">
                    <input type="submit" name="cadastrar" value="cadastrar" class="forms_buttons-action">
                  </div>
              </form>
            
            </div>
          </div>
        </div>
      </section>
      


<script>
const signupButton = document.getElementById("signup-button"),
  loginButton = document.getElementById("login-button"),
  userForms = document.getElementById("user_options-forms");

/**
 * Add event listener to the "Sign Up" button
 */
signupButton.addEventListener(
  "click",
  ()=>{
    userForms.classList.remove("bounceRight");
    userForms.classList.add("bounceLeft");
  },
  false
);

/**
 * Add event listener to the "Login" button
 */
loginButton.addEventListener(
  "click",
  () => {
    userForms.classList.remove("bounceLeft");
    userForms.classList.add("bounceRight");
  },
  false
);
</script>
</body>

</html>
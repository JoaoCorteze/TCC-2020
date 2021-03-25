<?php
    include_once("conexao.php");
    if (isset($_POST['send'])){
        $c_nome       =   mysqli_real_escape_string($link, $_POST['c_nome']);
        $c_telefone   =   mysqli_real_escape_string($link, $_POST['c_telefone']);
        $c_email      =   mysqli_real_escape_string($link, $_POST['c_email']);
        $c_menssagem   =   mysqli_real_escape_string($link, $_POST['c_menssagem']);

            $qry = "INSERT INTO smartway.contato (c_nome, c_telefone, c_email, c_menssagem) 
            VALUES('$c_nome', '$c_telefone', '$c_email', '$c_menssagem')";

            if (mysqli_query($link, $qry)){
                echo "<center>Mensagem Enviada com Sucesso</center>";            
            }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Smart Way Assistencia</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/smartway.png" width=”360” height=”200” /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#time">Time</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contato</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/smartway/login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Seja bem vindo ao</div>
                <div class="masthead-heading text-uppercase">SmartWay Assistencia</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger"  href="#services">Veja nossos serviços</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Serviços</h2>
                    <h3 class="section-subheading text-muted">Especializados em</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Vendas</h4>
                        <p class="text-muted">Possuimos apenas uma loja em Cascave-Pr repleta de itens para o seu agrado, disponibilizando o sistema de encomenda de itens.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Assistencia Tecnica</h4>
                        <p class="text-muted">Damos assistencias tecnicas para eletronicos e celulares, disponibilizando busca e entrega dos itens para você nao sair do conforto de sua casa.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Segurança</h4>
                        <p class="text-muted">instalação de uma central de segurança em sua casa com cameras e podendo ser controlados remotamentes</p>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Team-->
        <section class="page-section bg-light" id="time">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nosso time</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="" />
                            <h4>Carlos santos</h4>
                            <p class="text-muted">Designer Grafico *somente para preenchimento*</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="" />
                            <h4>João corteze</h4>
                            <p class="text-muted">Desenvolvedor Back End</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="" />
                            <h4>Bruno pinheiro</h4>
                            <p class="text-muted">*somente para preenchimento*</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Abertos para trabalhos fora da empresa.</p></div>
                </div>
            </div>
        </section>
        
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Entre em Contato</h2>
                    <h3 class="section-subheading text-muted">Envie-nos um e-mail referente a alguma duvida.</h3>
                </div>
                <form id="contactForm" method="POST" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="c_nome" id="name" type="text" placeholder="Seu nome" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="c_email" id="email" type="email" placeholder="Seu E-mail" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="c_telefone" id="phone" type="tel" placeholder="Telefone para contato" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="c_menssagem" id="message" placeholder="Sua duvida" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" name="send" id="sendMessageButton" type="submit">Enviar Mensagem</button>
                    </div>
                </form>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
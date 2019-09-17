<!DOCTYPE html>
<html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Appley is a Responsive HTML5 CSS3 Theme perfect for your business and presentation of your application.">
  <meta name="keywords" content="Software, Html5, Responsive Template, Landing Page, Landing Template, Bootstrap Responsive Template, Bottstrap Design, App, App Template">
  <meta name="robots" content="index,follow">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Moove - Aluguel de Carros</title>

  <!-- All Plugins Css -->
  <link href="css/plugins.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Custom style -->
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <div class="navbar-default">  
      <!-- Start Navigation -->
      <nav class="navbar navbar-default navbar-fixed white bootsnav on no-full">

        <div class="container">            
          <!-- End Atribute Navigation -->

          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
            </button>
            <a style="margin-left: -100;" class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" alt=""></a>
          </div>
          <!-- End Header Navigation -->

          <!-- Begin: Navbar Section -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" id="my-navigation" data-in="fadeInDown" data-out="fadeOutUp">
              <li  class="active scroll"><a href="index.html">Pagina Inicial</a></li>


            </ul>
          </div><!-- /.navbar-collapse -->
        </div>   
      </nav>
      <!-- End Navigation -->
    </div>
    <section class="contact dark" id="Cadastar">
      <div class="row">
        <div class="row-heading">
          <h2>Cadastra-se na <span>Moove.</span></h2>

        </div>
      </div>
      <form method="post" action="./cadastrar.php">
        <div class="container">
          <div class="breadcrumbs">
            <div class="form-row">
              <div class="col-md-4">
                <label for="validationTooltip01">Nome completo</label>
                <input type="text" class="form-control" name="nomecompleto_usuario" placeholder="Nome" required>

                <div class="valid-tooltip">

                </div>
              </div>
              <div class="col-md-4">
                <label for="validationTooltip05">CPF</label>
                <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
                <div class="invalid-tooltip">

                </div>
              </div>
              <div class="col-md-4">
                <label for="validationTooltip03">Data Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" required>
                <div class="invalid-tooltip">

                </div>
              </div>
               <div class="col-md-4">
                <label for="validationTooltip05">CNH</label>
                <input type="text" class="form-control" name="cnh" placeholder="CNH" required>
                <div class="invalid-tooltip">

                </div>
              </div>

              <div class="col-md-4 ">
                <label for="validationTooltip02">Email</label>
                <input type="email" class="form-control" name="email_usuario" placeholder="Email" required>
                <div class="valid-tooltip">

                </div>
              </div>
              <div class="col-md-4 ">
                <label for="validationTooltipUsername">Senha</label>
                <div class="input-group">
                 
                  <input type="password" class="form-control" name="senha_usuario" placeholder="Senha" aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                  </div>
                </div>
              </div>

             <div class="col-md-12 ">
              <br>
              <center><button id="cadastrar" type="submit" class="btn btn-success btn-caption submit">Cadastrar</button></center>
                </div>
            </div>
          </div>
        </form>

      </section>
      <!--./End contact form-->
      
      <!-- footer -->
      <footer>
        <div class="wrapper">
          <div class="footer-widget">

            <div class="footer-widget">
              <ul class="footer-navi">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#screens">Screens</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <div class="footer-widget-copy">
              <p>Copyright@ 2018 Moove</p>
            </div>
          </div>
        </div>
      </footer>
      
      <!-- Video Popup -->
      <div class="modal fade" id="my-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/JNF0moyNw_A" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>   
      <!-- Video Popup --> 


      
      <!-- START JAVASCRIPT -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Place this tag in your head or just before your close body tag. -->
      <!-- contact js-->
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="js/contact_me.js"></script>
      
      <script async="" defer="" src="js/buttons.js"></script>
      <script src="js/bootsnav.js"></script>
      <script src="js/custom.js"></script>

      <script type="text/javascript">
        $('.navbar-nav a').click(function(){
          $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
          }, 800);
          return false;
        });
      </script>
      <script type="text/javascript">
        $('.footer-navi a').click(function(){
          $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
          }, 800);
          return false;
        });
      </script>

      <script>
        $('document').ready(function(){
      $("#cadastrar").click(function(){
    alert("Cadastro efetuado com sucesso");
  });
});
</script>
    </div>
  </body>
  </html>
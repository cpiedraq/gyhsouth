<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>GYH South Investments S.A.</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construccion Costa Rica, Desarrollos inmobiliario, desarrollo vertical, horizontal, maquinaria, arquitectura">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Costa Rica, San José, San Pedro, Montes de Oca</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-5 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
            <a class="d-block logo_letter_style" href="index.html">
                  <img loading="lazy" src="images/logocircular.png" alt="Constra"> G&H South Investments S.A.
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-7 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Contáctenos</p>
                          <p class="info-box-subtitle">(+506) 7208-8410</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Correo electrónico</p>
                          <p class="info-box-subtitle">gsolano@gyhshouthinvestments.com</p>
                      </div>
                    </div>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                      <li class="nav-item">
                          <a href="index.html" class="nav-link">Inicio</a>
                      </li>

                      <li class="nav-item">
                          <a href="about.html" class="nav-link">Nuestra Empresa</a>
                      </li>
              
                      <li class="nav-item">
                          <a href="services.html" class="nav-link">Nuestros servicios</a>
                      </li>
              
                      <li class="nav-item">
                          <a href="contact.html" class="nav-link dropdown-toggle">Contáctenos</a>
                      </li>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<section id="main-container" class="main-container section-review section-contact">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h2>Le agradecemos mucho su correo, estaremos comunicandonos lo mas pronto posible</h2>
          <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
              // Build POST request:
              $name = @trim(stripslashes($_POST['name'])); 
              $email = @trim(stripslashes($_POST['email'])); 
              $subject = @trim(stripslashes($_POST['subject'])); 
              $message = @trim(stripslashes($_POST['message'])); 
              $numberphone = @trim(stripslashes($_POST['phone'])); 

              $email_from = $email;
              $email_to = 'cpiedraquiros@gmail.com';
                   
              $body = "Este correo es generado por la Sitio Web de GYH South Investments S.A., actualmente un cliente desea informacion acerca de un servicio, producto de nuestra empresa, para observar que requiere nuestro cliente por favor observe el siguiente mensaje " .
                "\n\n" .'Nombre del cliente: ' . $name . 
                "\n\n" . 'Email: ' . $email . 
                "\n\n" . 'Asunto del correo: ' . $subject . 
                "\n\n" . 'Mensaje del cliente: ' . $message .
                "\n\n" . 'Numero de Telefono del Cliente: ' . $numberphone.
                "\n\n" . "Muchas gracias. ";
                                
                $success = @mail($email_to, "Correo generado por la Sitio Web de GYH South Investments S.A. - " .$subject, $body, 'From: <'.$email_from.'>');

                if($success == true)
                {
                  echo @"Se envio correctamente " . $success;
                }
                else
                {
                  echo @"Ocurrió un error al enviar su correo, intente de nuevo";
                }

                
                                
                //echo @"Su mensaje ha sido enviado de manera satisfactoria, muchas gracias por su contacto";
              }
              else
              {
                echo @"No se pudo enviar su correo electrónico, verifique los datos enviados";
              }

          ?>        

      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">Acerca de Nosotros</h3>
            <img loading="lazy" width="200px" class="footer-logo" src="images/logo_black.png" alt="Constra">
            <span class="footer-text-logo">G&H South Investments S.A.</span>
            <br /><br />
            <p>Ofrecer soluciones integrales con nuestra asesoría y experencia en áreas como ingeniería civil, electromécanica, hidráulica.</p>
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">

          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Conozca nuestra empresa</h3>
            <ul class="list-arrow">
              <li><a href="services.html">Nuestros Servicios</a></li>
              <li><a href="about.html">Quienes somos</a></li>
              <li><a href="contact.html">Contáctenos</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Diseñado &amp; y desarrollado, con colaboración de <a href="https://themefisher.com">Themefisher</a></span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href="#">Correo electrónico interno</a></li>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-top" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>
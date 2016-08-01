<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo base_url();?>Site/images/favicon.ico " type="image/x-icon">
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="<?php echo base_url('css/camera.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/search.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/google-map.css');?>">


    <!--JS-->
    <script src="<?php echo base_url('js/jquery.js');?>"></script>
    <script src="<?php echo base_url('js/jquery-migrate-1.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('js/rd-smoothscroll.min.js');?>"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="<?php echo base_url();?>js/html5shiv.js"></script>
    <![endif]-->
    <script src='<?php echo base_url('js/device.min.js');?>'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>
      <div class="container top-sect">
        <div class="navbar-header">
          <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand'  href="./">business<small>NONDRAB</small></a>
          </h1>
          <a class="search-form_toggle" href="#"></a>
        </div>

        <div class="help-box text-right">
          <p>Need help?</p>
          <a href="callto:#">800-2345-6789</a>
          <small><span>Hours:</span>  6am-4pm PST M-Th; &nbsp;6am-3pm PST Fri</small>
        </div>
      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">
        <nav class="navbar navbar-default navbar-static-top pull-left">

            <div class="">
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li class="active">
                  <a href="<?php echo base_url('Site/Principal')?>">HOME</a>
                </li>
                <li>
                  <a href="<?php echo base_url('Site/About')?>">ABOUT</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo base_url('Site/service')?>">SERVICES<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">Lorem ipsum</a>
                    </li>
                    <li>
                      <a href="#">Dolor sit amet  </a>
                    </li>
                    <li>
                      <a href="#">Conse ctetur </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="#">Latest</a>
                          </li>
                          <li>
                            <a href="#">Archive</a>
                          </li>
                        </ul>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="<?php echo base_url('Site/Contact')?>">CONTACTS</a>
                </li>

                <li>
                        <a class="page-scroll" href="<?php echo base_url('/Seguridad/salir'); ?>"> <span class="glyphicon glyphicon-off " align="center" aria-hidden="true"><br> Logout</span></a>
                    </li>
              </ul>
            </div>
        </nav>
        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
          <label class="search-form_label">
            <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
            <span class="search-form_liveout"></span>
          </label>
          <button class="search-form_submit fa-search" type="submit"></button>
        </form>

        </div>

      </div>
    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>

      <section class="well well1 well1_ins1">
        <div class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="<?php echo base_url();?>images/page-1_slide1.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron1">
                  <em>
                    ¿Quieres Trabajar?
                  </em>
                  <div class="wrap">
                    <p>
                      Envia tu CV a las empresas<span> </span>.
                    </p>

                  </div>
                </div>
              </div>
            </div>
            <div data-src="<?php echo base_url();?>images/page-1_slide2.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron2">
                  <em>
                    ¿Estas buscando personal?
                  </em>
                  <div class="wrap">
                    <p>
                    Publica tu oferta de trabajo aqui!<span> </span>.
                    </p>

                  </div>
                </div>
              </div>
            </div>
            <div data-src="<?php echo base_url();?>images/page-1_slide3.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron">
                  <em>
                    ¿Que estas esperando?
                  </em>
                  <div class="wrap">
                    <p>
                      Se parte de la familia<span></span>.
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container center991">
          <br>
          <br>
          <br>

          <h2>
                  ¡Tenemos la solucion a<small>  tus problemas!
            </small>
          </h2>
<br>
<br>
<br>

          <div class="row wow fadeIn" data-wow-duration='2s'>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url();?>images/page-1_img3.jpg" alt="">
                <div class="caption bg3">
                  <h3>
                    ¿Tienes tu Empresa?
                  </h3>
                  <div class="wrap">
                    <p>
                      Necesitas personal. Publica tu oferta de trabajo aqui, los candidatos podran ver tu anucio y enviarte sus CV. tu eliges.
                    </p>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url();?>images/page-1_img4.jpg" alt="">
                <div class="caption bg-primary">
                  <h3>
                    ¡Todo lo que buscas en un solo lugar!
                  </h3>
                  <div class="wrap">
                    <p>

                    </p>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url();?>images/page-1_img5.jpg" alt="">
                <div class="caption bg2">
                  <h3>
                  ¿No tienes Trabajo?
                  </h3>
                  <div class="wrap">
                    <p>
                    Encuentras aqui ofertas de trabajo en todo el mundo.
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
        <div class="container">
        <h2 class="txt-pr">

          <small>
            ¡        Bienvenido  A
          </small>
            BUSINESS NONDRAB      !
        </h2>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <p>
                Business Nondrab es una pagina web que consiste en una web paga donde empresas publica sus ofertas de trabajo alrededor de todo el mundo y candidatos envian sus curriculum a dichas empresas para ser seleccionados si son capaces para el trabajo
            </div>
            <div class="col-md-6 col-sm-12">
              <p>
              Si eres una empresa solo tienes que registrarte y publicar tu primera oferta de trabajo. <br>
              Si quieres trabajar registrate y elige la oferta de trabajo a la que quieres aplicar, hay mucho de donde elegir.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="well well2">
        <div class="container">
        <h2>
          ¿Que esperas?
          <small>

          </small>
        </h2>
          <div class="row offs1">
            <div class="col-md-6 col-sm-12">
              <ul class="link-list wow fadeInLeft" data-wow-duration='3s'>
                <li>

                ¡  Registrate !


                </li>
                <li>

                  ¡ Confirma tu correo !

                </li>
                <li>

                  ¡Empieza a cambiar tu futuro!


                </li>
                <li>

                ¡No esperes mas!

                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <img class="width_img" src="<?php echo base_url();?>images/page-1_img6.jpg" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="well well3 parallax" data-url="<?php echo base_url();?>images/parallax1.jpg" data-mobile="true" data-speed="0.9">
        <div class="container">
          <div class="wrap text-center">
            <strong>
              AHORRA TIEMPO,<br />
              SAVE MONEY,
              <small>
               GROW & RÉUSSIR
              </small>
            </strong>

          <a href="<?php echo base_url('Seguridad')?>" class="btn btn-primary">REGISTRATE <span class="fa-angle-right"></span></a>
          </div>
        </div>
      </section>

      <section class="well well2">
        <div class="container">
          <h2>
            our
            <small>
              clients
            </small>
          </h2>

          <div class="row offs1">
            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>images/page-1_img7.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>images/page-1_img8.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>images/page-1_img9.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>images/page-1_img10.jpg" alt="">
                </a>
              </li>
            </ul>

            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>images/page-1_img11.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>images/page-1_img12.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>images/page-1_img13.jpg" alt="">
                </a>
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>images/page-1_img14.jpg" alt="">
                </a>
              </li>
            </ul>
          </div>

        </div>
      </section>

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="top-border">

    <div class="map">
      <div id="google-map" class="map_model" data-zoom="11"></div>
      <ul class="map_locations">
        <li data-x="-73.9874068" data-y="40.643180" data-basic="<?php echo base_url();?>images/gmap_marker.png" data-active="<?php echo base_url();?>images/gmap_marker_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              BUSINESS
              <small>
                NONDRAB
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>
        <li data-x="-74.100000" data-y="40.643180" data-basic="<?php echo base_url();?>images/gmap_marker2.png" data-active="<?php echo base_url();?>images/gmap_marker2_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>
        <li data-x="-73.8854068" data-y="40.693180" data-basic="<?php echo base_url();?>images/gmap_marker3.png" data-active="<?php echo base_url();?>images/gmap_marker3_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>
        <li data-x="-73.7874068" data-y="40.613180" data-basic="<?php echo base_url();?>images/gmap_marker4.png" data-active="<?php echo base_url();?>images/gmap_marker4_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>
        <li data-x="-74.200000" data-y="40.683180" data-basic="<?php echo base_url();?>images/gmap_marker5.png" data-active="<?php echo base_url();?>images/gmap_marker5_active.png">
          <div class="location">
            <h3 class="txt-clr1">
              flooring
              <small>
                RETAILER
              </small>
            </h3>
              <address>
                <dl>
                  <dt>Free phone: </dt>
                  <dd class="phone"><a href="callto:#"> 800-2345-6789</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@demolink.org</a></dd>
                </dl>
              </address>

          </div>
        </li>
      </ul>
    </div>

    <section class="well1">
      <div class="container">
            <p class="rights">
              Business Company  &#169; <span id="copyright-year"></span>
              <a href="privacy.php">Privacy Policy</a>
              More Business Website Templates at <a rel="nofollow" href="http://www.templatemonster.com/category/business-web-templates/" target="_blank">TemplateMonster.com</a>
            </p>
      </div>
    </section>
  </footer>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('js/tm-scripts.js');?>"></script>
  <!-- </script> -->


  </body>
</html>

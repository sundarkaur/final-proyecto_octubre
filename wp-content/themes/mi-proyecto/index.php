<?php get_header(); ?>


  

<section class="col-12">
   <div class="nosotros">
     <div class="row">
          


      <?php
        $arg = array(
          'post_type'       => 'about',
          'posts_per_page'  => 1
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
          ?>
          <div class="col-12 col-md-6">
            <div class="texto-2">
                <h1 id="titulo-2"><b> <?php the_title() ?> </b></h1>
                <?php the_content() ?>
                <img id="logo-nombre"  src="<?php echo get_theme_file_uri(); ?>/assets/images/logo-texto.jpg" alt="logo" class="img-fluid">
            </div> <!-- texto-2 -->
          </div><!-- col-12 col-md-6 -->

         <div class="col-12 col-md-6">

           <?php the_post_thumbnail('full', array('class', 'img-fluid')) ?>
           <div class="texto-3">
             <h1 id="titulo-3"><b>Por qué Ashtanga Vinyasa:</b></h1><br></br>
             <p>Porque este método de Yoga nos permite visibilizarnos
             en el presente a traves de la respiración y el movimiento. Es una práctica
             apta para todos... nos brinda energía, coraje y tranquilidad.</p> 
             <p>Somos los únicos certificados en la zona norte de Santiago.!</p>
             <p>Y estamos exclusivamente en Quilicura.</p><br></br>
             <p id="pie-de-texto3"><b>“YOGA ES 99% PRÁCTICA, 1% TEORÍA”</b></p>
           </div><!-- texto-3 -->

        </div><!-- col-12 col-md-6-->
        <?php } wp_reset_postdata();
      ?>

    </div><!-- row -->
  </div><!-- nosotros -->
</section>

<div row>
  <div class="col-md-12 c-img">
    <img id="top6" src="<?php echo get_theme_file_uri(); ?>/assets/images/top6.jpg" alt="logo" class="img-fluid">
  </div>
</div>


<section class="col-12">
  <div class="clases">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="texto-4">
              <h1 id="titulo-4"> <b>CLASES</b></h1>
               <ul>
                <b><p>Clases personalizadas de yoga para todos los niveles!</p> 
                  <li> Fuerza </li>
                  <li> Resistencia </li>
                  <li> Flexibilidad </li>
                  <li> Conciencia corporal </li>
                  <li> Paz y tranquilidad </li>

                  <p>Somos la única escuela de yoga en quilicura,</p>
                  <p>con profesores certificados y entregando formaciones de practicantes!!</p>
                  <p>Asi que no lo dudes, ven a practicar con nosotrxs ♡</p>

                  <li>☆ Clase de prueba: $2000 (solo por junio y julio)</li>
                  <li>☆ Lunes, miércoles: 20:00hrs / Sábados: 11:00hrs</li>
                  <li>☆ luego de la clase de prueba se paga mensualidad.</li>
                  <li>☆ 4 clases mensuales $15.000.</li> 
                  <li>☆ 8 clases mensuales $20.000.</li>
                  <li>☆ 12 clases $25.000.</li></b>
                </ul>
              </div><!-- texto-4 -->
            </div><!-- col-12 col-md-6 -->


            <div class="col-12 col-md-6">
              <div class="texto-5">
                <h1 id="titulo-5"> <b> Clase Introducción </b></h1>
                  <b><p>Recomendada a principiantes así podrán aprender en forma correcta el inicio de la práctica y los fundamentos básicos, Surya Namskara (saludo al sol), ya que la practica es una extensión del mismo, también verán la forma correcta de realizar las posturas fundamentales y algunas posturas de cierre, así podrán integrarse en las prácticas de estilo Mysore.</p>
                  <h2><b>Practica Guiada</b></h2>
                  <p>Es el método original de conteo en Sanscrito de vinyasa (secuencia), ayuda a los estudiantes a aprender la correcta secuencia de respiración y posturas de la serie primaria e intermedia.</p>
                  <h2><b>Mysore</b></h2>
                  <p>Es el método tradicional de enseñanza de Ashtanga Vinyasa Yoga, tal como lo enseñan Sri Manju P. Jois de Mysore, India. Esta modalidad es abierta a todos los niveles desde principiantes a alumnos avanzados, la practica es grupal pero al mismo tiempo cada alumno va avanzando en su practica en forma individual de acuerdo a sus posibilidades, el profesor realiza ajustes manuales y va guiando al alumno en forma progresiva.</p>
                  <h2><b>La luna y Ashtanga Yoga</b></h2>
                  <p>Así como las mareas están relacionadas con los ciclos lunares, los seres humanos, compuestos por agua, también nos vemos afectados. La tradición de método postula que no se practica Ashtanga Vinyasa Yoga los días de Luna nueva y Luna llena porque las energías son muy fuertes durante estos momentos del ciclo lunar. </p></b>
              </div><!-- texto-5 -->
      </div><!-- col-12  col-md-6-->

    </div><!-- clases -->
  </div><!-- row -->
</section>

<div row>
  <div class="col-md-12">
    <img id="top3" src="<?php echo get_theme_file_uri(); ?>/assets/images/top3.jpg" alt="pareja yoga" class="img-fluid">
    
  </div>
  
</div>

<section class="col-12">
    <div class="galeria">
        <div class="row">
           <div class="col-12 col-md-6">
              <h1 id="titulo-6"> <b>GALERÍA</b> </h1>
              <div class="container">

                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                      <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                      </ol>

                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/k4.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/k5.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/k6.jpg" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/001.jpg" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/k1.jpg" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/k2.jpg" alt="Third slide">
                      </div>
                    </div>

                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>

                  </div><!-- carousel -->

                  <h1 id="titulo-7">Nuestra Instructora</h1>
                  <p id="texto-7">Con experiencia desde el año 2009, instructora de Hatha Yoga de la Escuela "Yuukti Yoga".<span id="coni"> Constanza, es egresada de la Academia Chilena de Yoga..</span></p>

               </div><!-- container -->
             </div><!-- col-12 col-md-6 -->

      </div><!-- row -->
   </div><!-- galeria -->
</section>

 <div row>
  <div class="col-md-12">
    <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/top10.jpg" alt="logo" class="img-fluid">

  </div>
</div>

<section class="col-12">
   <div class="galeria-2">
      <div class="row">
              <div class="col-md-6 offset-sm-6">
                <div class="container">
                  <div id="carousel-2" class="carousel slide" data-ride="carousel">

                      <ol class="carousel-indicators">
                        <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-2" data-slide-to="1"></li>
                        <li data-target="#carousel-2" data-slide-to="2"></li>
                        <li data-target="#carousel-2" data-slide-to="3"></li>
                      </ol>

                    <div class="carousel-inner">
                       <div class="carousel-item active">
                         <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/clases1.jpg" alt="First slide">
                       </div>
                       <div class="carousel-item">
                         <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/clases2.jpg" alt="Second slide">
                       </div>
                       <div class="carousel-item">
                         <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/clases3.jpg" alt="Third slide">
                       </div>
                       <div class="carousel-item">
                         <img class="d-block w-100" src="<?php echo get_theme_file_uri(); ?>/assets/images/clases4.jpg" alt="Third slide">
                       </div>
                    </div><!-- //carousel-iinner -->

                       <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>
                       </a>
                       <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                       </a>

                  </div><!-- //carousel-2 -->
              

                       <h1 id="titulo-8">Nuestras clases</h1>
                       <p id="texto-8">
                       Los asistentes disfrutan no solo de la práctica, si no también de un agradable ambiente
                       con música, sonidos de cuencos, cantos de mantras; todo propio de la Musicoterapia.
                       Y tambien de agradables aromas de aceites, esencias, inciensos; productos utilizados en
                       Aromaterapia.
                       </p>
                       <p id="texto-9">-El yoga es una luz, que una vez encendida, nunca se atenuará. 
                       Cuanto mejor es la práctica, más brillante es la llama.-B.K.S. Iyengar.</p>

                      </div><!-- container -->
                    </div><!-- col-12 col-md-6-->

         
    </div><!-- row -->
  </div><!-- //galeria-2 --> 
</section>



  <section class="col-12">
    <div class="row">
      <div class="col-12 col-md-12">

        <img id="sol" src="<?php echo get_theme_file_uri(); ?>/assets/images/top5.jpg" alt="saludo al sol" class="img-fluid">
        <h2 id="titulo-10">CONTACTO</h2>
      </div><!-- col-12 col-md-6 -->

    </div><!-- row -->
  </section>


  <section class="col-12">
    <div class="row">
      <div class="col-12 col-md-12">
        <p id="texto-10"><a href="https://www.facebook.com/yogaparatodos.quilicura"><i class="fab fa-facebook-f"></i></a>yogaparatodos.quilicura</p>
        <p id="texto-11"><a href="https://mail.google.com"> <i class="far fa-envelope"></i></a>
        yogaparatodos.quilicura@gmail.com</p>

      </div><!-- col-12 col-md-6 -->

    </div><!-- row -->
  </section>


<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="well well-sm">
                <?php echo do_shortcode('[contact-form-7 id="57" title="Sin título"]') ?>
            </div>
        </div>
    </div>
</div> 

 <section class="col-12">
   
  <div row>
  <div class="col-md-12">
    <img  src="<?php echo get_theme_file_uri(); ?>/assets/images/top1.jpg" alt="logo" class="img-fluid">
  </div>
</div>
  </section>

  <section class="col-12">
    <div class="mapa">
      <div class="row">
        <div class="col-12 col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26662.35889242174!2d-70.74552971767677!3d-33.35030872135468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c0e64a5615dd%3A0x87590fb624065dc6!2sSan+Santiago%2C+Quilicura%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1531536787097" width="100%" height="250" frameborder="0" allowfullscreen></iframe>
        </div><!-- col-12 col-md-12 -->
      </div><!-- mapa -->
    </div><!-- row -->
  </section>




<?php get_footer(); ?>

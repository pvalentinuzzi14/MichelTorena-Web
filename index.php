<?php 
    require_once("top-nav.php");

?>
    <section class="container-fluid">
           <div id="carouseindex" class="carousel slide" data-ride="carousel">
                 
                 <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="100">
                      <img src="img/banner%20inicio.jpg" class="d-block w-100" alt="original">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                      <img src="img/bannerContacto.jpg" class="d-block w-100" alt="contacto2">
                    </div>
                    <div class="carousel-item">
                      <img src="img/bannerServicios.jpg" class="d-block w-100" alt="servicios3">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouseindex" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouseindex" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
                    
        
        <div class="row-fluid color-dark p-3 h-100 my-auto ">
              <div class="row">
                <div class="col-sm-3 ">
              </div>
              <div class="col-lg-6 titulo text-center">
                <h2 class="titulo justify-content-center">PEDI TU PRESUPUESTO</h2>
              </div>
              <div class="col-sm-3 text-center m-auto">
                <a href="contacto.php" class="color-red text-white"> CONTACTANOS</a> 
              </div>
          </div>

    </section>
    <main class="container-fluid text-center">      
              <h1 class="text-uppercase titulo mt-4 subrayado">Porque elegirnos</h1>

              <h4 class="subTitulo my-auto">Más de 25 años de experiencia en el mercado de mantenimiento y reparación de automotores</h4>
              <h4  style="color: rgb(165, 24, 24);" class="titulo mt-2">  OFRECEMOS UN SERIVIO INTEGRAL PARA TU AUTOMOVIL</h4>

                <div class="row row-fluid m-auto p-3">
                        <div class="col-md-3 m-auto">
                            <img src="img/indexTecnico.png" class="img-fluid" width="150em">
                        </div>
                        <div class="col-md-6 text-center">
                            <ul class="lista text-left mt-5">
                                <li class="item mt-4" style="font-family: bahnschrift; font-size:1.2em; color: #606062">Contamos con personal altamente <br> capacitado</li>
                                <li class="item mt-4" style="font-family: bahnschrift;font-size:1.2em ;color: #606062">Te ofrecemos atención personalizada</li>
                                <li class="item mt-4" style="font-family: bahnschrift;font-size:1.2em ;color: #606062">Te ofrecemos garantía de calidad</li>
                                <li class="item mt-4" style="font-family: bahnschrift;font-size:1.2em; color: #606062">Te brindamos un servicio integral</li>
                                <li class="item mt-4" style="font-family: bahnschrift;font-size:1.2em;color: #606062">Contamos con equipamiento de ultima generacion</li>
                            </ul>  
                        </div>
                        
                        <div class="col-md-3 m-auto">
                            <img src="img/indexBosch.png" class="img-fluid" width="150em">
                        </div>
                </div>
                
              
                
            </main>
            
             <?php include("footer.php"); ?>

       
            
        
        

        
<?php 
    require_once("top-nav.php");

?>
<body>
    <section class="container-fluid">
        <img src="img/bannerNosotros.jpg" alt="banner" class="img-fluid">
    </section>
    <main class="container-fluid text-center">      
      <h1 class="text-uppercase titulo mt-4 subrayado">QUIENES SOMOS</h1>
          <h4 class="subTitulo my-3 ">Más de 25 años de experiencia en el mercado de mantenimiento y reparación de automotores</h4>
       <div class="row p-2">
            <div class="col-md-4 m-auto d-block d-md-none">
                <img class="img-fluid" src="img/fotoServicios.jpg" alt="fotoLocal">
                <?php 
                echo"<h4 class='subTitulo my-3'>
                    Somos una empresa dedicada al cuidado, mantenimiento y reparación de automóviles nacionales e importados. 
                    Ubicada en la ciudad de Mar del plata, provincia de Buenos Aires. <br><br>
                    Brindamos un servicio diferencial gracias a la capacitación continua sumando al equipamiento de ultima generación y metodología de trabajo que nos permiten brindarle la mejor atención a usted y su vehiculo. Un ambiente limpio, amplio y organizado que nos permiten desarrollar un servicio de excelencia. <br><br>
                    Nuestra amplia trayectoria nos caracteriza por la responsabilidad, honestidad y transparencia que está avalando por la confianza y fidelidad de nuestros clientes.  <br>
                </h4>";
                ?>                       
            </div> 

            <div class="col m-auto m-auto d-none d-md-block">
                <div class="row p-2">
                    <div class="col-md-6">
                    <img class="img-fluid" src="img/fotoServicios.jpg" alt="fotoLocal">
                    </div>
                
                    <div class="fluid col-md-6 m-auto text-center">
                        <?php 
                        echo"<h2 class='subTitulo my-3'>
                            Somos una empresa dedicada al cuidado, mantenimiento y reparación de automóviles nacionales e importados. 
                            Ubicada en la ciudad de Mar del plata, provincia de Buenos Aires. <br><br>
                            Brindamos un servicio diferencial gracias a la capacitación continua sumando al equipamiento de ultima generación y metodología de trabajo que nos permiten brindarle la mejor atención a usted y su vehiculo. Un ambiente limpio, amplio y organizado que nos permiten desarrollar un servicio de excelencia. <br><br>
                            Nuestra amplia trayectoria nos caracteriza por la responsabilidad, honestidad y transparencia que está avalando por la confianza y fidelidad de nuestros clientes.  <br>
                        </h2>";
                        ?>
                    </div>
                </div>
            </div>

       </div>  
    </main>
    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
</html>
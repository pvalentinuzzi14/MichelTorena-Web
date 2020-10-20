<?php 
    require_once("top-nav.php");
?>
            <section class="container-fluid">
                <img src="img/bannerContacto.jpg" alt="banner" class="img-fluid">
            </section>
        <main class="container-fluid text-center p-5 ">      
              <h1 class="text-uppercase titulo mt-4 subrayado">CONTACTANOS</h1>
              <h4 class="subTitulo my-3 ">Por consultas y turnos completa tus datos a continuación. En la brevedad nos estaremos comunicando</h4>
               <div class="row-fluid">
                <div class="col-lg-12">
                    <form action="sendMail.php" name="sentMessage" id="contactForm" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" name="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name ="telefono" type="tel" class="form-control" placeholder="Telefono" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Deja tu mensaje" id="message" required data-validation-required-message="Please enter a message." rows="6"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                                <div class="col-md-auto"> </div>
                                <div class="col-md-auto"> </div>
                            <div class="col-md-auto ml-auto d-flex float-right" id="success"><input type="submit" class="color-red text-white p-2 d-block m-auto rounded" width="500px"  name="Enviar" value="ENVIAR"></div>
                            </div>
                    </form>
                </div>
            </div>
            </form>   
                      <div class="text-left p-5">
                       <h4 class="titulo p-7" style="color: rgb(165,24,24);">HORARIO DE ATENCION</h4>
                       <h4 class="subTitulo my-3">Lunes a Viernes <br>
                        de 8:30 a 13:00 hs. <br>
                        de 15:00 a 19:00 hs.</h4>
                      </div>
        </main>
         <?php include("footer.php"); ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
</html>
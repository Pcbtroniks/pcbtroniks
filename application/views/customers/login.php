  <main id="main">

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Login</h2>
        </div>

        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

            <form action="<?= base_url() ?>authentication/auth" method="post">
                
                <div class="form-group">
                  <label>Usuario</label>
                  <input type="text" name="usuario" class="form-control" placeholder="Usuario" required/>
                </div>

                <div class="form-group">
                  <label>Contraseña</label>
                  <input type="password" name="password" class="form-control" placeholder="Contraseña" required/>
                </div>                

                
                
                <div class="form-group">
                  <input class="btn btn-primary btn-block" value="Iniciar sesión" target="_parent" type="submit" />
                </div>
                

              </form>
              <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>



          </div>

        </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
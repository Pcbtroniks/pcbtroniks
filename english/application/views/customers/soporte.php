  <main id="main">

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Levantar ticket de soporte</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Escribenos</h3>
              <p>info@pcbtroniks.com</p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Llamanos</h3>
              <p><a href="tel:3313059432" class="rectificacion">+52 33 1305 9432<!-- <br>+1 6678 254445 41 --></a></p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

            <form action="<?= base_url() ?>clientes/enviar-ticket" method="post" role="form" > <!-- class="php-email-form" -->
              
              <div class="form-row">
                <div class="col-lg-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" required/>
                  <!-- <div class="validate"></div> -->
                </div>

                <div class="col-lg-4 form-group">
                  <input type="text" class="form-control" name="puestoTrabajo" id="puestoTrabajo" placeholder="Puesto de trabajo" required="" />
                  <!-- <div class="validate"></div> -->
                </div>


                <div class="col-lg-4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required/>
                  <!-- <div class="validate"></div> -->
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="subject" class="form-control" name="subject" id="subject" placeholder="Asunto" required />
                  <!-- <div class="validate"></div> -->
                </div>

                <div class="form-group col-lg-6">
                    <select class="form-control" id="urgency" name="urgency" required>
                      <option value="">Prioridad...</option>
                      <option value="Baja">Baja</option>
                      <option value="Media">Media</option>
                      <option value="Alto">Alta</option>
                    </select>
                </div>

              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="¿En que podemos ayudarle?" required></textarea>
                <!-- <div class="validate"></div> -->
              </div>
              <!-- <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Ya hemos recibido tu mensaje, Gracias!</div>
              </div> -->
              <button class="btn btn-primary btn-block" type="submit">Enviar Email</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
<main id="main">
  <section class="py-5" style="background: linear-gradient(140deg, #f7fbe9 0%, #ffffff 45%, #eef5ff 100%);">
    <div class="container">
      <div class="row align-items-center mb-4">
        <div class="col-lg-8" data-aos="fade-up">
          <h2 class="mb-2" style="font-weight: 700; color: #222;">Tienda PCBtroniks</h2>
          <p class="mb-0" style="font-size: 1.05rem; color: #4f5d68;">
            Equipos listos para tu negocio, con soporte tecnico y garantia local.
          </p>
        </div>
        <div class="col-lg-4 text-lg-right mt-3 mt-lg-0" data-aos="fade-left">
          <a href="<?= base_url(); ?>#contact" class="btn btn-success px-4 py-2">Solicitar cotizacion</a>
        </div>
      </div>

      <?php
      $productos = array(
        array(
          'nombre' => 'Kit Punto de Venta Basico',
          'categoria' => 'Comercio',
          'precio' => '$7,990 MXN',
          'descripcion' => 'Computadora mini, lector de codigos y cajon de dinero para iniciar ventas sin complicaciones.',
          'imagen' => 'https://images.unsplash.com/photo-1586953208448-b95a79798f07?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Mas vendido'
        ),
        array(
          'nombre' => 'Camara IP Exterior 4MP',
          'categoria' => 'Seguridad',
          'precio' => '$2,450 MXN',
          'descripcion' => 'Vision nocturna, proteccion contra lluvia y monitoreo desde celular para vigilar tu negocio 24/7.',
          'imagen' => 'https://images.unsplash.com/photo-1557324232-b8917d3c3dcb?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Nuevo'
        ),
        array(
          'nombre' => 'Router Empresarial Dual Band',
          'categoria' => 'Redes',
          'precio' => '$3,190 MXN',
          'descripcion' => 'Conexion estable para oficinas pequenas y medianas, con administracion remota y VLAN.',
          'imagen' => 'https://images.unsplash.com/photo-1599669454699-248893623440?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Recomendado'
        ),
        array(
          'nombre' => 'UPS 1500VA Interactivo',
          'categoria' => 'Energia',
          'precio' => '$4,180 MXN',
          'descripcion' => 'Respaldo para servidores y estaciones de trabajo, evita perdidas de informacion por cortes electricos.',
          'imagen' => 'https://images.unsplash.com/photo-1580894908361-967195033215?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Proteccion'
        ),
        array(
          'nombre' => 'Laptop Empresarial 14"',
          'categoria' => 'Computo',
          'precio' => '$16,900 MXN',
          'descripcion' => 'Equipo ligero para trabajo remoto, ventas, administracion y reuniones en videollamada.',
          'imagen' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Oficina'
        ),
        array(
          'nombre' => 'Servidor Torre SMB',
          'categoria' => 'Infraestructura',
          'precio' => '$29,500 MXN',
          'descripcion' => 'Ideal para ERP, archivos compartidos y servicios internos de pequenas empresas.',
          'imagen' => 'https://images.unsplash.com/photo-1555617117-08fda6a0c2aa?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Servidor'
        ),
        array(
          'nombre' => 'Switch Administrable 24 Puertos',
          'categoria' => 'Redes',
          'precio' => '$5,780 MXN',
          'descripcion' => 'Segmentacion de red, administracion VLAN y mejor control para infraestructura de oficina.',
          'imagen' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Red'
        ),
        array(
          'nombre' => 'NAS 4 Bahias',
          'categoria' => 'Respaldo',
          'precio' => '$12,400 MXN',
          'descripcion' => 'Almacenamiento centralizado para respaldos automáticos, archivos y sincronizacion de equipo.',
          'imagen' => 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Backup'
        ),
        array(
          'nombre' => 'Firewall UTM PyME',
          'categoria' => 'Seguridad',
          'precio' => '$8,950 MXN',
          'descripcion' => 'Proteccion perimetral, filtrado web y control de acceso para redes empresariales.',
          'imagen' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Seguridad'
        ),
        array(
          'nombre' => 'Licencia Microsoft 365',
          'categoria' => 'Software',
          'precio' => '$3,250 MXN',
          'descripcion' => 'Correo corporativo, Word, Excel, Teams y herramientas colaborativas para tu equipo.',
          'imagen' => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Licencia'
        ),
        array(
          'nombre' => 'Paq. Soporte Remoto Mensual',
          'categoria' => 'Servicios',
          'precio' => '$2,900 MXN',
          'descripcion' => 'Monitoreo, soporte preventivo y atencion remota para mantener tus equipos operando.',
          'imagen' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80',
          'etiqueta' => 'Servicio'
        ),
      );
      ?>

      <div class="row">
        <?php foreach ($productos as $producto): ?>
          <div class="col-md-6 col-xl-3 mb-4 d-flex" data-aos="zoom-in" data-aos-delay="100">
            <article class="card shadow-sm border-0 w-100" style="overflow: hidden; border-radius: 14px;">
              <div style="height: 180px; background-image: url('<?= $producto['imagen']; ?>'); background-size: cover; background-position: center;"></div>
              <div class="card-body d-flex flex-column" style="background: #fff;">
                <span class="badge badge-light align-self-start mb-2" style="color: #5AB131; border: 1px solid #d4ebbe; font-weight: 600;">
                  <?= $producto['etiqueta']; ?>
                </span>
                <h5 class="card-title mb-1" style="font-weight: 700; color: #1f2b34;"><?= $producto['nombre']; ?></h5>
                <small class="text-muted d-block mb-2"><?= $producto['categoria']; ?></small>
                <p class="card-text mb-3" style="color: #5c6973;"><?= $producto['descripcion']; ?></p>
                <div class="mt-auto d-flex align-items-center justify-content-between">
                  <strong style="color: #5AB131;"><?= $producto['precio']; ?></strong>
                  <a href="<?= base_url(); ?>#contact" class="btn btn-sm btn-outline-success">Agregar</a>
                </div>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="row mt-2">
        <div class="col-lg-12" data-aos="fade-up">
          <div class="p-4" style="background: #1f2b34; border-radius: 14px; color: #dce6ee;">
            <h4 class="mb-2" style="color: #fff;">Necesitas un paquete personalizado?</h4>
            <p class="mb-3">Armamos tu solucion con instalacion, configuracion y soporte continuo para tu empresa.</p>
            <a href="<?= base_url(); ?>#contact" class="btn btn-light">Hablar con asesor</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

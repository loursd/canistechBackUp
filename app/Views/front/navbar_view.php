<!-- menú de navegación-->
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/mystyle.css'); ?>" rel="stylesheet">

<?php
$session = session();
$usuario = $session->get('usuario');
$perfil = $session->get('perfil_id');
?>

<!-- menú de navegación-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="<?php echo base_url('principal_view') ?>" alt="" width="80">
      <img src="assets/img/logoNav.png" alt="Logo" width="80"> <!-- Logo empresa -->
    </a>
    <!-- botón hamburguesa-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if (session()->perfil_id == 1) : ?> <!-- perfil tipo  admin -->

      <a class="btn btn-outline-danger" type="submit">ADMIN:<?php echo session('usuario'); ?> </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=canistech&table=usuarios" target="_blank">Editar usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=canistech&table=servicios" target="_blank">Editar servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/cotizacion'); ?>">Cotizaciones solicitadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/asesoramiento'); ?>">Asesoramientos solicitados</a>
          </li>
        </ul>

        <form class="d-flex">
          <a class="btn btn-danger" type="submit" href="<?php echo base_url("/logout"); ?>">Cerrar sesión</a>
        </form>

      </div>

    <?php elseif (session()->perfil_id == 2) : ?>
      <a class="btn btn-outline-info" type="submit">CLIENTE:<?php echo session('usuario'); ?> </a>
      <!-- navbar para clientes que pueden comprar -->

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("quienes_somos"); ?>">¿Quiénes Somos?</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("acerca_de"); ?>">Acerca de</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("servicios"); ?>">Cotizar Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("asesoramiento"); ?>">Pedir Asesoramiento</a>
          </li>
        </ul>

        <form class="d-flex">
          <a class="btn btn-danger" type="submit" href="<?php echo base_url("/logout"); ?>">Cerrar sesión</a>
        </form>
      </div>

    <?php elseif (session()->perfil_id == 3) : ?> <!-- perfil tecnico, más restringido que admin -->

      <a class="btn btn-outline-danger" type="submit">TECNICO:<?php echo session('usuario'); ?> </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/cotizacion'); ?>">Cotizaciones solicitadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/asesoramiento'); ?>">Asesoramientos solicitados</a>
          </li>
        </ul>

        <form class="d-flex">
          <a class="btn btn-outline-danger" type="submit" href="<?php echo base_url("/logout"); ?>">Cerrar sesión</a>
        </form>

      </div>
    <?php else : ?>

      <!-- navbar para usuarios no logueados-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("quienes_somos"); ?>">¿Quiénes Somos?</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("acerca_de"); ?>">Acerca de</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("servicios"); ?>">Servicios</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("asesoramiento"); ?>">Asesoramiento</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("registro"); ?>">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("login"); ?>">Iniciar sesión</a>
          </li>
        </ul>
      </div>
      <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Buscar</button>
      </form>
    <?php endif; ?>

  </div>
</nav>
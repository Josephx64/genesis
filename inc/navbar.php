<!-- Barra de navegacion -->

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Conmutar Navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="inicio.php"><img src="img/logo.png" alt=""></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($Seccion=='Inicio'){echo "class='active' ";}?> > <a href="inicio.php">Inicio</a> </li>
        <li <?php if ($Seccion=='Productos'){echo "class='active' ";}?> > <a href="productos.php">Productos</a></li>
        <li <?php if ($Seccion=='Contacto'){echo "class='active' ";}?> > <a href="contacto.php">Contacto</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

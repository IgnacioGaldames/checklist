<?php //Sección 1 (titulo, texto y botón con imagen de fondo) ?>
<div class="bg-gradiente"></div>

<section id="home" class="inner-shadow full-height  d-flex justify-content-center  align-items-center flex-column fadeIn wow p-5 text-white">
  <div class="container text-center py-5">

    <div class="col-md-8 offset-md-2 fadeIn wow" data-wow-duration="0.75s" data-wow-delay="0.5s">
    <?php if ($seccion_home_titulo) { ?>
      <h1 class="display-1"><strong><?php echo $seccion_home_titulo; ?></strong></h1>
    <?php } ?>
    <?php if ($seccion_home_subtitulo) { ?>
      <h2><?php echo $seccion_home_subtitulo; ?></h2>
      <?php } ?>
    </div>
    <?php if ($seccion_home_cuerpo) { ?>
    <div class="col-md-12 my-md-5 fadeIn wow" data-wow-duration="0.75s" data-wow-delay="0.6s">
      <h2><?php echo $seccion_home_cuerpo; ?></h2>
    </div>
    <?php } ?>
    <?php if ($seccion_home_login == true) { ?>
      <form class="col-8 m-auto">
        <div class="form-group">
          
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Acceder</button>
      </form>
      <?php } ?>
  </div>
</section>
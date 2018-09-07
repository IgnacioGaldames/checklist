
<?php //Sección 13 (Footer) ?>
<section id="footer" class="fadeIn slideIn wow bg-my-morado text-my-white fixed-bottom">
<footer class="py-3 text-center hidden-print">
  <div class="container">
    <div class="row d-flex justify-content-center  align-items-center fadeIn wow" data-wow-duration="0.5s" data-wow-delay="0.5s">
      <div class="col-md-2">
        <img src="<?php echo $url; ?>/_img/iconos/logo_footer.svg" data-fallback="<?php echo $url; ?>/_img/iconos/logo_how.png" alt="<?php echo $titulo; ?>" class="img-fluid">
      </div>
      <div class="col-md-10 text-md-right pt-30 fadeIn wow" data-wow-duration="0.5s" data-wow-delay="0.6s">
        <p>
          <?php echo $seccion_footer_txt; ?>
        </p>
      </div>
    </div>
  </div>
  </div>
  </footer>
</section>
	<?php include_once(ROOT ."_includes/footer/js.php");  ?>
</body>
</html>
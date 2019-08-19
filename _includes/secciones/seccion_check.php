<?php //Sección 1 (titulo, texto y botón con imagen de fondo) ?>
<?php $tipoCheck = $_GET['check']; ?>
<?php include '_includes/db_conn.php'; 

?>

<div class="bg-gradiente"></div>

<section id="home" class="inner-shadow d-flex justify-content-center  align-items-center flex-column fadeIn wow p-5 text-white">
    <div class="container py-5">

        <div class="col-md-8 offset-md-2 fadeIn wow" data-wow-duration="0.75s" data-wow-delay="0.5s">
            <h2 class="text-capitalize"> Checks <?php echo $tipoCheck ?></h2>
            <?php if ($tipoCheck == "" ) { 
                echo '
                    <a href="?check=diseño" class="btn btn-primary">Diseño</a>
                    <a href="?check=front" class="btn btn-primary">Desarrollo Front End</a>
                    <a href="?check=back" class="btn btn-primary">Programación</a>
                    <a href="?check=analista" class="btn btn-primary">Analista</a>
                    <a href="?check=coordinacion" class="btn btn-primary">Coordinador</a>
                ';
            }?>
            <?php if ($tipoCheck == "diseño" ) { 
                foreach ($seccion_checks_diseño as $seccion_check_diseño) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            <?php echo $seccion_check_diseño ?>
                        </label>
                    </div>
                <?php }
            }
            elseif ($tipoCheck == "front" ) { 
                foreach ($seccion_checks_desarrollo as $seccion_check_desarrollo) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            <?php echo $seccion_check_desarrollo ?>
                        </label>
                    </div>
                <?php }
            } 
            elseif ($tipoCheck == "back" ) { 
                foreach ($seccion_checks_back as $seccion_check_back) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            <?php echo $seccion_check_back ?>
                        </label>
                    </div>
                <?php }
            }  
            elseif ($tipoCheck == "analista" ) { 
                foreach ($seccion_checks_analista as $seccion_check_analista) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            <?php echo $seccion_check_analista ?>
                        </label>
                    </div>
                <?php }
            }
            elseif ($tipoCheck == "coordinacion" ) { 
                foreach ($seccion_checks_coordinacion as $seccion_check_coordinacion) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            <?php echo $seccion_check_coordinacion ?>
                        </label>
                    </div>
                <?php }
            }                            
            ?>          
        </div>
    </div> <!-- fin container -->
</section>
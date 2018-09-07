<?php 
include_once("config.php"); 
include_once(ROOT ."_conf/main_conf.php");
include_once(ROOT ."_includes/header.php");
if ($seccion_home == true): 
	include_once(ROOT ."_includes/secciones/seccion_home.php");
endif;
include_once(ROOT ."_includes/footer.php");
?>
<?php
$home_link = "http://github:8888/checklist";
$url = "http://github:8888/checklist";

$url_img = $url + "/_img";

$autor = "Ignacio Galdames";

//Google Tag Manager
$google_tag_manager_id = '';

//Google Analytics Tag
$analytics = '';

//Google Analytics Tag
$google_conversion_id = '';
$google_conversion_label = '';

//Redes Sociales
$facebook = "";
$twitter = "";
$linkedin = "";
$instagram = "";
$googleplus = "";
$phone = "555";

//Activar Social Share
$facebook_share = false;
$twitter_share = false;
	$twitter_user = $twitter;

//Activar Web App
$web_app = false;
	$theme_color = '#ff0000';
	$icon_ios = false;
	$icon_android = false;
	$icon_opera = false;
	$icon_windows = false;

$type_foundry = 'Google';
//$type_foundry = 'Typekit';

$fonts_google = "'Open Sans:300,400,700,800' ";
$fonts_typekit = 'lato';

$titulo = "Checklist QA";
$descripcion = "Revisión punto a punto para proyectos de diseño y desarrollo web.";

//Secciones

$topbar = false;
$navbar = false;


//Sección 1 #cover (titulo, texto y botón con imagen de fondo)

$seccion_home = true;
	$seccion_home_titulo = $titulo;
	$seccion_home_subtitulo = "";
	$seccion_home_cuerpo = $descripcion;
	$seccion_home_login = true;

$seccion_checks = true;
	$seccion_checks_generales = array(
		"Textos con mayúsculas correctas",
		"Textos con tildes correctos",
		"Textos con puntuación correcta",
		"Textos con faltas de ortografía",
		"Contenido es el solicitado",
		"Texto es placeholder",
		"Texto de Marca (iPhone, WhatsApp)",
		"Fecha correcta",
		"Precio correcto",
	);
	$seccion_checks_desarrollo = array(
		"Meta title existe y es correcto",
		"Meta description existe es correcto",
		"URL es amigable para seo ",
		"Llamada css correcta y no repetida",
		"Si es SASS, css minificado",
		"Colores CSS correctos",
		"CSS sin errores",
		"Estilo de Imprenta existe y es correcto",
		"Estilo para móviles correcto",
		"Estructura semántica correcta",
		"Tipografías correctas",
		"Favicon Correcto",
		"Google Analytics correcto",
		"HTML sin errores",
		"HTML sin links que lleven a una página 404",
		"IMG con Alt",
		"IMG no es placeholder",
		"IMG carga correctamente",
		"Un solo H1",
		"Titulo es H1",
		"Tamaño de tipografías está estandarizado",
		"Nombre link corresponde a nombre de página y a url de página de destino",
		"Botones con link correctos",
		"Header y footer están estandarizados",
		"Probar en Chrome, Firefox y Safari",
		"Probar en dispositivo móvil real",
		"Clases y variables con nombre en camelCase",
		"carpeta imágenes img",
	);
	$seccion_checks_diseño = array(
		"Colores en RGB",
		"Colores son de paleta oficial",
		"Si es imagen de fondo, contenido relevante dentro de la grilla",
		"Si es imagen de fondo para móvil, contenido relevante visible y en contraste con contenido superior",
		"Diseño concordante a grilla de desarrollo",
		"Tamaños de texto correctos según tema",
		"Jerarquía de titulos acorde a tema",
		"Uso correcto de Lenguage Interno: GB o giga",
		"Imagen a tamaño",
		"Imagen a tamaño",
		"Imagen SVG con textos rasterizados",
		"Imagen SVG minificada",
		"Contenido relevante se ve sin hacer scroll",
		"Hay una acción clara y concisa a realizar",
		"Revisar HTML antes de dar el visto bueno",
	);


//Sección 13 (Info Footer)
$seccion_footer = false;
	$seccion_footer_txt = "Q.A. Cardumen 2018";

?>

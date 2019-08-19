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
	$seccion_checks_diseño = array(
		"Url semantica para los contenidos (Chequear con analista)",
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
	$seccion_checks_desarrollo = array(
		"Url semantica para los contenidos",
		"Agregar el código del TM del privado en las plantillas que se publicarán en el sitio privado",
		"Agregar el código del TM público en aquellas plantillas que no tendrán header del público",
		"Nombre de clases CSS e Ids Semanticos (ej: nombrecampana-div)",
		"Utilización de helpers de bootstrap",
		"El boostrap 3 empieza el corte en 768px y aspirar a definir con la data del dispositivo más pequeño desde el que ingresan",
		"Iconografia en png para que pueda ser cargado por el custom field",
		"Ausencia de llamadas a rutas absolutas",
		"Nombres de imágenes semanticos (ej: nombrecampana-bg.jpg)",
		"Compatibilidad con navegadores Firefox, Chrome, IE9+ y Safari",
		"Tamaño de tipografía estándar",
		"Caracteres especiales con acute",
		"Semántica correcta",
		"Diseño responsivo",
	);
	$seccion_checks_back = array(
		"Formularios con códigos UTM",
		"Formularios con ID dinámico",
		"Input RUT y CLAVE con atributo  autocomplete='off' ",
		"Declaración de las modificaciones en las tablas de la base de datos",
		"Definición clara de los campos de los formularios",
		"Mini descripción del desarrollo que se envía en un commit"
	);
	$seccion_checks_analista = array(
		"Uso de Alt en imágenes y vinculos (ver la posibilidad que nos da wp para dejar el campo de alt para la imagen o agfregarlo dentro del documento de ricardo de marcaje)",
		"Considerar creación de una semántica (se hace relación con contenido)",
		"Coherencia entre contenido y Alt",
		"Presencia de etiqueta <title></title> para las imágenes",
		"Presencia de metadescription y kw en campañas",
		"Interacciones en marcados con eventos analytics o TM",
		"Links externos con target '_blank' y definición en cada campaña de como se abren si son internos",
		"Agregar el código del TM público en aquellas plantillas que no tendrán header del público",
		"Agregar el código del TM del privado en las plantillas que se publicarán en el sitio privado",

	);
	$seccion_checks_coordinacion = array(
		"Asegurar una correcta solicitud de cada desarrollo (fecha de publicación, hay o no campañas de medios asociados, quién es la contraparte oficial que revisa y da los vb)",
		"Asegurar el mínimo viable para comenzar un desarrollo",
		"Revisión del documento técnico al enviar el commit",
		"Actualización periódica al equipo de acontecimientos de la compañía",
		"Probar los links",
		"Revisión del desarrollo en su versión desktop y mobile",
		"Revisión de la inserción del código de TM",
		"Revisión de la correcta inserción de los archivos involucrados en el commit ",
		"Revisión de los textos (oetografía y puntuación)",
		"Revisar el SEO (snipped, kw, alt imágenes)",
		
	);

//Sección 13 (Info Footer)
$seccion_footer = false;
	$seccion_footer_txt = "Q.A. Cardumen 2018";

?>

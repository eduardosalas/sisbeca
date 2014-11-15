/*Función para la detección de la resolución de la pantalla*/

$(document).ready(function() {

	if ((screen.width<=1024) && (screen.height<=768))
	{
		alert('Screen size: 1024x768 or less');
		$("link[rel=stylesheet]:not(:first)").attr({href : "detect1024.css"});
	}
	else
	{
		alert('Screen size: larger than 1024x768, 1440x900 maybe?');
		$("link[rel=stylesheet]:not(:first)").attr({href : "detect1440.css"});
	}
});


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>[ODD] Objectifs de d&eacute;veloppement durable</title>
	
    <link href="jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="jquery.vmap.js" type="text/javascript"></script>
    <script src="jquery.vmap.france.js" type="text/javascript"></script>
<!-- gestion si données de la carte indisponibles -->
<?php

$filename = './jquery.vmap.colorsFrance_'.$_GET['cat'].'.js';

	if (file_exists($filename)) {
		echo "<script src=\"".$filename."\" type=\"text/javascript\"></script>";
	} else {
		include('./blank_map.php');
	}

?>

	<script type="text/javascript">
	$(document).ready(function() {
		$('#francemap').vectorMap({
		    map: 'france_fr',
			hoverOpacity: 0.5,
			hoverColor: false,
			backgroundColor: "#ffffff",
			colors: couleurs,
			borderColor: "#000000",
			selectedColor: "#EC0000",
			enableZoom: true,
			showTooltip: true,
		    onRegionClick: function(element, code, region)
		    {
		        var message = 'Département : "'
		            + region 
		            + '" || Code : "'
		            + code
					+ '"';
             
		        alert(message);
		    }
		});
	});
	</script>
  </head>
  <body>
	<div id="francemap" style="width: 700px; height: 600px;"></div>
  </body>
</html>

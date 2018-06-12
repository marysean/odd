<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="css/ampoule.ico">

    <title>[ODD] Objectifs de d&eacute;veloppement durable</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
	<link href="css/ma.css" rel="stylesheet">
	</head>
<BR>
<!-- CONSTRUCTION TABLEAU DE DONNEES -->
<?php

/*
	$intitule["CBI"] = "Indice de développement socio-économique : PIB par habitant";
	$intitule["EROW"] = "Indice de production durable : productivité";
	$intitule["GDPC"] = "Indice d'inclusion sociale : personne en risque d'exclusion sociale ou de pauvreté";
	$intitule["GHG"] = "Indice d'évolution démographique : Taux d'emploi des personnes âgées";
	$intitule["HLY"] = "Santé publique : espérance de vie en bonne santé";
	$intitule["ODA"] = "Indice de changement climatique : émissions de gaz à effet de serre";
	$intitule["PEC"] = "Indice énergétique : consommation d'énergie primaire";
	$intitule["RE"] = "Indice de mMobilité durable : consommation énergétique du secteur des transports rapportée au PIB";
	$intitule["RP"] = "Indice environnemental : Indice d'intégration des populations communes d'oiseaux";
	$intitule["SECT"] = "Indice de partenariat : taux du PIB dédié à des objectifs de développements durables dans des pays tiers";
*/

	$intitule["tsdec100"] = "développement économique";
	$intitule["tsdpc100"] = "productivité";
	$intitule["tsdsc100"] = "inclusion sociale";
	$intitule["tsdde100"] = "évolution démographique";
	$intitule["tsdph100"] = "santé publique";
	$intitule["tsdcc100"] = "changement climatique";
	$intitule["tsdcc120"] = "énergie";
	$intitule["tsdtr100"] = "mobilité durable";
	$intitule["tsdnr100"] = "environnement";
	$intitule["tsdgp100"] = "partenariat";

	$f_pays1 = "./match/".$_GET["pays1"].".csv";
	$file_pays1 = new SplFileObject($f_pays1);
	$file_pays1->setFlags(SplFileObject::READ_CSV);
	#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
	$file_pays1->setCsvControl(';');

	$l_indic = "0";
	#Parcours de chacune des lignes du fichier pays 1
	foreach ($file_pays1 as $row) {
		list($indic, $rang, $valeur) = $row;
		$valeur_f = floatval($valeur);
		$rang_f = floatval($rang);
		$val_pays1[$indic] = $valeur_f;
		$rang_pays1[$indic] = $rang_f;
		$l_indic = $l_indic."\"".$intitule[$indic]."\",";
		}
	$l_indic = substr($l_indic,1,-1);
#	echo $l_indic;
	$score_pays2 = 0;	
	$score_pays1 = 0;
	$f_pays2 = "./match/".$_GET["pays2"].".csv";
	$file_pays2 = new SplFileObject($f_pays2);
	$file_pays2->setFlags(SplFileObject::READ_CSV);
	#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
	$file_pays2->setCsvControl(';');

	#Parcours de chacune des lignes du fichier pays 1
	foreach ($file_pays2 as $row) {
		list($indic, $rang, $valeur) = $row;
		$valeur_f = floatval($valeur);
		$rang_f = floatval($rang);
		$val_pays2[$indic] = $valeur_f;
		$rang_pays2[$indic] = $rang_f;
		if ($rang_pays1[$indic] > $rang_pays2[$indic] + 1) { $score_pays2 = $score_pays2 + 1; }
		if ($rang_pays2[$indic] > $rang_pays1[$indic] + 1) { $score_pays1 = $score_pays1 + 1; }
		}	
	?>

	  <center>
	  <H2>Résultats du match</H2><BR>
	  <table width="100%" align="center">
	  <TR><TD align="center">
          <img class="rounded-circle" src="img/pixabay/<?php echo $_GET["pays1"]; ?>.png" alt="<?php echo $_GET["pays1"]; ?>" width="100" height="100">
		  <BR> <H1><?php echo $score_pays1; ?></H1>
		</TD><TD>&nbsp;<H1>-</H1></TD>
		<TD align="center">
			<img class="rounded-circle" src="img/pixabay/<?php echo $_GET["pays2"]; ?>.png" alt="<?php echo $_GET["pays2"]; ?>" width="100" height="100"></H1>
		<BR><H1><?php echo $score_pays2; ?>
		</TD></TR><TR>
		<TD align="center">
		<h2><?php echo $_GET["pays1"]; ?></h2></TD><TD></TD><TD align="center">
		<h2><?php echo $_GET["pays2"]; ?></h2></TD></TR>
        </table>
			
      </center><!-- /.row -->
	  <BR><B>Comment les points sont-ils comptés ?</B><BR>
	  Le rang correspond à la position du pays dans le classement r&eacute;alis&eacute; en fonction de la valeur de l'indicateur par rapport aux 31 pays europ&eacute;ens suivi par Eurostat.
	  Si la barre de progression est de couleur verte, alors le pays a au moins deux places d'avance dans le classement par rapport au pays auquel il est compar&eacute;,
	  et le pays marque alors un point dans le match.<BR>
	  <BR>
	
<table align="center" width="100%">
<TR><TD>
	<table>
	<TR><TD><B>Rang</B></TD><TD align="center"><B>Valeur de l'indice</B></TD></TR>
	<!-- SCRIPT PHP POUR ALLER CHERCHER LES VALEURS DU PAYS 1 SUR LES DIFFERENTS INDICATEURS -->
	<?php
	$f_pays1 = "./match/".$_GET["pays1"].".csv";
	$file_pays1 = new SplFileObject($f_pays1);
	$file_pays1->setFlags(SplFileObject::READ_CSV);
	#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
	$file_pays1->setCsvControl(';');
	
	$l1_val ="";
	#Parcours de chacune des lignes du fichier pays
	foreach ($file_pays1 as $row) {
		list($indic, $rang, $valeur) = $row;
		echo "<TR bgcolor=\"white\"><B>
			<TD align=\"left\">";
		if ($rang_pays1[$indic] == 100)
			{	echo "N/A"; }	
		else { echo $rang_pays1[$indic]; }
		echo "</TD>";
		echo "<TD align=\"center\" width=\"200px\">
			<div class=\"progress\">";
		if ($rang_pays2[$indic] > $rang_pays1[$indic] + 1) { 
			echo "	<div class=\"progress-barG\" role=\"progressbar\"";}
		else {
			echo "<div class=\"progress-bar progress-bar-info\" role=\"progressbar\""; }
		echo " aria-valuenow=\"";
		echo $val_pays1[$indic];
		echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
		echo $val_pays1[$indic];
		echo "%\">";
		echo $val_pays1[$indic];
		echo "	</div>
			</div>
			</TD></TR>";
		$l1_val = $l1_val.",".$val_pays1[$indic];
		}
$l1_val=substr($l1_val,1);

	?>
	</table>
</TD><TD>
	<table>
	<TR><TD align="center" width="100%"><B>Indice de :</B></TD></TR>
	<?php
	$f_pays1 = "./match/".$_GET["pays1"].".csv";
	$file_pays1 = new SplFileObject($f_pays1);
	$file_pays1->setFlags(SplFileObject::READ_CSV);
	#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
	$file_pays1->setCsvControl(';');
	
	#Parcours de chacune des lignes du fichier pays
	foreach ($file_pays1 as $row) {
		list($indic, $rang, $valeur) = $row;
		echo "<TR bgcolor=\"white\"><B>
			<TD align=\"center\">";
		echo $indic.": ".$intitule[$indic];
		echo "</TD></TR>";
	}
	?>
	</table>
</TD><TD>
	<table width="100%">
	<TR>
	<TD align="center"><B>Valeur de l'indice</B></TD>
	<TD><B>Rang</B></TD></TR>

	<!-- SCRIPT PHP POUR ALLER CHERCHER LES VALEURS DU PAYS 2 SUR LES DIFFERENTS INDICATEURS -->
	<?php
	$f_pays2 = "./match/".$_GET["pays2"].".csv";
	$file_pays2 = new SplFileObject($f_pays2);
	$file_pays2->setFlags(SplFileObject::READ_CSV);
	#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
	$file_pays2->setCsvControl(';');
	$l2_val = "";
	#Parcours de chacune des lignes du fichier pays
	foreach ($file_pays2 as $row) {
		list($indic, $rang, $valeur) = $row;
		echo "<TR bgcolor=\"white\"><B>";
		echo "<TD align=\"center\" width=\"200px\">
			<div class=\"progress\">";
		if ($rang_pays1[$indic] > $rang_pays2[$indic] + 1) { 
			echo "	<div class=\"progress-barG\" role=\"progressbar\"";}
		else {
			echo "<div class=\"progress-bar progress-bar-info\" role=\"progressbar\""; }
		echo " aria-valuenow=\"";
		echo $val_pays2[$indic];
		echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
		echo $val_pays2[$indic];
		echo "%\">";
		echo $val_pays2[$indic];
		echo "	</div>
			</div>
			</TD>";
		echo "<TD align=\"right\">";
		if ($rang_pays2[$indic] == 100)
			{	echo "N/A"; }	
		else { echo $rang_pays2[$indic]; }
		echo "</TD>";
		echo "</TR>";
		$l2_val = $l2_val.",".$val_pays2[$indic];
		}
$l2_val=substr($l2_val,1);
#echo $l2_val;
	?>
	</table>
</TD></TR>
</TABLE>
<!-- FIN DE LA TABLE DE MATCH -->	 
	  <BR>&nbsp;<BR>

	  </center>

<!-- DEBUT GRAPHIQUES RADAR -->
    <script src="js/Chart.bundle.js"></script>
    <script src="js/chartjs-plugin-deferred.js"></script>
<table width="100%">
<TR>
<TD align="left">

</TD>
<TD width="900px">
	<p><div class="chartjs-wrapper" align="center">
	<canvas id="chartjs-3" class="chartjs" width="undefined" height="undefined"></canvas>
	 <!--
	<script>new Chart(document.getElementById("chartjs-3"),{"type":"radar","data":{"labels":["Eau propre et assainissement","Energie propre d'un cout abordable","Villes durables","Production-consommation responsables","Vie terrestre","Partenariats"],"datasets":[{"label":"France","data":[65,59,90,81,56,55],"fill":true,"backgroundColor":"rgba(0, 0, 255, 0.3)","borderColor":"rgba(0, 0, 255, 0.3)","pointBackgroundColor":"rgba(0, 0, 255, 0.3)","pointBorderColor":"#fff","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgb(255, 99, 132)"},{"label":"Allemagne","data":[28,48,40,19,96,27],"fill":true,"backgroundColor":"rgba(255, 0, 0, 0.3)","borderColor":"rgba(255, 0, 0, 0.3)","pointBackgroundColor":"rgba(255, 0, 0, 0.3)","pointBorderColor":"rgba(255, 0, 0, 0.3)","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgba(255, 0, 0, 0.3)"}]},"options":{"elements":{"line":{"tension":0,"borderWidth":3}}}});</script></div></p>
	-->
	<?php
	echo "<script>new Chart(document.getElementById(\"chartjs-3\"),{\"type\":\"radar\",\"data\":{\"labels\":["; 
	echo $l_indic; 
	echo "],\"datasets\":[{\"label\":\""; 
	echo $_GET["pays1"]; 
	echo "\",\"data\":["; 
	echo $l1_val;
	echo "],";
	echo "\"fill\":true,\"backgroundColor\":\"rgba(0, 0, 255, 0.3)\",\"borderColor\":\"rgba(0, 0, 255, 0.3)\",\"pointBackgroundColor\":\"rgba(0, 0, 255, 0.3)\",\"pointBorderColor\":\"#fff\","; 
	echo "\"pointHoverBackgroundColor\":\"#fff\",\"pointHoverBorderColor\":\"rgb(255, 99, 132)\"},"; 
	echo "{\"label\":\""; 
	echo $_GET["pays2"]; 
	echo "\",\"data\":["; 
	echo $l2_val;
	echo "],";
	echo "\"fill\":true,\"backgroundColor\":\"rgba(255, 0, 0, 0.3)\",\"borderColor\":\"rgba(255, 0, 0, 0.3)\",\"pointBackgroundColor\":\"rgba(255, 0, 0, 0.3)\",\"pointBorderColor\":\"rgba(255, 0, 0, 0.3)\","; echo "\"pointHoverBackgroundColor\":\"#fff\","; echo "\"pointHoverBorderColor\":\"rgba(255, 0, 0, 0.3)\"}]},\"options\":{\"elements\":{\"line\":{\"tension\":0,\"borderWidth\":3}}}});</script>";
	?>
	</div></p>
</TD>
</TR>
</TABLE> 
 <!-- FIN GRAPHIQUE RADAR -->
<BR><HR>
<font face="Calibri"><center>Pour avoir une comparaison entre deux pays en particulier, sélectionner les pays à comparer : <BR><BR></center></font>
	  <center>	  
<form method="get" action="?id=match">
<SELECT name="pays1" size="1" class="btn btn-secondary">
<OPTION><?php echo $_GET["pays1"]; ?>
<?php
$dir    = './match/';
$files2 = scandir($dir);
#$files2 = scandir($dir, 1);

$n = count($files2);

for ($i = 0; $i < $n; $i++) {
	echo "\n <OPTION>";
	print_r(substr($files2[$i],0,-4));
	$i = $i +1;
}
?>
<!--
<option> 
<option>Allemagne
<option>Belgique
<option>Bulgarie
<option>Danemark
<option>France
<option>Grece
<option>Irlande
<option>Italie
<option>Pays-Bas
<option>Portugal
<option>République Tchèque
-->
</SELECT> vs.
<input type="hidden" name="id" value="match">
<SELECT name="pays2" size="1" class="btn btn-secondary">
<OPTION><?php echo $_GET["pays2"]; ?>
<?php
$dir    = './match/';
$files2 = scandir($dir);
#$files2 = scandir($dir, 1);

$n = count($files2);

for ($i = 0; $i < $n; $i++) {
	echo "\n <OPTION>";
	print_r(substr($files2[$i],0,-4));
	$i = $i +1;
}
?> 
<!--
<option> 
<option>Allemagne
<option>Belgique
<option>Bulgarie
<option>Danemark
<option>France
<option>Grece
<option>Irlande
<option>Italie
<option>Pays-Bas
<option>Portugal
<option>République Tchèque
-->
</SELECT><BR><BR>
<input class="btn btn-lg btn-primary" type="submit" value="Voir les r&eacute;sultats du match">
</form><HR>

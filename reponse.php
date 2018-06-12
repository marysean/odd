 <div class="container marketing">
<BR>&nbsp;<BR>
      <H1><CENTER><B><font color="blue">O</font></B>bjectifs de <B><font color="blue">D</font></B>&eacute;veloppement <B><font color="blue">D</font></B>urable :
	  <BR>Identification des ODD en interaction avec mon projet<BR>&nbsp;
	  <BR></CENTER></H1>
	  Cet outil ne permet pour le moment d'évaluer la probabilité d'impact que sur un nombre limité d'ODD, à savoir : 
	  <BR> l'ODD n°1 : "Éliminer l’extrême pauvreté et la faim"
	  <BR> l'ODD n°6 : "Garantir l’accès de tous à l’eau et à l’assainissement et assurer une gestion durable des ressources en eau"
	  <BR> l'ODD n°7  : "Garantir l’accès de tous à des services énergétiques fiables, durables et modernes, à un coût abordable"
	  <BR> l'ODD n°11 : "Faire en sorte que les villes et les établissements humains soient ouverts à tous, sûrs, résilients et durables"
	  <BR><BR><font color="red">Il n'est pas ici préjugé si l'impact sera positif ou négatif sur l'indicateur mais seulement de l'existence d'une interaction
	  entre votre projet et l'ODD.</font><BR>
	   La méthodologie de calcul est explicitée <a href="?id=method_ml">ici</A>. Elle est fondée sur des algorithmes d'intelligence artificielle.
<BR><BR>
<?php
if ($_FILES['fichier_test']['error'] > 0) $erreur = "Erreur lors du transfert";
#if ($_POST["desc_test"]<>"") echo "<B>La description du projet test&eacute;e</B> est pour m&eacute;moire la suivante : <BR>";
#echo "<mark><font color='#232c66'>"; echo $_POST["desc_test"]; echo "</font><BR><BR></mark>";
#EN PASSANT PAR LE SCRIPT PYTHON
#$var = null;
#$file = file_get_contents("C:\\xampp\\htdocs\\newdesign\\ML\\hello.py");
#echo $file;
#system("C:\\Users\\QJ1149\\AppData\\Local\\Continuum\\anaconda2\\pkgs\\spyder-3.2.3-py27hbf30467_0\\Scripts\\spyder.exe C:\\xampp\\htdocs\\newdesign\\ML\\hello.py", $var);
#system("C:\Python27\python C:\\xampp\\htdocs\\newdesign\\ML\\ML.py", $var);
#print_r($var);
#system("echo 2");
#echo "fin de script";
?>
<B>R&eacute;sultats :</B><BR>
<table align="center">
<!-- SECTION PAUVRETE -->
<?php
#EN PASSANT PAR PHP SUR LA BASE D'UN DICTIONNAIRE DEJA CALCULE
$file = new SplFileObject("./ML/ml_pauvrete.csv");
$file->setFlags(SplFileObject::READ_CSV);
#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
$file->setCsvControl(';');

# Lecture de la constante du dictionnaire
$cst_file = fopen('./ML/ml_pauvrete_cst.txt', 'r');
$cst = fgets($cst_file);
fclose($cst_file);

#Texte à tester
$test = $_POST["desc_test"];
$logit = 0;

#Calcul de la probabilite sur l'ODD en parcourant le dictionnaire
foreach ($file as $row) {
    list($rang, $force, $mot) = $row;
	$valeur_force = floatval($force);
	$nb = mb_substr_count($test, $mot);
	if ($nb > 0) {
/*
	printf("Le mot \"");
	print_r($mot);
	print_r("\" de force ");
	print_r($valeur_force);
	printf(" apparait ");
	printf($nb);
	printf(" fois.<BR>");
*/
	$logit = $logit + $valeur_force*$nb;
	/*
	echo "logit : ";
	echo $logit;
	echo "<BR>";
	*/
	}
}
/*
echo "<BR>logit avec la constante :";
$logit = $logit + $cst;
echo $logit;
echo "<BR><BR>";
*/
?>
<TR><TD><a href="?id=def#7"><img src="img/odd-logo/F_SDG_Icons-01-01.png"></A></TD><TD> 
<?php
#probability – logistic function 

$p_odd = 1-1/(1+exp(-$logit));
if ($p_odd <= 0.5) {
	echo "<TD bgcolor=\"#F2F2F2\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd pauvreté : ";
	echo "<50% <BR>Il est peu probable que votre projet est une interaction importante sur cet objectif.";
} else if ($p_odd <= 0.7){
	echo "<TD bgcolor=\"#81F79F\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd pauvreté : ";
	echo "compris 50% et 70%<BR> Votre projet pourrait impacter cet objectif.";
}
else {
	echo "<TD bgcolor=\"#58FA82\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd pauvreté : ";
	#echo(round($p_odd*100));
	echo "> 70%<BR> Il est probable que l'impact positif ou négatif de votre projet soit significatif sur cet objectif.";
}
echo "<BR>Pour mémoire, la probabilité calculée d'impact positif ou négatif est de : ";
if ($p_odd >0.98) {
	print("99");
}
else {
print_r(round($p_odd*100)); }
echo "%.";
?>
</TD><TD width="20%">
<?php
if ($p_odd > 0.5) {
	echo "<a href=\"data_src/odd1.xlsx\">Lien vers les indicateurs de développement durable de cet ODD (XLS)</A>";
}
?>
</TD></TR>
<!-- FIN SECTION PAUVRETE -->

<!-- SECTION EAU -->
<?php
#EN PASSANT PAR PHP SUR LA BASE D'UN DICTIONNAIRE DEJA CALCULE
$file = new SplFileObject("./ML/ml_eau.csv");
$file->setFlags(SplFileObject::READ_CSV);
#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
$file->setCsvControl(';');

# Lecture de la constante du dictionnaire
$cst_file = fopen('./ML/ml_eau_cst.txt', 'r');
$cst = fgets($cst_file);
fclose($cst_file);

#Texte à tester
$test = $_POST["desc_test"];
$logit = 0;

#Calcul de la probabilite sur l'ODD en parcourant le dictionnaire
foreach ($file as $row) {
    list($rang, $force, $mot) = $row;
	$valeur_force = floatval($force);
	$nb = mb_substr_count($test, $mot);
	if ($nb > 0) {
/*
	printf("Le mot \"");
	print_r($mot);
	print_r("\" de force ");
	print_r($valeur_force);
	printf(" apparait ");
	printf($nb);
	printf(" fois.<BR>");
*/
	$logit = $logit + $valeur_force*$nb;
	/*
	echo "logit : ";
	echo $logit;
	echo "<BR>";
	*/
	}
}
/*
echo "<BR>logit avec la constante :";
$logit = $logit + $cst;
echo $logit;
echo "<BR><BR>";
*/
?>
<TR><TD><a href="?id=def#7"><img src="img/odd-logo/F_SDG_Icons-01-06.png"></A></TD><TD> 
<?php
#probability – logistic function 

$p_odd = 1-1/(1+exp(-$logit));
if ($p_odd <= 0.5) {
	echo "<TD bgcolor=\"#F2F2F2\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd eau propre et assainissement : ";
	echo "<50% <BR>Il est peu probable que votre projet est une interaction importante avec cet objectif.";
} else if ($p_odd <= 0.7){
	echo "<TD bgcolor=\"#81F79F\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd eau propre et assainissement : ";
	echo "compris 50% et 70%<BR> Votre projet pourrait impacter cet objectif.";
}
else {
	echo "<TD bgcolor=\"#58FA82\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd eau propre et assainissement : ";
	#echo(round($p_odd*100));
	echo "> 70%<BR> Il est probable que l'impact positif ou négatif de votre projet soit significatif sur cet objectif.";
}
echo "<BR>Pour mémoire, la probabilité calculée d'impact est de : ";
if ($p_odd >0.98) {
	print("99");
}
else {
print_r(round($p_odd*100)); }
echo "%.";
?>
</TD><TD>
<?php
if ($p_odd > 0.5) {
	echo "<a href=\"data_src/odd6.xlsx\">Lien vers les indicateurs de développement durable de cet ODD (XLS)</A>";
}
?>
</TD></TR>
<!-- FIN SECTION EAU -->

<!-- SECTION ENERGIE -->
<?php
#EN PASSANT PAR PHP SUR LA BASE D'UN DICTIONNAIRE DEJA CALCULE
$file = new SplFileObject("./ML/ml_energy.csv");
$file->setFlags(SplFileObject::READ_CSV);
#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
$file->setCsvControl(';');

# Lecture de la constante du dictionnaire
$cst_file = fopen('./ML/ml_energy_cst.txt', 'r');
$cst = fgets($cst_file);
fclose($cst_file);

#Texte à tester
$test = $_POST["desc_test"];
$logit = 0;

#Calcul de la probabilite sur l'ODD en parcourant le dictionnaire
foreach ($file as $row) {
    list($rang, $force, $mot) = $row;
	$valeur_force = floatval($force);
	$nb = mb_substr_count($test, $mot);
	if ($nb > 0) {
/*
	printf("Le mot \"");
	print_r($mot);
	print_r("\" de force ");
	print_r($valeur_force);
	printf(" apparait ");
	printf($nb);
	printf(" fois.<BR>");
*/
	$logit = $logit + $valeur_force*$nb;
	/*
	echo "logit : ";
	echo $logit;
	echo "<BR>";
	*/
	}
}
/*
echo "<BR>logit avec la constante :";
$logit = $logit + $cst;
echo $logit;
echo "<BR><BR>";
*/
?>
<TR><TD><a href="?id=def#7"><img src="img/odd-logo/F_SDG_Icons-01-07.png"></A></TD><TD> 
<?php
#probability – logistic function 

$p_odd = 1-1/(1+exp(-$logit));
if ($p_odd <= 0.5) {
	echo "<TD bgcolor=\"#F2F2F2\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd &Eacute;nergie : ";
	echo "<50% <BR>Il est peu probable que votre projet est une interaction importante sur cet objectif.";
} else if ($p_odd <= 0.7){
	echo "<TD bgcolor=\"#81F79F\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd &Eacute;nergie : ";
	echo "compris 50% et 70%<BR> Votre projet pourrait impacter cet objectif.";
}
else {
	echo "<TD bgcolor=\"#58FA82\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd &Eacute;nergie : ";
	#echo(round($p_odd*100));
	echo "> 70%<BR> Il est probable que l'impact positif ou négatif de votre projet soit significatif sur cet objectif.";
}
echo "<BR>Pour mémoire, la probabilité calculée d'impact est de : ";
if ($p_odd >0.98) {
	print("99");
}
else {
print_r(round($p_odd*100)); }
echo "%.";
?>
</TD><TD><?php
if ($p_odd > 0.5) {
	echo "<a href=\"data_src/odd7.xlsx\">Lien vers les indicateurs de développement durable de cet ODD (XLS)</A>";
}
?>
</TD></TR>
<!-- FIN SECTION ENERGIE -->

<!-- SECTION VILLES -->
<?php
#EN PASSANT PAR PHP SUR LA BASE D'UN DICTIONNAIRE DEJA CALCULE
$file = new SplFileObject("./ML/ml_villes.csv");
$file->setFlags(SplFileObject::READ_CSV);
#Supprimer le retour à la ligne de la dernière ligne CSV si il y en a un sinon probleme dans la boucle de lecture
$file->setCsvControl(';');

# Lecture de la constante du dictionnaire
$cst_file = fopen('./ML/ml_villes_cst.txt', 'r');
$cst = fgets($cst_file);
fclose($cst_file);

#Texte à tester
$test = $_POST["desc_test"];
$logit = 0;

#Calcul de la probabilite sur l'ODD en parcourant le dictionnaire
foreach ($file as $row) {
    list($rang, $force, $mot) = $row;
	$valeur_force = floatval($force);
	$nb = mb_substr_count($test, $mot);
	if ($nb > 0) {
/*
	printf("Le mot \"");
	print_r($mot);
	print_r("\" de force ");
	print_r($valeur_force);
	printf(" apparait ");
	printf($nb);
	printf(" fois.<BR>");
*/
	$logit = $logit + $valeur_force*$nb;
	/*
	echo "logit : ";
	echo $logit;
	echo "<BR>";
	*/
	}
}
/*
echo "<BR>logit avec la constante :";
$logit = $logit + $cst;
echo $logit;
echo "<BR><BR>";
*/
?>
<TR><TD><a href="?id=def#7"><img src="img/odd-logo/F_SDG_Icons-01-11.png"></A></TD><TD> 
<?php
#probability – logistic function 

$p_odd = 1/(1+exp(-$logit));
if ($p_odd <= 0.5) {
	echo "<TD bgcolor=\"#F2F2F2\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd villes et communautés durables : ";
	echo "<50% <BR>Il est peu probable que votre projet est une interaction importante sur cet objectif.";
} else if ($p_odd <= 0.7){
	echo "<TD bgcolor=\"#81F79F\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd villes et communautés durables : ";
	echo "compris 50% et 70%<BR> Votre projet pourrait impacter cet objectif.";
}
else {
	echo "<TD bgcolor=\"#58FA82\">&nbsp; &nbsp;";
	echo "Probabilit&eacute; d'impacter l'odd Villes et communautés durables : ";
	#echo(round($p_odd*100));
	echo "> 70%<BR> Il est probable que l'impact de votre projet soit significatif sur cet objectif.";
}
echo "<BR>Pour mémoire, la probabilité calculée d'impact est de : ";
if ($p_odd >0.98) {
	print("99");
}
else {
print_r(round($p_odd*100)); }
echo "%.";
?>
</TD><TD>
<?php
if ($p_odd > 0.5) {
	echo "<a href=\"data_src/odd11.xlsx\">Lien vers les indicateurs de développement durable de cet ODD (XLS)</A>";
}
?>
</TD></TR>
<!-- FIN SECTION VILLES -->


</TABLE>
<BR> Cette probabilité est fondée sur une analyse sémantique de la description du projet.<BR>
Pour en savoir plus sur la méthodologie cliquez <a href="?id=method_ml">ici</A>
<BR><BR>
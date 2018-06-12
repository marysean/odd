<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/> 
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.5.4/css/bootstrap-slider.min.css"
          rel="stylesheet"/> 
   
-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/> 
    <link href="./css/main.css" rel="stylesheet"/>
	<style>
	a:active { 
    background-color: yellow;
	}
	</style>
<script>
function change(color)
	{
    var color = document.getElementById('couleur');
    color.style.backgroundColor="green";
	}
function change2(color)
	{
    var color = document.getElementById('couleur2');
    color.style.backgroundColor="green";
	var year = "08";
	document.getElementById('vie').href='?id=france&cat=vie_old';
	document.getElementById('pauvre').href='?id=france&cat=pauvre_old';
	document.getElementById('ecart').href='?id=france&cat=ecart_old';
	document.getElementById('soins').href='?id=france&cat=soins_old';
	document.getElementById('pib').href='?id=france&cat=pib_old';
	document.getElementById('emploi').href='?id=france&cat=emploi_old';
	document.getElementById('ess').href='?id=france&cat=ess_old';
	document.getElementById('rd').href='?id=france&cat=rd_old';
	document.getElementById('dechet').href='?id=france&cat=dechet_old';
	document.getElementById('sol').href='?id=france&cat=sol_old';
	document.getElementById('bio').href='?id=france&cat=bio_old';
	document.getElementById('enr').href='?id=france&cat=enr_old';
	}

function change3(color)
	{
    var color = document.getElementById('couleur3');
    color.style.backgroundColor="green";
	var year = "14";
	document.getElementById('vie').href='?id=france&cat=vie';
	document.getElementById('pauvre').href='?id=france&cat=pauvre';
	document.getElementById('ecart').href='?id=france&cat=ecart';
	document.getElementById('soins').href='?id=france&cat=soins';
	document.getElementById('pib').href='?id=france&cat=pib';
	document.getElementById('emploi').href='?id=france&cat=emploi';
	document.getElementById('ess').href='?id=france&cat=ess';
	document.getElementById('rd').href='?id=france&cat=rd';
	document.getElementById('dechet').href='?id=france&cat=dechet';
	document.getElementById('sol').href='?id=france&cat=sol';
	document.getElementById('bio').href='?id=france&cat=bio';
	document.getElementById('enr').href='?id=france&cat=enr';
	
	}

function reinit2(color)
	{
    var color = document.getElementById('couleur2');
    color.style.backgroundColor="";
	}

function reinit3(color)
	{
    var color = document.getElementById('couleur3');
    color.style.backgroundColor="";
	}
</script>


<!-- <div class="wrapper mapcontainer"> -->
<div>
<font face="Calibri">
    <div class="nav-side-menu">
        <div class="loader-container">
            <div class="loader">Chargement ...</div>
        </div>

        <div class="brand"> &nbsp;<BR>&nbsp; <BR> </div>
        <div class="subbrand"> &nbsp;
            <!--
			Visualisez la situation des différents départements en terme de développement durable
        -->
		<font size="3" face="Arial"><B>Etat local <BR>du développement durable<BR>en France &#9788;</font></B><BR>
		<a href="?id=france&cat=all2"><img class="rounded-circle" src="./img/pixabay/tree_rond.png" width="150" height="150"></A>
		</div>

        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target=".menu-content"></i>

        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse in">
                <li data-toggle="collapse" data-target="#filter" aria-expanded="true">
                    <i class="fa fa-globe fa-lg"></i> Visualiser les données par <span class="arrow"></span>
                </li>
                <li class="simple">
                    <ul class="sub-menu collapse in" id="filter" aria-expanded="true">
                        <li class="simple" style="text-align:center;">
                            <div class="btn-group filter entityTypeChoice" role="group" aria-label="scope">
                                <button type="button" class="btn btn-default" data-entity-type="Department" type="submit" id="couleur" onClick="change()">
                                <a href="#">Département</A>
                                </button>
                                <button type="button" class="btn btn-default showCountryModal">
								<a href="?id=france_global">France</A>
								</button>
                            </div>
                        </li>
                    </ul>
                </li>

				<li data-toggle="collapse" data-target="#year" aria-expanded="true">
                    <i class="fa fa-calendar fa-lg"></i> Année <span class="arrow"></span>
				</li>
                <li class="simple">
                    <ul class="sub-menu collapse in" id="year" aria-expanded="true">
                        <li class="simple" style="text-align:center;">
                            <div class="btn-group filter entityTypeChoice" role="group" aria-label="scope">
                                <button type="button" class="btn btn-default" data-entity-type="Annee" type="submit" id="couleur2" onClick="change2();reinit3()">
                                <a href="#">2006-2009</A>
                                </button>
                                <button type="button" class="btn btn-default" type="submit" id="couleur3" onClick="change3();reinit2()">
								<a href="#">2013-2014</A>
								</button>
								<form name="adresse" id="adresse" action="?id=france" method="get" enctype="multipart/form-data">
								<input type="hidden" name="year" value="01" id="year">
								</form>
                            </div>
                        </li>
                    </ul>
                </li>
                <li data-toggle="collapse" data-target="#pesticideFamilies" aria-expanded="true">
                    <!-- <i class="fa fa-flask fa-lg"></i> -->&#9658; Dimension sociale<span class="arrow"></span>
                </li>
                <li class="simple">
                    <div class="families-container">
                        <ul class="sub-menu collapse in pesticideFamilies" id="pesticideFamilies" aria-expanded="true">
							 <li><a id="vie" href="?id=france&cat=vie">Esp&eacute;rance de vie</a></li>
							 <li><a id="pauvre" href="?id=france&cat=pauvre">Taux de pauvret&eacute;</a></li>
							 <li><a id="ecart" href="?id=france&cat=ecart">Disparit&eacute; de niveau de vie </a></li>
							 <li><a id="soins" href="?id=france&cat=soins">Acc&egrave;s aux soins de proximit&eacute;</a></li>
						</ul>
				</li>
				<li data-toggle="collapse" data-target="#pesticideFamilies2" aria-expanded="true">
                    <!-- <i class="fa fa-flask fa-lg"></i> -->&#9658; Dimension Economique <span class="arrow"></span>
                </li>
                <li class="simple">
                    <div class="families-container">
                        <ul class="sub-menu collapse in pesticideFamilies2" id="pesticideFamilies2" aria-expanded="true">
                            <li><a id="pib" href="?id=france&cat=pib">PIB &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
							<li><a id="emploi" href="?id=france&cat=emploi">Taux d'emploi</a></li>
							<li><a id="ess" href="?id=france&cat=ess">Emplois de l'&eacute;conomie sociale et solidaire </a></li>
							<li><a id="rd" href="?id=france&cat=rd">Effort de recherche et d&eacute;veloppement </a></li>
						</ul>
				</li>
				<li data-toggle="collapse" data-target="#pesticideFamilies3" aria-expanded="true">
                    <!-- <i class="fa fa-flask fa-lg"></i> -->&#9658; Dimension Environnementale <span class="arrow"></span>
                </li>
                <li class="simple">
                    <div class="families-container">
                        <ul class="sub-menu collapse in pesticideFamilies3" id="pesticideFamilies3" aria-expanded="true">
                            <li><a id="dechet" href="?id=france&cat=dechet">Valorisation de d&eacute;chets m&eacute;nagers</a></li>
							<li><a id="sol" href="?id=france&cat=sol">Artificialisation des sols </a></li>
							 <li><a id="bio" href="?id=france&cat=bio">Surfaces cultiv&eacute;es en agriculture bio </a></li>
							 <li><a id="enr" href="?id=france&cat=enr">Part de l’&eacute;lectricit&eacute; d’origine renouvelable dans la consommation d’&eacute;lectricit&eacute; </a></li>
						</ul>
				</li>
                </div>
                </li>
		&nbsp; &#9632; Source : <a href="https://www.insee.fr/fr/statistiques/2512993" target="_blank">Insee</A>
        <BR>
		&nbsp; &#8594; <a href="?id=match&pays1=France&pays2=Allemagne">Section suivante : Comparer deux pays</A>
        
		</div>
    </div>
	
<table align="center">
<TR>
	<TD width="300px">
	&nbsp; </TD>
	<!--	<TD align="top" width="20%"> -->
<td style="border-right: 1px #CCCCCC solid;">

	<BR> &nbsp; <BR>
			<?php

$filename = './france/def/'.$_GET['cat'].'.php';

	if (file_exists($filename)) {
		include($filename);
	} else {
		include('./france/def/blank.php');
	}

?><BR><BR>
<?php
if ($_GET['cat']!="soins_old") 
	{
echo "L'échelle de couleur représentant la situation du territoire est la suivante :
	<img src=\"img/couleur.png\" width=\"300\"><BR>Le vert représente une situation très favorable par rapport au reste de la France, 
	le rouge une situation défavorable.<BR>
	Source des données : <a href=\"https://www.insee.fr/fr/statistiques/2512993\" target=\"_blank\">Insee</A><BR>";
	}
?>
	&#8594; <a href="?id=france&cat=all2">Retour à la vue moyenne des 12 indicateurs</A>
<BR><BR>
	</TD>
	<TD valign="top"><!-- MAP INTEGREE DANS UNE PAGE WEB SPECIFIQUE -->
<?php
if ($_GET['cat']=="soins_old") 
	{
		echo "<iframe width=\"700\" height=\"700\" style=\"border: none\;\" src=\"./france/soins_map06.php\">";
	} else {
		echo "<iframe width=\"700\" height=\"700\" style=\"border: none\;\" frameborder=\"0\" frameBorder=\"0\" src=\"./france/france_map.php?cat=".$_GET['cat']."\">";
	}
?>
	<!-- <iframe width="700" height="700" style="border: none;" src="./france/france_map.php?cat="> -->
	  <p>
		<a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/">
		  Un lien à utiliser dans les cas où les navigateurs ne supportent
		  pas les <i>iframes</i>.
		</a>
	  </p>
	</iframe>	
	 <!-- FIN DE LA MAP -->
	</TD>

 </TR>
 <TR>
 <TD></TD>
 <TD>
 <!--
<BR><center><a href="?id=match&pays1=France&pays2=Allemagne" class="btn btn-lg btn-primary">Section suivante >> Comparer deux pays européens</A></center>
-->
</TD><TD>
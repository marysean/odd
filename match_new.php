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
		<font size="3" face="Arial"><B>Développement durable : <BR>Comparaison internationale<BR></font></B><BR>
		<a href="?id=france&cat=all2"><img class="rounded-circle" src="./img/pixabay/child.jpg" width="150" height="150"></A>
		</div>

        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target=".menu-content"></i>

        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse in">
                <li data-toggle="collapse" data-target="#filter" aria-expanded="true">
                    <i class="fa fa-globe fa-lg"></i> Sélectionner les pays à comparer <span class="arrow"></span>
                </li>
                <li class="simple">
                    <ul class="sub-menu collapse in" id="filter" aria-expanded="true">
					      <li class="simple" style="text-align:center;">
                          <div class="btn-group filter entityTypeChoice" role="group" aria-label="scope">
						  <center>
							<form method="get" action="?id=match_new">
								Pays#1:<SELECT name="pays1" size="1" class="btn btn-secondary">
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
								</SELECT> <BR>vs.<BR>
								<input type="hidden" name="id" value="match_new">
								Pays#2:<SELECT name="pays2" size="1" class="btn btn-secondary">
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
</SELECT>
                     
                    </ul>
                </li>

                <li data-toggle="collapse" data-target="#pesticideFamilies" aria-expanded="true">
                    <!-- <i class="fa fa-flask fa-lg"></i> -->&#9998; Indicateurs clé Eurostat<span class="arrow"></span>
                </li>
                <li class="simple">
                    <div class="families-container">
                        <ul class="sub-menu collapse in pesticideFamilies" id="pesticideFamilies" aria-expanded="true">
							<INPUT TYPE="radio" NAME= "data" VALUE="EUR_INFO"> Vue par ODD<BR>
							<INPUT TYPE="radio" NAME= "data" VALUE="EUR_MATCH"> Match entre les deux pays<BR>
							<INPUT TYPE="radio" NAME= "data" VALUE="EUR_EVOL"> Carte de "chaleur"<BR>
						</ul>
				</li>
				<li data-toggle="collapse" data-target="#pesticideFamilies2" aria-expanded="true">
                    <!-- <i class="fa fa-flask fa-lg"></i> -->&#9998; Social Progress Index<span class="arrow"></span>
                </li>
                <li class="simple">
                    <div class="families-container">
                        <ul class="sub-menu collapse in pesticideFamilies2" id="pesticideFamilies2" aria-expanded="true">
                            <INPUT TYPE="radio" NAME= "data" VALUE="SPI_EVOL"> Evolution dans le temps<BR>
							<INPUT TYPE="radio" NAME= "data" VALUE="SPI_PAYS" CHECKED> Score détaillé du pays #1 sélectionné
						</ul>
				</li>
				<li data-toggle="collapse" data-target="#pesticideFamilies3" aria-expanded="true">
                    <!-- <i class="fa fa-flask fa-lg"></i> -->&#9998; Banque Mondiale<span class="arrow"></span>
                </li>
                <li class="simple">
                    <div class="families-container">
                        <ul class="sub-menu collapse in pesticideFamilies3" id="pesticideFamilies3" aria-expanded="true">
                        	<INPUT TYPE="radio" NAME= "data" VALUE="BMO_EVOL"> Evolution dans le temps<BR>
						</ul>
				</li>
                </div>
                </li>
	    <BR><center>
		<input class="btn btn-default" type="submit" value="Voir la comparaison"></center>
		</form><BR>
		&nbsp; &#8594; <a href="?id=eval">Section suivante : Tester mon projet</A>
        
		</div>
    </div>
	
<table align="center">
<TR>
	<TD width="300px">
	&nbsp; </TD>
	<!--	<TD align="top" width="20%"> -->
<td style="border-right: 1px #CCCCCC solid;">
<?php
$rest = substr($_GET["data"], 0, 3);
$chaine = "./match/def/".$rest.".php";
#echo $chaine;
include($chaine);
?>
<BR> &nbsp; <BR>
<BR><BR>
<BR><BR>
	</TD>
	<TD valign="top"><!-- IFRAME -->
	<?php
	$mapping["Allemagne"] = "DEU";
	$mapping["Belgique"] = "BEL";
	$mapping["Bulgarie"] = "BGR";
	$mapping["Danemark"] = "DNK";
	$mapping["France"] = "FRA";
	$mapping["Grece"] = "GRC";
	$mapping["Irlande"] = "IRL";
	$mapping["Italie"] = "ITA";
	$mapping["Pays-Bas"] = "NLD";
	$mapping["Portugal"] = "PRT";
	$mapping["République Tchèque"] = "CZE";

	$mapping_pays["Allemagne"] = "GER";
	$mapping_pays["Belgique"] = "BEL";
	$mapping_pays["Bulgarie"] = "BGR";
	$mapping_pays["Danemark"] = "DNK";
	$mapping_pays["France"] = "FRA";
	$mapping_pays["Grece"] = "GRC";
	$mapping_pays["Irlande"] = "IRL";
	$mapping_pays["Italie"] = "ITA";
	$mapping_pays["Pays-Bas"] = "NLD";
	$mapping_pays["Portugal"] = "PRT";
	$mapping_pays["République Tchèque"] = "CZE";

	$param = "?pays1=".$_GET["pays1"]."&pays2=".$_GET["pays2"];
	$tab_lien["EUR_MATCH"]="match.php".$param;
	$tab_lien["EUR_EVOL"]="./sdo-vignette.php";
	$tab_lien["EUR_INFO"]="http://ec.europa.eu/eurostat/cache/infographs/sdg-timeline/index.html?goal=01";
	$tab_lien["SPI_PAYS"]="https://www.socialprogressindex.com/?code=".$mapping[$_GET['pays1']]."&embedded=true";
	$tab_lien["SPI_EVOL"]="https://www.socialprogressindex.com/?tab=3&code=IRL&compare=".$mapping[$_GET['pays1']]."&compare=".$mapping[$_GET['pays2']]."&prop=SPI&embedded=true";
	$tab_lien["BMO_EVOL"]="https://www.google.fr/publicdata/embed?ds=d5bncppjof8f9_&amp;ctype=l&amp;strail=false&amp;bcs=d&amp;nselm=h&amp;met_y=sp_dyn_le00_in&amp;scale_y=lin&amp;ind_y=false&amp;rdim=region&amp;idim=country:FRA:DEU:USA&amp;ifdim=region&amp;hl=fr&amp;dl=fr&amp;ind=false";

	$lien = $tab_lien[$_GET["data"]];
	echo "<iframe src=\"".$lien."\" width=\"700\" height=\"800\" frameborder=\"0\" frameBorder=\"0\" align=\"top\"></iframe>";
	?>
	<!-- IFRAME -->
	</TD>

 </TR>
 <TR>
 <TD></TD>
 <TD>
 <!--
<BR><center><a href="?id=match&pays1=France&pays2=Allemagne" class="btn btn-lg btn-primary">Section suivante >> Comparer deux pays européens</A></center>
-->
</TD><TD>

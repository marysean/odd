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
	document.getElementById('vie').href='?id=france&cat=vie08';
	document.getElementById('pauvre').href='?id=france&cat=pauvre08';
	document.getElementById('ecart').href='?id=france&cat=ecart08';
	document.getElementById('soins').href='?id=france&cat=soins08';
	document.getElementById('pib').href='?id=france&cat=pib08';
	document.getElementById('emploi').href='?id=france&cat=emploi08';
	document.getElementById('ess').href='?id=france&cat=ess08';
	document.getElementById('rd').href='?id=france&cat=rd08';
	document.getElementById('dechet').href='?id=france&cat=dechet08';
	document.getElementById('sol').href='?id=france&cat=sol08';
	document.getElementById('bio').href='?id=france&cat=bio08';
	document.getElementById('enr').href='?id=france&cat=enr08';
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
                                <a href="#">2008-2009</A>
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
	<TD width="320px">
	&nbsp; </TD>
	<!--	<TD align="top" width="20%"> -->
<TD><BR>
<img src="./img/info_france.png" height="60%" width="60%"><BR>
&#8594; <a href="?id=france&cat=all2">Retour à la vue moyenne des 12 indicateurs par département</A>
<BR><BR>
Sources des données :
<ul>
	<li>Esp&eacute;rance de vie : <a href="https://www.insee.fr/fr/statistiques/1906668?sommaire=1906743">Insee</a> ; voir son évolution dans le temps
	avec les données de la <a href="https://www.google.fr/publicdata/explore?ds=d5bncppjof8f9_&met_y=sp_dyn_le00_in&idim=country:FRA:DEU:USA&hl=fr&dl=fr" target="_blank">Banque Mondiale</A></li>
	<li>Taux de pauvret&eacute; : <a href="https://www.insee.fr/fr/statistiques/3137028" target="_blank">Insee</A></li>
	<li>Disparit&eacute; de niveau de vie, rapport entre 1er et 9ème décile des revenus  : <a href="https://www.insee.fr/fr/statistiques/3137028" target="_blank">Insee</A></li>
	<li>Acc&egrave;s aux soins de proximit&eacute; : La France classée 15ème sur 195 pays d'après une <a href="http://www.thelancet.com/journals/lancet/article/PIIS0140-6736(17)30818-8/fulltext" target="_blank">étude parue dans The Lancet</A></li>
	<li>PIB, Produit Intérieur Brut: <a href="https://www.google.fr/publicdata/explore?ds=d5bncppjof8f9_&met_y=ny_gdp_mktp_cd&idim=country:FRA:GBR:DEU&hl=fr&dl=fr" target="_blank">Banque Mondiale</A></li>
	<li>Taux d'emploi : <a href="https://www.insee.fr/fr/statistiques/2412084" target="_blank">Insee</A></li>
	<li>Effort de recherche et d&eacute;veloppement<a href="https://publication.enseignementsup-recherche.gouv.fr/eesr/10/EESR10_R_26-l_effort_de_recherche_et_developpement_en_france.php" target="_blank"> : Etude du ministère de l'Enseignement supérieur et de la Recherche</A></li>
	<li>Artificialisation des sols : <a href="http://www.gouvernement.fr/indicateur-artificialisation-sols" target="_blank">http://www.gouvernement.fr/indicateur-artificialisation-sols</A>
	<li>Valorisation de d&eacute;chets m&eacute;nagers : <a href="http://www.statistiques.developpement-durable.gouv.fr/indicateurs-indices/f/1929/0/taux-recyclage-dechets-france.html" target="_blank">Taux de recyclage en 2013</A></li>
	<li>Surfaces cultiv&eacute;es en agriculture bio: <a href="http://agriculture.gouv.fr/infographie-lagriculture-biologique-en-france">Infographie Ministère de l'Agriculture</A></li>
	<li>Part de l’énergie d’origine renouvelable dans la consommation d’&eacute;nergie primaire : <a href="https://www.google.fr/url?sa=t&rct=j&q=&esrc=s&source=web&cd=15&cad=rja&uact=8&ved=0ahUKEwjPhfS71dzXAhXF1hQKHcDfAEI4ChAWCEEwBA&url=http%3A%2F%2Fwww.statistiques.developpement-durable.gouv.fr%2Ffileadmin%2Fuser_upload%2FDatalab-13-CC-de_l-energie-edition-2016-fevrier2017.pdf&usg=AOvVaw1a0Uzag5aKHRelu5AcIRFI" target="_blank">Chiffres-clé de l'énergie 2016, Datalab</A></li>										
</ul>
	Ressources graphiques :
<UL>
<li>Icons made by <a href="https://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar">Gregor Cresnar</a> and <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></li>
<li>Infographie <a href='https://fr.freepik.com/vecteurs-libre/infographique-d-39-affaires-avec-differentes-etapes_925947.htm'>designed with Freepik</a></li>
</UL>
</TD>
<TD></TD></TR></table>
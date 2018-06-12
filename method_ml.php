<div class="container marketing">
<BR>&nbsp;<BR>
      <H1><CENTER><B><font color="blue">O</font></B>bjectifs de <B><font color="blue">D</font></B>&eacute;veloppement <B><font color="blue">D</font></B>urable :
	  <BR>Identifiez les <font color="blue">ODD</font> li&eacute;s &agrave; mon projet via Machine Learning<BR>&nbsp;
	  <BR></CENTER></H1>
	La classification r&eacute;lis&eacute;e est fond&eacute;e sur un algorithme de machine learning : <B>on cat&eacute;gorise du texte via l'utilisation 
	du package scikit-learn sous Python. </B>
	<BR><BR>
	L’objectif de la cat&eacute;gorisation de textes est d’associer aussi pr&eacute;cis&eacute;ment que possible des textes à des classes pr&eacute;d&eacute;finies.<BR>
	Pour se faire, une premi&egrave;re phase va consister &agrave; faire lire &agrave; une machine un nombre important de textes qui ont d&eacute;j&agrave;
	&eacute;t&eacute; cat&eacute;goris&eacute; : c'est ce qu'on appelle le corpus de d&eacute;part.
	<BR> Pour ce site, par exemple, pour &eacute;valuer la probabilit&eacute; qu'un projet impact l'ODD n°7 Energie, on fournit un corpus de texte ayant deux classes :<BR>
	- classe "&eacute;nergie" : des textes relatifs &agrave; l'objectif &eacute;nergie class&eacute; sous le m&ecirc;me nom <BR>
	- classe "unrelated" : des textes jug&eacute;s par un &ecirc;tre humain sans rapport avec l'&eacute;nergie<BR><BR>
	On analyse et traite ce corpus avec la librairie sickit-learn comme explicit&eacute; dans le <a href="https://eric.univ-lyon2.fr/~ricco/tanagra/fichiers/fr_Tanagra_Doc_Classification_Python.pdf" target="_blank">
	tutoriel de R. Tanagra</A> : en sortie du script python, on stocke dans un fichier csv le dictionnaire des mots pertinents pour l'analyse sémantique
	ainsi que le poids pour l'appartenance dans chaque classe des différents mots, autrement dit, on stocke un tableau de mots associés à des coefficients numériques.
<BR><center><img src="img/corpus.png" align="center"></center>
<BR>Quand un utilisateur entre une description de texte, un script php s'éxecute : il recherche les fréquences d'apparition des mots clé pour la classification, et sur la base
de leur pondération respective évalue la probabilité que le projet analysé impacte l'ODD.
<BR><BR>
Pour mémoire, quelques chiffres clé pour jauger de la fiabilité de chacune des analyses et les reproduire :<BR><BR>
<table>
<TR>
<TD bgcolor="red"><font color="white">ODD Pas de pauvreté</font></TD>
<TD></TD>
</TR>
<TR><TD align="right">Nombre d'entrée du corpus, classe pauvrete :</TD><TD align="right">50</TD></TR>
<TR><TD align="right">Nombre d'entrée du corpus, classe "unrelated" :</TD><TD align="right">16</TD></TR>
<TR><TD align="right"><A href="ML/ODD_pauvrete_collection.txt">T&eacute;l&eacute;charger le corpus</A></TD><TD align="right"></TD></TR>
</table>
<table>
<TR>
<TD bgcolor="blue"><font color="white">ODD Eau propre et assainissement</font></TD>
<TD></TD>
</TR>
<TR><TD align="right">Nombre d'entrée du corpus, classe eau :</TD><TD align="right">50</TD></TR>
<TR><TD align="right">Nombre d'entrée du corpus, classe "unrelated" :</TD><TD align="right">16</TD></TR>
<TR><TD align="right"><A href="ML/ODD_eau_collection.txt">T&eacute;l&eacute;charger le corpus</A></TD><TD align="right"></TD></TR>
</table>
<table>
<TR>
<TD bgcolor="yellow"><font color="black">ODD Energie</font></TD>
<TD></TD>
</TR>
<TR><TD align="right">Nombre d'entrée du corpus, classe énergie :</TD><TD align="right">50</TD></TR>
<TR><TD align="right">Nombre d'entrée du corpus, classe "unrelated" :</TD><TD align="right">16</TD></TR>
<TR><TD align="right"><A href="ML/ODD_energie_collection.txt">T&eacute;l&eacute;charger le corpus</A></TD><TD align="right"></TD></TR>
<TR><TD align="right">Matrice de confusion :</TD><TD align="right">?</TD></TR>
<TR><TD align="right">Taux de succès :</TD><TD align="right">?</TD></TR>
</Table>
<BR><BR>
	R&eacute;f&eacute;rence : <a href="https://eric.univ-lyon2.fr/~ricco/tanagra/fichiers/fr_Tanagra_Doc_Classification_Python.pdf" target="_blank">
	Tutoriel de classification de texte avec Python par Ricco Rakotomalala</A>
	<BR><BR>
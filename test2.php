<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Mon super site</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
 
   <body>
 
       <!-- L'en-tête -->
	   
         <?php include("ENTETE.php"); ?>
      
       <!-- Les menus -->
	   
	    <?php include("MENU.php"); ?>
 
       <
 
       <!-- Le corps -->
 
       <div id="corps">
           <h1>Mon super site</h1>
       
           <p>
               Bienvenue sur mon super site !<br />
               Vous allez adorer ici, c'est un site génial qui va parler de... heu... Je cherche encore un peu le thème de mon site :-D
           </p>
       </div>
 
       <!-- Le pied de page -->
        <?php include("FOOTER.php"); ?> 
		
		
		<?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>
<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

foreach($prenoms as $element)
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc...
}
?>
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $element)
{
    echo $element . '<br />';
}
?>

       
   </body>
</html>

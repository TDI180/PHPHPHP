

<?php

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{
	// 1 : On force la conversion en nombre entier
	$_GET['repeter'] = (int) $_GET['repeter'];

	// 2 : Le nombre doit �tre compris entre 1 et 100
	if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) 
	{	
		for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
		{
			echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
		}
	}
}
else
{
   echo 'Il faut renseigner un NOM, un PRENOM et un -----------NOMBRE--------------- de r�p�titions !';
}

?>

<p>Bonjour !</p>

<p>
       Je sais comment tu t'appelles, Tu t'appelles : <?php echo $_POST['prenom']; ?> ! 
</p>

<p>Bonjour !</p>

<p>
       Je sais comment tu t'appelles, Tu t'appelles : <?php echo $_POST['prenom']; ?> ! 
</p>

<p>
      Si tu veux changer de pr�nom,	 
	  <a href="INDEXE.php">cliqueici</a> pour revenir � formulaire.php
</p>
 
 
<p>
      Si tu veux changer de pr�nom,	 
	  <a href="INDEXE.php">cliqueici</a> pour revenir � formulaire.php
</p>

 <p>
       TU AS CHOISI :   <?php echo $_POST['choix']; ?> ! 
</p>
 
<p>
      votre message :    <?php echo $_POST['message']; ?> ! 
 </p>
  
<p>
      votre opinion :    <?php echo $_POST['frites']; ?> ! 
 </p>



<!DOCTYPE html>
<html>
<?php 
require_once("bdd.php");
$tableau = affichage();
var_dump($tableau);
 ?>
<head>
	<title> notre liste d'annonces</title>
</head>


<body>
	<button>
		<div id="annonces" class="bloc">
			<?php foreach ($tableau as $annonce): ?>
				<ul>
					<li>
						<label>id:</label>
						<?php echo $annonce["id"]; ?>
					</li>
					<li>
						<label>titre:</label>
						<?php echo $annonce["titre"]; ?>
					</li>
					<li>
						<label>description:</label>
						<?php echo $annonce["description"]; ?>
					</li>
					<li>
						<label>categorie:</label>
						<?php echo $annonce["categorie"]; ?>
					</li>
					<li>
						<label>pseudo:</label>
						<?php echo $annonce["pseudo"]; ?>
					</li>
					<li>
						<label>prix:</label>
						<?php echo $annonce["prix"]; ?>
					</li>
					<li>
						<label>photo:</label>
						<?php echo $annonce["photo"]; ?>
					</li>
					<li>
						<label>rdv_lat:</label>
						<?php echo $annonce["rdv_lat"]; ?>
					</li>
					<li>
						<label>rdv_lon:</label>
						<?php echo $annonce["rdv_lon"]; ?>
					</li>
					<li>
						<label>date:</label>
						<?php echo $annonce["date"]; ?>
					</li>

				</ul>

			 <?php endforeach; ?>
		
			
		</div> 
	</button>
</body>
</html>
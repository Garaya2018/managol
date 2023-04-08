<?php
require("includes/top.php");
require("includes/db.php");


?>

<?php
require("includes/sidebar.php");

?>

<!-- Content sart -->
<div class="content">
	<?php require("includes/header.php"); ?>
	<div class="card bg-primary p-2 my-4">
		<h3 class="text-center text-white">Ajouter Un Nouveau Cours</h3>
		
	</div>

	<!-- Debut section formulaire -->
	<form class="my-2 p-4" method="post" action="">
		<div class="mb-3">
			<input type="text"name="nom" class="form-control" placeholder="Nom de la matiere">
		</div>
		<div class="mb-3">
			<input type="text"name="classe" class="form-control" placeholder="Classe">
		</div>
		<div class="mb-3">
			<input type="text"name="prix" class="form-control" placeholder="Prix de la matiere">
		</div>
		<div class="mb-3">
			<input type="text"name="heure" class="form-control" placeholder="Nombre d'heure">
		</div>
		<div class="mb-3">
			<input type="date"name="date" class="form-control">
		</div>
		<div class="mb-3">
		<input type="text" name="description" class="form-control" placeholder="Description de la matiere">
		</div>
		<div class="mb-3">
			<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
			
		</div>
		
	</form>
	<!-- Fin section formulaire -->


	<?php require("includes/footer.php"); ?>
	
</div>

<!-- Content End -->

<?php require("includes/foot.php"); ?>

<?php
// insertion des donnees
if(isset($_POST['submit'])) {
	// recuperation des infos fournis
	$nom = $_POST['nom'];
	$classe = $_POST['classe'];
	$prix = $_POST['prix'];
	$heure = $_POST['heure'];
	$date = $_POST['date'];
	$description = $_POST['description'];

	// requete dinsertion
	$requete = "INSERT INTO courses(name, grade, fee, date, hour, description) VALUES('$nom', '$classe', '$prix', '$date', '$heure', '$description')";

	// execution de la requete
	$execute = mysqli_query($connexion, $requete);

	// verification si le requete a reussi
	if($execute) {
		echo "<script>alert('Felicitations, nouveau cours ajoute')</script>";
		echo "<script>window.open('courses.php', '_self')</script>";

	}


}


?>
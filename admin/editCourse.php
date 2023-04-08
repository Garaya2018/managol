<?php
require("includes/top.php");
require("includes/db.php");

// info recuperation


if($_GET['id']) {
     $edit_id = $_GET['id'];

     // selectionner les infos de lelement identifier
     $cours = "SELECT * FROM courses WHERE course_id = '$edit_id' ";
     $execute = mysqli_query($connexion, $cours);
     $selection = mysqli_fetch_array($execute);

     $id_cours = $selection['course_id'];
     $nom = $selection['name'];
     $classe = $selection['grade'];
     $prix = $selection['fee'];
     $date = $selection['date'];
     $heure =$selection['hour'];
}


?>

<?php
require("includes/sidebar.php");

?>

<!-- Content sart -->
<div class="content">
	<?php require("includes/header.php"); ?>
	<div class="card bg-primary p-2 my-4">
		<h3 class="text-center text-white">Modification  Cours</h3>
		
	</div>

	<!-- Debut section formulaire -->
	<form class="my-2 p-4" method="post" action="">
		<div class="mb-3">
			<input type="text"name="nom" class="form-control" value= "<?php echo $nom; ?>">
		</div>
		<div class="mb-3">
			<input type="text"name="classe" class="form-control" value= "<?php echo $classe; ?>">
		</div>
		<div class="mb-3">
			<input type="text"name="prix" class="form-control" value= "<?php echo $prix; ?>">
		</div>
		<div class="mb-3">
			<input type="text"name="heure" class="form-control" value= "<?php echo $heure; ?>">
		</div>
		<div class="mb-3">
			<input type="date"name="date" class="form-control" value= "<?php echo $date; ?>">
		</div>
		
		<div class="mb-3">
			<button type="submit" name="modifier" class="btn btn-primary">MODIFIER</button>
			
		</div>
		
	</form>
	<!-- Fin section formulaire -->


	<?php require("includes/footer.php"); ?>
	
</div>

<!-- Content End -->

<?php require("includes/foot.php"); ?>

<?php
// insertion des donnees
if(isset($_POST['modifier'])) {
	// recuperation des infos fournis
	$nom = $_POST['nom'];
	$classe = $_POST['classe'];
	$prix = $_POST['prix'];
	$heure = $_POST['heure'];
	$date = $_POST['date'];
	$description = $_POST['description'];

	// requete de modification
	$requete = "UPDATE courses 	SET
	name ='$nom',
	grade = '$classe',
	fee = '$prix',
	date ='$date',
	hour ='$heure'

	WHERE course_id = '$edit_id'
	";

	// execution de la requete
	$execute = mysqli_query($connexion, $requete);

	// verification si le requete a reussi
	if($execute) {
		echo "<script>alert('Felicitations, cours modifie avec success')</script>";
		echo "<script>window.open('courses.php', '_self')</script>";

	}


}


?>
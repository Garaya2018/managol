<?php require("includes/top.php"); 
require("includes/db.php");

// Requete de suppression
if (isset($_GET['del'])) {
     // recuperation de l'id de lelement a supprimer
     $id_del = $_GET['del'];

     // requete de suppression de lelement dans la base de donnees
     $requete = "DELETE FROM courses WHERE course_id = '$id_del' ";

     // Execution de la requete de suppression
     $execute = mysqli_query($connexion, $requete);

     // verification de lexecution de la requete
     if($execute) {
          echo "<script>alert('Felicitations, Vous avez supprime un cours')</script>";
          echo "<script>window.open('courses.php', '_self')</script>";
     }
}






?>

  
  <?php require("includes/sidebar.php"); ?>

   <!-- content start -->
     <div class="content">
     	 <?php require("includes/header.php"); ?>

     	 <div class="card bg-primary p-2 my-4">
     	 	<h3 class="text-center text-white"> GESTION DES COURS</h3>
     	 </div>
     	 <hr>
     	 <div class="row my-3">
     	 	<div class="col">
     	 		<button id="btn" class="btn btn-danger">Exporter Vers Excel</button>	
     	 	</div>
     	 	<div class="col">
     	 		<a href="addCourses.php" class="btn btn-primary" style="float: right ";>Ajouter Un Cours</a>
     	 		
     	 	</div>
     	 </div>
     	 <hr>

     	 <!-- Debut section cours -->
     	 <div id="cours">
     	 	<table id="tableauExcel" class="table  table-striped table-hover">
     	 		<thead class="table-dark">
     	 			<tr>
     	 				<th scope="col">N</th>
     	 				<th scope="col">Titre</th>
     	 				<th scope="col">Prix</th>
     	 				<th scope="col">Debut</th>
     	 				<th scope="col">Heure</th>
     	 				<th scope="col">
     	 					<li class="fas fa-edit"></li>
     	 				</th>
     	 				<th scope="col">
     	 					<li class="fas fa-trash"></li>
     	 				</th>
     	 				
     	 			</tr>	
     	 		</thead>

     	 		<tbody>
                         <?php

                         $cours = "SELECT * FROM courses ORDER BY course_id DESC";
                         $execute_courses = mysqli_query($connexion, $cours);

                         $i = 0;
                         while ($total_cours = mysqli_fetch_array($execute_courses)) {
                              // Recuperation des donnees
                              $id_cours = $total_cours['course_id'];
                              $nom = $total_cours['name'];
                                $prix = $total_cours['fee'];
                                 $date = $total_cours['date'];
                                  $heure = $total_cours['hour'];
                                   

                                   $i++;

                         

                         ?>
     	 		<tr>
     	 			<th scope="row"><?php echo $i; ?></th>
     	 			<td><?php echo $nom; ?></td>
     	 			<td><?php echo $prix; ?></td>
     	 			<td><?php echo $date; ?></td>
     	 			<td><?php echo $heure; ?></td>
     	 			<td >
     	 				<a href="editCourse.php?id=<?php echo $id_cours; ?>"
                                   class="text-warning">
     	 					<li class="fas fa-edit"></li>
     	 				</a>
     	 			</td>
     	 			<td >
     	 				<a href="courses.php?del=<?php echo $id_cours; ?>"class="text-danger">
     	 					<li class="fas fa-trash"></li>
     	 				</a>
     	 				
     	 			</td>
     	 		</tr>
     	 		
     	 		
     	 		
     	 		<?php } ?>
     	 		</tbody>
     	 	</table>
     	 	
     	 </div>
     	 <!-- fin section cours -->



     	 <?php require("includes/footer.php"); ?>
     </div>
     <!-- content end -->

     <?php require("includes/foot.php");  ?>


<script>

$(document).ready( function () {
    $('#tableauExcel').DataTable();
} );          

</script>


<script>

$("#btn").click(function() {
      $('#tableauExcel').table2excel({
          name: "List Des Cours",
          filename:"cours.xls"
      })
});        

</script>



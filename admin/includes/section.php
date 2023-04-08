<?php
// Recuperation des informations de la BDD Mysql
// Recuperation des courses

$cours = "SELECT * FROM COURSES";
$execute_cours = mysqli_query($connexion, $cours);
$nombre_cours = mysqli_num_rows($execute_cours);


// Recuperation des donnees de la Classes
$classes = "SELECT * FROM CLASSE";
$execute_classes = mysqli_query($connexion, $classes);
$nombre_classes = mysqli_num_rows($execute_classes);

// Recuperation des donnees des eleves
$eleves = "SELECT * FROM student";
$execute_eleves = mysqli_query($connexion, $eleves);
$nombre_eleves = mysqli_num_rows($execute_eleves);

// Recuperation des donnees de la gallerie
$galeries = "SELECT * FROM gallery";
$execute_galeries = mysqli_query($connexion, $galeries);
$nombre_galeries = mysqli_num_rows($execute_galeries);

// Recuperation des donnees des professeurs
$professeur = "SELECT * FROM teacher";
$execute_professeur = mysqli_query($connexion, $professeur);
$nombre_professeur = mysqli_num_rows($execute_professeur);

// Recuperation des donnees des notes
$marques = "SELECT * FROM mark";
$execute_marques = mysqli_query($connexion, $marques);
$nombre_marques = mysqli_num_rows($execute_marques);

// Recuperation des donnees de la scolarite
$scolarites = "SELECT * FROM fee";
$execute_scolarites = mysqli_query($connexion, $scolarites);
$nombre_scolarites = mysqli_num_rows($execute_scolarites);


// Recuperation des donnees des utilisateurs
$users = "SELECT * FROM users";
$execute_users = mysqli_query($connexion, $users);
$nombre_users = mysqli_num_rows($execute_users);






?>





<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <a href="courses.php"><i class="fab fa-discourse fa-3x text-primary"></i></a>
                <div class="ms-3">
                    <h3 class="mb-2">Cours</h3>
                    <h4 class="mb-0 text-center">
                         <?php echo $nombre_cours; ?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <a href=""><i class="fas fa-university fa-3x text-primary"></i></a>
                <div class="ms-3">
                    <h3 class="mb-2">Classes</h3>
                    <h4 class="mb-0 text-center">
                        <?php echo $nombre_classes ?>
                    </h4>
                   
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
               <a href=""> <i class="fas fa-user-graduate fa-3x text-primary"></i></a>
                <div class="ms-3">
                    <h4 class="mb-2">Eleves</h4>
                    <h4 class="mb-0 text-center">
                         <?php echo $nombre_eleves ?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <a href="gallery.php"><i class="fas fa-images fa-3x text-primary"></i></a>
                <div class="ms-3">
                    <h4 class="mb-2">Gallerie</h4>
                    <h4 class="mb-0 text-center">
                       <?php echo $nombre_galeries ?>  
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <a href=""><i class="fad fa-chalkboard-teacher fa-3x text-primary"></i></a>
                <div class="ms-3">
                    <h4 class="mb-2">Professeurs</h4>
                    <h4 class="mb-0 text-center">
                        <?php echo $nombre_professeur ?>
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <a href=""><i class="fas fa-pen-square fa-3x text-primary"></i></a>
                <div class="ms-3">
                    <h4 class="mb-2">Notes</h4>
                    <h4 class="mb-0 text-center">
                        <?php echo $nombre_professeur ?>
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <a href=""><i class="fas fa-sack-dollar fa-3x text-primary"></i></a>
                <div class="ms-3">
                    <h4 class="mb-2">Scolarite</h4>
                    <h4 class="mb-0 text-center">
                         <?php echo $nombre_scolarites ?>
                    </h4>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <a href=""><i class="fas fa-users fa-3x text-primary"></i></a>
                <div class="ms-3">
                    <h3 class="mb-2">Utilisateurs</h3>
                    <h4 class="mb-0 text-center">
                        <?php echo $nombre_users ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->
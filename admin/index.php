

<?php 
// Demarrer la session
ob_start();
session_start();

// si la variable session user_name nexiste pas
if(!isset( $_SESSION['user_name'])) {
    // rediriger vers la page de CONNEXION
    header('Location: signin.php');

}



require("includes/top.php"); 
require("includes/db.php");
?>

<?php require("includes/sidebar.php"); ?>


        


        <!-- Content Start -->
        <div class="content">
          <?php require("includes/header.php"); ?>


            <?php require("includes/section.php"); ?>


           


            


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row ">
                    <
                    <div class="col">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="bg-primary card p-2">
                                <h4 class="text-center text-white">CALENDRIER</h4>
                                
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="bg-light rounded h-100 p-4">
                            <div class=" card bg-primary p-2">
                                <h4 class="text-center text-white">CONNEXION</h4>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Addresse Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mot De Passe</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Se Souvenir De Moi</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Se Connecter</button>
                            </form>
                        </div>
                    
                </div>
            </div>
            <!-- Widgets End -->


            <?php require("includes/footer.php"); ?>
        </div>
        <!-- Content End -->


 <?php require("includes/foot.php"); ?>
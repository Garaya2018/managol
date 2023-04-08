<?php 
require("includes/top.php"); 


ob_start();
session_start();
require("includes/db.php");

if(isset($_POST['submit'])) {
    // recuperation des PDF_set_info_subject()
    $username = $_POST['username'];
    $password = $_POST['password'];
// requete a la base de donnee
    $requete = "SELECT * FROM users where user_name = '$username' AND password = '$password' ";
    // execution de la requete
    $execute = mysqli_query($connexion, $requete);
    // verification
    $verifier = mysqli_num_rows($execute);
    if($verifier == 1) {
        $_SESSION['user_name'] = $username;
        echo "<script>window.open('index.php', '_self')</script>";
    }
    else {
        echo "<script>alert('Email ou mot de passe incorrect.')</script>";
    }
}




?>





        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                   <form method="post"> 
                   <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                       <div class="d-flex align-items-center justify-content-between mb-3">
                           <a href="index.php">
                               <h3 class="text-primary">MANAGOL</h3>
                           </a>
                           <h3>Connexion</h3>
                       </div>
                       <div class="mb-3">
                           <label class="label-control">Nom d'utilisateur:</label>
                           <input class="form-control" placeholder="Saisir votre nom d'utilisateur" name="username">
                       </div>
                       <div class="mb-4">
                           <label class="label-control">Mot de passe</label>
                           <input type="password" class="form-control" placeholder="Saisir votre mot de passe" name="password">
                       </div>
                       <div class="d-flex align-items-center justify-content-between mb-4">
                           
                           <a href="#">Mot de passe oublie?</a>
                       </div>
                       <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Se connecter?</button>
                       <p class="text-center mb-0">Avez vous un compte? <a href="signup.php">S'inscrire</a></p> 

                   </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <?php require("includes/foot.php"); ?>
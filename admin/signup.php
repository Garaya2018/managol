<?php require("includes/top.php"); ?>


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary">MANAGOL</h3>
                            </a>
                            <h4>Inscription</h4>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" i placeholder="Nom Utilisateur">
                            
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control"  placeholder="Addresse Email">
                            
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" placeholder="Mot de passe">
                            
                        </div>
                        <div class="mb-4">
                            <select class="form-select">
                                <option>Selectionner un role</option>
                                <option>Administrateur</option>
                                <option>Comptable</option>
                                <option>Professeur</option>
                                <option>Directeur</option>
                                <option>Eleves</option>
                                <option>Parent Eleve</option>
                                
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">S'inscrire</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

<?php require("includes/foot.php");  ?>
<?php require("includes/top.php"); ?>

  
  <?php require("includes/sidebar.php"); ?>

   <!-- content start -->
     <div class="content">
          <?php require("includes/header.php"); ?>
          <div class="card bg-primary p-2 my-4">
               <h3 class="text-center text-white"> GESTION DES IMAGES</h3>
          </div>
               <hr>
               <div class="row my-3">
                    <div class="col">
                         <button class="btn btn-danger">Exporter Vers Excel</button> 
                    </div>
                    <div class="col">
                         <button class="btn btn-primary" style="float: right">Ajouter Un Cours</button>
                         
                    </div>
               </div>
               <hr>


               <!-- Debut section gestion des images -->
               <div id="cours">
                    <table class="table table-striped table-hover">
                         <thead class="table-dark">
                              <tr>
                                   <th scope="col">N</th>
                                   <th scope="col">Titre</th>
                                   <th scope="col">Image</th>
                                   <th scope="col">Date</th>
                                   <th scope="col">
                                        <i class="fas fa-edit"></i>
                                   </th>
                                    <th scope="col">
                                        <i class="fas fa-trash"></i>
                                         
                                    </th>
                              </tr>
                              
                         </thead>

                         <tbody>
                              <tr>
                                   <th class="scope">1</th>
                                   <td>Image Demo</td>
                                   <td>
                                        <img src="../images/banner1.jpg" style="width: 180px;">
                                   </td>
                                   <td>20/02/2023</td>
                                   <td >
                                        <a href=""class="text-warning"><i class="fas fa-edit"></i></a>
                                   </td>
                                   <td >
                                        <a href=""class="text-danger"><i class="fas fa-trash"></i></a>
                                   </td>
                              </tr>
                              <tr>
                                   <th class="scope">2</th>
                                   <td>Image Demo</td>
                                   <td>
                                        <img src="../images/banner2.jpg" style="width: 180px;">
                                   </td>
                                   <td>20/02/2023</td>
                                   <td >
                                        <a href=""class="text-warning"><i class="fas fa-edit"></i></a>    
                                   </td>
                                   <td >
                                        <a href=""class="text-danger"><i class="fas fa-trash"></i></a>
                                   </td>
                              </tr>
                              <tr>
                                   <th class="scope">3</th>
                                   <td>Image Demo</td>
                                   <td>
                                        <img src="../images/banner3.jpg" style="width: 180px;">
                                   </td>
                                   <td>20/02/2023</td>
                                   <td >
                                        <a href=""class="text-warning"><i class="fas fa-edit"></i></a>
                                   </td>
                                   <td >
                                        <a href=""class="text-danger"><i class="fas fa-trash"></i></a>
                                   </td>
                              </tr>
                              <tr>
                                   <th class="scope">4</th>
                                   <td>Image Demo</td>
                                   <td>
                                        <img src="../images/logo.png" style="width: 180px;">
                                   </td>
                                   <td>20/01/2022</td>
                                   <td >
                                        <a href=""class="text-warning"><i class="fas fa-edit"></i></a>
                                   </td>
                                   <td >
                                        <a href=""class="text-danger"><i class="fas fa-trash"></i></a>
                                   </td>
                              </tr>
                         </tbody>
                         
                    </table>
                    
               </div>
               <!-- Fin section gestion des images -->
          





          <?php require("includes/footer.php"); ?>
          



     </div>
     <!-- content end -->

     <?php require("includes/foot.php");  ?>
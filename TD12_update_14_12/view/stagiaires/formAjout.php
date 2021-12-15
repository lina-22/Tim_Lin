 <!-- 14/12/21 add this page -->

 <?php
 $title="Formulaire Stagiaire";
 ob_start();
 ?>

 <div class="container">
    
     <h1 class="text-center" >Formulaire Stagiaire</h1>

     <form action="?path=stagiaire&action=traitementAjout" method="post">
      
     <div class="col-12 col-md-8 col-lg-6 mx-auto">

         <div class="row my-2">
             <label for="">Prenom</label>
             <input class="form-control" name="prenom" type="text" required minlength="2">
            </div>
         <div class="row my-2">
             <label for="">Nom</label>
             <input class="form-control" name="nom" type="text" required minlength="2">
            </div>
         <div class="row my-2">
             <label for="">Email</label>
             <input class="form-control" name="email" type="text" required minlength="2">
            </div>

            <div>
                <button class="btn btn-primary w-100">Send</button>
            </div>

            </div>

     </form>

 </div>

 <?php 
 $content=ob_get_clean();
 require("view/template.php");
 ?>
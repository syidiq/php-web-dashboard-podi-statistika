<?php
session_start();
if ( isset($_SESSION["login"])) {
  header("Location: master.php");
  exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>S1 Statistika UHO</title>
  </head>
  <body>

<div class="container mt-2">

<!-- Image and text -->
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">
    <img src="img/uho.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Program Studi S1 Statistika UHO
  </a>
    <form class="form-inline">
    <a class="btn btn-outline-primary my-2 my-sm-0" href="singin.php" role="button">Login</a>
    </form>
</nav>

<br>


  <div class="row">
    <div class="col-sm-3">

        <div class="list-group">
            <a class="list-group-item list-group-item-action list-group-item-info"><strong>Daftar Koesioner</strong></a>
            <a href="index.php" class="list-group-item list-group-item-action">Home</a>
            <a href="?page=Perkuliahan" class="list-group-item list-group-item-action">Kuesioner Perkuliahan</a>
            <a href="?page=VisiMisi" class="list-group-item list-group-item-action">Kuesioner Visi Misi</a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Alumni</a>
            
          </div>
        </div>


<br>
    <div class="col-sm-9">
      <div class="card">
                        <div class="card-header">
                           <strong> <?= 'Kuesioner '. @$_GET['page'] ?> </strong>
                        </div>

                          <div class="card-body">

                         <?php
                        $page = @$_GET['page'];
                          
                          if ($page == "Perkuliahan") {
                                    include "Page/Perkuliahan/perkuliahan.php";
                                }elseif ($page == "VisiMisi") {
                                    include "Page/VisiMisi/VisiMisi.php";
                                }else{
                                    include "home.php";
                                }
                        ?>
  
  
  
                 <!-- /. ROW  -->
                 <hr />
                </div>
                </div>
                </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
      

        </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- Core plugin JavaScript-->


  </body>
</html>



<!--<div style=position:absolute;top:0;bottom:0;left:0;right:0;background-color:black;font-size:25px;color:white;text-align:center;> Website dalam perbaikan tunggu beberapa menit untuk membuka kembali ... <h1>[ Syidiq ]</h1> </div>

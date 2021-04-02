<?php 
session_start();
if ( !isset($_SESSION["login"])) {
  header("Location: singin.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Kuesioner.S1.Statistika</title>

    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/popper.min.js"></script>
  </body>
</html>


<div class="container mt-2">

<!-- Image and text -->
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">
    <img src="img/uho.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Program Studi S1 Statistika UHO
  </a>
    <form class="form-inline">
    <a class="btn btn-outline-primary my-2 my-sm-0" href="logout.php" role="button">Logout</a>
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
<br>
        <div class="list-group">
              <a class="list-group-item list-group-item-action list-group-item-info"><strong> Tabulasi & Grafis Data </strong></a>
              <a href="?page=Hasil_Perkuliahan" class="list-group-item list-group-item-action">Kuesioner Perkuliahan</a>
              <a href="?page=Hasil_VisiMisi" class="list-group-item list-group-item-action">Kuesioner Visi Misi</a>
              <a href="?page=Grafik_Ts" class="list-group-item list-group-item-action">Grafik time series</a>
        </div>
      </div>

  

    <div class="col-sm-9">
      <div class="card">
                        <div class="card-header">
                           <strong> <?= 'Kuesioner '. @$_GET['page'] ?> </strong>
                        </div>

                          <div class="card-body">

                         <?php
                        $page = @$_GET['page'];
                        $mc = @$_GET["thn"];
                          
                          if ($page == "Perkuliahan") {
                                    include "Page/Perkuliahan/perkuliahan.php";
                                }elseif ($page == "VisiMisi") {
                                    include "Page/VisiMisi/VisiMisi.php";
                                }elseif ($page == "Hasil_Perkuliahan" or $mc == true) {
                                    include "Page/Perkuliahan/hasilperkuliahan.php";
                                }elseif ($page == "Hasil_VisiMisi") {
                                    include "Page/VisiMisi/hasilvisimisi.php";
                                }elseif ($page == "Grafik_Ts") {
                                    include "Page/gf/graf.php";
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
   


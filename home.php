<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<ul class="list-group">
  <li class="list-group-item list-group-item-success"><h1> <strong>WELCOME</strong> </h1></li>
  <li class="list-group-item list-group-item-info"><h4>Kuesioner Program Studi S1 Statistika</h4></li>
</ul>
 
<?php require 'function/function.php'; ?>

<br>
<div class="row">
<div class="col-sm-5">


<div class="list-group">
  <a href="#" class="list-group-item active">
    <strong><h4>DAFTAR T.A. TERISI</h4></strong>
  </a>

 	<a class="list-group-item d-flex justify-content-between align-items-center">
	20151
	<span class="badge badge-danger"> <?= akk('20151') ?> Terisi</span>
	<a href="?page=20151" class="btn btn-primary badge badge-primary "> Detail </a>
	</a>

	
 	<a class="list-group-item d-flex justify-content-between align-items-center">
	20152
	<span class="badge badge-danger"> <?= akk('20152') ?> Terisi</span>
	<a href="?page=20152" class="btn btn-primary badge badge-primary " > Detail </a>
	</a>

 	<a class="list-group-item d-flex justify-content-between align-items-center">
	20161
	<span class="badge badge-danger"> <?= akk('20161') ?> Terisi</span>
	<a href="?page=20161" class="btn btn-primary badge badge-primary "> Detail </a>
	</a>

	
 	<a class="list-group-item d-flex justify-content-between align-items-center">
	20162
	<span class="badge badge-danger"> <?= akk('20162') ?> Terisi</span>
	<a href="?page=20162" class="btn btn-primary badge badge-primary " > Detail </a>
	</a>

 	<a class="list-group-item d-flex justify-content-between align-items-center">
	20171
	<span class="badge badge-danger"> <?= akk('20171') ?> Terisi</span>
	<a href="?page=20171" class="btn btn-primary badge badge-primary "> Detail </a>
	</a>

	
 	<a class="list-group-item d-flex justify-content-between align-items-center">
	20172
	<span class="badge badge-danger"> <?= akk('20172') ?> Terisi</span>
	<a href="?page=20172" class="btn btn-primary badge badge-primary " > Detail </a>
	</a>

 	<a class="list-group-item d-flex justify-content-between align-items-center">
	20181
	<span class="badge badge-danger"> <?= akk('20181') ?> Terisi</span>
	<a href="?page=20181" class="btn btn-primary badge badge-primary "> Detail </a>
	</a>

	
 	<a class="list-group-item d-flex justify-content-between align-items-center">
	20182
	<span class="badge badge-danger"> <?= akk('20182') ?> Terisi</span>
	<a href="?page=20182" class="btn btn-primary badge badge-primary " > Detail </a>
	</a>

</div>




</div>

<div class="col-sm-7">

                        <?php
                        $page = @$_GET['page'];
                          
                          		if ($page == "20151") {
                                    include "detail.php";
                                }elseif ($page == "20152") {
                                    include "detail.php";
                                }elseif ($page == "20161") {
                                    include "detail.php";
                                }elseif ($page == "20162") {
                                    include "detail.php";
                                }elseif ($page == "20171") {
                                    include "detail.php";
                                }elseif ($page == "20172") {
                                    include "detail.php";
                                }elseif ($page == "20181") {
                                    include "detail.php";
                                }elseif ($page == "20182") {
                                    include "detail.php";
                                }else{
                                    
                                }
                        ?>

<img src="gambar/aaa.jpg" class="img-fluid" alt="Responsive image">	
</div>
</div>    


</body>
</html>

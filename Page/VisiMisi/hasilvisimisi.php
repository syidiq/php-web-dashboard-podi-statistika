<?php 
if ( !isset($_SESSION["login"])) {
  header("Location: singin.php");
  exit;
}

require 'function/function.php';
require 'var.php';
?>

<div class="text-center">
<h2> Hasil Analisis Data Survey Index Pemahaman Visi, Misi & Tujuan Program Studi S1 Statistika</h2>
<br>
<hr/>
</div>

	<?php
	$jum_d = jum($stat['0']);
	?>
 	<div class="alert alert-info" role="alert"> Jumlah Dosen yang Mengisi : <?= $jum_d ?> </div>

<?php for ($d= 0; $d < 5 ; $d++) { ?>

<div class="row">
    <div class="col-sm-12">
	<?php
	$j1 = summisi($paham[$d],'1',$stat['0']);
	$j2 = summisi($paham[$d],'2',$stat['0']);

	?>

	<div id="data <?= $d ?>">
			<script src="highcharts.js"></script>
			<script src="exporting.js"></script>
			<script src="export-data.js"></script>
			<script type="text/javascript">
								Highcharts.chart('data <?= $d ?>', {
				    chart: {
				        plotBackgroundColor: null,
				        plotBorderWidth: null,
				        plotShadow: false,
				        type: 'pie'
				    },
				    title: {
				        text: ' <?= $ct[$d] ?> <br> <br> Index Pemahaman <?= $stat['0'] ?> Terhadap Pernyataan diatas'
				    },
				    tooltip: {
				        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				    },
				    plotOptions: {
				        pie: {
				            allowPointSelect: true,
				            cursor: 'pointer',
				            dataLabels: {
				                enabled: true,
				                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
				                style: {
				                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
				                }
				            }
				        }
				    },
				    series: [{
				        name: 'Brands',
				        colorByPoint: true,
				        data: [{
				            name: 'Benar',
				            y: <?= $j1 ?>,
				            sliced: true,
				            selected: true
				        }, {
				            name: 'Salah',
				            y: <?= $j2 ?>
				        }]
				    }]
				});
			</script>
		</div>


	</div>
</div>
<br>
<hr />
<?php } ?>

<hr />
<br>
<hr />

	<?php
	$jum_a = jum($stat['1']);
	?>
	<div class="alert alert-info" role="alert"> Jumlah Mahasiswa yang Mengisi : <?= $jum_a ?> </div>
 	

<?php for ($d= 0; $d < 5 ; $d++) { ?>

<div class="row">
    <div class="col-sm-12">
	<?php
	$j1 = summisi($paham[$d],'1',$stat['1']);
	$j2 = summisi($paham[$d],'2',$stat['1']);

	?>

	<div id="Adata <?= $d ?>">
			<script src="js/highcharts.js"></script>
			<script src="js/exporting.js"></script>
			<script src="js/export-data.js"></script>
			<script type="text/javascript">
								Highcharts.chart('Adata <?= $d ?>', {
				    chart: {
				        plotBackgroundColor: null,
				        plotBorderWidth: null,
				        plotShadow: false,
				        type: 'pie'
				    },
				    title: {
				        text: '<?= $ct[$d] ?> <br> <br> Index Pemahaman <?= $stat['1'] ?> Terhadap Pernyataan diatas'
				    },
				    tooltip: {
				        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				    },
				    plotOptions: {
				        pie: {
				            allowPointSelect: true,
				            cursor: 'pointer',
				            dataLabels: {
				                enabled: true,
				                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
				                style: {
				                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
				                }
				            }
				        }
				    },
				    series: [{
				        name: 'Brands',
				        colorByPoint: true,
				        data: [{
				            name: 'Benar',
				            y: <?= $j1 ?>,
				            sliced: true,
				            selected: true
				        }, {
				            name: 'Salah',
				            y: <?= $j2 ?>
				        }]
				    }]
				});
			</script>
		</div>


	</div>
</div>
<br>
<hr />
<?php } ?>



<?php

$data = query("SELECT * FROM pemahaman ORDER BY code");
?>


<br>
<br>
<hr/>
<div class="panel panel-warning">
                        <div class="panel-heading">
                           <i class="glyphicon glyphicon-download-alt"></i>  Data dari garfik diatas
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Status</th>
                                            <th>Code</th>
                                            <th>p1</th>
                                            <th>p2</th>
                                            <th>p3</th>
                                            <th>p4</th>
                                            <th>p5</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n = 1; ?>
                                    <?php foreach ($data as $dat ) : ?>
                                    	<tr>
                                    	<td> <?= $n; ?> </td>
                                    	<td> <?= $dat['status']; ?> </td>
                                    	<td> <?= $dat['code']; ?> </td>
                                    	<td> <?= $dat['p1']; ?> </td>
                                    	<td> <?= $dat['p2']; ?> </td>
                                    	<td> <?= $dat['p3']; ?> </td>
                                    	<td> <?= $dat['p4']; ?> </td>
                                    	<td> <?= $dat['p5']; ?> </td>

                                    	</tr>
                                    <?php $n++  ?>
									<?php endforeach; ?>
									</tbody>

                                </table>
                            </div>
                        </div>
</div>
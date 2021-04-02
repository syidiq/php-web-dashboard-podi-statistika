<?php
if ( !isset($_SESSION["login"])) {
  header("Location: singin.php");
  exit;
}


require 'function/function.php';
require 'variabel.php';
?>

<div class="text-center">
<h2> Hasil Analisis Data Survey Index Proses Perkuliah Program Studi S1 Statistika</h2>
<br>
<hr/>
</div>

<?php 
if (isset($_POST["open"])) {
	$matkul = $_POST["matkul"];
	$tahun = $_POST["tahun"];
	$ni = '1'; 
}else {$ni='0';}
?>

<!-- Dropdow -->
<?php $mc ='0' ?>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilih Tahun Akademik
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="?thn=20151">20151</a>
    <a class="dropdown-item" href="?thn=20152">20152</a>
    <a class="dropdown-item" href="?thn=20161">20161</a>
    <a class="dropdown-item" href="?thn=20162">20162</a>
    <a class="dropdown-item" href="?thn=20171">20171</a>
    <a class="dropdown-item" href="?thn=20172">20172</a>
    <a class="dropdown-item" href="?thn=20181">20181</a>
    <a class="dropdown-item" href="?thn=20182">20182</a>
  </div>
</div>

<?php $mc = @$_GET["thn"]; 
						if ($mc == true) { 
							; ?>

<form class="form-inline">
  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="T.A. <?= $mc ?>">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    										<div class="form-group">
                                            <label for="aa" class="col-sm-3 col-form-label"> Mata Kuliah </label>
                                            <div class="col-sm-6">
                                            <select class="form-control" name="matkul" id="aa" required="">
                                            	<option value=""> - Pilih Mata Kuliah - </option>
                                            
                                            </select>
                                            </div>
                                            </div>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>

<?php }else{
              } ?>

<!-- Dropdow -->

<div class="row">
	<div class="col-sm-12">
	<form class="form-inline" method="post" >
                                        <div class="form-group">
                                            <label for="aa" class="col-sm-3 col-form-label"> Mata Kuliah </label>
                                            <div class="col-sm-6">
                                            <select class="form-control" name="matkul" id="aa">
                                            	<option> - Pilih Mata Kuliah - </option>
<option> = SEMESTER 1 = </option>
<option> Agama </option>
<option> Pancasila </option>
<option> Bahasa Indonesia </option>
<option> Bahasa Inggris </option>
<option> Teknologi Informasi </option>
<option> Wawasan Kemaritiman </option>
<option> Kalkulus 1 </option>
<option> Fisika Dasar </option>
<option> Kimia Dasar </option>
<option> = SEMESTER 2 = </option>
<option> Kewarganegaraan </option>
<option> Biologi Dasar </option>
<option> Pengetahuan Lingkungan </option>
<option> Kalkulus 2 </option>
<option> Aljabar Matriks/Aljabar Linear Elementer </option>
<option> Metode Statistika 1 </option>
<option> Algoritma dan Pemrograman Komputer </option>
<option> Bahasa Inggeris Sains </option>
<option> = SEMESTER 3 = </option>
<option> Filsafat saintek </option>
<option> Paket Program Statistika </option>
<option> Kalkulus Multivariat </option>
<option> Metode Statistika 2 </option>
<option> Riset Operasi </option>
<option> Analisis Regresi </option>
<option> Struktur  Data </option>
<option> Pengantar Logika Matematika </option>
<option> Sistim Informasi Manajemen </option>
<option> Analisis Numerik </option>
<option> Pengantar Ilmu Ekonomi </option>
<option> = SEMESTER 4 = </option>
<option> Teori Probabilitas </option>
<option> Teknik Sampling dan Survey </option>
<option> Rancangan Percobaan </option>
<option> Komputasi Statistika 1 </option>
<option> Analisis Data Eksplorasi </option>
<option> Basis Data </option>
<option> Teknik Demografi Statistika </option>
<option> Kalkulus Multivariat Lanjut </option>
<option> Statistika ofisial </option>
<option> Program Linear </option>
<option> Biostatistika </option>
<option> = SEMESTER 5 = </option>
<option> Statistika Matematika 1 </option>
<option> Analisis Deret Waktu </option>
<option> Statistika Nonparametrik </option>
<option> Analisis Perancangan Survei </option>
<option> Komputasi Statistika 2 </option>
<option> Ekonometrika </option>
<option> Statistika Epidemiologi dan Klinis </option>
<option> Pemrograman Big Data </option>
<option> Pengantar Teori Keputusan </option>
<option> Proses Stokastik </option>
<option> Aktuaria </option>
<option> Kecerdasan buatan </option>
<option> Metode Optimisasi </option>
<option> = SEMESTER 6 = </option>
<option> Statistika Matematika II </option>
<option> Analisis Data Multivariate </option>
<option> Analisa Data Kategorik </option>
<option> Statistika Pengawasan Kualitas </option>
<option> Pengantar model linear </option>
<option> Teknik Data Mining </option>
<option> Psikometrika </option>
<option> Statistika spasial </option>
<option> Statistika Bayes </option>
<option> Riset Pemasaran dan Manajemen Risiko </option>
<option> Pengolahan Citra Digital </option>
<option> Metode Permukaan Respon </option>
<option> = SEMESTER 7 = </option>
<option> Topik Khusus </option>
<option> Kuliah Kerja Profesi </option>
<option> Metodologi Penelitian </option>
<option> Analisa Survival </option>
<option> Pengantar Model Persamaan Struktural </option>
<option> = SEMESTER 8 = </option>
<option> KKN </option>
<option> Skripsi </option>

                                            </select>
                                        </div>
                                        </div>
                                        <div> 
                                        	<br>
                                        	<hr /> </div>
<div class="form-group">
<label for="bb" class="col-sm-4 col-form-label">Tahun Semester</label>
	<div class="col-sm-5">
	<select class="form-control" name="tahun" id="bb">
		<option>--PILIH TAHUN AKADEMIK--</option>
		<option>20152</option>
		<option>20161</option>
		<option>20162</option>
		<option>20171</option>
		<option>20172</option>
		<option>20181</option>
		<option>20182</option>
		<option>20191</option>
		<option>20192</option>
	</select>
</div>
</div>

  		<button type="submit" name="open" class="btn btn-info"> <i class="glyphicon glyphicon-search" ></i>  Buka Grafik </button>
	</form>
	</div>
</div>

<br>
<hr />
<hr />

<?php if ($ni == '1') { ?>

<div class="text-center">
<h3> Index Proses Perkuliah Mata Kuliah  <strong><?= $matkul ?></strong>  Pada Tahun Akademik <strong><?= $tahun ?></strong> </h3>
<br>
<hr/>
</div>


<?php for ($i= 0; $i < 10 ; $i++) { ?>

<div class="row">
    <div class="col-sm-12">
	<?php
	$j1 = sum($A[$i],'1',$matkul,$tahun);
	$j2 = sum($A[$i],'2',$matkul,$tahun);
	$j3 = sum($A[$i],'3',$matkul,$tahun);
	$j4 = sum($A[$i],'4',$matkul,$tahun);

	?>

	<div id="data <?= $i ?>">
			<script src="highcharts.js"></script>
			<script src="exporting.js"></script>
			<script src="export-data.js"></script>
			<script type="text/javascript">
								Highcharts.chart('data <?= $i ?>', {
				    chart: {
				        plotBackgroundColor: null,
				        plotBorderWidth: null,
				        plotShadow: false,
				        type: 'pie'
				    },
				    title: {
				        text: '<?= $pert[$i] ?>'
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
				            name: '<?= $jawab[$i][0] ?>',
				            y: <?= $j1 ?>,
				            sliced: true,
				            selected: true
				        }, {
				            name: '<?= $jawab[$i][1] ?>',
				            y: <?= $j2 ?>
				        }, {
				            name: '<?= $jawab[$i][2] ?>',
				            y: <?= $j3 ?>
				        }, {
				            name: '<?= $jawab[$i][3] ?>',
				            y: <?= $j4 ?>
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

$data = query("SELECT * FROM perkuliahan WHERE matkul='$matkul' AND tahun='$tahun'");
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
                                            <th>Nim</th>
                                            <th>Mata Kuliah</th>
                                            <th>Tahun Semester</th>
                                            <th>Per.1</th>
                                            <th>Per.2</th>
                                            <th>Per.3</th>
                                            <th>Per.4</th>
                                            <th>Per.5</th>
                                            <th>Per.6</th>
                                            <th>Per.7</th>
                                            <th>Per.8</th>
                                            <th>Per.9</th>
                                            <th>Per.11</th>
                                            <th>Ket.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n = 1; ?>
                                    <?php foreach ($data as $dat ) : ?>
                                    	<tr>
                                    	<td> <?= $n; ?> </td>
                                    	<td> <?= $dat['nim']; ?> </td>
                                    	<td> <?= $dat['matkul']; ?> </td>
                                    	<td> <?= $dat['tahun']; ?> </td>
                                    	<td> <?= $dat['A1']; ?> </td>
                                    	<td> <?= $dat['A2']; ?> </td>
                                    	<td> <?= $dat['A3']; ?> </td>
                                    	<td> <?= $dat['A4']; ?> </td>
                                    	<td> <?= $dat['A5']; ?> </td>
                                    	<td> <?= $dat['A6']; ?> </td>
                                    	<td> <?= $dat['A7']; ?> </td>
                                    	<td> <?= $dat['A8']; ?> </td>
                                    	<td> <?= $dat['A9']; ?> </td>
                                    	<td> <?= $dat['A10']; ?> </td>
                                    	<td> Sudah Terisi </td>

                                    	</tr>
                                    <?php $n++  ?>
									<?php endforeach; ?>
									</tbody>

                                </table>
                            </div>
                        </div>
</div>
<?php } ?>
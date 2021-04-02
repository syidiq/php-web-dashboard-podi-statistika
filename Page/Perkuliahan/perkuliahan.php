<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php 
//require 'function/function.php';  
//$mahasiswa =query("SELECT * FROM perkuliahan");
?>



<?php 
if (isset($_POST["submit2"])) {
	$nim = $_POST["nim"];
	$nim = strtoupper($nim);
	$ni = '1'; 
}else {$ni='0';}
 
?>



<?php 
require 'function/function.php';
if ( isset($_POST["save"])) {

	if(tambah($_POST) > 0 ) { ?>
		
		<div class="alert alert-info alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>Berhasil!</strong> data anda telah terinput.

		</div>


<?php	
	
	} else { ?>
		<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>Gagal!</strong> Data anda tidak terinput,terjadi kesalahan penginputan.
		</div>
<?php
	}
	$ni = '1';
	$nim = $_POST["nim_A"];
}
?>

<?php if ($ni == '0') { ?>
<body>
<div class="row">
<div class="col-sm-12">	
<!-- sdsd -->
<form method="post" class="form-inline" >
  <div class="form-group mb-2">
    <input  type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Masukan NIM">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input class="form-control" type="text" name="nim" id="nim" placeholder="F1A215000" required>
  </div>
  <button type="submit" name="submit2" class="btn btn-primary mb-2">Buka Kuesione</button>
</form>
</div>
</div>
<!-- sdsd -->

	


<?php }elseif ($ni == '1') { ?>
<form method="post" class="form-inline" >
<button href="?page=Perkuliahan" class="btn btn-danger mb-2"><i class="glyphicon glyphicon-repeat"></i> Ganti NIM</button>
</form>

<form method="post" >
<!-- sdsd -->
<div class="row  mb-2" >
<div class="col-sm-2">
  <div class="form-group mb-2">
    <input  type="text" readonly class="form-control-plaintext" id="staticEmail2" value="NIM">
  </div>
</div>
  <div class="col-sm-4">
  <div class="form-group mb-2">
    <input class="form-control" type="text" name="nim_A" id="nim_A" value="<?= $nim ?>" readonly>
  </div>
</div>
</div>
<!-- sdsd -->



<div class="jumbotron">
<div class="row">

	<div class="col-sm-7">

                                        <div class="form-group">
                                            <label>Mata Kuliah</label>
                                            <select class="form-control" name="matkul" required>
<option value="" selected> Pilih Mata Kuliah ... </option>
<option value=""> = SEMESTER 1 =.......... </option>
<option> Agama </option> 
<option> Pancasila </option>
<option> Bahasa Indonesia </option>
<option> Bahasa Inggris </option>
<option> Teknologi Informasi </option>
<option> Wawasan Kemaritiman </option>
<option> Kalkulus 1 </option>
<option> Fisika Dasar </option>
<option> Kimia Dasar </option>
<option value=""> = SEMESTER 2 =.......... </option>
<option> Kewarganegaraan </option>
<option> Biologi Dasar </option>
<option> Pengetahuan Lingkungan </option>
<option> Kalkulus 2 </option>
<option> Aljabar Matriks/Aljabar Linear Elementer </option>
<option> Metode Statistika 1 </option>
<option> Algoritma dan Pemrograman Komputer </option>
<option> Bahasa Inggeris Sains </option>
<option value=""> = SEMESTER 3 =.......... </option>
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
<option value=""> = SEMESTER 4 =.......... </option>
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
<option value=""> = SEMESTER 5 =.......... </option>
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
<option value=""> = SEMESTER 6 =.......... </option>
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
<option value=""> = SEMESTER 7 =.......... </option>
<option> Topik Khusus </option>
<option> Kuliah Kerja Profesi </option>
<option> Metodologi Penelitian </option>
<option> Analisa Survival </option>
<option> Pengantar Model Persamaan Struktural </option>
<option value=""> = SEMESTER 8 =.......... </option>
<option> KKN </option>
<option> Skripsi </option>

</select>
 </div>

 
	</div>
	<div class="col-sm-3">

                                        <div class="form-group">
                                            <label>Tahun Semester</label>
                                            <select class="form-control" name="tahun" required>
                                            	<option value="" selected> Pilih ... </option>
                                                <option>20152</option>
                                                <option>20161</option>
                                                <option>20162</option>
                                                <option>20171</option>
                                                <option>20172</option>
                                                <option>20181</option>
                                                <option>20182</option>
                                            </select>
                                        </div>
   </div>

</div>
</div>



								
							<fieldset class="form-group">
													
				           		<label>1. Seberapa jelas rencana pembelajaran mata kuliah ini?</label>

				             	
				             	<div class="form-check">
				                <label> <input class="form-check-input" type="radio" name="1A" id="optionsRadios1" value="1" required required /> tidak jelas/ tidak pernah dijelaskan rencananya  </label>
				              	</div>
				              	<div class="form-check">
				                 <label> <input class="form-check-input" type="radio" name="1A" id="optionsRadios2" value="2"/> kurang jelas/diterangkankan secara lisan  </label>
				               	</div>
				              	<div class="form-check">
				                  <label> <input class="form-check-input" type="radio" name="1A" id="optionsRadios3" value="3"/> jelas / diterangkan, ditulis di papan atau transparansi  </label>
				                </div>
				              	<div class="form-check">
				                  <label> <input class="form-check-input" type="radio" name="1A" id="optionsRadios3" value="4"/> sangat jelas/diterangkan, dicetak dan dibagikan   </label>
				        		</div>
							</fieldset>

				 			<fieldset class="form-group">
								
				           		<label>2. Apakah rencana pembelajaran tersebut terlaksana dengan baik?</label>

				             	<div class="form-check">
				                	<label> <input class="form-check-input" type="radio"name="2A" id="optionsRadios1" value="1" required/> sangat sedikit yang terlaksana dengan baik (< 25% )  </label>
				              	</div>
				              	<div class="form-check">
				                 <label> <input class="form-check-input" type="radio"name="2A" id="optionsRadios2" value="2"/> yang terlaksana dengan baik (>25% - 50% ) </label>
				               	</div>
				              	<div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="2A" id="optionsRadios3" value="3"/> banyak yang terlaksana dengan baik ( >50%- 75%) </label>
				                </div>
				              	<div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="2A" id="optionsRadios3" value="4"/> hampir semua terlaksana dengan baik (> 75% ) </label>
				                </div>
				        	</fieldset>

						<fieldset class="form-group">
								
								<label>3. Rata-rata berapa lama diskusi /tanya jawab berlangsung pada setiap tatap muka ?</label>

								<div class="form-check">
									<label> <input class="form-check-input" type="radio"name="3A" id="optionsRadios1" value="1" required/> diskusi /tanya jawab berlangsung ratarata kurang dari 5menit </label>
								</div>
								<div class="form-check">
									<label> <input class="form-check-input" type="radio"name="3A" id="optionsRadios2" value="2"/> ( 15- 30) ( masih jarang dan kurang intensif ) </label>
								</div>
								<div class="form-check">
									<label> <input class="form-check-input" type="radio"name="3A" id="optionsRadios3" value="3"/> ( >30- 1 jam ) ( banyak diskusi dan cukup intensif ) </label>
								</div>
								<div class="form-check">
									<label> <input class="form-check-input" type="radio"name="3A" id="optionsRadios3" value="4"/> ( >1 jam ) ( banyak diskusi dan sangat intensif ) </label>
								</div>
				        </fieldset>

				<fieldset class="form-group">
								
				           <label>4. Seberapa banyak materi yang bisa anda serap dengan jelas ?</label>
				             
				             
				             	<div class="form-check">
				                <label> <input class="form-check-input" type="radio" name="4A" id="optionsRadios1" value="1" required/> sangat sedikit ( kurang dari 20 % ) </label>
				              </div>
				              <div class="form-check">
				                 <label> <input class="form-check-input" type="radio"name="4A" id="optionsRadios2" value="2"/>sedikit ( kurang lebih 20% - 40 % )</label>
				               </div>
				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="4A" id="optionsRadios3" value="3"/> banyak ( > 40 % sampai 60 % ) </label>
				                 </div>

				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="4A" id="optionsRadios3" value="4"/> hampir seluruhnya ( diatas 60 % ) </label>
				                 </div>
				        </fieldset>

				<fieldset class="form-group">
								
				           <label>5. Seberapa besar manfaat dari tugas yang diberikan dosen?</label>
				             
				             
				             	<div class="form-check">
				                <label> <input class="form-check-input" type="radio" name="5A" id="optionsRadios1" value="1" required/> tidak banyak bermanfaat / menambah beban saja </label>
				              </div>
				              <div class="form-check">
				                 <label> <input class="form-check-input" type="radio"name="5A" id="optionsRadios2" value="2"/> sedikit menambah kemampuan </label>
				               </div>
				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="5A" id="optionsRadios3" value="3"/> banyak menambah kemampuan </label>
				                 </div>

				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="5A" id="optionsRadios3" value="4"/> sangat banyak menambah kemampuan </label>
				                 </div>
				        </fieldset>
				<fieldset class="form-group">
								
				           <label>6. Apakah tugas/ tes/UTS mendapat evaluasi dan koreksi yang memadai ?</label>
				             
				             
				             	<div class="form-check">
				                <label> <input class="form-check-input" type="radio" name="6A" id="optionsRadios1" value="1" required/>tidak pernah dibahas dan tidak dikembalikan  </label>
				              </div>
				              <div class="form-check">
				                 <label> <input class="form-check-input" type="radio"name="6A" id="optionsRadios2" value="2"/> dibahas secara umum , berkas tidak dikembalikan </label>
				               </div>
				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="6A" id="optionsRadios3" value="3"/> dibahas secara rinci,berkas tidak dikembalikan </label>
				                 </div>

				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="6A" id="optionsRadios3" value="4"/>dibahas secara rinci,berkas dikoreksi dan dibagikan </label>
				                 </div>
				        </fieldset>

				<fieldset class="form-group">
								
				           <label>7. Seberapa banyak anda mendapat materi yang up to date? (Jurnal, informasi baru, konteks nyata saat ini )</label>
				             
				             
				             	<div class="form-check">
				                <label> <input class="form-check-input" type="radio" name="7A" id="optionsRadios1" value="1" required/> kurang sekali  </label>
				              </div>
				              <div class="form-check">
				                 <label> <input class="form-check-input" type="radio"name="7A" id="optionsRadios2" value="2"/> kurang </label>
				               </div>
				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="7A" id="optionsRadios3" value="3"/> banyak </label>
				                 </div>

				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="7A" id="optionsRadios3" value="4"/> sangat banyak </label>
				                 </div>
				        </fieldset>

				<fieldset class="form-group">
								
				           <label>8. Seberapa sering perkuliahan ini berlangsung tepat waktu baik awal maupun akhirnya?</label>
				             
				             
				             	<div class="form-check">
				                <label> <input class="form-check-input" type="radio" name="8A" id="optionsRadios1" value="1" required/> tidak pernah tepat waktu </label>
				              </div>
				              <div class="form-check">
				                 <label> <input class="form-check-input" type="radio"name="8A" id="optionsRadios2" value="2"/> jarang tepat waktu </label>
				               </div>
				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="8A" id="optionsRadios3" value="3"/> sering tepat waktu </label>
				                 </div>

				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="8A" id="optionsRadios3" value="4"/> selalu tepat waktu </label>
				                 </div>
				        </fieldset>

				<fieldset class="form-group">
								
				           <label>9. Bentuk pembelajaran yang dijalankan, seberapa besar dapat meningkatkan minat dan semangat belajar saudara ?</label>
				             
				             
				             	<div class="form-check">
				                <label> <input class="form-check-input" type="radio" name="9A" id="optionsRadios1" value="1" required/> menjadi sangat tidak berminat </label>
				              </div>
				              <div class="form-check">
				                 <label> <input class="form-check-input" type="radio"name="9A" id="optionsRadios2" value="2"/> kurang berminat </label>
				               </div>
				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="9A" id="optionsRadios3" value="3"/> berminat dan semangat </label>
				                 </div>

				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="9A" id="optionsRadios3" value="4"/> sangat bergairah dan bersemangat </label>
				                 </div>
				        </fieldset>

				<fieldset class="form-group">
								
				           <label>10. Apakah proses evaluasi/penilaian belajar mahasiswa jelas dan akademis ?</label>
				             
				             
				             	<div class="form-check">
				                <label> <input class="form-check-input" type="radio" name="10A" id="optionsRadios1" value="1" required/>tidak jelas / tidak akademis </label>
				              </div>
				              <div class="form-check">
				                 <label> <input class="form-check-input" type="radio"name="10A" id="optionsRadios2" value="2"/> kurang jelas / kurang akademis </label>
				               </div>
				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="10A" id="optionsRadios3" value="3"/> sebagian jelas dan akademis </label>
				                 </div>

				              <div class="form-check">
				                  <label> <input class="form-check-input" type="radio"name="10A" id="optionsRadios3" value="4"/> hampir semua jelas dan akademis </label>
				                 </div>
				        </fieldset>

							
 <button type="submit" name="save" class="btn btn-info"> <i class="glyphicon glyphicon-download-alt"></i> Save </button>

</form>

<?php

$data = query("SELECT * FROM perkuliahan WHERE nim='$nim' ORDER BY tahun");

?>


<br>
<br>
<hr/>
<div class="panel panel-warning">
                        <div class="panel-heading">
                           <i class="glyphicon glyphicon-download-alt"></i>  Kuesioner yang sudah diisi!!
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



</table>
</body>
</html>

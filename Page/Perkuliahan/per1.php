<?php
$A = ["A1","A2","A3","A4","A5","A6","A7","A8","A9","A10"];

$pert = ["1. Seberapa jelas rencana pembelajaran mata kuliah ini?",
	"2. Apakah rencana pembelajaran tersebut terlaksana dengan baik?",
	"3. Rata-rata berapa lama diskusi /tanya jawab berlangsung pada setiap tatap muka ?",
	"4. Seberapa banyak materi yang bisa anda serap dengan jelas ?",
	"5. Seberapa besar manfaat dari tugas yang diberikan dosen?",
	"6. Apakah tugas/ tes/UTS mendapat evaluasi dan koreksi yang memadai ?",
	"7. Seberapa banyak anda mendapat materi yang up to date? (Jurnal, informasi baru, konteks nyata saat ini )",
	"8. Seberapa sering perkuliahan ini berlangsung tepat waktu baik awal maupun akhirnya?",
	"9. Bentuk pembelajaran yang dijalankan, seberapa besar dapat meningkatkan minat dan semangat belajar saudara ?",
	"10. Apakah proses evaluasi/penilaian belajar mahasiswa jelas dan akademis ?"
];



$jawab = [["tidak jelas/ tidak pernah dijelaskan rencananya",
	"kurang jelas/diterangkankan secara lisan",
	"jelas / diterangkan, ditulis di papan atau transparansi",
	"sangat jelas/diterangkan, dicetak dan dibagikan"],

["sangat sedikit yang terlaksana dengan baik (< 25% )",
"sedikit yang terlaksana dengan baik (>25% - 50% )",
"banyak yang terlaksana dengan baik ( >50%- 75%)",
"hampir semua terlaksana dengan baik (> 75% )"],

["diskusi /tanya jawab berlangsung ratarata(5menit)",
"( 15- 30) ( masih jarang dan kurang intensif )",
"( >30- 1 jam ) ( banyak diskusi dan cukup intensif )",
"( >1 jam ) ( banyak diskusi dan sangat intensif )"],

["sangat sedikit ( kurang dari 20 % )",
"sedikit ( kurang lebih 20% - 40 % )",
"banyak ( > 40 % sampai 60 % )",
"hampir seluruhnya ( diatas 60 % )"],

["tidak banyak bermanfaat / menambah beban saja",
"sedikit menambah kemampuan",
"banyak menambah kemampuan",
"sangat banyak menambah kemampuan"],

["tidak pernah dibahas dan tidak dikembalikan",
"dibahas secara umum , berkas tidak dikembalikan",
"dibahas secara rinci,berkas tidak dikembalikan",
"dibahas secara rinci,berkas dikoreksi dan dibagikan"],

["kurang sekali",
"kurang","banyak","sangat banyak"],

["tidak pernah tepat waktu","jarang tepat waktu","sering tepat waktu","selalu tepat waktu"],

["menjadi sangat tidak berminat","kurang berminat","berminat dan semangat","sangat bergairah dan bersemangat"],

["tidak jelas / tidak akademis","kurang jelas / kurang akademis","sebagian jelas dan akademis","hampir semua jelas dan akademis"]];


?>

<?php
function sum($col,$cola,$mat) {

		$conn = mysqli_connect('localhost','root','','survey');
		$matkul = "SELECT * FROM perkuliahan ";
		$query = mysqli_query($conn,$matkul);
		$data = array();
		$data1 = array();
		while($row = mysqli_fetch_array($query)){
		    $data[] = $row[$col];
		    $data1[] = $row['matkul'];

		}

		$ab = 0;
		for ($i= 0; $i < count($data) ; $i++) { 
			if ($data[$i] == $cola) {
				if ($data1[$i] == $mat) {
					$ab++;
				}
			}
		}
		return $ab;
}
?>

<?php for ($i= 0; $i < 10 ; $i++) { ?>

<div class="row">
    <div class="col-sm-12">
	<?php
	$j1 = sum($A[$i],'1','Statistika Matematika II');
	$j2 = sum($A[$i],'2','Statistika Matematika II');
	$j3 = sum($A[$i],'3','Statistika Matematika II');
	$j4 = sum($A[$i],'4','Statistika Matematika II');

	?>

	<div id="<?= $pert[$i] ?>">
			<script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>
			<script type="text/javascript">
								Highcharts.chart('<?= $pert[$i] ?>', {
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
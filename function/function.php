<?php
//koneksi data base
$conn =mysqli_connect("localhost","root","","kuesioner");

function query($query) {
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while( $row =mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
} 



function tambah($data) {
	global $conn;
	$nim = htmlspecialchars($data["nim_A"]);
	$matkul = $data["matkul"];
	$tahun = $data["tahun"];
	$A1 = $data["1A"];
	$A2 = $data["2A"];
	$A3 = $data["3A"];
	$A4 = $data["4A"];
	$A5 = $data["5A"];
	$A6 = $data["6A"];
	$A7 = $data["7A"];
	$A8 = $data["8A"];
	$A9 = $data["9A"];
	$A10 = $data["10A"]; 


	$query = "INSERT INTO perkuliahan
				VALUES
				('','$nim','$matkul','$tahun','$A1','$A2','$A3','$A4','$A5','$A6','$A7','$A8','$A9','$A10')

			";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}


function sum($col,$cola,$mat,$thn) {

		global $conn;
		$matkul = "SELECT * FROM perkuliahan WHERE tahun='$thn'";
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


function tambahvisi($data) {
	global $conn;
	$status = $data["status"];
	$code = htmlspecialchars($data["code"]);
	$p1 = $data["p1"];
	$p2 = $data["p2"];
	$p3 = $data["p3"];
	$p4 = $data["p4"];
	$p5 = $data["p5"];


	$query = "INSERT INTO pemahaman
				VALUES
				('$status','$code','$p1','$p2','$p3','$p4','$p5')

			";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}



function summisi($col,$cola,$mat) {

		global $conn;
		$matkul = "SELECT * FROM pemahaman ";
		$query = mysqli_query($conn,$matkul);
		$data = array();
		$data1 = array();
		while($row = mysqli_fetch_array($query)){
		    $data[] = $row[$col];
		    $data1[] = $row['status'];

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



function jum($stat) {

		global $conn;
		$matkul = "SELECT * FROM pemahaman WHERE status='$stat' ";
		$query = mysqli_query($conn,$matkul);
		$data = array();
		while($row = mysqli_fetch_array($query)){
		    $data[] = $row['status'];
		}
		$jumlah = count($data);
		return $jumlah;
}

function akk($stat) {

		global $conn;
		$matkul = "SELECT * FROM perkuliahan WHERE tahun='$stat' ";
		$query = mysqli_query($conn,$matkul);
		$data = array();
		while($row = mysqli_fetch_array($query)){
		    $data[] = $row['tahun'];
		}
		$jumlah = count($data);
		return $jumlah;
}


function jm($tahun,$mat) {

        global $conn;
        $matkul = "SELECT * FROM perkuliahan WHERE tahun='$tahun' and matkul='$mat'";
        $query = mysqli_query($conn,$matkul);
        $data = array();
        while($row = mysqli_fetch_array($query)){
            $data[] = $row['matkul'];
        }
        $jumlah = count($data);
        return $jumlah;
}


function selk($sts) {
        global $conn;
        $matkul = "SELECT * FROM matkul WHERE status='$sts' ";
        $query = mysqli_query($conn,$matkul);
        return $query;
}


?>


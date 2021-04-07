<?php
	if (isset($_POST['tambah'])) {
		include ('koneksi.php');
		$id = $_POST ['id'];
		$tgl = $_POST ['tgl'];
		$nama = $_POST ['nama'];
		$nik = $_POST ['nik'];
		$laporan = $_POST ['laporan'];
		$tlp = $_POST ['tlp'];
		$st = $_POST ['st'];
		$namaFile 				= $_FILES['foto']['name'];
		$namaSementara 		    = $_FILES['foto']['tmp_name'];
		$dirUpload 				= "terupload/";
		$dirUpload2 				= "./terupload2";
		$terupload 				= move_uploaded_file($namaSementara, $dirUpload.$namaFile);
		$terupload2 				= move_uploaded_file($namaSementara, $dirUpload2.$namaFile);
		// if ($terupload) {
		//     echo "Upload berhasil!<br/>";
		//     echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
		// } else {
		//     echo "Upload Gagal!";
		// }	
		$sql = "INSERT INTO pengaduan(id_pengaduan,tgl_pengaduan,nama_pengadu,nik,isi_laporan,tlp,foto,status)VALUES('$id','$tgl','$nama','$nik','$laporan','$tlp','$namaFile','$st')";

		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Transaksi Sukses.Data Sudah ada dalam Laporan');window.location='pengaduan1.php'</script>";
			// header("location:index.php");
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

		}else{ 
	   echo '<script>window.history.back()</script>';
		}
?>
<?php
session_start();
include 'koneksi.php';
if(!isset ($_SESSION['level'])){
	header ("location: index.php");
	}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<style type="text/css">
.head {
	width:100%;
	height:100px;
	border-bottom:1px solid;
	}
</style>
<div class="head">
<table>
<tr>
<td width="10%"><img src="img/kb.png" width="80px" /></td>
<td align="center" width="90%"><font style="font-size:22px; font-family:Arial, Helvetica, sans-serif;">PEMERINTAH KABUPATEN BANDUNG BARAT<br />KECAMATAN BAUJAJAR<br/>DESA GALANGGANG</font><br /><i><font style="font-size:15px;">Jl. Raya GALANGANG NO.69 GALANGGANG 40561</font></i></td>
</tr>
</table>
</div><br /><br />
<div style="font-size:24px; text-align:center;">Laporan Pengaduan Masyarakat</div><br /><br />
<table align="center" border="1" cellpadding="8" cellspacing="0">
<tr>
			<th>No</th>
			<th>Tgl Pengaduan</th>
			<th>Nama</th>
			<th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
		</tr>
<?php
$no = 1;
$query = mysqli_query ($conn, "SELECT * FROM pengaduan WHERE tgl_pengaduan >= '" .$_POST['tgl1']. "' AND tgl_pengaduan <= '" .$_POST['tgl2']. "'");
while ($data = mysqli_fetch_array ($query)) {
?>
<tr align="left">
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $data['tgl_pengaduan'] ?></td>
<td><?php echo $data['nama_pengadu'] ?></td>
<td><?php echo $data['nik'] ?></td>
<td><?php echo $data['isi_laporan'] ?></td>
<td><a href="http://localhost/ukom_aipp/image/<?php echo $data['foto'];?>"><img src="image/<?php echo $data['foto'];?>" height="55px"></a></td>
</tr>
<?php } ?>
</table>
<br/>
<table class="titik">
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Galanggang,.........................2020</td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KEPALA DESA GALANGGANG</td>
</tr>
</table>
<br/><br/><br/><br/>
<table class="titik">
<tr>
<td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Abdul Rizki Fadilah</u></b></td>
</tr>
</table>
<script>
window.print() 
</script>
</body>
</html>
<?php } ?>
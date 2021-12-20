<h2>Tambah Data Peralatan</h2>
<form method="post" enctype="multipart/form-data">
<div class="col-md-4">
	<div class="form-group">
		<label>ID Peralatan</label>
		<input type="text" class="form-control" name="id">	
	</div>
	<div class="form-group">
		<label>Tahun Pembelian</label>
		<input type="text" class="form-control" name="tahun">	
	</div>
	<div class="form-group">
		<label>Jenis Alat</label>
		<input type="text" class="form-control" name="jenis">	
	</div>
	<div class="form-group">
		<label>Deskripsi Alat</label>
		<input type="text" class="form-control" name="deskripsi">	
	</div>
	<div class="form-group">
		<label>Status</label><br>
		<input type="radio" name="status" value="baik">Baik<br>
		<input type="radio" name="status" value="rusak 1">Rusak Sementara<br>
		<input type="radio" name="status" value="rusak 2">Rusak Permanen<br>
	</div>
	<!-- <div class="form-group">
		<label>Hak Akses</label>
		<select class="form-control" name="akses">
			<option>Pilih</option>
			<option value="Admin">Admin</option>
		</select>
	</div> -->
	<!-- <div class="form-group">
		<label>Status</label>
		<input type="radio" name="status" value="aktif">Aktif
		<input type="radio" name="status" value="tidak aktif">Tidak Aktif
	</div> -->
	<button class="btn btn-primary pull-right" name="save">Simpan</button>
	<a class="btn btn-default pull-left" href="index.php?halaman=data_peralatan">Kembali</a>
</div>
</form>
<?php
if (isset($_POST['save']))
{
$id = $_POST['id'];
$tahun = $_POST['tahun'];
$jenis = $_POST['jenis'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];
	$koneksi->query("INSERT INTO tbl_peralatan
		(id_peralatan,tahun_pembelian,jenis_alat,deskripsi_alat,status)
		VALUES('$id','$tahun','$jenis','$deskripsi','$status') ");

	echo "<script>alert('tersimpan');</script>";
    echo "<script>location='index.php?halaman=data_peralatan';</script>"; 
}
?>

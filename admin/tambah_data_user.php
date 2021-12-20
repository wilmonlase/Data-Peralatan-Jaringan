<h2>Tambah Data User</h2>
<form method="post" enctype="multipart/form-data">
<div class="col-md-4">
	<div class="form-group">
		<label>ID Pengguna</label>
		<input type="text" class="form-control" name="id">	
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" class="form-control" name="nama">	
	</div>
	<div class="form-group">
		<label>Kata Sandi</label>
		<input type="text" class="form-control" name="sandi">	
	</div>
	<div class="form-group">
		<label>Hak Akses</label>
		<select class="form-control" name="akses">
			<option>Pilih</option>
			<option value="Admin">Admin</option>
			<option value="Kurir">-</option>
		</select>
	</div>
	<div class="form-group">
		<label>Status</label>
		<input type="radio" name="status" value="aktif">Aktif
		<input type="radio" name="status" value="tidak aktif">Tidak Aktif
	</div>
	<button class="btn btn-primary pull-right" name="save">Simpan</button>
	<a class="btn btn-default pull-left" href="index.php?halaman=nomor_batch">Kembali</a>
</div>
</form>
<?php
if (isset($_POST['save']))
{
$id = $_POST['id'];
$nama = $_POST['nama'];
$sandi = $_POST['sandi'];
$akses = $_POST['akses'];
$status = $_POST['status'];
	$koneksi->query("INSERT INTO tbl_user
		(id_pengguna,nama_lengkap,kata_sandi,hak_akses,status)
		VALUES('$id','$nama','$sandi','$akses','$status') ");

	echo "<script>alert('tersimpan');</script>";
    echo "<script>location='index.php?halaman=data_user';</script>"; 
}
?>

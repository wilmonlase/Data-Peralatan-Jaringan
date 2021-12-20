<?php
$idp = $_GET["id"];

$ambil = $koneksi->query("SELECT*FROM tbl_user WHERE id_pengguna='$idp'");
$detail = $ambil->fetch_assoc();
?>
<h2>Ubah Data User</h2>
<hr>
<form method="post" enctype="multipart/form-data">
<div class="col-md-4">
	<div class="form-group">
		<label>ID Pengguna</label>
		<input type="text" class="form-control" name="id" value="<?php echo $detail['id_pengguna'] ?>" readonly="true" >	
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $detail['nama_lengkap'] ?>">	
	</div>
	<div class="form-group">
		<label>Kata Sandi</label>
		<input type="text" class="form-control" name="sandi" value="<?php echo $detail['kata_sandi'] ?>">	
	</div>
	<div class="form-group">
		<label>Hak Akses</label>
		<select class="form-control" name="akses">
			<option>Pilih</option>
			<option value="Admin" <?php if($detail['hak_akses']=="Admin"){echo "selected";} ?> >Admin</option>
		</select>
	</div>
	<div class="form-group">
		<label>Status</label>
		<input type="radio" name="status" value="aktif"  <?php if($detail['status']=="aktif"){echo "checked";} ?> >Aktif
		<input type="radio" name="status" value="tidak aktif"  <?php if($detail['status']=="tidak aktif"){echo "checked";} ?> >Tidak Aktif
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
	$koneksi->query("UPDATE  tbl_user SET nama_lengkap='$nama', kata_sandi='$sandi',hak_akses='$akses', status='$status'
	WHERE id_pengguna='$id' ") or die(mysqli_error($koneksi));

	echo "<script>alert('Data diupdate');</script>";
    echo "<script>location='index.php?halaman=data_user';</script>"; 
}
?>




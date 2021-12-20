<h2>Data User</h2>
<hr>
<table class="table table-bordered" id="tabelku">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Pengguna</th>
			<th>Nama Lengkap</th>
			<th>Kata Sandi</th>
			<th>Hak Akses</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_user"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['id_pengguna'];?></td>
			<td><?php echo $pecah['nama_lengkap'];?></td>
			<td><?php echo $pecah['kata_sandi'];?></td>
			<td><?php echo $pecah['hak_akses'];?></td>
			<td><?php echo $pecah['status'] ?></td>
			<td>
				<a href="index.php?halaman=ubah_user&id=<?php echo $pecah['id_pengguna'] ?>" class="btn btn-warning ">Ubah</a>
				<a href="index.php?halaman=hapus_user&id=<?php echo $pecah['id_pengguna'] ?>" class="btn btn-danger" onclick="return confirm('apakah yakin?')">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_data_user" class="btn btn-primary">Tambah Data</a>

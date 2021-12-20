<h2>Peralatan</h2>
<hr>
<table class="table table-bordered" id="tabelku">
	<thead>
		<tr>
			<th>No</th>
			<th>ID Peralatan</th>
			<th>Tahun Pembelian</th>
			<th>Jenis Alat</th>
			<th>Deskripsi Alat</th>
			<th>Status</th>
			<!-- <th>Aksi</th> -->
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_peralatan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['id_peralatan'];?></td>
			<td><?php echo $pecah['tahun_pembelian'];?></td>
			<td><?php echo $pecah['jenis_alat'];?></td>
			<td><?php echo $pecah['deskripsi_alat'];?></td>
			<td><?php echo $pecah['status'] ?></td>
			<!-- <td><?php echo $pecah['aksi'] ?></td> -->
			<td>
				<a href="index.php?halaman=ubah_peralatan&id=<?php echo $pecah['id_peralatan'] ?>" class="btn btn-warning ">Ubah</a>
				<a href="index.php?halaman=hapus_peralatan&id=<?php echo $pecah['id_peralatan'] ?>" class="btn btn-danger" onclick="return confirm('apakah yakin?')">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_data_peralatan" class="btn btn-primary">Tambah Data</a>

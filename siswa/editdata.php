<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data Siswa</font></center>
		<hr>
		<!--<a href="index.php?page=tambah_siswa"><button class="btn btn-dark right">Tambah Data</button></a>-->
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>No.</th>
					<th>No. Pendaftaran</th>
					<th>Nama Siswa</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>Email</th>
					<th>No. Hp</th>
					<th>Nama Orangtua</th>
					<th>No. Hp Orangtua</th>
					<th>Tahun Masuk</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY No_pendaftaran DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['No_pendaftaran'].'</td>
							<td>'.$data['Nama'].'</td>
							<td>'.$data['Tempat_lahir'].'</td>
							<td>'.$data['Tanggal_lahir'].'</td>
							<td>'.$data['Jenis_kelamin'].'</td>
							<td>'.$data['Alamat'].'</td>
							<td>'.$data['Email'].'</td>
							<td>'.$data['No_hp'].'</td>
							<td>'.$data['Nama_orangtua'].'</td>
							<td>'.$data['No_hp_orangtua'].'</td>
							<td>'.$data['Tahun_masuk'].'</td>
							<td>
								<a href="index.php?page=edit_siswa&No_pendaftaran='.$data['No_pendaftaran'].'" class="btn btn-secondary btn-sm">Edit</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>

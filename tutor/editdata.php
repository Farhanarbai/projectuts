<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data Tutor</font></center>
		<hr>
		<!--<a href="index.php?page=tambah_siswa"><button class="btn btn-dark right">Tambah Data</button></a>-->
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>No.</th>
					<th>Id Tutor</th>
					<th>Nama Tutor</th>
					<th>Alamat</th>
					<th>No. Hp</th>
					<th>Email</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM tutor ORDER BY Id DESC") or die(mysqli_error($koneksi));
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
							<td>'.$data['Id'].'</td>
							<td>'.$data['Nama'].'</td>
							<td>'.$data['Alamat'].'</td>
							<td>'.$data['No_Hp'].'</td>
							<td>'.$data['Email'].'</td>
							<td>'.$data['Status'].'</td>
							<td>
								<a href="index.php?page=edit_tutor&Id='.$data['Id'].'" class="btn btn-secondary btn-sm">Edit</a>
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

<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['No_pendaftaran'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$No_pendaftaran = $_GET['No_pendaftaran'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM siswa WHERE No_pendaftaran='$No_pendaftaran'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$No_pendaftaran			  = $_POST['No_pendaftaran'];
			$Nama			  = $_POST['Nama'];
			$Tempat_lahir			  = $_POST['Tempat_lahir'];
			$Tanggal_lahir			  = $_POST['Tanggal_lahir'];
			$Jenis_kelamin	= $_POST['Jenis_kelamin'];
			$Alamat			  = $_POST['Alamat'];
			$Email			  = $_POST['Email'];
			$No_hp			  = $_POST['No_hp'];
			$Nama_orangtua			  = $_POST['Nama_orangtua'];
			$No_hp_orangtua			  = $_POST['No_hp_orangtua'];
			$Tahun_masuk	= $_POST['Tahun_masuk'];

			$sql = mysqli_query($koneksi, "UPDATE siswa SET Nama='$Nama', Tempat_lahir='$Tempat_lahir', Tanggal_lahir='$Tanggal_lahir', Jenis_kelamin='$Jenis_kelamin', Alamat='$Alamat', Email='$Email', No_hp='$No_hp', Nama_orangtua='$Nama_orangtua', No_hp_orangtua='$No_hp_orangtua', Tahun_masuk='$Tahun_masuk' WHERE No_pendaftaran='$No_pendaftaran'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=editdata_siswa";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_siswa&No_pendaftaran=<?php echo $No_pendaftaran; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No. Pendaftaran</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="No_pendaftaran" class="form-control" size="4" value="<?php echo $data['No_pendaftaran']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Siswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama" class="form-control" value="<?php echo $data['Nama']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Tempat_lahir" class="form-control" value="<?php echo $data['Tempat_lahir']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Tanggal_lahir" class="form-control" value="<?php echo $data['Tanggal_lahir']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_kelamin" value="Laki-Laki" <?php if($data['Jenis_kelamin'] == 'Laki-Laki'){ echo 'checked'; } ?> required>Laki-Laki
						</label>
						<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_kelamin" value="Perempuan" <?php if($data['Jenis_kelamin'] == 'Perempuan'){ echo 'checked'; } ?> required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" value="<?php echo $data['Alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Email" class="form-control" value="<?php echo $data['Email']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No. Hp</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="No_hp" class="form-control" value="<?php echo $data['No_hp']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Orangtua</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_orangtua" class="form-control" value="<?php echo $data['Nama_orangtua']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No. Hp Orangtua</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="No_hp_orangtua" class="form-control" value="<?php echo $data['No_hp_orangtua']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Masuk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Tahun_masuk" class="form-control" value="<?php echo $data['Tahun_masuk']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=editdata_siswa" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>

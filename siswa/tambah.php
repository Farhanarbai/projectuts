<?php include('config.php'); ?>


		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$No_pendaftaran			= $_POST['No_pendaftaran'];
			$Nama					= $_POST['Nama'];
			$Tempat_lahir			= $_POST['Tempat_lahir'];
			$Tanggal_lahir			= $_POST['Tanggal_lahir'];
			$Jenis_kelamin			= $_POST['Jenis_kelamin'];
			$Alamat					= $_POST['Alamat'];
			$Email					= $_POST['Email'];
			$No_hp					= $_POST['No_hp'];
			$Nama_orangtua			= $_POST['Nama_orangtua'];
			$No_hp_orangtua			= $_POST['No_hp_orangtua'];
			$Tahun_masuk			= $_POST['Tahun_masuk'];

			$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE No_pendaftaran='$No_pendaftaran'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO siswa(No_pendaftaran, Nama, Tempat_lahir, Tanggal_lahir, Jenis_Kelamin, Alamat, Email, No_hp, Nama_orangtua, No_hp_orangtua, Tahun_masuk) VALUES('$No_pendaftaran', '$Nama', '$Tempat_lahir', '$Tanggal_lahir', '$Jenis_kelamin', '$Alamat', '$Email', '$No_hp', '$Nama_orangtua', '$No_hp_orangtua', '$Tahun_masuk')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_siswa";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
		}
		?>

		<form action="index.php?page=tambah_siswa" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No Pendaftaran</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="No_pendaftaran" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama siswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Tempat_lahir" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Tanggal_lahir" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_kelamin" value="Laki-Laki" required>Laki-Laki
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_kelamin" value="Perempuan" required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Email" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No. Hp</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="No_hp" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Orangtua</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama_orangtua" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No. Hp Orangtua</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="No_hp_orangtua" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tahun Masuk</label>
				<div class="col-md-6 col-sm-6">
					<select name="Tahun_masuk" class="form-control" required>
            <?php
            for ($t=2010;$t<=2999;$t++)
            echo "<option value=\"$t\">$t</option>";
            ?>     
					</select>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>

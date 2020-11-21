<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Id = $_GET['Id'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM tutor WHERE Id='$Id'") or die(mysqli_error($koneksi));

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
			$Id		  = $_POST['Id'];
			$Nama			  = $_POST['Nama'];
			$Alamat			  = $_POST['Alamat'];
			$No_Hp			  = $_POST['No_Hp'];
			$Email			  = $_POST['Email'];
			$Status			  = $_POST['Status'];

			$sql = mysqli_query($koneksi, "UPDATE tutor SET Nama='$Nama', Alamat='$Alamat', No_Hp='$No_Hp', Email='$Email', Status='$Status' WHERE Id='$Id'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=editdata_tutor";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_tutor&Id=<?php echo $Id; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Id Tutor</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Id" class="form-control" size="4" value="<?php echo $data['Id']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Tutor</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama" class="form-control" value="<?php echo $data['Nama']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" value="<?php echo $data['Alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No. Hp</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="No_Hp" class="form-control" value="<?php echo $data['No_Hp']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Email" class="form-control" value="<?php echo $data['Email']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6">
					<select name="Status" class="form-control" required>
						<option value="">Pilih Status</option>
						<option value="Aktif">Aktif</option>
						<option value="Non-Aktif">Non-Aktif</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=editdata_tutor" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>

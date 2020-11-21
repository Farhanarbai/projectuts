<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$Id			= $_POST['Id'];
			$Nama			= $_POST['Nama'];
			$Alamat			= $_POST['Alamat'];
			$No_Hp			= $_POST['No_Hp'];
			$Email			= $_POST['Email'];
			$Status			= $_POST['Status'];

			$cek = mysqli_query($koneksi, "SELECT * FROM tutor WHERE Id='$Id'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO tutor(Id, Nama, Alamat, No_Hp, Email, Status) VALUES('$Id', '$Nama', '$Alamat', '$No_Hp', '$Email', '$Status')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_tutor";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
		}
		?>

		<form action="index.php?page=tambah_tutor" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Id Tutor</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Id" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Tutor</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No. Hp</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="No_Hp" class="form-control" required>
				</div>
			</div>
				<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Email" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Status" required="required" value="Aktif" readonly="">
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>

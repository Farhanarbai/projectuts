<?php 
$No_pendaftaran = $_GET['No_pendaftaran'];
$query = mysqli_query($connect, "SELECT * FROM siswa WHERE No_pendaftaran = $No_pendaftaran");
$data = mysqli_fetch_array($query);
?>
<h3>Detail Anggota</h3>
     <div class="content">
        <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="20%">No. Pendaftaran</td>
                <td width="1%">:</td>
                <td><?php echo $data['No_pendaftaran']; ?></td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td width="1%">:</td>
                <td><?php echo $data['No_hp']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td width="1%">:</td>
                <td><?php echo $data['Email']; ?></td>
            </tr>
        </table>
    </div>
<a href="index.php?page=tampil_siswa"  class="btn btn-secondary btn-sm">Kembali</a>
<html>
<title>PERPUSTAKAAN</title>
<center>
<?php
include("koneksi.php");
$data = $_GET['nim'];
$edit = "SELECT * FROM mahasiswa WHERE nim='$data'";
$proses = mysqli_query($conn, $edit);
$row = mysqli_fetch_array($proses);
?>
<h1 align = "center">UBAH DATA </h1></br>
    <form method="POST" action ="ubah.php">
    <table align ="center">
<style>    
    body {
        background-color: lightblue;
    }
</style>
    <tr>
        <td>NIM</td>
        <td><input type="text" name="txtnim" value="<?php echo $row[0] ?>"></td>
    </tr>

    <tr>
        <td>nama mahasiswa</td>
        <td><input type="text" name="txtnama" value="<?php echo $row[1] ?>"></td>
    </tr>

    <tr>
        <td>semester</td>
        <td><input type="text" name="txtsemester" value="<?php echo $row[2] ?>"></td>
    </tr>

    <tr>
        <td>fakultas</td>
        <td><input type="text" name="txtfakultas" value="<?php echo $row[3] ?>"></td>
    </tr>

    <tr>
        <td>jurusan</td>
        <td><input type="text" name="txtjurusan" value="<?php echo $row[4] ?>"></td>
    </tr>

    <tr>
        <td colspan=3 align="right">
        <input type="submit" name ="update" value="ubah">
    </tr>
</table>
</form>
</html>
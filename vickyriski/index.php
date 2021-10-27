<html>
<title>perpustakaan</title>
<style>    
    body {
        background-color: lightblue;
    }
</style>
    <center>
    <h1>DATA MAHASISWA</h1></br>
          
            <table border = "2" cellpadding = "5" cellspacing ="0">
        <nav>
        <a href = "tambah.php"> tambah data </a>
        </nav>
        <br>
            <tr> 
                <th>NIM</th>
                <th>NAMA MAHASISWA</th>
                <th>SEMESTER</th>
                <th>FAKULTAS</th>
                <th>JURUSAN</th>
                <th>OPSI</th>
            </tr>
        
<?php include("koneksi.php");
if($conn){
$hasil = mysqli_query($conn,"SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_array($hasil))
{
    echo "<tr><td align=center>$row[NIM]</td>
        <td align=center>$row[NAMA]</td>
        <td align=center>$row[SEMESTER]</td>
        <td align=center>$row[FAKULTAS]</td>
        <td align=center>$row[JURUSAN]</td>
        <td align=center><a href=form_ubah.php?nim=$row[NIM]>ubah</a>
        ||<a href=hapus.php?nim=$row[NIM]>hapus</a>
        </tr>";
  
    $row=mysqli_query($conn,"SELECT * from mahasiswa where nim='$row[NIM]'");
    }
}
?>
</table>
</html>
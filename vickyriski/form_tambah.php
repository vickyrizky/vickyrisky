<html> 
<title>PERPUSTAKAAN</title>
<style>    
    body {
        background-color: lightblue;
    }
</style>

    <h1><center> TAMBAH DATA </center></h1></br>

    <form method = "POST" action = "tambah.php">
    <table align = "center" cellpadding ="5" cellspacing = "0">
    <tr>
        <td>NIM</td>
        <td><input type = "text" name = "NIM"></td>
    </tr>

    <tr>
        <td>NAMA MAHASISWA</td>
        <td><input type = "text" name = "NAMA"></td>
    </tr>

    <tr>
        <td>SEMESTER</td>
        <td><input type = "text" name = "SEMESTER"></td>
    </tr>

    <tr>
        <td>FAKULTAS</td>
        <td><input type = "text" name = "FAKULTAS"></td>
    </tr>

    <tr>
        <td>JURUSAN</td>
        <td><input type = "text" name = "JURUSAN"></td>
    </tr>

    <tr>
        <td></td>
        <td align = "right"colspan = "3"><input type = "submit" name = "" value = "simpan">
    </tr>
    </table>
        <center><a href = "index.php">LIHAT DATA MAHASISWA</a></center>
    </form>
</body>
</html>
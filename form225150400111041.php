<!DOCTYPE html>
<html>
<body>
    <h1>Form</h1>
    <form method="post" action="form225150400111041.php">
        Nama : <br><input name="nama" type="text"/><br>
        NIM : <br><input name="nim" type="text"/><br>
        Jenis Kelamin : <br>
        <label>
            <input type="radio" name="jenisKelamin" value="Laki-laki"/> Laki-laki
        </label><br>
        <label>
            <input type="radio" name="jenisKelamin" value="Perempuan"/> Perempuan
        </label><br>
        Tanggal Lahir : <br>
        <input type="date" name="tanggalLahir"><br>
        Program Studi : <br>
        <select name="programStudi">
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknologi Informasi">Teknologi Informasi</option>
        <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Teknik Komputer">Teknik Komputer</option>
        </select> <br>
        <br><input type="submit"/>
    </form>
</body><br> 
    <?php
    if (isset($_POST["nama"])){
        echo "Nama : ". $_POST["nama"]."<br>"; 
        echo "NIM : ". $_POST["nim"]."<br>"; 
        echo "Jenis Kelamin : ". $_POST["jenisKelamin"]."<br>"; 
        echo "Tanggal Lahir : ". $_POST["tanggalLahir"]."<br>"; 
        echo "Program Studi : ". $_POST["programStudi"];    
    }
    ?>
</html>
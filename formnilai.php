<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Nilai Mahasiswa</title>
    <style>
        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="tabelnilai.php" method="POST">
        <h2>Form Nilai Mahasiswa</h2>
        <div class="name">
            Nama : <input type="text" name="nama[]" size="30">
        </div>
        <div class="lesson">
            Mata Kuliah :
            <select name="matkul[]">
                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                <option value="Basis Data 1">Basis Data 1</option>
                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
            </select>
        </div>
        <div class="assignment">
            Nilai Tugas : <input type="text" name="tugas[]" size="15">
        </div>
        <div class="midexam">
            Nilai UTS :
            <input type="text" name="uts[]" size="15">
        </div>
        <div class="finalexam">
            Nilai UAS :
            <input type="text" name="uas[]" size="15">
        </div>
        <br/>
        <input type="submit" value="Simpan" name="proses[]">
    </form>
</body>
</html>
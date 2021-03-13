<?php 
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_tugas = $_POST['tugas'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
?>
<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
	<thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr> 
	</thead>
	<tbody style="text-align: center">
        <?php
        $nomor = 1; 
        foreach($nama_siswa as $ns => $k){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$k.'</td>';
            echo '<td>'.$mata_kuliah[$ns].'</td>';
            echo '<td>'.$nilai_uts[$ns].'</td>';
            echo '<td>'.$nilai_uas[$ns].'</td>';
            echo '<td>'.$nilai_tugas[$ns].'</td>';
            $nilai_akhir = ((30*$nilai_uts[$ns]/100) + (35*$nilai_uas[$ns]/100) + (35*$nilai_tugas[$ns]/100));
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
	</tbody> 
</table>
<?php

?>
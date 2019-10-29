<h4>Data Dokter</h4>
<table border="1" cellpadding="8">
<tr>
		<th>Id Dokter</th>
		<th>Kd Dokter</th>
		<th>Nama Dokter</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Gol Darah</th>
		<th>Agama</th>
</tr>
<?php
if( ! empty($dokter)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
foreach($dokter as $d){
    echo "<tr>";
    echo "<td>".$d->id_dokter."</td>";
    echo "<td>".$d->kd_dokter."</td>";
    echo "<td>".$d->nm_dokter."</td>";
    echo "<td>".$d->jk."</td>";
    echo "<td>".$d->tmp_lahir."</td>";
    echo "<td>".$d->tgl_lahir."</td>";
    echo "<td>".$d->gol_drh."</td>";
    echo "<td>".$d->agama."</td>";
    echo "</tr>";
    }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
<div class="pull-right">
	<a href="<?php echo site_url('pegawai/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Pegawai</th>
		<th>Jk</th>
		<th>Tmp Lahir</th>
		<th>Tgl Lahir</th>
		<th>Gol Drh</th>
		<th>Agama</th>
		<th>Kd Pegawai</th>
		<th>Nm Pegawai</th>
		<th>Actions</th>
    </tr>
	<?php foreach($listt as $p){ ?>
    <tr>
		<td><?php echo $p['id_pegawai']; ?></td>
		<td><?php echo $p['jk']; ?></td>
		<td><?php echo $p['tmp_lahir']; ?></td>
		<td><?php echo $p['tgl_lahir']; ?></td>
		<td><?php echo $p['gol_drh']; ?></td>
		<td><?php echo $p['agama']; ?></td>
		<td><?php echo $p['kd_pegawai']; ?></td>
		<td><?php echo $p['nm_pegawai']; ?></td>
		<td>
            <a href="<?php echo site_url('pegawai/edit/'.$p['id_pegawai']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pegawai/remove/'.$p['id_pegawai']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

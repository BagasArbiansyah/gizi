<div class="pull-right">
	<a href="<?php echo site_url('dokter/add'); ?>" class="btn btn-success">Add</a> 
        <a href="<?php echo base_url("dokter/export"); ?>" class="btn btn-primary">Export To Excel</a> 
</div>
<br>

<table class="table table-striped table-bordered table-responsive" id="table">

<thead>
    <tr>
		<th>Id Dokter</th>
		<th>Kd Dokter</th>
		<th>Nama Dokter</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Gol Darah</th>
		<th>Agama</th>
        <th>Actions</th>
		<th></th>
    </tr>
	</thead>
	<!-- <?php foreach($list as $d){ ?>
    <tr>
		<td><?php echo $d['id_dokter']; ?></td>
		<td><?php echo $d['kd_dokter']; ?></td>
		<td><?php echo $d['nm_dokter']; ?></td>
		<td><?php echo $d['jk']; ?></td>
		<td><?php echo $d['tmp_lahir']; ?></td>
		<td><?php echo $d['tgl_lahir']; ?></td>
		<td><?php echo $d['gol_drh']; ?></td>
		<td><?php echo $d['agama']; ?></td>
		
    </tr>
	<?php } ?> -->
	<!-- <td>
            <a href="<?php echo site_url('dokter/edit/'.$d['id_dokter']); ?>" class="btn btn-info btn-xs">Edit</a> 
                </td>
                <td>
            <a href="<?php echo site_url('dokter/remove/'.$d['id_dokter']); ?>" class="btn btn-danger btn-xs">Delete</a>
                </td> -->
</table>

        <script type="text/javascript">
 
            var save_method; //for save method string
            var table;
 
            $(document).ready(function() {
                //datatables
                table = $('#table').DataTable({ 
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": '<?php echo site_url('dokter/json'); ?>',
                        "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                        {"data": "id_dokter",width:80},
                        {"data": "kd_dokter",width:90},
                        {"data": "nm_dokter",width:130},
                        {"data": "jk",width:100},
                        {"data": "tmp_lahir",width:100},
                        {"data": "tgl_lahir",width:100},
                        {"data": "gol_drh",width:100},
                        {"data": "agama",width:100},
                        {"data": "edit",width:100},
                        {"data": "remove",width:100},						
                    ],
                });
            });
        </script>

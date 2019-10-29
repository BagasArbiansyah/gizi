<div class="pull-right">
	<a href="<?php echo site_url('makanan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered" id="table" class="display" cellspacing="0" width="100%">
    <thead>
	<tr>
		<th>Kd Makanan</th>
		<th>Nm Makanan</th>
		<th>Kandungangizi</th>
		<th>Komposisi</th>
		<!-- <th>Actions</th>  -->
    </tr>
	</thead>
	<tfoot>
	<tr>
		<th>Kd Makanan</th>
		<th>Nm Makanan</th>
		<th>Kandungangizi</th>
		<th>Komposisi</th>
		<!-- <th>Actions</th>  -->
    </tr>
	</tfoot>
	<!-- <?php foreach($list as $m){ ?>
    <tr>
		<td><?php echo $m['kd_makanan']; ?></td>
		<td><?php echo $m['nm_makanan']; ?></td>
		<td><?php echo $m['kandungangizi']; ?></td>
		<td><?php echo $m['komposisi']; ?></td>
		<td>
            <a href="<?php echo site_url('makanan/edit/'.$m['kd_makanan']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('makanan/remove/'.$m['kd_makanan']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?> -->
</table>

<script type="text/javascript">
    var table;
    $(document).ready(function() {
 
        //datatables
        table = $('#table').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('makanan/get_data_user')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
        });
 
    });
 
</script>

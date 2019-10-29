<?php echo form_open('makanan/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nm_makanan" class="col-md-4 control-label">Nm Makanan</label>
		<div class="col-md-8">
			<input type="text" name="nm_makanan" value="<?php echo $this->input->post('nm_makanan'); ?>" class="form-control" id="nm_makanan" />
		</div>
	</div>
	<div class="form-group">
		<label for="kandungangizi" class="col-md-4 control-label">Kandungangizi</label>
		<div class="col-md-8">
			<input type="text" name="kandungangizi" value="<?php echo $this->input->post('kandungangizi'); ?>" class="form-control" id="kandungangizi" />
		</div>
	</div>
	<div class="form-group">
		<label for="komposisi" class="col-md-4 control-label">Komposisi</label>
		<div class="col-md-8">
			<input type="text" name="komposisi" value="<?php echo $this->input->post('komposisi'); ?>" class="form-control" id="komposisi" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
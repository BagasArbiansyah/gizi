<?php echo form_open('pegawai/edit/'.$pegawai['id_pegawai'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="jk" class="col-md-4 control-label">Jk</label>
		<div class="col-md-8">
			<input type="text" name="jk" value="<?php echo ($this->input->post('jk') ? $this->input->post('jk') : $pegawai['jk']); ?>" class="form-control" id="jk" />
		</div>
	</div>
	<div class="form-group">
		<label for="tmp_lahir" class="col-md-4 control-label">Tmp Lahir</label>
		<div class="col-md-8">
			<input type="text" name="tmp_lahir" value="<?php echo ($this->input->post('tmp_lahir') ? $this->input->post('tmp_lahir') : $pegawai['tmp_lahir']); ?>" class="form-control" id="tmp_lahir" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_lahir" class="col-md-4 control-label">Tgl Lahir</label>
		<div class="col-md-8">
			<input type="text" name="tgl_lahir" value="<?php echo ($this->input->post('tgl_lahir') ? $this->input->post('tgl_lahir') : $pegawai['tgl_lahir']); ?>" class="form-control" id="tgl_lahir" />
		</div>
	</div>
	<div class="form-group">
		<label for="gol_drh" class="col-md-4 control-label">Gol Drh</label>
		<div class="col-md-8">
			<input type="text" name="gol_drh" value="<?php echo ($this->input->post('gol_drh') ? $this->input->post('gol_drh') : $pegawai['gol_drh']); ?>" class="form-control" id="gol_drh" />
		</div>
	</div>
	<div class="form-group">
		<label for="agama" class="col-md-4 control-label">Agama</label>
		<div class="col-md-8">
			<input type="text" name="agama" value="<?php echo ($this->input->post('agama') ? $this->input->post('agama') : $pegawai['agama']); ?>" class="form-control" id="agama" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_pegawai" class="col-md-4 control-label">Kd Pegawai</label>
		<div class="col-md-8">
			<input type="text" name="kd_pegawai" value="<?php echo ($this->input->post('kd_pegawai') ? $this->input->post('kd_pegawai') : $pegawai['kd_pegawai']); ?>" class="form-control" id="kd_pegawai" />
		</div>
	</div>
	<div class="form-group">
		<label for="nm_pegawai" class="col-md-4 control-label">Nm Pegawai</label>
		<div class="col-md-8">
			<input type="text" name="nm_pegawai" value="<?php echo ($this->input->post('nm_pegawai') ? $this->input->post('nm_pegawai') : $pegawai['nm_pegawai']); ?>" class="form-control" id="nm_pegawai" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
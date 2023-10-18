<?php
//notifikasi

if ($this->session->flashdata('sukses')) {
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
}
?>

<?php
//error upload
if(isset($error)) {
    echo '<p class="alert alert-warning">';
    echo $error;
    echo '</p>';
}

//notifikasi eror
echo validation_errors('<div class="alert alert-warning">', '</div>');

//form open
echo form_open_multipart(base_url('admin/konfigurasi/logo'), 'class="form-horizontal"');
?>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Website</label>
    <div class="col-sm-5">
        <input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required >
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Upload Logo</label>
    <div class="col-sm-5">
        <input type="file" name="logo" class="form-control" placeholder="Logo" 
        value="<?php echo $konfigurasi->logo ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Logo Sebelumnya</label>
    <div class="col-sm-5">
    <img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->logo) ?>" class="img img-responsive img-thumbnail" width="200">
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
        <button class="btn btn-success btn-sm" name="submit" type="submit">
            <i class="fa fa-save"></i> Simpan
        </button>
        <button class="btn btn-info btn-sm" name="reset" type="reset">
            <i class="fa fa-times"></i> Reset
        </button>
    </div>
</div>

<?php echo form_close(); ?>
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
echo form_open_multipart(base_url('admin/banner/tambah'), ' class="form-horizontal"');
?>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-5">
        <input type="text" name="judul" class="form-control" placeholder="Judul Banner" 
        value="<?php echo set_value('judul') ?>" required/>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-5">
        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan Banner" 
        value="<?php echo set_value('keterangan') ?>" required/>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Upload Gambar Banner</label>
    <div class="col-sm-5">
        <input type="file" name="gambar" class="form-control" required="required">
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
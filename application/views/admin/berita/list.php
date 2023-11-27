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
echo form_open_multipart(base_url('admin/berita/'), 'class="form-horizontal"');
?>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Judul Berita Pertama</label>
    <div class="col-sm-5">
        <input type="text" name="judul_berita_1" class="form-control" placeholder="Judul Pertama" value="<?php echo $berita->judul_berita_1 ?>" required >
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Keterangan </label>
    <div class="col-sm-5">
        <textarea name="keterangan_1" class="form-control" placeholder="Keterangan Judul pertama" id="summernote"><?php echo 
        $berita->keterangan_1 ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Judul Berita Kedua</label>
    <div class="col-sm-5">
        <input type="text" name="judul_berita_2" class="form-control" placeholder="Judul Kedua" value="<?php echo $berita->judul_berita_2 ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-5">
        <textarea name="keterangan_2" class="form-control" placeholder="Keterangan Judul Kedua" id="summernote1"><?php echo 
        $berita->keterangan_2 ?></textarea>
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
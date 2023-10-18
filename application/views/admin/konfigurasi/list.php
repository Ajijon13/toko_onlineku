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
echo form_open_multipart(base_url('admin/konfigurasi/'), 'class="form-horizontal"');
?>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Website</label>
    <div class="col-sm-5">
        <input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required >
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Tagline/Moto/Slogan</label>
    <div class="col-sm-5">
        <input type="text" name="tagline" class="form-control" placeholder="Tagline/Moto/Slogan" value="<?php echo $konfigurasi->tagline ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $konfigurasi->email ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Website</label>
    <div class="col-sm-5">
        <input type="text" name="website" class="form-control" placeholder="Website" value="<?php echo $konfigurasi->website ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Alamat Facebook</label>
    <div class="col-sm-5">
        <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?php echo $konfigurasi->facebook ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Alamat Instagram</label>
    <div class="col-sm-5">
        <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?php echo $konfigurasi->instagram ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Telepon/HP</label>
    <div class="col-sm-5">
        <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon/HP" value="<?php echo $konfigurasi->telepon ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5">
        <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo 
        $konfigurasi->alamat ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Keyword (untuk SEO google)</label>
    <div class="col-sm-5">
        <textarea name="keywords" class="form-control" placeholder="Keyword (untuk SEO google)"><?php echo 
        $konfigurasi->keywords ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Kode Metatext</label>
    <div class="col-sm-5">
        <textarea name="metatext" class="form-control" placeholder="Metatext"><?php echo 
        $konfigurasi->metatext ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-5">
        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"><?php echo 
        $konfigurasi->deskripsi ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Rekening Pembayaran</label>
    <div class="col-sm-5">
        <textarea name="rekening_pembayaran" class="form-control" placeholder="Rekening Pembayaran"><?php echo 
        $konfigurasi->rekening_pembayaran ?></textarea>
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
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
echo form_open_multipart(base_url('admin/produk/tambah'), 'class="form-horizontal"');
?>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Produk</label>
    <div class="col-sm-5">
        <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" value="<?php echo set_value('nama_produk') ?>" required />
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Kode Produk</label>
    <div class="col-sm-5">
        <input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" value="<?php echo set_value('kode_produk') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Kategori Produk</label>
    <div class="col-sm-5">
        <select name="id_kategori" class="form-control">
            <?php foreach ($kategori as $kategori) { ?>
                <option value="<?php echo $kategori->id_kategori ?> ">
                    <?php echo $kategori->nama_kategori ?>
                </option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Harga Produk</label>
    <div class="col-sm-5">
        <input type="number" name="harga" class="form-control" placeholder="Harga Produk" value="<?php echo set_value('harga') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Stok Produk</label>
    <div class="col-sm-5">
        <input type="number" name="stok" class="form-control" placeholder="Stok Produk" value="<?php echo set_value('stok') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Ukuran Produk</label>
    <div class="col-sm-5">
        <input type="text" name="ukuran" class="form-control" placeholder="Ukuran Produk" value="<?php echo set_value('ukuran') ?>" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-5">
        <textarea name="keterangan" class="form-control" placeholder="keterangan" id="summernote"><?php echo 
        set_value('keterangan') ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Keyword (untuk SEO google)</label>
    <div class="col-sm-5">
        <textarea name="keywords" class="form-control" placeholder="Keyword (untuk SEO google)"><?php echo 
        set_value('keywords') ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Upload Gambar Produk</label>
    <div class="col-sm-5">
        <input type="file" name="gambar" class="form-control" required="required">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Status Produk</label>
    <div class="col-sm-5">
        <select name="status_produk" class="form-control">
            <option value="Publish">
                Publikasikan
            </option>
            <option value="Draft">
                Simpan Sebagai Draft
            </option>
        </select>
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
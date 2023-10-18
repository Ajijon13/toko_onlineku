<?php
//error upload
if (isset($error)) {
    echo '<p class="alert alert-warning">';
    echo $error;
    echo '</p>';
}

//notifikasi eror
echo validation_errors('<div class="alert alert-warning">', '</div>');

//form open
echo form_open_multipart(base_url('admin/produk/gambar/' .$produk->id_produk), 'class="form-horizontal"');
?>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Judul Gambar</label>
    <div class="col-sm-5">
        <input type="text" name="judul_gambar" class="form-control" placeholder="Judul Gambar Produk" value="<?php echo set_value('judul_gambar') ?>" required/>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Unggah Gambar</label>
    <div class="col-sm-5">
        <input type="file" name="gambar" class="form-control" placeholder="Gambar Produk" value="<?php echo set_value('gambar') ?>" required/>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
        <button class="btn btn-success btn-sm" name="submit" type="submit">
            <i class="fa fa-save"></i> Simpan dan Unggah Gambar
        </button>
        <button class="btn btn-info btn-sm" name="reset" type="reset">
            <i class="fa fa-times"></i> Reset
        </button>
    </div>
</div>

<?php echo form_close(); ?>

<?php
//notifikasi

if ($this->session->flashdata('sukses')) {
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
}
?>

<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($gambar as $gambar) { ?>
            <tr>
                <td><?= $no ?></td>
                <td>
                    <img src="<?php echo base_url('./assets/upload/image/thumbs/' . $gambar->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
                </td>
                <td><?= $gambar->judul_gambar ?></td>
                <td>

                    <a href="<?= base_url('admin/produk/delete_gambar/' . $produk->id_produk.'/'.$gambar->id_gambar) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus </a>

                </td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>
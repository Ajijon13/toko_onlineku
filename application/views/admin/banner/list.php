<p>
    <a href="<?= base_url('admin/banner/tambah') ?>" class="btn btn-success btn-sm">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
</p>

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
            <th>Judul</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($banner as $banner) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><img src="<?php echo base_url('./assets/upload/banner/image/thumbs/' . $banner->gambar) ?>" class="img img-responsive img-thumbnail" width="60"></td>
                <td><?= $banner->judul ?></td>
                <td><?= $banner->keterangan ?></td>
                <td>
                    <a href="<?= base_url('admin/banner/edit/' . $banner->id_banner) ?>" 
                    class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit </a>

                    <?php include('delete.php') ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
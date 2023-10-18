<p>
    <a href="<?= base_url('admin/produk/tambah') ?>" class="btn btn-success btn-sm">
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
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($produk as $produk) { ?>
            <tr>
                <td><?= $no ?></td>
                <td>
                    <img src="<?php echo base_url('./assets/upload/image/thumbs/' . $produk->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
                </td>
                <td><?= $produk->nama_produk ?></td>
                <td><?= $produk->nama_kategori ?></td>
                <td><?= number_format($produk->harga, '0', ',', '.') ?></td>
                <td><?= $produk->status_produk ?></td>
                <td>
                    <a href="<?= base_url('admin/produk/gambar/' . $produk->id_produk) ?>" class="btn btn-success btn-xs"><i class="fa fa-image"></i> Gambar </a>

                    <a href="<?= base_url('admin/produk/edit/' . $produk->id_produk) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit </a>

                    <?php include('delete.php') ?>
                </td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>
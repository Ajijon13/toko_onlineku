<p>
    <a href="<?= base_url('admin/kategori/tambah') ?>" class="btn btn-success btn-sm">
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
            <th>Nama</th>
            <th>Slug</th>
            <th>Urutan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($kategori as $kategori) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $kategori->nama_kategori ?></td>
                <td><?= $kategori->slug_kategori ?></td>
                <td><?= $kategori->urutan ?></td>
                <td>
                    <a href="<?= base_url('admin/kategori/edit/' . $kategori->id_kategori) ?>" 
                    class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit </a>

                    <a href="<?= base_url('admin/kategori/delete/' . $kategori->id_kategori) ?>" 
                    class="btn btn-danger btn-xs" onclick="return confirm('Yakin anda akan menghapus data ini?')"><i class="fa fa-trash-o"></i> Hapus </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
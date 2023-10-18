<p>
    <a href="<?= base_url('admin/user/tambah') ?>" class="btn btn-success btn-sm">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
</p>

<?php
//notifikasi

if ($this->session->flashdata('sukses')) {
    echo '<p class="alert alert-success swalDefaultSuccess">';
    echo $this->session->flashdata('sukses');
}
?>

<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Username</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($user as $user) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $user->nama ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->akses_level ?></td>
                <td>
                    <a href="<?= base_url('admin/user/edit/' . $user->id_user) ?>" 
                    class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit </a>

                    <a href="<?= base_url('admin/user/delete/' . $user->id_user) ?>" 
                    class="btn btn-danger btn-xs" onclick="return confirm('Yakin anda akan menghapus data ini?')"><i class="fa fa-trash-o"></i> Hapus </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
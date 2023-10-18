<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $produk->id_produk ?>">
    <i class="fa fa-trash"></i> Hapus
</button>


<div class="modal fade" id="delete-<?php echo $produk->id_produk ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Hapus Data Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning alert-dismissible">
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Peringatan!</h5>
                    Yakin anda mengahpus data ini? Data yang dihapus tidak dapat dikembalikan.
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Keluar</button>
                <a href="<?php echo base_url('admin/produk/delete/' .$produk->id_produk) ?>" class="btn btn-danger">
                <i class="fa fa-trash"></i> Ya, Hapus Data Ini</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
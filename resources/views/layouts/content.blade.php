<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA KATEGORI CHECKLIST</h6>
        <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalCreate"><i class ="fas fa-plus fa-fw"></i>Tambah Data</a><br><br>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col"><center>#</center></th>
                    <th scope="col"><center>Nama Item</center></th>
                    <th scope="col"><center>Aksi</center></th>
                </tr>
                <tr>
                    <th scope="row"><center>1</center></th>
                    <td><center>Mark</center></td>
                    <td><center><a href="" class="btn btn" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil-square"></i>Edit</a>
                    <a href="" class="btn btn" data-bs-toggle="modal" data-bs-target="#ModalDelete" style="color:red"><i class="bi bi-trash" style="color:red"></i>Hapus</a></center></td>
                </tr>
            </thead>
            <!-- modal create -->
            <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalCreateLabel">Tambah Data Kategori Checklist</h5>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Kategori:</label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="category name">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal edit -->
            <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalEditLabel">Edit Data Kategori Checklist</h5>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                     <label for="recipient-name" class="col-form-label">Nama Kategori:</label>
                                     <input type="text" class="form-control" id="recipient-name" placeholder="category name">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal delete -->
            <div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-dialog modal-dialog-centered">
                            <h5 class="modal-title" id="ModalDeleteLabel"><i class="bi bi-x-circle" style="font-size:50px;color:red"></i></h5>
                        </div>
                        <div class="text-center">
                            <h5 class="modal-title" id="ModalDeleteLabel">Apakah anda yakin?</h5>
                        </div>
                        <div class="text-center">
                            <h7 class="modal-title" id="ModalDeleteLabel" style="font-size:15px">
                                <p><center>Apakah anda ingin menghapus data ini?</center></p>
                                <p><center>Data yang sudah terhapus tidak dapat dikembalikan</center></p></h7>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                        </div><br>
                    </div>
                </div>
            </div>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
       $(document).ready(function() {
        // id modal yang ingin di listen event-nya ( listen event ketika modal hidden )
        $('#ModalCreate').on('hidden.bs.modal', function() {
            // log data -- untuk melihat apakah listen event sudah sesuai atau belum
            console.log('ModalCreate hidden');
            // atur nilai input nama di modal-tambah
            $('#recipient-name').val('');
        });
		}); 
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
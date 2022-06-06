@extends('layouts.master')

@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    <br>
            <!-- DataTales Example -->
            <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>DATA KATEGORI CHECKLIST</h5>
                        <a href="checklist/create" class="btn btn-primary" data-toggle="modal" data-target="#ModalCreate">Tambah Data</a><br>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>Nama Item</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><center><a class="btn btn-outline-warning" href="">Edit</a> |
                                    <a class="btn btn-outline-danger" href=""><i class="bi bi-trash"></i>Hapus</a></center></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
    
        </div>
</div>
        <!-- /.container-fluid -->
    
    </div>
    <!-- End of Main Content -->
    
    </div>
    <!-- End of Content Wrapper -->
    @include('checklist.modal.create')
@endsection


    
    
<?php
$halaman = "bunga";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';


include_once '../controllers/c_bunga.php';

$bunga = new c_bunga();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800"><?= $halaman ?></h1> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Produk Bunga</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <!-- start isi dari konten card  -->

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form action="../routers/r_bunga.php?aksi=tambah" method="POST" class="user" enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" id="exampleInputEmail" placeholder="Id" name="id_bunga" hidden>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama Bunga" name="nama_bunga">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="jenis" name="jenis_bunga">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Harga/satuan" name="harga">
                            </div>

                            <div class="form-group">
                                <input type="file" class="form-control-file" id="photo" placeholder="Photo" name="photo">
                            </div>

                            <div class="input-field">
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah Produk" id="" name="login">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2"></div>
                </div>

                <!-- end isi dari konten card  -->

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include_once 'template/footer.php';
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Input Caraousel</h5>

        <!-- Horizontal Form -->
        <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputText" name="judul">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-12 col-form-label">Pilih Foto dengan ukuran (1:3)</label>
                <div class="col-sm-12">
                    <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-square btn-primary m-2">Simpan</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
<?php foreach ($caraousel as $aa) { ?>
    <div class="card">
        <img src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">
                <?= $aa['judul'] ?>
            </h5>
            <td>
                <a href="<?= base_url('admin/caraousel/hapus/' . $aa['foto']) ?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                    class="btn btn-square btn-danger m-2"><i class="ri-delete-bin-5-line"></i></a>
            </td>
        </div>
    </div>
<?php } ?>
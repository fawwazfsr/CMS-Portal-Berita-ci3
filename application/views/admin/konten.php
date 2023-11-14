<div class="mt-3 mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#disablebackdrop">
        Tambah Berita
    </button>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Data Berita</h5>
        <div class="card-body">
            <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Berita</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Judul Konten</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="judul">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Kategori</label>
                                        <div class="col-sm-12">
                                            <select name="id_kategori" class="form-control">
                                                <?php $no = 1;
                                                foreach ($kategori as $aa) { ?>
                                                    <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                                                <?php }  ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Keterangan</label>
                                        <div class="col-sm-12">
                                            <textarea name="keterangan" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Foto</label>
                                        <div class="col-sm-12">
                                            <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="myalert">
            <?= $this->session->flashdata('alert', true) ?>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Konten</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Kategori Konten</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kreator</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($konten as $aa) { ?>
                    <tr>
                        <th scope="row">
                            <?= $no; ?>
                        </th>
                        <td>
                            <?= $aa['judul'] ?>
                        </td>
                        <td>
                            <?= $aa['keterangan'] ?>
                        </td>
                        <td>
                            <?= $aa['nama_kategori'] ?>
                        </td>
                        <td>
                            <?= $aa['tanggal'] ?>
                        </td>
                        <td>
                            <?= $aa['nama'] ?>
                        </td>
                        <td>
                            <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="blank">
                                <span class="badge bg-primary"><i class="bi bi-search"></i> Lihat Foto</span>
                            </a>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/konten/hapus_data/' . $aa['foto']) ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="badge bg-danger"><i class="ri-delete-bin-5-line"></i> hapus</a>

                            <button type="button" class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>"><span class="ri-edit-box-fill"> Edit</span>
                            </button>
                            <div class="card-body">
                                <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?= $aa['judul'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-12 col-form-label">Judul</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" name="judul" value="<?= $aa['judul'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-12 col-form-label">Kategori</label>
                                                            <div class="col-sm-12">
                                                                <select name="id_kategori" class="form-control">
                                                                    <?php $no = 1;
                                                                    foreach ($kategori as $uu) { ?>
                                                                        <option
                                                                        <?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected";} ?>
                                                                        value="<?= $uu['id_kategori'] ?>"><?= $uu['nama_kategori'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-12 col-form-label">Keterangan</label>
                                                            <div class="col-sm-12">
                                                                <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputText" class="col-sm-12 col-form-label">Foto</label>
                                                            <div class="col-sm-12">
                                                                <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="assets/tinymce/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
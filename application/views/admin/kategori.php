<div class="mt-3 mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#disablebackdrop">
        Tambah Kategori
    </button>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Data Kategori</h5>
        <div class="card-body">
            <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false" aria-hidden="true"
                style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Nama Kategori</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="nama_kategori">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
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
                    <th scope="col">Nama kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kategori as $aa) { ?>
                    <tr>
                        <th scope="row">
                            <?= $no; ?>
                        </th>
                        <td>
                            <?= $aa['nama_kategori'] ?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/kategori/hapus_kategori/' . $aa['id_kategori']) ?>"
                                onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                class="btn btn-square btn-danger m-2"><i class="ri-delete-bin-5-line"></i></a>

                            <button type="button" class="btn btn-square btn-warning m-2" data-bs-toggle="modal"
                                data-bs-target="#edit<?= $aa['id_kategori'] ?>">
                                <i class="ri-edit-box-fill"></i>
                            </button>
                            <div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1"
                                data-bs-backdrop="false" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Kategori</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <form action="<?= base_url('admin/kategori/edit_kategori') ?>"
                                                    method="post">
                                                    <input type="hidden" name="id_kategori"
                                                        value="<?= $aa['id_kategori'] ?>">
                                                    <div class="row mb-3">
                                                        <label for="inputText" class="col-sm-12 col-form-label">Nama
                                                            Kategori</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="nama_kategori"
                                                                value=" <?= $aa['nama_kategori'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
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
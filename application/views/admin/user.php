<div class="mt-3 mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#disablebackdrop">
        Tambah Pengguna
    </button>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Data Pengguna</h5>
        <div class="card-body">
            <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <form action="<?= base_url('admin/user/simpan') ?>" method="post">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Nama</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Username</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-12 col-form-label">Password</label>
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-12 col-form-label">Level</label>
                                        <div class="col-sm-12">
                                            <select class="form-select" aria-label="Default select example" name="level">
                                                <option value="admin">Admin</option>
                                                <option value="kontributor">Kontributor</option>
                                            </select>
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
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($user as $aa) { ?>
                    <tr>
                        <th scope="row">
                            <?= $no; ?>
                        </th>
                        <td>
                            <?= $aa['nama'] ?>
                        </td>
                        <td>
                            <?= $aa['username'] ?>
                        </td>
                        <td>
                            <?= $aa['level'] ?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/user/hapus_user/' . $aa['id_user']) ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-square btn-danger m-2"><i class="ri-delete-bin-5-line"></i></a>

                            <button type="button" class="btn btn-square btn-warning m-2" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user'] ?>">
                                <i class="ri-edit-box-fill"></i>
                            </button>
                            <div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" data-bs-backdrop="false" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Pengguna</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <form action="<?= base_url('admin/user/edit_user') ?>" method="post">
                                                    <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                                                    <div class="row mb-3">
                                                        <label for="inputText" class="col-sm-12 col-form-label">Nama</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="nama" value=" <?= $aa['nama'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputText" class="col-sm-12 col-form-label">Username</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" name="username" value=" <?= $aa['username'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-12 col-form-label">Level</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-select" aria-label="Default select example" name="level">
                                                                <option value="admin" <?php if ($aa['level'] == 'admin') {
                                                                                            echo "selected";
                                                                                        } ?>>Admin</option>
                                                                <option value="kontributor" <?php if ($aa['level'] == 'konstributor') {
                                                                                                echo "selected";
                                                                                            } ?>>Kontributor</option>
                                                            </select>
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
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
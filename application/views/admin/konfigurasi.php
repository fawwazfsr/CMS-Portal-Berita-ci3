<div id="myalert">
            <?= $this->session->flashdata('alert', true) ?>
        </div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Konfigurasi</h5>

        <!-- Horizontal Form -->
        <form action="<?= base_url('admin/konfigurasi/edit') ?>" method="post">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Website</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="judul_website" value="<?= $konfig->judul_website; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Profil</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="profil_website"><?= $konfig->profil_website; ?></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="instagram" value="<?= $konfig->instagram; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="email" value="<?= $konfig->email; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="alamat" value="<?= $konfig->alamat; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Whatsapp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="no_wa" value="<?= $konfig->no_wa; ?>">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
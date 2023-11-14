<div id="myalert">
            <?= $this->session->flashdata('alert', true) ?>
        </div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Change Password</h5>

        <!-- Horizontal Form -->
        <form action="<?= base_url('admin/gantipassword/simpan') ?>" method="post">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="passBaru">
                    
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Ulang Password Baru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" name="ulangpw" >
                </div>
            </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
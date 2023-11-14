<div id="myalert">
    <?= $this->session->flashdata('alert', true) ?>
</div>
<table class="table table-hover">
    <h5 class="card-title">Aktivitas User</h5>
    <div class="row">
        <div class="col-md-4">
            <form action="<?= base_url('admin/history'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search" name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <h5>Total data : <?= $total_rows; ?></h5>
        </div>
    </div>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Aktivitas</th>
            <th scope="col">Waktu</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($history)) : ?>
            <tr>
                <td colspan="4">
                    <div class="alert alert-danger" role="alert">
                        Data Not Found!
                    </div>
                </td>
            </tr>
        <?php endif; ?>
        <?php
        foreach ($history as $hh) { ?>
            <tr>
                <th scope="row">
                    <?= ++$start; ?>
                </th>
                <td>
                    <?= $hh['username'] ?>
                </td>
                <td>
                    <?= $hh['aktivitas'] ?>
                </td>
                <td>
                    <?= $hh['waktu'] ?>
                </td>
            </tr>
        <?php
        } ?>
    </tbody>
</table>
<?= $this->pagination->create_links(); ?>
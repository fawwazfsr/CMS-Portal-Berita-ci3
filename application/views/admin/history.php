<div id="myalert">
    <?= $this->session->flashdata('alert', true) ?>
</div>
<table id="example" class="table table-striped" style="width:100%">
    <h5 class="card-title">Aktivitas User</h5>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Aktivitas</th>
            <th scope="col">Waktu</th>
        </tr>
    </thead>
    <tbody>
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

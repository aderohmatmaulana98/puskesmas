<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold"><?= $title; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="card shadow">
                <?= $this->session->flashdata('message');  ?>
                <div class="p-4">
                    <a href="<?= base_url('user/insert_poli') ?>" class="btn btn-primary">Insert Data</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">nama_role</th>
                            <th scope="col">date_created</th>
                            <th scope="col">update_created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($poli as $p) : ?>
                            <tr>
                                <td><?= $p['id'] ?></td>
                                <td><?= $p['nama_poli'] ?></td>
                                <td><?= $p['date_created'] ?></td>
                                <td><?= $p['update_created'] ?></td>
                                <td>
                                    <a href="<?= base_url('user/update_poli/' . $p['id']) ?>"><span class="badge badge-pill badge-success">Update</span></a>
                                    <a href="<?= base_url('user/delete_poli/' . $p['id']) ?>"><span class="badge badge-pill badge-danger">Delete</span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div>
                <h4>Query :</h4>
                <p><?= $query; ?></p>
            </div>
        </div>
    </div>
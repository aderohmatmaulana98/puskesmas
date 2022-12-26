<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold"><?= $title; ?></h2>
                        <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="card shadow">
                <?= $this->session->flashdata('message');  ?>
                <div class="p-4">
                    <a href="<?= base_url('user/insert_users') ?>" class="btn btn-primary">Insert Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">nama_lengkap</th>
                                <th scope="col">email</th>
                                <th scope="col">Password</th>
                                <th scope="col">id_role</th>
                                <th scope="col">date_created</th>
                                <th scope="col">update_created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $u) : ?>
                                <tr>
                                    <td><?= $u['id'] ?></td>
                                    <td><?= $u['nama_lengkap'] ?></td>
                                    <td><?= $u['email'] ?></td>
                                    <td><?= $u['password'] ?></td>
                                    <td><?= $u['id_role'] ?></td>
                                    <td><?= $u['date_created'] ?></td>
                                    <td><?= $u['update_created'] ?></td>
                                    <td>
                                        <a href="<?= base_url('user/update_users/' . $u['id']) ?>"><span class="badge badge-pill badge-success">Update</span></a>
                                        <a href="<?= base_url('user/delete_users/' . $u['id']) ?>"><span class="badge badge-pill badge-danger">Delete</span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <h4>Query :</h4>
                <p><?= $query; ?></p>
            </div>
        </div>
    </div>
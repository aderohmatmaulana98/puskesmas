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
                    <a href="<?= base_url('user/insert_dokter') ?>" class="btn btn-primary">Insert Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">id_poli</th>
                                <th scope="col">nama_dokter</th>
                                <th scope="col">tgl_lahir</th>
                                <th scope="col">jk</th>
                                <th scope="col">agama</th>
                                <th scope="col">no_hp</th>
                                <th scope="col">foto</th>
                                <th scope="col">date_created</th>
                                <th scope="col">update_created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dokter as $d) : ?>
                                <tr>
                                    <td><?= $d['id'] ?></td>
                                    <td><?= $d['id_poli'] ?></td>
                                    <td><?= $d['nama_dokter'] ?></td>
                                    <td><?= $d['tgl_lahir'] ?></td>
                                    <td><?= $d['jk'] ?></td>
                                    <td><?= $d['agama'] ?></td>
                                    <td><?= $d['no_hp'] ?></td>
                                    <td><?= $d['foto'] ?></td>
                                    <td><?= $d['date_created'] ?></td>
                                    <td><?= $d['update_created'] ?></td>
                                    <td>
                                        <a href="<?= base_url('user/update_dokter/' . $d['id']) ?>"><span class="badge badge-pill badge-success">Update</span></a>
                                        <a href="<?= base_url('user/delete_dokter/' . $d['id']) ?>"><span class="badge badge-pill badge-danger">Delete</span></a>
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
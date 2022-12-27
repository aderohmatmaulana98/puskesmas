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
                    <a href="<?= base_url('user/insert_pemeriksaan') ?>" class="btn btn-primary">Insert Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">id_kajian_awal</th>
                                <th scope="col">id_dokter</th>
                                <th scope="col">tanggal_jam</th>
                                <th scope="col">umur</th>
                                <th scope="col">anamnese_pemeriksaan_diagnosis</th>
                                <th scope="col">rencana_pelayanan_dan_therapi</th>
                                <th scope="col">date_created</th>
                                <th scope="col">update_created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pemeriksaan as $p) : ?>
                                <tr>
                                    <td><?= $p['id'] ?></td>
                                    <td><?= $p['id_kajian_awal'] ?></td>
                                    <td><?= $p['id_dokter'] ?></td>
                                    <td><?= $p['tanggal_jam'] ?></td>
                                    <td><?= $p['umur'] ?></td>
                                    <td><?= $p['anamnese_pemeriksaan_diagnosis'] ?></td>
                                    <td><?= $p['rencana_pelayanan_dan_therapi'] ?></td>
                                    <td><?= $p['date_created'] ?></td>
                                    <td><?= $p['update_created'] ?></td>
                                    <td>
                                        <a href="<?= base_url('user/update_pemeriksaan/' . $p['id']) ?>"><span class="badge badge-pill badge-success">Update</span></a>
                                        <a href="<?= base_url('user/delete_pemeriksaan/' . $p['id']) ?>"><span class="badge badge-pill badge-danger">Delete</span></a>
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
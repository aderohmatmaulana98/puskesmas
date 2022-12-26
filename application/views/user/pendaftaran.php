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
                    <a href="<?= base_url('user/insert_pendaftaran') ?>" class="btn btn-primary">Insert Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">id_users</th>
                                <th scope="col">no_rm</th>
                                <th scope="col">nama_lengkap</th>
                                <th scope="col">tempat_lahir</th>
                                <th scope="col">tanggal_lahir</th>
                                <th scope="col">alamat</th>
                                <th scope="col">status_perkawinan</th>
                                <th scope="col">agama</th>
                                <th scope="col">jenis_kelamin</th>
                                <th scope="col">no_hp</th>
                                <th scope="col">pekerjaan</th>
                                <th scope="col">pendidikan_terakhir</th>
                                <th scope="col">jaminan_asuransi</th>
                                <th scope="col">no_jaminan</th>
                                <th scope="col">nama_keluarga</th>
                                <th scope="col">berat_badan</th>
                                <th scope="col">date_created</th>
                                <th scope="col">update_created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pendaftaran as $p) : ?>
                                <tr>
                                    <td><?= $p['id'] ?></td>
                                    <td><?= $p['id_users'] ?></td>
                                    <td><?= $p['no_rm'] ?></td>
                                    <td><?= $p['nama_lengkap'] ?></td>
                                    <td><?= $p['tempat_lahir'] ?></td>
                                    <td><?= $p['tanggal_lahir'] ?></td>
                                    <td><?= $p['alamat'] ?></td>
                                    <td><?= $p['status_perkawinan'] ?></td>
                                    <td><?= $p['agama'] ?></td>
                                    <td><?= $p['jenis_kelamin'] ?></td>
                                    <td><?= $p['no_hp'] ?></td>
                                    <td><?= $p['pekerjaan'] ?></td>
                                    <td><?= $p['pendidikan_terakhir'] ?></td>
                                    <td><?= $p['jaminan_asuransi'] ?></td>
                                    <td><?= $p['no_jaminan'] ?></td>
                                    <td><?= $p['nama_keluarga'] ?></td>
                                    <td><?= $p['berat_badan'] ?></td>
                                    <td><?= $p['date_created'] ?></td>
                                    <td><?= $p['update_created'] ?></td>
                                    <td>
                                        <a href="<?= base_url('user/update_pendaftaran/' . $p['id']) ?>"><span class="badge badge-pill badge-success">Update</span></a>
                                        <a href="<?= base_url('user/delete_pendaftaran/' . $p['id']) ?>"><span class="badge badge-pill badge-danger">Delete</span></a>
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
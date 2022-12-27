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
                    <a href="<?= base_url('user/insert_kajian_awal') ?>" class="btn btn-primary">Insert Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">id_pendaftaran</th>
                                <th scope="col">hub_dgn_kk</th>
                                <th scope="col">no_hp_keluarga_terdekat</th>
                                <th scope="col">riwayat_penyakit_keluarga</th>
                                <th scope="col">pengkajian_psikologis</th>
                                <th scope="col">gangguan_jiwa_masa_lalu</th>
                                <th scope="col">ada_perilaku</th>
                                <th scope="col">tinggal_dengan</th>
                                <th scope="col">keluarga_terdekat</th>
                                <th scope="col">hubungannya</th>
                                <th scope="col">hambatan_bahasa</th>
                                <th scope="col">hambatan_budaya</th>
                                <th scope="col">hambatan_mobilitas_fisik</th>
                                <th scope="col">riwayat_alergi</th>
                                <th scope="col">date_created</th>
                                <th scope="col">update_created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kajian_awal as $ka) : ?>
                                <tr>
                                    <td><?= $ka['id'] ?></td>
                                    <td><?= $ka['id_pendaftaran'] ?></td>
                                    <td><?= $ka['hun_dgn_kk'] ?></td>
                                    <td><?= $ka['no_hp_keluarga_terdekat'] ?></td>
                                    <td><?= $ka['riwayat_penyakit_keluarga'] ?></td>
                                    <td><?= $ka['pengkajian_psikologis'] ?></td>
                                    <td><?= $ka['gangguan_jiwa_masa_lalu'] ?></td>
                                    <td><?= $ka['ada_perilaku'] ?></td>
                                    <td><?= $ka['tinggal_dengan'] ?></td>
                                    <td><?= $ka['keluarga_terdekat'] ?></td>
                                    <td><?= $ka['hubungannya'] ?></td>
                                    <td><?= $ka['hambatan_bahasa'] ?></td>
                                    <td><?= $ka['hambatan_budaya'] ?></td>
                                    <td><?= $ka['hambatan_mobilitas_fisik'] ?></td>
                                    <td><?= $ka['riwayat_alergi'] ?></td>
                                    <td><?= $ka['date_created'] ?></td>
                                    <td><?= $ka['update_created'] ?></td>
                                    <td>
                                        <a href="<?= base_url('user/update_kajian_awal/' . $ka['id']) ?>"><span class="badge badge-pill badge-success">Update</span></a>
                                        <a href="<?= base_url('user/delete_kajian_awal/' . $ka['id']) ?>"><span class="badge badge-pill badge-danger">Delete</span></a>
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
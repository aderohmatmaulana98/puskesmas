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
            <div class="card shadow p-3">
                <?= $this->session->flashdata('message');  ?>
                <h3 class="my-2">Update <?= $title ?></h3>
                <form action="<?= base_url('user/aksi_update_dokter') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_poli</label>
                        <select class="form-control" id="id_poli" name="id_poli">
                            <?php foreach ($poli as $p) : ?>
                                <option <?= ($dokter['id_poli'] == $p['id']) ? 'selected' : '' ?> value="<?= $p['id']; ?>"><?= $p['id'] . '-' . $p['nama_poli']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama_dokter</label>
                        <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?= $dokter['nama_dokter']; ?>" required>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $dokter['id']; ?>" hidden required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tgl_lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" value="<?= $dokter['tgl_lahir']; ?>" name="tgl_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jk</label>
                        <select name="jk" id="jk" class="form-control" required>
                            <option <?= ($dokter['jk'] == 'L') ? 'selected' : '' ?> value="L">Laki - Laki</option>
                            <option <?= ($dokter['jk'] == 'P') ? 'selected' : '' ?> value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">agama</label>
                        <select name="agama" id="agama" class="form-control" required>
                            <option <?= ($dokter['agama'] == 'Islam') ? 'selected' : '' ?> value="Islam">Islam</option>
                            <option <?= ($dokter['agama'] == 'Katholik') ? 'selected' : '' ?> value="Katholik">Katholik</option>
                            <option <?= ($dokter['agama'] == 'Protestan') ? 'selected' : '' ?> value="Protestan">Protestan</option>
                            <option <?= ($dokter['agama'] == 'Hindu') ? 'selected' : '' ?> value="Hindu">Hindu</option>
                            <option <?= ($dokter['agama'] == 'Budha') ? 'selected' : '' ?> value="Budha">Budha</option>
                            <option <?= ($dokter['agama'] == 'Kong hu chu') ? 'selected' : '' ?> value="Kong hu chu">Kong hu chu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">no_hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $dokter['no_hp'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">foto</label>
                        <input type="text" class="form-control" id="foto" name="foto" value="<?= $dokter['foto'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_created</label>
                        <input type="email" class="form-control" id="date_created" value="<?= $dokter['date_created'] ?>" name="date_created" id="date_created" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">update_created</label>
                        <input type="email" class="form-control" id="update_created" value="<?= date('Y-m-d H:i:s', time()) ?>" name="update_created" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('user/dokter') ?>" class="btn btn-secondary">Kembali</a>
                </form>
                <div>
                    <h4>Query :</h4>
                    <p><?= $query; ?></p>
                </div>
            </div>
        </div>
    </div>
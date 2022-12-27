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
                <form action="<?= base_url('user/aksi_update_jadwal_dokter') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_dokter</label>
                        <select class="form-control" id="id_dokter" name="id_dokter">
                            <?php foreach ($dokter as $d) : ?>
                                <option <?= ($jadwal_dokter['id_dokter'] == $d['id']) ? 'selected' : '' ?> value="<?= $d['id']; ?>"><?= $d['id'] . '-' . $d['nama_dokter']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hari</label>
                        <input type="text" class="form-control" id="hari" name="hari" value="<?= $jadwal_dokter['hari']; ?>" required>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $jadwal_dokter['id']; ?>" hidden required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">dari_jam</label>
                        <input type="time" class="form-control" id="dari_jam" value="<?= $jadwal_dokter['dari_jam']; ?>" name="dari_jam" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">sampai_jam</label>
                        <input type="time" class="form-control" id="sampai_jam" value="<?= $jadwal_dokter['sampai_jam']; ?>" name="sampai_jam" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_created</label>
                        <input type="email" class="form-control" id="date_created" value="<?= $jadwal_dokter['date_created'] ?>" name="date_created" id="date_created" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">update_created</label>
                        <input type="email" class="form-control" id="update_created" value="<?= date('Y-m-d H:i:s', time()) ?>" name="update_created" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('user/jadwal_dokter') ?>" class="btn btn-secondary">Kembali</a>
                </form>
                <div>
                    <h4>Query :</h4>
                    <p><?= $query; ?></p>
                </div>
            </div>
        </div>
    </div>
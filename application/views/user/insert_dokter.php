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
            <div class="card shadow p-3">
                <?= $this->session->flashdata('message');  ?>
                <h3 class="my-2">Insert <?= $title ?></h3>
                <form action="<?= base_url('user/aksi_insert_dokter') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_poli</label>
                        <select class="form-control" id="id_poli" name="id_poli">
                            <option value="" selected disabled>Pilih id_poli</option>
                            <?php foreach ($poli as $p) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['id'] . '-' . $p['nama_poli']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama_dokter</label>
                        <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tgl_lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jk</label>
                        <select name="jk" id="jk" class="form-control" required>
                            <option value="">Pilih jenis kelamin</option>
                            <option value="L">Laki - Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">agama</label>
                        <select name="agama" id="agama" class="form-control" required>
                            <option value="">Pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kong hu chu">Kong hu chu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">no_hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">foto</label>
                        <input type="text" class="form-control" id="foto" name="foto" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_created</label>
                        <input type="email" class="form-control" id="date_created" value="<?= date('Y-m-d H:i:s', time()) ?>" name="date_created" id="date_created" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">update_created</label>
                        <input type="email" class="form-control" id="update_created" value="NULL" name="update_created" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('user/dokter') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
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
                <form action="<?= base_url('user/aksi_insert_pendaftaran') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_user</label>
                        <select class="form-control" id="id_user" name="id_user" required>
                            <option value="">Pilih id_users</option>
                            <?php foreach ($users as $u) : ?>
                                <option value="<?= $u['id'] ?>"><?= $u['id'] . '-' . $u['nama_lengkap'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama_lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tempat_lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" id="tempat_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal_lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">status_perkawinan</label>
                        <select class="form-control" id="status_perkawinan" name="status_perkawinan" required>
                            <option value="" selected disabled>pilih status_perkawinan</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">agama</label>
                        <select class="form-control" id="agama" name="agama" required>
                            <option value="" selected disabled>pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kong hu chu">Kong hu chu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jenis_kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="" selected disabled>pilih jenis_kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">no_hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">pekerjaan</label>
                        <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                            <option value="" selected disabled>pilih pekerjaan</option>
                            <option value="PNS">PNS</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">pendidikan_terakhir</label>
                        <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                            <option value="" selected disabled>pilih pendidikan_terakhir</option>
                            <option value="SD">SD</option>
                            <option value="SMP/Sederajat">SMP</option>
                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="S1/D4">D4</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jaminan_asuransi</label>
                        <select class="form-control" id="jaminan_asuransi" name="jaminan_asuransi" required>
                            <option value="" selected disabled>pilih jaminan_asuransi</option>
                            <option value="BPJS">BPJS</option>
                            <option value="Jamkesmas">Jamkesmas</option>
                            <option value="Jamkesda">Jamkesda</option>
                            <option value="Askes">Askes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">no_jaminan</label>
                        <input type="text" class="form-control" id="no_jaminan" name="no_jaminan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama_keluarga</label>
                        <input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">berat_badan</label>
                        <input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_created</label>
                        <input type="datetime" class="form-control" id="date_created" value="<?= date('Y-m-d H:i:s', time()) ?>" name="date_created" id="date_created" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">update_created</label>
                        <input type="datetime" class="form-control" id="update_created" value="NULL" name="update_created" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('user/pendaftaran') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
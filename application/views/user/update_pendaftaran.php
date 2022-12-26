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
                <form action="<?= base_url('user/aksi_update_pendaftaran') ?>" method="POST">

                    <div class="form-group">
                        <label for="exampleInputEmail1">nama_lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" value="<?= $pendaftaran['nama_lengkap'] ?>" name="nama_lengkap" required>
                        <input type="text" class="form-control" id="id" value="<?= $pendaftaran['id'] ?>" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tempat_lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" value="<?= $pendaftaran['tempat_lahir'] ?>" name="tempat_lahir" id="tempat_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal_lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" value="<?= $pendaftaran['tanggal_lahir'] ?>" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pendaftaran['alamat'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">status_perkawinan</label>
                        <select class="form-control" id="status_perkawinan" name="status_perkawinan" required>
                            <option <?= ($pendaftaran['status_perkawinan'] == 'Menikah') ? 'selected' : '' ?> value="Menikah">Menikah</option>
                            <option <?= ($pendaftaran['status_perkawinan'] == 'Belum Menikah') ? 'selected' : '' ?> value="Belum Menikah">Belum Menikah</option>
                            <option <?= ($pendaftaran['status_perkawinan'] == 'Cerai') ? 'selected' : '' ?> value="Cerai">Cerai</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">agama</label>
                        <select class="form-control" id="agama" name="agama" required>
                            <option <?= ($pendaftaran['agama'] == 'Islam') ? 'selected' : '' ?> value="Islam">Islam</option>
                            <option <?= ($pendaftaran['agama'] == 'Katholik') ? 'selected' : '' ?> value="Katholik">Katholik</option>
                            <option <?= ($pendaftaran['agama'] == 'Protestan') ? 'selected' : '' ?> value="Protestan">Protestan</option>
                            <option <?= ($pendaftaran['agama'] == 'Hindu') ? 'selected' : '' ?> value="Hindu">Hindu</option>
                            <option <?= ($pendaftaran['agama'] == 'Budha') ? 'selected' : '' ?> value="Budha">Budha</option>
                            <option <?= ($pendaftaran['agama'] == 'Kong hu chu') ? 'selected' : '' ?> value="Kong hu chu">Kong hu chu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jenis_kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="" selected disabled>pilih jenis_kelamin</option>
                            <option <?= ($pendaftaran['jenis_kelamin'] == 'L') ? 'selected' : '' ?> value="L">Laki-laki</option>
                            <option <?= ($pendaftaran['jenis_kelamin'] == 'P') ? 'selected' : '' ?> value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">no_hp</label>
                        <input type="text" class="form-control" id="no_hp" value="<?= $pendaftaran['no_hp']; ?>" name="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">pekerjaan</label>
                        <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                            <option <?= ($pendaftaran['pekerjaan'] == 'PNS') ? 'selected' : '' ?> value="PNS">PNS</option>
                            <option <?= ($pendaftaran['pekerjaan'] == 'Wiraswasta') ? 'selected' : '' ?> value="Wiraswasta">Wiraswasta</option>
                            <option <?= ($pendaftaran['pekerjaan'] == 'Karyawan') ? 'selected' : '' ?> value="Karyawan">Karyawan</option>
                            <option <?= ($pendaftaran['pekerjaan'] == 'Buruh') ? 'selected' : '' ?> value="Buruh">Buruh</option>
                            <option <?= ($pendaftaran['pekerjaan'] == 'Lainnya') ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">pendidikan_terakhir</label>
                        <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'SD') ? 'selected' : '' ?> value="SD">SD</option>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'SMP/Sederajat') ? 'selected' : '' ?> value="SMP/Sederajat">SMP</option>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'SMA/Sederajat') ? 'selected' : '' ?> value="SMA/Sederajat">SMA/Sederajat</option>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'D1') ? 'selected' : '' ?> value="D1">D1</option>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'D2') ? 'selected' : '' ?> value="D2">D2</option>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'D3') ? 'selected' : '' ?> value="D3">D3</option>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'D4') ? 'selected' : '' ?> value="S1/D4">D4</option>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'S2') ? 'selected' : '' ?> value="S2">S2</option>
                            <option <?= ($pendaftaran['pendidikan_terakhir'] == 'S3') ? 'selected' : '' ?> value="S3">S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">jaminan_asuransi</label>
                        <select class="form-control" id="jaminan_asuransi" name="jaminan_asuransi" required>
                            <option <?= ($pendaftaran['jaminan_asuransi'] == 'BPJS') ? 'selected' : '' ?> value="BPJS">BPJS</option>
                            <option <?= ($pendaftaran['jaminan_asuransi'] == 'Jamkesmas') ? 'selected' : '' ?> value="Jamkesmas">Jamkesmas</option>
                            <option <?= ($pendaftaran['jaminan_asuransi'] == 'Jamkesda') ? 'selected' : '' ?> value="Jamkesda">Jamkesda</option>
                            <option <?= ($pendaftaran['jaminan_asuransi'] == 'Askes') ? 'selected' : '' ?> value="Askes">Askes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">no_jaminan</label>
                        <input type="text" class="form-control" id="no_jaminan" value="<?= $pendaftaran['no_jaminan'] ?>" name="no_jaminan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama_keluarga</label>
                        <input type="text" class="form-control" id="nama_keluarga" value="<?= $pendaftaran['nama_keluarga'] ?>" name="nama_keluarga" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">berat_badan</label>
                        <input type="number" class="form-control" id="berat_badan" value="<?= $pendaftaran['berat_badan'] ?>" name="berat_badan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_created</label>
                        <input type="datetime" class="form-control" id="date_created" value="<?= $pendaftaran['date_created'] ?>" name="date_created" id="date_created" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">update_created</label>
                        <input type="datetime" class="form-control" id="update_created" value="<?= date('Y-m-d H:i:s', time()) ?>" name="update_created" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('user/pendaftaran') ?>" class="btn btn-secondary">Kembali</a>
                </form>
                <div>
                    <h4>Query :</h4>
                    <p><?= $query; ?></p>
                </div>
            </div>
        </div>
    </div>
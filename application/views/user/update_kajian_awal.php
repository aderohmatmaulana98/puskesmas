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
                <form action="<?= base_url('user/aksi_update_kajian_awal') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_pendaftaran</label>
                        <select class="form-control" id="id_pendaftaran" name="id_pendaftaran" required>
                            <option value="">Pilih id_pendaftaran</option>
                            <?php foreach ($pendaftaran as $p) : ?>
                                <option <?= ($kajian_awal['id_pendaftaran'] == $p['id']) ? 'selected' : '' ?> value="<?= $p['id']; ?>"><?= $p['id']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hub_dgn_kk</label>
                        <input type="text" class="form-control" id="hub_dgn_kk" name="hub_dgn_kk" value="<?= $kajian_awal['hun_dgn_kk'] ?>" required>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $kajian_awal['id'] ?>" hidden required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">no_hp_keluarga_terdekat</label>
                        <input type="text" class="form-control" id="no_hp_keluarga_terdekat" value="<?= $kajian_awal['no_hp_keluarga_terdekat'] ?>" name="no_hp_keluarga_terdekat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">riwayat_penyakit_keluarga</label>
                        <select class="form-control" id="riwayat_penyakit_keluarga" name="riwayat_penyakit_keluarga" required>
                            <option <?= ($kajian_awal['riwayat_penyakit_keluarga'] == 'Hipertensi') ? 'selected' : '' ?> value="Hipertensi">Hipertensi</option>
                            <option <?= ($kajian_awal['riwayat_penyakit_keluarga'] == 'DM') ? 'selected' : '' ?> value="DM">DM</option>
                            <option <?= ($kajian_awal['riwayat_penyakit_keluarga'] == 'Jantung') ? 'selected' : '' ?> value="Jantung">Jantung</option>
                            <option <?= ($kajian_awal['riwayat_penyakit_keluarga'] == 'Paru-Paru') ? 'selected' : '' ?> value="Paru-Paru">Paru-Paru</option>
                            <option <?= ($kajian_awal['riwayat_penyakit_keluarga'] == 'Kanker') ? 'selected' : '' ?> value="Kanker">Kanker</option>
                            <option <?= ($kajian_awal['riwayat_penyakit_keluarga'] == 'Asma') ? 'selected' : '' ?> value="Asma">Asma</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">pengkajian_psikologis</label>
                        <select class="form-control" id="pengkajian_psikologis" name="pengkajian_psikologis" required>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Tidak semangat') ? 'selected' : '' ?> value="Tidak semangat">Tidak semangat</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Rasa tertekan') ? 'selected' : '' ?> value="Rasa tertekan">Rasa tertekan</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Depresi') ? 'selected' : '' ?> value="Depresi">Depresi</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Sulit tidur') ? 'selected' : '' ?> value="Sulit tidur">Sulit tidur</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Cepat lelah') ? 'selected' : '' ?> value="Cepat lelah">Cepat lelah</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Sulit konsentrasi') ? 'selected' : '' ?> value="Sulit konsentrasi">Sulit konsentrasi</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Sulit bicara') ? 'selected' : '' ?> value="Sulit bicara">Sulit bicara</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Merasa lelah') ? 'selected' : '' ?> value="Merasa lelah">Merasa lelah</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Cemas') ? 'selected' : '' ?> value="Cemas">Cemas</option>
                            <option <?= ($kajian_awal['pengkajian_psikologis'] == 'Tidak ada') ? 'selected' : '' ?> value="Tidak ada">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">gangguan_jiwa_masa_lalu</label>
                        <select class="form-control" id="gangguan_jiwa_masa_lalu" name="gangguan_jiwa_masa_lalu" required>
                            <option <?= ($kajian_awal['gangguan_jiwa_masa_lalu'] == 'Ya') ? 'selected' : '' ?> value="Ya">Ya</option>
                            <option <?= ($kajian_awal['gangguan_jiwa_masa_lalu'] == 'Tidak') ? 'selected' : '' ?> value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ada_perilaku</label>
                        <select class="form-control" id="ada_perilaku" name="ada_perilaku" required>
                            <option <?= ($kajian_awal['ada_perilaku'] == 'Perilaku kekerasan') ? 'selected' : '' ?> value="Perilaku kekerasan">Perilaku kekerasan</option>
                            <option <?= ($kajian_awal['ada_perilaku'] == 'Halusinasi') ? 'selected' : '' ?> value="Halusinasi">Halusinasi</option>
                            <option <?= ($kajian_awal['ada_perilaku'] == 'Waham') ? 'selected' : '' ?> value="Waham">Waham</option>
                            <option <?= ($kajian_awal['ada_perilaku'] == 'Mood disorder') ? 'selected' : '' ?> value="Mood disorder">Mood disorder</option>
                            <option <?= ($kajian_awal['ada_perilaku'] == 'Gangguan memori') ? 'selected' : '' ?> value="Gangguan memori">Gangguan memori</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tinggal_dengan</label>
                        <select class="form-control" id="tinggal_dengan" name="tinggal_dengan" required>
                            <option <?= ($kajian_awal['tinggal_dengan'] == 'Sendiri') ? 'selected' : '' ?> value="Sendiri">Sendiri</option>
                            <option <?= ($kajian_awal['tinggal_dengan'] == 'Orang Tua') ? 'selected' : '' ?> value="Orang Tua">Orang Tua</option>
                            <option <?= ($kajian_awal['tinggal_dengan'] == 'Suami Istri') ? 'selected' : '' ?> value="Suami Istri">Suami Istri</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">keluarga_terdekat</label>
                        <input type="text" class="form-control" id="keluarga_terdekat" value="<?= $kajian_awal['keluarga_terdekat'] ?>" name="keluarga_terdekat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hubungannya</label>
                        <input type="text" class="form-control" id="hubungannya" value="<?= $kajian_awal['hubungannya'] ?>" name="hubungannya" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hambatan_bahasa</label>
                        <select class="form-control" id="hambatan_bahasa" name="hambatan_bahasa" required>
                            <option <?= ($kajian_awal['hambatan_bahasa'] == 'Indonesia') ? 'selected' : '' ?> value="Indonesia">Indonesia</option>
                            <option <?= ($kajian_awal['hambatan_bahasa'] == 'Jawa') ? 'selected' : '' ?> value="Jawa">Jawa</option>
                            <option <?= ($kajian_awal['hambatan_bahasa'] == 'Jawa') ? 'selected' : '' ?> value="Asing">Asing</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">hambatan_budaya</label>
                        <select class="form-control" id="hambatan_budaya" name="hambatan_budaya" required>
                            <option <?= ($kajian_awal['hambatan_budaya'] == 'Ya') ? 'selected' : '' ?> value="Ya">Ya</option>
                            <option <?= ($kajian_awal['hambatan_budaya'] == 'Tidak') ? 'selected' : '' ?> value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hambatan_mobilitas_fisik</label>
                        <select class="form-control" id="hambatan_mobilitas_fisik" name="hambatan_mobilitas_fisik" required>
                            <option <?= ($kajian_awal['hambatan_mobilitas_fisik'] == 'Buta') ? 'selected' : '' ?> value="Buta">Buta</option>
                            <option <?= ($kajian_awal['hambatan_mobilitas_fisik'] == 'Tuli') ? 'selected' : '' ?> value="Tuli">Tuli</option>
                            <option <?= ($kajian_awal['hambatan_mobilitas_fisik'] == 'Bisu') ? 'selected' : '' ?> value="Bisu">Bisu</option>
                            <option <?= ($kajian_awal['hambatan_mobilitas_fisik'] == 'Lumpuh pincang') ? 'selected' : '' ?> value="Lumpuh pincang">Lumpuh pincang</option>
                            <option <?= ($kajian_awal['hambatan_mobilitas_fisik'] == 'Tidak ada') ? 'selected' : '' ?> value="Tidak ada">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">riwayat_alergi</label>
                        <select class="form-control" id="riwayat_alergi" name="riwayat_alergi" required>
                            <option <?= ($kajian_awal['riwayat_alergi'] == 'Ya') ? 'selected' : '' ?> value="Ya">Ya</option>
                            <option <?= ($kajian_awal['riwayat_alergi'] == 'Tidak') ? 'selected' : '' ?> value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_created</label>
                        <input type="datetime" class="form-control" id="date_created" value="<?= $kajian_awal['date_created'] ?>" name="date_created" id="date_created" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">update_created</label>
                        <input type="datetime" class="form-control" id="update_created" value="<?= date('Y-m-d H:i:s', time()) ?>" name="update_created" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('user/kajian_awal') ?>" class="btn btn-secondary">Kembali</a>
                </form>
                <div>
                    <h4>Query :</h4>
                    <p><?= $query; ?></p>
                </div>
            </div>
        </div>
    </div>
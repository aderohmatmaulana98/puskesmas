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
                <h3 class="my-2">Insert <?= $title ?></h3>
                <form action="<?= base_url('user/aksi_insert_kajian_awal') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_pendaftaran</label>
                        <select class="form-control" id="id_pendaftaran" name="id_pendaftaran" required>
                            <option value="">Pilih id_pendaftaran</option>
                            <?php foreach ($pendaftaran as $p) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['id']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hub_dgn_kk</label>
                        <input type="text" class="form-control" id="hub_dgn_kk" name="hub_dgn_kk" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">no_hp_keluarga_terdekat</label>
                        <input type="text" class="form-control" id="no_hp_keluarga_terdekat" name="no_hp_keluarga_terdekat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">riwayat_penyakit_keluarga</label>
                        <select class="form-control" id="riwayat_penyakit_keluarga" name="riwayat_penyakit_keluarga" required>
                            <option value="" selected disabled>pilih riwayat_penyakit_keluarga</option>
                            <option value="Hipertensi">Hipertensi</option>
                            <option value="DM">DM</option>
                            <option value="Jantung">Jantung</option>
                            <option value="Paru-Paru">Paru-Paru</option>
                            <option value="Kanker">Kanker</option>
                            <option value="Asma">Asma</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">pengkajian_psikologis</label>
                        <select class="form-control" id="pengkajian_psikologis" name="pengkajian_psikologis" required>
                            <option value="" selected disabled>pilih pengkajian_psikologis</option>
                            <option value="Tidak semangat">Tidak semangat</option>
                            <option value="Rasa tertekan">Rasa tertekan</option>
                            <option value="Depresi">Depresi</option>
                            <option value="Sulit tidur">Sulit tidur</option>
                            <option value="Cepat lelah">Cepat lelah</option>
                            <option value="Sulit konsentrasi">Sulit konsentrasi</option>
                            <option value="Sulit bicara">Sulit bicara</option>
                            <option value="Merasa lelah">Merasa lelah</option>
                            <option value="Cemas">Cemas</option>
                            <option value="Tidak ada">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">gangguan_jiwa_masa_lalu</label>
                        <select class="form-control" id="gangguan_jiwa_masa_lalu" name="gangguan_jiwa_masa_lalu" required>
                            <option value="" selected disabled>pilih gangguan_jiwa_masa_lalu</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ada_perilaku</label>
                        <select class="form-control" id="ada_perilaku" name="ada_perilaku" required>
                            <option value="" selected disabled>ada_perilaku</option>
                            <option value="Perilaku kekerasan">Perilaku kekerasan</option>
                            <option value="Halusinasi">Halusinasi</option>
                            <option value="Waham">Waham</option>
                            <option value="Mood disorder">Mood disorder</option>
                            <option value="Gangguan memori">Gangguan memori</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tinggal_dengan</label>
                        <select class="form-control" id="tinggal_dengan" name="tinggal_dengan" required>
                            <option value="" selected disabled>pilih tinggal_dengan</option>
                            <option value="Sendiri">Sendiri</option>
                            <option value="Orang Tua">Orang Tua</option>
                            <option value="Suami Istri">Suami Istri</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">keluarga_terdekat</label>
                        <input type="text" class="form-control" id="keluarga_terdekat" name="keluarga_terdekat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hubungannya</label>
                        <input type="text" class="form-control" id="hubungannya" name="hubungannya" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hambatan_bahasa</label>
                        <select class="form-control" id="hambatan_bahasa" name="hambatan_bahasa" required>
                            <option value="" selected disabled>pilih hambatan_bahasa</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Jawa">Jawa</option>
                            <option value="Asing">Asing</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">hambatan_budaya</label>
                        <select class="form-control" id="hambatan_budaya" name="hambatan_budaya" required>
                            <option value="" selected disabled>pilih hambatan_budaya</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">hambatan_mobilitas_fisik</label>
                        <select class="form-control" id="hambatan_mobilitas_fisik" name="hambatan_mobilitas_fisik" required>
                            <option value="" selected disabled>pilih hambatan_mobilitas_fisik</option>
                            <option value="Buta">Buta</option>
                            <option value="Tuli">Tuli</option>
                            <option value="Bisu">Bisu</option>
                            <option value="Lumpuh pincang">Lumpuh pincang</option>
                            <option value="Tidak ada">Tidak ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">riwayat_alergi</label>
                        <select class="form-control" id="riwayat_alergi" name="riwayat_alergi" required>
                            <option value="" selected disabled>pilih riwayat_alergi</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
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
                    <a href="<?= base_url('user/kajian_awal') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
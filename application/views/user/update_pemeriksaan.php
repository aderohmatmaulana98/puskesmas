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
                <form action="<?= base_url('user/aksi_update_pemeriksaan') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_kajian_awal</label>
                        <select class="form-control" id="id_kajian_awal" name="id_kajian_awal">
                            <option value="" selected disabled>Pilih id_kajian_awal</option>
                            <?php foreach ($kajian_awal as $ka) : ?>
                                <option <?= ($pemeriksaan['id_kajian_awal'] == $ka['id']) ? 'selected' : '' ?> value="<?= $ka['id']; ?>"><?= $ka['id'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_dokter</label>
                        <select class="form-control" id="id_dokter" name="id_dokter">
                            <option value="" selected disabled>Pilih id_dokter</option>
                            <?php foreach ($dokter as $d) : ?>
                                <option <?= ($pemeriksaan['id_dokter'] == $d['id']) ? 'selected' : '' ?> value="<?= $d['id']; ?>"><?= $d['id'] . '-' . $d['nama_dokter'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal_jam</label>
                        <input type="datetime-local" class="form-control" id="tanggal_jam" value="<?= $pemeriksaan['tanggal_jam']; ?>" name="tanggal_jam" required>
                        <input type="text" class="form-control" id="id" value="<?= $pemeriksaan['id']; ?>" name="id" hidden required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" value="<?= $pemeriksaan['umur']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">anamnese_pemeriksaan_diagnosis</label>
                        <input type="text" class="form-control" id="anamnese_pemeriksaan_diagnosis" value="<?= $pemeriksaan['anamnese_pemeriksaan_diagnosis']; ?>" name="anamnese_pemeriksaan_diagnosis" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">rencana_pelayanan_dan_therapi</label>
                        <input type="text" class="form-control" id="rencana_pelayanan_dan_therapi" value="<?= $pemeriksaan['rencana_pelayanan_dan_therapi']; ?>" name="rencana_pelayanan_dan_therapi" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_created</label>
                        <input type="email" class="form-control" id="date_created" value="<?= $pemeriksaan['date_created']; ?>" name="date_created" id="date_created" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">update_created</label>
                        <input type="email" class="form-control" id="update_created" value="<?= date('Y-m-d H:i:s', time()) ?>" name="update_created" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('user/pemeriksaan') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
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
                <h3 class="my-2">Update <?= $title ?></h3>
                <form action="<?= base_url('user/aksi_update_poli/') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama_poli</label>
                        <input type="text" class="form-control" id="id" value="<?= $poli['id'] ?>" name="id" hidden required>
                        <input type="text" class="form-control" id="nama_poli" value="<?= $poli['nama_poli'] ?>" name="nama_poli" required>
                    </div>
                    <div class=" form-group">
                        <label for="exampleInputEmail1">date_created</label>
                        <input type="email" class="form-control" id="date_created" value="<?= $poli['date_created'] ?>" name="date_created" id="date_created" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">update_created</label>
                        <input type="email" class="form-control" id="update_created" value="<?= date('Y-m-d H:i:s', time()) ?>" name="update_created" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('user/poli') ?>" class="btn btn-secondary">Kembali</a>
                </form>
                <div>
                    <h4>Query :</h4>
                    <p><?= $query; ?></p>
                </div>
            </div>

        </div>
    </div>
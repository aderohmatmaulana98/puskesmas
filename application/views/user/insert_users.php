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
                <form action="<?= base_url('user/aksi_insert_users') ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama_lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">password</label>
                        <input type="text" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">id_role</label>
                        <select class="form-control" id="id_role" name="id_role">
                            <option value="" selected disabled>Pilih id_role</option>
                            <?php foreach ($role as $r) : ?>
                                <option value="<?= $r['id']; ?>"><?= $r['id']; ?></option>
                            <?php endforeach; ?>
                        </select>
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
                    <a href="<?= base_url('user/users') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
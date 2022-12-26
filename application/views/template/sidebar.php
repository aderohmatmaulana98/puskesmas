        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?= base_url() ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a data-toggle="collapse" href="<?= base_url('user/index') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/role') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/poli') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Poli</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/users') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/pendaftaran') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Pendaftaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/kajian_awal') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Kajian Awal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/dokter') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/jadwal_dokter') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Jadwal Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/jadwal_dokter') ?>" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Pemerikasaan</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
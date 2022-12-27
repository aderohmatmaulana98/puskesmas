<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('user/index');
        $this->load->view('template/footer');
    }
    public function role()
    {
        $data['title'] = "Role";

        $tampil_role = "SELECT * FROM role";
        $data['role'] = $this->db->query($tampil_role)->result_array();
        $data['query'] = "SELECT * FROM role";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/role', $data);
        $this->load->view('template/footer');
    }
    public function insert_role()
    {
        $data['title'] = "Role";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/insert_role', $data);
        $this->load->view('template/footer');
    }
    public function aksi_insert_role()
    {
        $nama_role = $this->input->post('nama_role');
        $date_created = $this->input->post('date_created');



        $sql = "INSERT INTO role (id, nama_role, date_created, update_created)
                VALUES ('','$nama_role', '$date_created', NULL)";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/insert_role');
    }
    public function update_role($id)
    {
        $data['title'] = "Role";
        $sql = "SELECT * FROM role WHERE role.id = $id";
        $data['role'] = $this->db->query($sql)->row_array();
        $data['query'] = "SELECT * FROM role WHERE role.id = $id";
        // var_dump($data['role']);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/update_role', $data);
        $this->load->view('template/footer');
    }
    public function aksi_update_role()
    {
        $id = $this->input->post('id');
        $nama_role = $this->input->post('nama_role');
        $date_created = $this->input->post('date_created');
        $update_created = $this->input->post('update_created');

        $sql = "UPDATE role
                SET nama_role = '$nama_role', date_created = '$date_created', update_created = '$update_created'
                WHERE role.id =  $id";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/insert_role');
    }
    public function delete_role($id)
    {
        $sql = "DELETE FROM role WHERE role.id = $id";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/role');
    }
    public function poli()
    {
        $data['title'] = "Poli";

        $sql = "SELECT * FROM poli";
        $data['poli'] = $this->db->query($sql)->result_array();
        $data['query'] = "SELECT * FROM poli";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/poli', $data);
        $this->load->view('template/footer');
    }
    public function update_poli($id)
    {
        $data['title'] = "Poli";
        $sql = "SELECT * FROM poli WHERE poli.id = $id";
        $data['poli'] = $this->db->query($sql)->row_array();
        $data['query'] = "SELECT * FROM poli WHERE poli.id = $id";
        // var_dump($data['role']);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/update_poli', $data);
        $this->load->view('template/footer');
    }
    public function aksi_update_poli()
    {
        $id = $this->input->post('id');
        $nama_poli = $this->input->post('nama_poli');
        $date_created = $this->input->post('date_created');
        $update_created = $this->input->post('update_created');

        $sql = "UPDATE poli
                SET nama_poli = '$nama_poli', date_created = '$date_created', update_created = '$update_created'
                WHERE poli.id =  $id";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/update_poli');
    }
    public function delete_poli($id)
    {
        $sql = "DELETE FROM poli WHERE poli.id = $id";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/poli');
    }
    public function insert_poli()
    {
        $data['title'] = "Poli";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/insert_poli', $data);
        $this->load->view('template/footer');
    }
    public function aksi_insert_poli()
    {
        $nama_poli = $this->input->post('nama_poli');
        $date_created = $this->input->post('date_created');



        $sql = "INSERT INTO poli (id, nama_poli, date_created, update_created)
                VALUES ('','$nama_poli', '$date_created', NULL)";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/insert_poli');
    }
    public function users()
    {
        $data['title'] = "Users";

        $sql = "SELECT * FROM users";
        $data['users'] = $this->db->query($sql)->result_array();
        $data['query'] = "SELECT * FROM users";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/users', $data);
        $this->load->view('template/footer');
    }
    public function insert_users()
    {
        $data['title'] = "Users";
        $data['role'] = $this->db->get('users')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/insert_users', $data);
        $this->load->view('template/footer');
    }
    public function aksi_insert_users()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $id_role = $this->input->post('id_role');
        $date_created = $this->input->post('date_created');

        $sql = "INSERT INTO users (id, nama_lengkap,email, password, id_role, date_created, update_created)
                VALUES ('','$nama_lengkap', '$email', '$password', '$id_role','$date_created', NULL)";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .
            '</div>');
        redirect('user/insert_users');
    }
    public function update_users($id)
    {
        $data['title'] = "Users";
        $sql = "SELECT * FROM users WHERE users.id = $id";
        $data['users'] = $this->db->query($sql)->row_array();
        $data['role'] = $this->db->get('users')->result_array();
        $data['query'] = "SELECT * FROM users WHERE users.id = $id";
        // var_dump($data['role']);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/update_users', $data);
        $this->load->view('template/footer');
    }
    public function aksi_update_users()
    {
        $id = $this->input->post('id');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $id_role = $this->input->post('id_role');
        $date_created = $this->input->post('date_created');
        $update_created = $this->input->post('update_created');

        $sql = "UPDATE users
                SET nama_lengkap = '$nama_lengkap',email = '$email',id_role = '$id_role', date_created = '$date_created', update_created = '$update_created'
                WHERE users.id =  $id";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/update_users/' . $id);
    }
    public function delete_users($id)
    {
        $sql = "DELETE FROM users WHERE users.id = $id";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/users');
    }
    public function pendaftaran()
    {
        $data['title'] = "Pendaftaran";

        $sql = "SELECT * FROM pendaftaran";
        $data['users'] = $this->db->get('users')->result_array();
        $data['pendaftaran'] = $this->db->query($sql)->result_array();
        $data['query'] = "SELECT * FROM pendaftaran";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/pendaftaran', $data);
        $this->load->view('template/footer');
    }
    public function insert_pendaftaran()
    {
        $data['title'] = "Pendaftaran";
        $data['role'] = $this->db->get('pendaftaran')->result_array();
        $data['users'] = $this->db->get_where('users', ['users.id_role' => 3])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/insert_pendaftaran', $data);
        $this->load->view('template/footer');
    }
    public function aksi_insert_pendaftaran()
    {
        $data['users'] = $this->db->get_where('users', ['users.id_role' => 3])->result_array();

        $id_users = $this->input->post('id_user');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $no_rm = mt_rand(1000, 9999);
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $status_perkawinan = $this->input->post('status_perkawinan');
        $agama = $this->input->post('agama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_hp = $this->input->post('no_hp');
        $pekerjaan = $this->input->post('pekerjaan');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $jaminan_asuransi = $this->input->post('jaminan_asuransi');
        $no_jaminan = $this->input->post('no_jaminan');
        $nama_keluarga = $this->input->post('nama_keluarga');
        $berat_badan = $this->input->post('berat_badan');
        $date_created = $this->input->post('date_created');

        $sql = "INSERT INTO pendaftaran (id, id_users,nama_lengkap,no_rm, tempat_lahir, tanggal_lahir, alamat, status_perkawinan,
                agama, jenis_kelamin, no_hp,pekerjaan,pendidikan_terakhir,jaminan_asuransi,no_jaminan,nama_keluarga,berat_badan, date_created, update_created)
                VALUES ('','$id_users','$nama_lengkap', '$no_rm', '$tempat_lahir', '$tanggal_lahir','$alamat','$status_perkawinan','$agama',
                '$jenis_kelamin','$no_hp','$pekerjaan','$pendidikan_terakhir','$jaminan_asuransi','$no_jaminan','$nama_keluarga','$berat_badan','$date_created', NULL)";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .
            '</div>');
        redirect('user/insert_pendaftaran');
    }
    public function update_pendaftaran($id)
    {
        $data['title'] = "Pendaftaran";
        $sql = "SELECT * FROM pendaftaran WHERE pendaftaran.id = $id";
        $data['pendaftaran'] = $this->db->query($sql)->row_array();
        $data['role'] = $this->db->get('pendaftaran')->result_array();
        $data['query'] = "SELECT * FROM pendaftaran WHERE pendaftaran.id = $id";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/update_pendaftaran', $data);
        $this->load->view('template/footer');
    }
    public function aksi_update_pendaftaran()
    {
        $data['users'] = $this->db->get_where('users', ['users.id_role' => 3])->result_array();

        $id = $this->input->post('id');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $status_perkawinan = $this->input->post('status_perkawinan');
        $agama = $this->input->post('agama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_hp = $this->input->post('no_hp');
        $pekerjaan = $this->input->post('pekerjaan');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $jaminan_asuransi = $this->input->post('jaminan_asuransi');
        $no_jaminan = $this->input->post('no_jaminan');
        $nama_keluarga = $this->input->post('nama_keluarga');
        $berat_badan = $this->input->post('berat_badan');
        $date_created = $this->input->post('date_created');
        $update_created = $this->input->post('update_created');

        $data['pendaftaran'] = $this->db->query("SELECT * FROM pendaftaran WHERE pendaftaran.id = $id")->row_array();
        // var_dump($data['pendaftaran']);
        // die;
        $sql = "UPDATE pendaftaran
                SET nama_lengkap = '$nama_lengkap',tempat_lahir = '$tempat_lahir',tanggal_lahir = '$tanggal_lahir',alamat = '$alamat',
                status_perkawinan = '$status_perkawinan', agama = '$agama', jenis_kelamin = '$jenis_kelamin', no_hp = '$no_hp',
                pekerjaan = '$pekerjaan', pendidikan_terakhir = '$pendidikan_terakhir', jaminan_asuransi = '$jaminan_asuransi',
                no_jaminan = '$no_jaminan', nama_keluarga = '$nama_keluarga', berat_badan = '$berat_badan', date_created = '$date_created', update_created = '$update_created'
                WHERE pendaftaran.id =  $id";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/update_pendaftaran/' . $id);
    }
    public function delete_pendaftaran($id)
    {
        $sql = "DELETE FROM pendaftaran WHERE pendaftaran.id = $id";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/pendaftaran');
    }
    public function kajian_awal()
    {
        $data['title'] = "Kajian Awal";

        $data['kajian_awal'] = $this->db->get('kajian_awal')->result_array();
        $data['query'] = "SELECT * FROM kajian_awal";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/kajian_awal', $data);
        $this->load->view('template/footer');
    }
    public function insert_kajian_awal()
    {
        $data['title'] = "Kajian Awal";
        $data['kajian_awal'] = $this->db->get('kajian_awal')->result_array();
        $data['pendaftaran'] = $this->db->get('pendaftaran')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/insert_kajian_awal', $data);
        $this->load->view('template/footer');
    }
    public function aksi_insert_kajian_awal()
    {
        $data['pendaftaran'] = $this->db->get('pendaftaran')->result_array();

        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $hub_dgn_kk = $this->input->post('hub_dgn_kk');
        $no_hp_keluarga_terdekat = $this->input->post('no_hp_keluarga_terdekat');
        $riwayat_penyakit_keluarga = $this->input->post('riwayat_penyakit_keluarga');
        $pengkajian_psikologis = $this->input->post('pengkajian_psikologis');
        $gangguan_jiwa_masa_lalu = $this->input->post('gangguan_jiwa_masa_lalu');
        $ada_perilaku = $this->input->post('ada_perilaku');
        $tinggal_dengan = $this->input->post('tinggal_dengan');
        $keluarga_terdekat = $this->input->post('keluarga_terdekat');
        $hubungannya = $this->input->post('hubungannya');
        $hambatan_bahasa = $this->input->post('hambatan_bahasa');
        $hambatan_budaya = $this->input->post('hambatan_budaya');
        $hambatan_mobilitas_fisik = $this->input->post('hambatan_mobilitas_fisik');
        $riwayat_alergi = $this->input->post('riwayat_alergi');
        $date_created = $this->input->post('date_created');

        $sql = "INSERT INTO kajian_awal (id, id_pendaftaran,hun_dgn_kk,no_hp_keluarga_terdekat, riwayat_penyakit_keluarga, pengkajian_psikologis, gangguan_jiwa_masa_lalu, ada_perilaku,
                tinggal_dengan, keluarga_terdekat, hubungannya,hambatan_bahasa,hambatan_budaya,hambatan_mobilitas_fisik,riwayat_alergi, date_created, update_created)
                VALUES ('','$id_pendaftaran','$hub_dgn_kk', '$no_hp_keluarga_terdekat', '$riwayat_penyakit_keluarga', '$pengkajian_psikologis','$gangguan_jiwa_masa_lalu','$ada_perilaku','$tinggal_dengan',
                '$keluarga_terdekat','$hubungannya','$hambatan_bahasa','$hambatan_budaya','$hambatan_mobilitas_fisik','$riwayat_alergi','$date_created', NULL)";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .
            '</div>');
        redirect('user/insert_kajian_awal');
    }
    public function update_kajian_awal($id)
    {
        $data['title'] = "Kajian Awal";
        $sql = "SELECT * FROM kajian_awal WHERE kajian_awal.id = $id";
        $data['kajian_awal'] = $this->db->query($sql)->row_array();
        $data['pendaftaran'] = $this->db->get('pendaftaran')->result_array();
        $data['query'] = "SELECT * FROM kajian_awal WHERE kajian_awal.id = $id";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/update_kajian_awal', $data);
        $this->load->view('template/footer');
    }
    public function aksi_update_kajian_awal()
    {
        $id = $this->input->post('id');
        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $hub_dgn_kk = $this->input->post('hub_dgn_kk');
        $no_hp_keluarga_terdekat = $this->input->post('no_hp_keluarga_terdekat');
        $riwayat_penyakit_keluarga = $this->input->post('riwayat_penyakit_keluarga');
        $pengkajian_psikologis = $this->input->post('pengkajian_psikologis');
        $gangguan_jiwa_masa_lalu = $this->input->post('gangguan_jiwa_masa_lalu');
        $ada_perilaku = $this->input->post('ada_perilaku');
        $tinggal_dengan = $this->input->post('tinggal_dengan');
        $keluarga_terdekat = $this->input->post('keluarga_terdekat');
        $hubungannya = $this->input->post('hubungannya');
        $hambatan_bahasa = $this->input->post('hambatan_bahasa');
        $hambatan_budaya = $this->input->post('hambatan_budaya');
        $hambatan_mobilitas_fisik = $this->input->post('hambatan_mobilitas_fisik');
        $riwayat_alergi = $this->input->post('riwayat_alergi');
        $date_created = $this->input->post('date_created');
        $update_created = $this->input->post('update_created');

        $data['kajian_awal'] = $this->db->query("SELECT * FROM kajian_awal WHERE kajian_awal.id = $id")->row_array();
        // var_dump($data['pendaftaran']);
        // die;
        $sql = "UPDATE kajian_awal
                SET id_pendaftaran = '$id_pendaftaran',hun_dgn_kk = '$hub_dgn_kk',no_hp_keluarga_terdekat = '$no_hp_keluarga_terdekat',riwayat_penyakit_keluarga = '$riwayat_penyakit_keluarga',
                pengkajian_psikologis = '$pengkajian_psikologis', gangguan_jiwa_masa_lalu = '$gangguan_jiwa_masa_lalu', ada_perilaku = '$ada_perilaku', tinggal_dengan = '$tinggal_dengan',
                keluarga_terdekat = '$keluarga_terdekat', hubungannya = '$hubungannya', hambatan_bahasa = '$hambatan_bahasa',
                hambatan_budaya = '$hambatan_budaya', hambatan_mobilitas_fisik = '$hambatan_mobilitas_fisik', riwayat_alergi = '$riwayat_alergi', date_created = '$date_created', update_created = '$update_created'
                WHERE kajian_awal.id =  $id";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/update_kajian_awal/' . $id);
    }
    public function delete_kajian_awal($id)
    {
        $sql = "DELETE FROM kajian_awal WHERE kajian_awal.id = $id";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/kajian_awal');
    }
    public function dokter()
    {
        $data['title'] = "Dokter";

        $sql = "SELECT * FROM dokter";
        $data['dokter'] = $this->db->query($sql)->result_array();
        $data['query'] = "SELECT * FROM dokter";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/dokter', $data);
        $this->load->view('template/footer');
    }
    public function insert_dokter()
    {
        $data['title'] = "Dokter";
        $data['dokter'] = $this->db->get('dokter')->result_array();
        $data['poli'] = $this->db->get('poli')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/insert_dokter', $data);
        $this->load->view('template/footer');
    }
    public function aksi_insert_dokter()
    {
        $id_poli = $this->input->post('id_poli');
        $nama_dokter = $this->input->post('nama_dokter');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $no_hp = $this->input->post('no_hp');
        $foto = $this->input->post('foto');
        $date_created = $this->input->post('date_created');

        $sql = "INSERT INTO dokter (id, id_poli,nama_dokter, tgl_lahir, jk,agama,no_hp,foto, date_created, update_created)
                VALUES ('','$id_poli', '$nama_dokter', '$tgl_lahir', '$jk','$agama','$no_hp','$foto','$date_created', NULL)";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .
            '</div>');
        redirect('user/insert_dokter');
    }
    public function update_dokter($id)
    {
        $data['title'] = "Dokter";
        $sql = "SELECT * FROM dokter WHERE dokter.id = $id";
        $data['dokter'] = $this->db->query($sql)->row_array();
        $data['poli'] = $this->db->get('poli')->result_array();
        $data['query'] = "SELECT * FROM dokter WHERE dokter.id = $id";
        // var_dump($data['role']);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/update_dokter', $data);
        $this->load->view('template/footer');
    }
    public function aksi_update_dokter()
    {
        $id = $this->input->post('id');
        $id_poli = $this->input->post('id_poli');
        $nama_dokter = $this->input->post('nama_dokter');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $no_hp = $this->input->post('no_hp');
        $foto = $this->input->post('foto');
        $date_created = $this->input->post('date_created');
        $update_created = $this->input->post('update_created');

        $sql = "UPDATE dokter
                SET id_poli = '$id_poli',nama_dokter = '$nama_dokter',tgl_lahir = '$tgl_lahir',jk = '$jk',agama = '$agama',no_hp = '$no_hp',foto = '$foto', date_created = '$date_created', update_created = '$update_created'
                WHERE dokter.id = $id";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/update_dokter/' . $id);
    }
    public function delete_dokter($id)
    {
        $sql = "DELETE FROM dokter WHERE dokter.id = $id";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/dokter');
    }
    public function jadwal_dokter()
    {
        $data['title'] = "Jadwal Dokter";

        $sql = "SELECT * FROM jadwal_dokter";
        $data['jadwal_dokter'] = $this->db->query($sql)->result_array();
        $data['query'] = "SELECT * FROM jadwal_dokter";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/jadwal_dokter', $data);
        $this->load->view('template/footer');
    }
    public function insert_jadwal_dokter()
    {
        $data['title'] = "Jadwal Dokter";
        $data['dokter'] = $this->db->get('dokter')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/insert_jadwal_dokter', $data);
        $this->load->view('template/footer');
    }
    public function aksi_insert_jadwal_dokter()
    {
        $id_dokter = $this->input->post('id_dokter');
        $hari = $this->input->post('hari');
        $dari_jam = $this->input->post('dari_jam');
        $sampai_jam = $this->input->post('sampai_jam');
        $date_created = $this->input->post('date_created');

        $sql = "INSERT INTO jadwal_dokter (id, id_dokter,hari, dari_jam, sampai_jam, date_created, update_created)
                VALUES ('','$id_dokter', '$hari', '$dari_jam', '$sampai_jam','$date_created', NULL)";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .
            '</div>');
        redirect('user/insert_jadwal_dokter');
    }
    public function update_jadwal_dokter($id)
    {
        $data['title'] = "Jadwal Dokter";
        $sql = "SELECT * FROM jadwal_dokter WHERE jadwal_dokter.id = $id";
        $data['jadwal_dokter'] = $this->db->query($sql)->row_array();
        $data['dokter'] = $this->db->get('dokter')->result_array();
        $data['query'] = "SELECT * FROM jadwal_dokter WHERE jadwal_dokter.id = $id";
        // var_dump($data['role']);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/update_jadwal_dokter', $data);
        $this->load->view('template/footer');
    }
    public function aksi_update_jadwal_dokter()
    {
        $id = $this->input->post('id');
        $id_dokter = $this->input->post('id_dokter');
        $hari = $this->input->post('hari');
        $dari_jam = $this->input->post('dari_jam');
        $sampai_jam = $this->input->post('sampai_jam');
        $date_created = $this->input->post('date_created');
        $update_created = $this->input->post('update_created');

        $sql = "UPDATE jadwal_dokter
                SET id_dokter = '$id_dokter',hari = '$hari',dari_jam = '$dari_jam',sampai_jam = '$sampai_jam', date_created = '$date_created', update_created = '$update_created'
                WHERE jadwal_dokter.id = $id";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/update_jadwal_dokter/' . $id);
    }
    public function delete_jadwal_dokter($id)
    {
        $sql = "DELETE FROM jadwal_dokter WHERE jadwal_dokter.id = $id";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/jadwal_dokter');
    }
    public function pemeriksaan()
    {
        $data['title'] = "pemeriksaan";

        $sql = "SELECT * FROM pemeriksaan";
        $data['pemeriksaan'] = $this->db->query($sql)->result_array();
        $data['query'] = "SELECT * FROM pemeriksaan";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/pemeriksaan', $data);
        $this->load->view('template/footer');
    }
    public function insert_pemeriksaan()
    {
        $data['title'] = "Pemeriksaan";
        $data['pemeriksaan'] = $this->db->get('pemeriksaan')->result_array();
        $data['kajian_awal'] = $this->db->get('kajian_awal')->result_array();
        $data['dokter'] = $this->db->get('dokter')->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/insert_pemeriksaan', $data);
        $this->load->view('template/footer');
    }
    public function aksi_insert_pemeriksaan()
    {
        $id_kajian_awal = $this->input->post('id_kajian_awal');
        $id_dokter = $this->input->post('id_dokter');
        $tanggal_jam = $this->input->post('tanggal_jam');
        $umur = $this->input->post('umur');
        $anamnese_pemeriksaan_diagnosis = $this->input->post('anamnese_pemeriksaan_diagnosis');
        $rencana_pelayanan_dan_therapi = $this->input->post('rencana_pelayanan_dan_therapi');
        $date_created = $this->input->post('date_created');

        $sql = "INSERT INTO pemeriksaan (id, id_kajian_awal, id_dokter,tanggal_jam, umur, anamnese_pemeriksaan_diagnosis,rencana_pelayanan_dan_therapi, date_created, update_created)
                VALUES ('','$id_kajian_awal', '$id_dokter', '$tanggal_jam', '$umur','$anamnese_pemeriksaan_diagnosis','$rencana_pelayanan_dan_therapi','$date_created', NULL)";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .
            '</div>');
        redirect('user/insert_pemeriksaan');
    }
    public function update_pemeriksaan($id)
    {
        $data['title'] = "Pemeriksaan";
        $sql = "SELECT * FROM pemeriksaan WHERE pemeriksaan.id = $id";
        $data['pemeriksaan'] = $this->db->query($sql)->row_array();
        $data['dokter'] = $this->db->get('dokter')->result_array();
        $data['kajian_awal'] = $this->db->get('kajian_awal')->result_array();
        $data['query'] = "SELECT * FROM pemeriksaan WHERE pemeriksaan.id = $id";

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/update_pemeriksaan', $data);
        $this->load->view('template/footer');
    }
    public function aksi_update_pemeriksaan()
    {
        $id = $this->input->post('id');
        $id_kajian_awal = $this->input->post('id_kajian_awal');
        $id_dokter = $this->input->post('id_dokter');
        $tanggal_jam = $this->input->post('tanggal_jam');
        $umur = $this->input->post('umur');
        $anamnese_pemeriksaan_diagnosis = $this->input->post('anamnese_pemeriksaan_diagnosis');
        $rencana_pelayanan_dan_therapi = $this->input->post('rencana_pelayanan_dan_therapi');
        $date_created = $this->input->post('date_created');
        $update_created = $this->input->post('update_created');

        $sql = "UPDATE pemeriksaan
                SET id_kajian_awal = '$id_kajian_awal',id_dokter = '$id_dokter',tanggal_jam = '$tanggal_jam',umur = '$umur',anamnese_pemeriksaan_diagnosis = '$anamnese_pemeriksaan_diagnosis',rencana_pelayanan_dan_therapi='$rencana_pelayanan_dan_therapi', date_created = '$date_created', update_created = '$update_created'
                WHERE pemeriksaan.id = $id";

        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/update_pemeriksaan/' . $id);
    }
    public function delete_pemeriksaan($id)
    {
        $sql = "DELETE FROM pemeriksaan WHERE pemeriksaan.id = $id";
        $this->db->query($sql);

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >' . $sql .

            '</div>');
        redirect('user/pemeriksaan');
    }
}

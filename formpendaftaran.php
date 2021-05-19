<!DOCTYPE html>
<html>
    <head>
        <title>Form Pendaftaran</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
        .warning {color: #FF0000;}
        </style>
    </head>

    <body>

    
        <?php
            $error_tanggal = "";
            $error_jenisDaftar = "";
            $error_tanggalMasuk = "";
            $error_nis = "";
            $error_npu = "";
            $error_paud = "";
            $error_tk = "";
            $error_noskhun = "";
            $error_noijazah = "";
            $error_hobi = "";
            $error_cita = "";
            $error_nama = "";
            $error_jkel = "";
            $error_nisn = "";
            $error_nik = "";
            $error_tempatlahir = "";
            $error_tgllahir = "";
            $error_agama = "";
            $error_khusus = "";
            $error_alamat = "";
            $error_rt = "";
            $error_rw = "";
            $error_dusun = "";
            $error_desa = "";
            $error_kecamatan = "";
            $error_pos = "";
            $error_tempattinggal = "";
            $error_transportasi = "";
            $error_hp = "";
            $error_telp = "";
            $error_email = "";
            $error_kip = "";
            $error_nokip = "";
            $error_kwn = "";
            $error_anama = "";
            $error_atahunlahir = "";
            $error_apendidikan = "";
            $error_apekerjaan = "";
            $error_apenghasilan = "";
            $error_akhusus = "";
            $error_inama = "";
            $error_itahunlahir = "";
            $error_ipendidikan = "";
            $error_ipekerjaan = "";
            $error_ipenghasilan = "";
            $error_ikhusus = "";
            $tanggal = "";
            $jenisDaftar = "";
            $tanggalMasuk = "";
            $nis = "";
            $npu = "";
            $paud = "";
            $tk = "";
            $noskhun = "";
            $noijazah = "";
            $hobi = "";
            $cita = "";
            $nama = "";
            $jkel = "";
            $nisn = "";
            $nik = "";
            $tempatlahir = "";
            $tgllahir = "";
            $agama = "";
            $khusus = "";
            $alamat = "";
            $rt = "";
            $rw = "";
            $dusun = "";
            $desa = "";
            $kecamatan = "";
            $pos = "";
            $tempattinggal = "";
            $transportasi = "";
            $hp = "";
            $telp = "";
            $email = "";
            $kip = "";
            $nokip = "";
            $kwn = "";
            $anama = "";
            $atahunlahir = "";
            $apendidikan = "";
            $apekerjaan = "";
            $apenghasilan = "";
            $akhusus = "";
            $inama = "";
            $itahunlahir = "";
            $ipendidikan = "";
            $ipekerjaan = "";
            $ipenghasilan = "";
            $ikhusus = "";

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                //Tanggal hari ini
                if(empty($_POST["tanggal"])){
                    $error_tanggal = "Tanggal tidak boleh kosong";
                }
                else {
                    $tanggal = cek_input($_POST["tanggal"]);
                }
                //Jenis Pendaftaran
                if(empty($_POST["jenisDaftar"])){
                    $error_jenisDaftar = "Jenis Pendaftaran tidak boleh kosong";
                }
                else {
                    $jenisDaftar = cek_input($_POST["jenisDaftar"]);
                }
                //Tanggal Masuk Sekolah
                if(empty($_POST["tanggalMasuk"])){
                    $error_pesan = "Tanggal Masuk Sekolah tidak boleh kosong";
                }
                else {
                    $tanggalMasuk = cek_input($_POST["tanggalMasuk"]);
                }
                //NIS
                if(empty($_POST["nis"])){
                    $error_nis = "NIS tidak boleh kosong";
                }
                else {
                    $nis = cek_input($_POST["nis"]);
                    if(!is_numeric($nis)){
                        $error_nis = "NIS hanya boleh angka";
                    }
                }
                //Nomor Peserta Ujian
                if(empty($_POST["npu"])){
                    $error_npu = "Nomor Peserta Ujian tidak boleh kosong";
                }
                else {
                    $npu = cek_input($_POST["npu"]);
                    if(!is_numeric($npu)){
                        $error_npu = "Nomor Peserta Ujian hanya boleh angka";
                    }
                }
                //PAUD
                if(empty($_POST["paud"])){
                    $error_paud = "Inputan tidak boleh kosong";
                }
                else {
                    $paud = cek_input($_POST["paud"]);
                }
                //TK
                if(empty($_POST["tk"])){
                    $error_tk = "Inputan tidak boleh kosong";
                }
                else {
                    $tk = cek_input($_POST["tk"]);
                }
                //No. Seri SKHUN
                if(empty($_POST["noskhun"])){
                    $error_noskhun = "No. Seri SKHUN tidak boleh kosong";
                }
                else {
                    $noskhun = cek_input($_POST["noskhun"]);
                    if(!is_numeric($noskhun)){
                        $error_noskhun = "No. Seri SKHUN hanya boleh angka";
                    }
                }
                //No. Seri Ijazah
                if(empty($_POST["noijazah"])){
                    $error_noijazah = "No. Seri Ijazah tidak boleh kosong";
                }
                else {
                    $noijazah = cek_input($_POST["noijazah"]);
                    if(!is_numeric($noijazah)){
                        $error_noijazah = "No. Seri Ijazah hanya boleh angka";
                    }
                }
                //Hobi
                if(empty($_POST["hobi"])){
                    $error_hobi = "Inputan tidak boleh kosong";
                }
                else {
                    $hobi = cek_input($_POST["hobi"]);
                }
                //cita-cita
                if(empty($_POST["cita"])){
                    $error_cita = "Inputan tidak boleh kosong";
                }
                else {
                    $cita = cek_input($_POST["cita"]);
                }
                //Nama Lengkap
                if(empty($_POST["nama"])){
                    $error_nama = "Nama tidak boleh kosong";
                }
                else {
                    $nama = cek_input($_POST["nama"]);
                    if(!preg_match("/^[a-z A-Z]*$/",$nama)){
                        $error_nama = "Nama hanya boleh huruf dan spasi";
                    }
                }
                //Jenis Kelamin
                if(empty($_POST["jkel"])){
                    $error_jkel = "Inputan tidak boleh kosong";
                }
                else {
                    $jkel = cek_input($_POST["jkel"]);
                }
                //NISN
                if(empty($_POST["nisn"])){
                    $error_nisn = "NISN tidak boleh kosong";
                }
                else {
                    $nisn = cek_input($_POST["nisn"]);
                    if(!is_numeric($nisn)){
                        $error_nisn = "NISN hanya boleh angka";
                    }
                }
                //NIK
                if(empty($_POST["nik"])){
                    $error_nik = "NIK tidak boleh kosong";
                }
                else {
                    $nik = cek_input($_POST["nik"]);
                    if(!is_numeric($nik)){
                        $error_nik = "NIK hanya boleh angka";
                    }
                }
                //Tempat Lahir
                if(empty($_POST["tempatlahir"])){
                    $error_tempatlahir = "Tempat Lahir tidak boleh kosong";
                }
                else {
                    $tempatlahir = cek_input($_POST["tempatlahir"]);
                    if(!preg_match("/^[a-zA-Z]*$/",$tempatlahir)){
                        $error_tempatlahir = "Tempat Lahir hanya boleh huruf dan spasi";
                    }
                }
                //Tanggal Lahir
                if(empty($_POST["tgllahir"])){
                    $error_tgllahir = "Tanggal Lahir tidak boleh kosong";
                }
                else {
                    $tgllahir = cek_input($_POST["tgllahir"]);
                }
                //Agama
                if(empty($_POST["agama"])){
                    $error_agama = "Inputan tidak boleh kosong";
                }
                else {
                    $agama = cek_input($_POST["agama"]);
                }
                //Berkebutuhan Khusus
                if(empty($_POST["khusus"])){
                    $error_khusus = "Inputan tidak boleh kosong";
                }
                else {
                    $khusus = cek_input($_POST["khusus"]);
                }
                //Alamat
                if(empty($_POST["alamat"])){
                    $error_alamat = "Alamat tidak boleh kosong";
                }
                else {
                    $alamat = cek_input($_POST["alamat"]);
                    if(!preg_match("/^[a-z A-Z 0-9]*$/",$alamat)){
                        $error_alamat = "Nama hanya boleh angka,huruf dan spasi";
                    }
                }
                //RT
                if(empty($_POST["rt"])){
                    $error_rt = "RT tidak boleh kosong";
                }
                else {
                    $rt = cek_input($_POST["rt"]);
                    if(!is_numeric($rt)){
                        $error_rt = "RT hanya boleh angka";
                    }
                }
                //RW
                if(empty($_POST["rw"])){
                    $error_rw = "RW tidak boleh kosong";
                }
                else {
                    $rw = cek_input($_POST["rw"]);
                    if(!is_numeric($rw)){
                        $error_rw = "RW hanya boleh angka";
                    }
                }
                //Dusun
                if(empty($_POST["dusun"])){
                    $error_dusun = "Nama Dusun tidak boleh kosong";
                }
                else {
                    $dusun = cek_input($_POST["dusun"]);
                    if(!preg_match("/^[a-zA-Z0-9]*$/",$dusun)){
                        $error_dusun = "Nama Dusun hanya boleh angka,huruf dan spasi";
                    }
                }
                //Desa
                if(empty($_POST["desa"])){
                    $error_desa = "Nama Desa tidak boleh kosong";
                }
                else {
                    $desa = cek_input($_POST["desa"]);
                    if(!preg_match("/^[a-zA-Z0-9]*$/",$desa)){
                        $error_desa = "Nama Desa hanya boleh angka,huruf dan spasi";
                    }
                }
                //Kecamatan
                if(empty($_POST["kecamatan"])){
                    $error_kecamatan = "Kecamatan tidak boleh kosong";
                }
                else {
                    $kecamatan = cek_input($_POST["kecamatan"]);
                    if(!preg_match("/^[a-zA-Z0-9]*$/",$kecamatan)){
                        $error_kecamatan = "Kecamatan hanya boleh angka,huruf dan spasi";
                    }
                }
                //Kode Pos
                if(empty($_POST["pos"])){
                    $error_pos = "Kode Pos tidak boleh kosong";
                }
                else {
                    $pos = cek_input($_POST["pos"]);
                    if(!is_numeric($pos)){
                        $error_pos = "Kode Pos hanya boleh angka";
                    }
                }
                //Tempat Tinggal
                if(empty($_POST["tempattinggal"])){
                    $error_tempattinggal = "Inputan tidak boleh kosong";
                }
                else {
                    $tempattinggal = cek_input($_POST["tempattinggal"]);
                }
                //Moda Transportasi 
                if(empty($_POST["transportasi"])){
                    $error_transportasi = "Inputan tidak boleh kosong";
                }
                else {
                    $transportasi = cek_input($_POST["transportasi"]);
                }
                //Nomor HP
                if(empty($_POST["hp"])){
                    $error_hp = "Nomor HP tidak boleh kosong";
                }
                else {
                    $hp = cek_input($_POST["hp"]);
                    if(!is_numeric($hp)){
                        $error_hp = "Nomor Hp hanya boleh angka";
                    }
                }
                //Nomor Telepon
                if(empty($_POST["telp"])){
                    $error_telp = "Nomor Telepon tidak boleh kosong";
                }
                else {
                    $telp = cek_input($_POST["telp"]);
                    if(!is_numeric($telp)){
                        $error_telp = "Nomor Telepon hanya boleh angka";
                    }
                }
                //Email
                if(empty($_POST["email"])){
                    $error_email = "Email tidak boleh kosong";
                }
                else {
                    $email = cek_input($_POST["email"]);
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $error_email = "Format email Invalid";
                    }
                }
                //Penerima KPS/PKH/KIP
                if(empty($_POST["kip"])){
                    $error_kip = "Inputan tidak boleh kosong";
                }
                else {
                    $kip = cek_input($_POST["kip"]);
                }
                //Nomor KPS/KKS/PKH/KIP
                if(empty($_POST["nokip"])){
                    $error_nokip = "Input 000";
                }
                else {
                    $telp = cek_input($_POST["telp"]);
                    if(!is_numeric($telp)){
                        $error_telp = "Nomor KPS/KKS/PKH/KIP hanya boleh angka";
                    }
                }
                //Kewarganegaraan
                if(empty($_POST["kwn"])){
                    $error_kwn = "Kewarganegaraan tidak boleh kosong";
                }
                else {
                    $kwn = cek_input($_POST["kwn"]);
                    if(!preg_match("/^[a-zA-Z]*$/",$kwn)){
                        $error_kwn = "Kewarganegaraan hanya boleh huruf dan spasi";
                    }
                }

                //Nama Ayah Kandung
                if(empty($_POST["anama"])){
                    $error_anama = "Nama Ayah Kandung tidak boleh kosong";
                }
                else {
                    $anama = cek_input($_POST["anama"]);
                    if(!preg_match("/^[a-zA-Z]*$/",$anama)){
                        $error_anama = "Nama hanya boleh huruf dan spasi";
                    }
                }
                //Tahun Lahir Ayah
                if(empty($_POST["atahunlahir"])){
                    $error_atahunlahir = "Tahun Lahir tidak boleh kosong";
                }
                else {
                    $atahunlahir = cek_input($_POST["atahunlahir"]);
                    if(!is_numeric($atahunlahir)){
                        $error_atahunlahir = "Tahun Lahir hanya boleh angka";
                    }
                }
                //Pendidikan Ayah
                if(empty($_POST["apendidikan"])){
                    $error_apendidikan = "Inputan tidak boleh kosong";
                }
                else {
                    $apendidikan = cek_input($_POST["apendidikan"]);
                }
                //Pekerjaan Ayah
                if(empty($_POST["apekerjaan"])){
                    $error_apekerjaan = "Inputan tidak boleh kosong";
                }
                else {
                    $apekerjaan = cek_input($_POST["apekerjaan"]);
                }
                //Penghasilan Bulanan Ayah
                if(empty($_POST["apenghasilan"])){
                    $error_apenghasilan = "Inputan tidak boleh kosong";
                }
                else {
                    $apenghasilan = cek_input($_POST["apenghasilan"]);
                }
                //Ayah Berkebutuhan Khusus
                if(empty($_POST["akhusus"])){
                    $error_akhusus = "Inputan tidak boleh kosong";
                }
                else {
                    $akhusus = cek_input($_POST["akhusus"]);
                }

                //Nama Ibu Kandung
                if(empty($_POST["inama"])){
                    $error_inama = "Nama Ibu Kandung tidak boleh kosong";
                }
                else {
                    $inama = cek_input($_POST["inama"]);
                    if(!preg_match("/^[a-zA-Z]*$/",$inama)){
                        $error_inama = "Nama hanya boleh huruf dan spasi";
                    }
                }
                //Tahun Lahir Ibu
                if(empty($_POST["itahunlahir"])){
                    $error_itahunlahir = "Tahun Lahir tidak boleh kosong";
                }
                else {
                    $itahunlahir = cek_input($_POST["itahunlahir"]);
                    if(!is_numeric($itahunlahir)){
                        $error_itahunlahir = "Tahun Lahir hanya boleh angka";
                    }
                }
                //Pendidikan Ibu
                if(empty($_POST["ipendidikan"])){
                    $error_ipendidikan = "Inputan tidak boleh kosong";
                }
                else {
                    $ipendidikan = cek_input($_POST["ipendidikan"]);
                }
                //Pekerjaan Ibu
                if(empty($_POST["ipekerjaan"])){
                    $error_ipekerjaan = "Inputan tidak boleh kosong";
                }
                else {
                    $ipekerjaan = cek_input($_POST["ipekerjaan"]);
                }
                //Penghasilan Bulanan Ibu
                if(empty($_POST["ipenghasilan"])){
                    $error_ipenghasilan = "Inputan tidak boleh kosong";
                }
                else {
                    $ipenghasilan = cek_input($_POST["ipenghasilan"]);
                }
                //Ibu Berkebutuhan Khusus
                if(empty($_POST["ikhusus"])){
                    $error_ikhusus = "Inputan tidak boleh kosong";
                }
                else {
                    $ikhusus = cek_input($_POST["ikhusus"]);
                }
            }

            function cek_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if ($error_tanggal != "" OR $error_jenisDaftar != "" OR $error_tanggalMasuk != "" OR $error_nis != "" OR
            $error_npu != "" OR $error_paud != "" OR $error_tk != "" OR $error_noskhun != "" OR $error_noijazah != "" OR
            $error_hobi != "" OR $error_cita != "" OR $error_nama != "" OR $error_jkel != "" OR $error_nisn != "" OR
            $error_nik != "" OR $error_tempatlahir != "" OR $error_tgllahir != "" OR $error_agama != "" OR $error_khusus != "" OR 
            $error_alamat != "" OR $error_rt != "" OR $error_rw != "" OR $error_dusun != "" OR $error_desa != "" OR 
            $error_kecamatan != "" OR $error_pos != "" OR $error_tempattinggal != "" OR $error_transportasi != "" OR 
            $error_hp != "" OR $error_telp != "" OR $error_email != "" OR $error_kip != "" OR $error_nokip != "" OR 
            $error_kwn != "" OR $error_anama != "" OR $error_atahunlahir != "" OR $error_apendidikan != "" OR $error_apekerjaan != "" OR
            $error_apenghasilan != "" OR $error_akhusus != "" OR $error_inama != "" OR $error_itahunlahir != "" OR
            $error_ipendidikan != "" OR $error_ipekerjaan != "" OR $error_ipenghasilan != "" OR $error_ikhusus != ""){
                $Message = "Pendaftaran Gagal. Terdapat kesalahan pada inputan";
            }
            else{
            include('koneksi.php'); //include file koneksi untuk menghubungkan ke database
            mysqli_query($koneksi,"INSERT INTO pendaftaran (tanggal, jenisDaftar ,tanggalMasuk ,nis ,npu ,paud ,tk ,noskhun ,noijazah ,
            hobi ,cita ,nama ,jkel ,nisn ,nik ,tempatlahir ,tgllahir ,agama ,khusus ,alamat ,rt ,rw ,dusun ,desa ,kecamatan ,pos ,
            tempattinggal ,transportasi ,hp ,telp ,email ,kip ,nokip ,kwn ,anama, atahunlahir ,apendidikan ,apekerjaan ,apenghasilan ,
            akhusus ,inama ,itahunlahir ,ipendidikan ,ipekerjaan ,ipenghasilan ,ikhusus) 
            values ('$tanggal', '$jenisDaftar', '$tanggalMasuk', '$nis', '$npu', '$paud', '$tk', '$noskhun', '$noijazah', '$hobi', '$cita',
            '$nama', '$jkel', '$nisn', '$nik', '$tempatlahir', '$tgllahir', '$agama', '$khusus', '$alamat', '$rt', '$rw', '$dusun', '$desa', 
            '$kecamatan', '$pos', '$tempattinggal', '$transportasi', '$hp', '$telp', '$email', '$kip', '$nokip', '$kwn', '$anama',
            '$atahunlahir', '$apendidikan', '$apekerjaan', '$apenghasilan', '$akhusus', '$inama', '$itahunlahir', '$ipendidikan', 
            '$ipekerjaan', '$ipenghasilan', '$ikhusus')");
            $Message = "Pendaftaran Berhasil!";
            }
        ?>

<div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header" align="center">
                <h1>FORMULIR PESERTA DIDIK</h1>
            </div>
        <div class="card-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <!-- Tanggal hari ini -->
                <div class="from-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-9">
                        <input type="date" name="tanggal" class="form-control <?php echo ($error_tanggal !="" ? "is=invalid" : "");?>" 
                        id="tanggal" value="<?php echo $tanggal;?>" REQUIRED>
                        <span class="warning"><?php echo $error_tanggal;?></span>
                    </div>
                </div> <br>
                
                <fieldset>
                <div class="alert alert-primary">
                    <h5>Registrasi Peserta Didik</h5>
                </div>
                    <!-- Jenis Pendaftaran -->
                    <div class="from-group row">
                        <label for="daftar" class="col-sm-3 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-9 form-control">
                            <input type="radio" name="jenisDaftar" value="Siswa Baru"> Siswa Baru
                            <input type="radio" name="jenisDaftar" value="Pindahan"> Pindahan
                            <br>
                            <span class="warning"><?php echo $error_jenisDaftar;?></span>
                        </div>
                    </div> <br>
                    <!-- Tanggal Masuk Sekolah -->
                    <div class="from-group row">
                        <label for="tanggalMasuk" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-9">
                            <input type="date" name="tanggalMasuk" class="form-control <?php echo ($error_tanggal !="" ? "is=invalid" : "");?>" 
                            id="tanggal" value="<?php echo $tanggal;?>" REQUIRED>
                            <span class="warning"><?php echo $error_tanggal;?></span>
                        </div>
                    </div> <br>
                    <!-- NIS -->
                    <div class="from-group row">
                        <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                        <div class="col-sm-9">
                            <input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is=invalid" : "");?>" 
                            id="nis" placeholder="Masukkan NIS" value="<?php echo $nis;?>" REQUIRED>
                            <span class="warning"><?php echo $error_nis;?></span>
                        </div>
                    </div><br>
                    <!-- Nomor Peserta Ujian  -->
                    <div class="from-group row">
                        <label for="npu" class="col-sm-3 col-form-label">Nomor Peserta Ujian </label>
                        <div class="col-sm-9">
                            <input type="text" name="npu" class="form-control <?php echo ($error_npu !="" ? "is=invalid" : "");?>" 
                            id="npu" placeholder="Masukkan Nomor Peserta Ujian" value="<?php echo $npu;?>" REQUIRED>
                            <h6>*Nomor Peserta Ujian adalah 20 digit yang tertera dalam sertifikat SKHUN SD, diisi bagi peserta didik jenjang SMP</h6>
                            <span class="warning"><?php echo $error_npu;?></span>
                        </div>
                    </div> <br>
                    <!-- PAUD -->
                    <div class="from-group row">
                        <label for="paud" class="col-sm-3 col-form-label">Apakah Pernah PAUD</label>
                        <div class="col-sm-9 form-control">
                            <input type="radio" name="paud" value="Ya"> Ya
                            <input type="radio" name="paud" value="Tidak"> Tidak
                            <br>
                            <span class="warning"><?php echo $error_paud;?></span>
                        </div>
                    </div> <br>
                    <!-- TK -->
                    <div class="from-group row">
                        <label for="tk" class="col-sm-3 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-9 form-control">
                            <input type="radio" name="tk" value="Ya"> Ya
                            <input type="radio" name="tk" value="Tidak"> Tidak
                            <br>
                            <span class="warning"><?php echo $error_tk;?></span>
                        </div>
                    </div> <br>
                    <!-- Nomor Seri SKHUN -->
                    <div class="from-group row">
                        <label for="noskhun" class="col-sm-3 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-9">
                            <input type="text" name="noskhun" class="form-control <?php echo ($error_noskhun !="" ? "is=invalid" : "");?>" 
                            id="noskhun" placeholder="Masukkan Nomor Seri SKHUN" value="<?php echo $noskhun;?>" REQUIRED>
                            <span class="warning"><?php echo $error_noskhun;?></span>
                            <h6>*Diisi 16 Digit yang tertera di SKHUN SD - diisi bagi PD jenjang SMP</h6>
                        </div>
                    </div> <br>
                    <!-- Nomor Seri Ijazah -->
                    <div class="from-group row">
                        <label for="noijazah" class="col-sm-3 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-9 ">
                            <input type="text" name="noijazah" class="form-control <?php echo ($error_noijazah !="" ? "is=invalid" : "");?>" 
                            id="noijazah" placeholder="Masukkan Nomor Seri Ijazah" value="<?php echo $noijazah;?>" REQUIRED>
                            <span class="warning"><?php echo $error_noijazah;?></span>
                            <h6>*Diisi 16 Digit yang tertera di SKHUN SD - diisi bagi PD jenjang SMP</h6>
                        </div>
                    </div> <br>
                    <!-- Hobi -->
                    <div class="from-group row">
                        <label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
                        <select name="hobi" class="col-sm-9 form-control">
                            <option value="Olahraga">Olahraga</option>
                            <option value="Kesenian">Kesenian</option>
                            <option value="Membaca">Membaca</option>
                            <option value="Menulis">Menulis</option>
                            <option value="Traveling">Traveling</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_hobi;?></span>
                    </div> <br>
                    <!-- Cita-cita -->
                    <div class="from-group row">
                        <label for="cita" class="col-sm-3 col-form-label">Cita-cita</label>
                        <select name="cita" class="col-sm-9 form-control">
                            <option value="PNS">PNS</option>
                            <option value="TNI/Polri">TNI/Polri</option>
                            <option value="Guru/Dosen">Guru/Dosen</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Politikus">Politikus</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Seni/Lukis/Artis/Sejenisnya">Seni/Lukis/Artis/Sejenisnya</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_hobi;?></span>
                    </div><br>
                </fieldset>

                <fieldset>
                <div class="alert alert-primary">
                    <h5>Data Pribadi</h5>
                </div>
                    <!-- Nama Lengkap -->
                    <div class="from-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is=invalid" : "");?>" 
                            id="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $nama;?>" REQUIRED>
                            <span class="warning"><?php echo $error_nama;?></span>
                        </div>
                    </div> <br>
                    <!-- Jenis Kelamin -->
                    <div class="from-group row">
                        <label for="jkel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <input type="radio" name="jkel" value="Laki-laki"> Laki-laki
                            <input type="radio" name="jkel" value="Perempuan"> Perempuan
                            <br>
                            <span class="warning"><?php echo $error_jkel;?></span>
                        </div> 
                    </div> <br>
                    <!-- NISN -->
                    <div class="from-group row">
                        <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                        <div class="col-sm-9">
                            <input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is=invalid" : "");?>" 
                            id="nisn" placeholder="Masukkan NISN" value="<?php echo $nisn;?>" REQUIRED>
                            <span class="warning"><?php echo $error_nisn;?></span>
                        </div>
                    </div> <br>
                    <!-- NIK -->
                    <div class="from-group row">
                        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is=invalid" : "");?>" 
                            id="nik" placeholder="Masukkan NIK" value="<?php echo $nik;?>" REQUIRED>
                            <span class="warning"><?php echo $error_nik;?></span>
                        </div>
                    </div> <br>
                    <!-- Tempat Lahir -->
                    <div class="from-group row">
                        <label for="tempatlahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="tempatlahir" class="form-control <?php echo ($error_tempatlahir !="" ? "is=invalid" : "");?>" 
                            id="tempatlahir" placeholder="Masukkan Tempat Lahir" value="<?php echo $tempatlahir;?>" REQUIRED>
                            <span class="warning"><?php echo $error_tempatlahir;?></span>
                        </div>
                    </div> <br>
                    <!-- Tanggal Lahir -->
                    <div class="from-group row">
                        <label for="tgllahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" name="tgllahir" class="form-control <?php echo ($error_tgllahir !="" ? "is=invalid" : "");?>" 
                            id="tgllahir" value="<?php echo $tgllahir;?>" REQUIRED>
                            <span class="warning"><?php echo $error_tgllahir;?></span>
                        </div>
                    </div> <br>
                    <!-- Agama -->
                    <div class="from-group row">
                        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                        <select name="agama" class="col-sm-9 form-control">
                            <option value="Islam">Islam</option>
                            <option value="Kristen/Protestan">Kristen/Protestan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khong Hu Chu">Khong Hu Chu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_agama;?></span>
                    </div> <br>
                    <!-- Berkebutuhan Khusus -->
                    <div class="from-group row">
                        <label for="khusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                        <select name="khusus" class="col-sm-9 form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Netra">Netra</option>
                            <option value="Rungu">Rungu</option>
                            <option value="Grahita Ringan">Grahita Ringan</option>
                            <option value="Grahita Sedang">Grahita Sedang</option>
                            <option value="Daksa Ringan">Daksa Ringan</option>
                            <option value="Daksa Sedang">Daksa Sedang</option>
                            <option value="Laras">Laras</option>
                            <option value="Wicara">Wicara</option>
                            <option value="Tuna Ganda">Tuna Ganda</option>
                            <option value="Hiperaktif">Hiperaktif</option>
                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                            <option value="Narkoba">Narkoba</option>
                            <option value="Indigo">Indigo</option>
                            <option value="Down Sindrome">Down Sindrome</option>
                            <option value="Autis">Autis</option>
                        </select>
                        <span class="warning"><?php echo $error_khusus;?></span>
                    </div> <br>
                    <!-- Alamat -->
                    <div class="from-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is=invalid" : "");?>" 
                            id="alamat" placeholder="Masukkan Alamat" value="<?php echo $alamat;?>" REQUIRED>
                            <span class="warning"><?php echo $error_alamat;?></span>
                        </div>
                    </div> <br>
                    <!-- RT -->
                    <div class="from-group row">
                        <label for="rt" class="col-sm-3 col-form-label">RT</label>
                        <div class="col-sm-9">
                            <input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is=invalid" : "");?>" 
                            id="rt" placeholder="Masukkan No. RT" value="<?php echo $rt;?>" REQUIRED>
                            <span class="warning"><?php echo $error_rt;?></span>
                        </div>
                    </div> <br>
                    <!-- RW -->
                    <div class="from-group row">
                        <label for="rw" class="col-sm-3 col-form-label">RW</label>
                        <div class="col-sm-9">
                            <input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is=invalid" : "");?>" 
                            id="rw" placeholder="Masukkan No. RW" value="<?php echo $rw;?>" REQUIRED>
                            <span class="warning"><?php echo $error_rw;?></span>
                        </div>
                    </div> <br>
                    <!-- Nama Dusun -->
                    <div class="from-group row">
                        <label for="dusun" class="col-sm-3 col-form-label">Nama Dusun</label>
                        <div class="col-sm-9">
                            <input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is=invalid" : "");?>" 
                            id="dusun" placeholder="Masukkan Nama Dusun" value="<?php echo $dusun;?>" REQUIRED>
                            <span class="warning"><?php echo $error_dusun;?></span>
                        </div>
                    </div> <br>
                    <!-- Nama Kelurahan/Desa -->
                    <div class="from-group row">
                        <label for="desa" class="col-sm-3 col-form-label">Nama Desa</label>
                        <div class="col-sm-9">
                            <input type="text" name="desa" class="form-control <?php echo ($error_desa !="" ? "is=invalid" : "");?>" 
                            id="desa" placeholder="Masukkan Nama Desa" value="<?php echo $desa;?>" REQUIRED>
                            <span class="warning"><?php echo $error_desa;?></span>
                        </div>
                    </div> <br>
                    <!-- Kecamatan -->
                    <div class="from-group row">
                        <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-9">
                            <input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is=invalid" : "");?>" 
                            id="kecamatan" placeholder="Masukkan Kecamatan" value="<?php echo $kecamatan;?>" REQUIRED>
                            <span class="warning"><?php echo $error_kecamatan;?></span>
                        </div>
                    </div> <br>
                    <!-- Kode Pos  -->
                    <div class="from-group row">
                        <label for="pos" class="col-sm-3 col-form-label">Kode Pos</label>
                        <div class="col-sm-9">
                            <input type="text" name="pos" class="form-control <?php echo ($error_pos !="" ? "is=invalid" : "");?>" 
                            id="pos" placeholder="Masukkan Kode Pos" value="<?php echo $pos;?>" REQUIRED>
                            <span class="warning"><?php echo $error_pos;?></span>
                        </div>
                    </div> <br>
                    <!-- Tempat Tinggal -->
                    <div class="from-group row">
                        <label for="tempattinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
                        <select name="tempattinggal" class="col-sm-9 form-control">
                            <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                            <option value="Wali">Wali</option>
                            <option value="Kos">Kos</option>
                            <option value="Asrama">Asrama</option>
                            <option value="Panti Asuhan">Panti Asuhan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_tempattinggal;?></span>
                    </div> <br>
                    <!-- Moda Transportasi -->
                    <div class="from-group row">
                        <label for="transportasi" class="col-sm-3 col-form-label">Moda Transportasi</label>
                        <select name="transportasi" class="col-sm-9 form-control">
                            <option value="Jalan Kaki">Jalan Kaki</option>
                            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                            <option value="Kendaraan Umum">Kendaraan Umum/Angkot/Pete-pete</option>
                            <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                            <option value="Kereta Api">Kereta Api</option>
                            <option value="Ojek">Ojek</option>
                            <option value="Becak">Andong/Bendi/Sado/Dokar/Delman/Becak</option>
                            <option value="Perahu">Perahu penyeberangan/Rakit/Getek</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_transportasi;?></span>
                    </div> <br>
                    <!-- No. HP -->
                    <div class="from-group row">
                        <label for="hp" class="col-sm-3 col-form-label">Nomor HP</label>
                        <div class="col-sm-9">
                            <input type="text" name="hp" class="form-control <?php echo ($error_hp !="" ? "is=invalid" : "");?>" 
                            id="hp" placeholder="Masukkan Nomor HP" value="<?php echo $hp;?>" REQUIRED>
                            <span class="warning"><?php echo $error_hp;?></span>
                        </div>
                    </div> <br>
                    <!-- Nomor Telepon -->
                    <div class="from-group row">
                        <label for="telp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is=invalid" : "");?>" 
                            id="telp" placeholder="Masukkan Nomor Telepon" value="<?php echo $telp;?>" REQUIRED>
                            <span class="warning"><?php echo $error_telp;?></span>
                        </div>
                    </div> <br>
                    <!-- Email -->
                    <div class="from-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is=invalid" : "");?>" 
                            id="email" placeholder="Masukkan Email" value="<?php echo $email;?>" REQUIRED>
                            <span class="warning"><?php echo $error_email;?></span>
                        </div>
                    </div> <br>
                    <!-- Penerima KPS/PKH/KIP -->
                    <div class="from-group row">
                        <label for="kip" class="col-sm-3 col-form-label">Penerima KPS/PKH/KIP</label>
                        <div class="col-sm-9 form-control">
                            <input type="radio" name="kip" value="Ya"> Ya
                            <input type="radio" name="kip" value="Tidak"> Tidak
                            <br>
                            <span class="warning"><?php echo $error_kip;?></span>
                        </div>
                    </div> <br>
                    <!-- Nomor KPS/KKS/PKH/KIP -->
                    <div class="from-group row">
                        <label for="nokip" class="col-sm-3 col-form-label">Nomor KPS/KKS/PKH/KIP</label>
                        <div class="col-sm-9">
                            <input type="text" name="nokip" class="form-control <?php echo ($error_nokip !="" ? "is=invalid" : "");?>" 
                            id="nokip" placeholder="Masukkan Nomor KPS/KKS/PKH/KIP" value="<?php echo $nokip;?>" REQUIRED>
                            <span class="warning"><?php echo $error_nokip;?></span>
                        </div>
                    </div> <br>
                    <!-- Kewarganegaraan -->
                    <div class="from-group row">
                        <label for="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-9">
                            <input type="text" name="kwn" class="form-control <?php echo ($error_kwn !="" ? "is=invalid" : "");?>" 
                            id="kwn" placeholder="Masukkan Kewarganegaraan" value="<?php echo $kwn;?>" REQUIRED>
                            <span class="warning"><?php echo $error_kwn;?></span>
                        </div>
                    </div> <br>
                </fieldset>
                <fieldset>
                <div class="alert alert-primary">
                    <h5>Data Ayah Kandung</h5>
                </div>
                    <!-- Nama Ayah Kandung -->
                    <div class="from-group row">
                        <label for="anama" class="col-sm-3 col-form-label">Nama Ayah Kandung</label>
                        <div class="col-sm-9">
                            <input type="text" name="anama" class="form-control <?php echo ($error_anama !="" ? "is=invalid" : "");?>" 
                            id="anama" placeholder="Masukkan Nama Ayah Kandung" value="<?php echo $anama;?>" REQUIRED>
                            <span class="warning"><?php echo $error_anama;?></span>
                        </div>
                    </div> <br>
                    <!-- Tahun Lahir -->
                    <div class="from-group row">
                        <label for="atahunlahir" class="col-sm-3 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="atahunlahir" class="form-control <?php echo ($error_atahunlahir !="" ? "is=invalid" : "");?>" 
                            id="atahunlahir" placeholder="Masukkan Tahun Lahir" value="<?php echo $atahunlahir;?>" REQUIRED>
                            <span class="warning"><?php echo $error_atahunlahir;?></span>
                        </div>
                    </div> <br>
                    <!-- Pendidikan -->
                    <div class="from-group row">
                        <label for="apendidikan" class="col-sm-3 col-form-label">Pendidikan</label>
                        <select name="apendidikan" class="col-sm-9 form-control">
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value="SD Sederajat">SD Sederajat</option>
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                        <span class="warning"><?php echo $error_apendidikan;?></span>
                    </div> <br>
                    <!-- Pekerjaan -->
                    <div class="from-group row">
                        <label for="apekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                        <select name="apekerjaan" class="col-sm-9 form-control">
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_apekerjaan;?></span>
                    </div> <br>
                    <!-- Penghasilan Bulanan -->
                    <div class="from-group row">
                        <label for="apenghasilan" class="col-sm-3 col-form-label">Penghasilan Bulanan</label>
                        <select name="apenghasilan" class="col-sm-9 form-control">
                            <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                            <option value="500.000-1juta">500.000 - 999.999</option>
                            <option value="1juta-2juta">1.000.000 - 1.999.999</option>
                            <option value="2juta-5juta">2.000.000 - 4.999.999</option>
                            <option value="5juta-20juta">5.000.000 - 19.999.999</option>
                            <option value="Lebih dari 20juta">Lebih dari 20.000.000</option>
                        </select>
                        <span class="warning"><?php echo $error_apenghasilan;?></span>
                    </div> <br>
                    <!-- Berkebutuhan Khusus -->
                    <div class="from-group row">
                        <label for="akhusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                        <select name="akhusus" class="col-sm-9 form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Netra">Netra</option>
                            <option value="Rungu">Rungu</option>
                            <option value="Grahita Ringan">Grahita Ringan</option>
                            <option value="Grahita Sedang">Grahita Sedang</option>
                            <option value="Daksa Ringan">Daksa Ringan</option>
                            <option value="Daksa Sedang">Daksa Sedang</option>
                            <option value="Laras">Laras</option>
                            <option value="Wicara">Wicara</option>
                            <option value="Tuna Ganda">Tuna Ganda</option>
                            <option value="Hiperaktif">Hiperaktif</option>
                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                            <option value="Narkoba">Narkoba</option>
                            <option value="Indigo">Indigo</option>
                            <option value="Down Sindrome">Down Sindrome</option>
                            <option value="Autis">Autis</option>
                        </select>
                        <span class="warning"><?php echo $error_akhusus;?></span>
                    </div> <br>
                </fieldset>

                <fieldset>
                <div class="alert alert-primary">
                    <h5>Data Ibu Kandung</h5>
                </div>
                    <!-- Nama Ibu Kandung -->
                    <div class="from-group row">
                        <label for="inama" class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
                        <div class="col-sm-9">
                            <input type="text" name="inama" class="form-control <?php echo ($error_inama !="" ? "is=invalid" : "");?>" 
                            id="inama" placeholder="Masukkan Nama Ibu Kandung" value="<?php echo $inama;?>" REQUIRED>
                            <span class="warning"><?php echo $error_inama;?></span>
                        </div>
                    </div> <br>
                    <!-- Tahun Lahir -->
                    <div class="from-group row">
                        <label for="itahunlahir" class="col-sm-3 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="itahunlahir" class="form-control <?php echo ($error_itahunlahir !="" ? "is=invalid" : "");?>" 
                            id="itahunlahir" placeholder="Masukkan Tahun Lahir" value="<?php echo $itahunlahir;?>" REQUIRED>
                            <span class="warning"><?php echo $error_itahunlahir;?></span>
                        </div>
                    </div> <br>
                    <!-- Pendidikan -->
                    <div class="from-group row">
                        <label for="ipendidikan" class="col-sm-3 col-form-label">Pendidikan</label>
                        <select name="ipendidikan" class="col-sm-9 form-control">
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value="SD Sederajat">SD Sederajat</option>
                            <option value="SMP Sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat">SMA Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                        <span class="warning"><?php echo $error_ipendidikan;?></span>
                    </div> <br>
                    <!-- Pekerjaan -->
                    <div class="from-group row">
                        <label for="ipekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                        <select name="ipekerjaan" class="col-sm-9 form-control">
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_ipekerjaan;?></span>
                    </div> <br>
                    <!-- Penghasilan Bulanan -->
                    <div class="from-group row">
                        <label for="ipenghasilan" class="col-sm-3 col-form-label">Penghasilan Bulanan</label>
                        <select name="ipenghasilan" class="col-sm-9 form-control">
                            <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                            <option value="500.000-1juta">500.000 - 999.999</option>
                            <option value="1juta-2juta">1.000.000 - 1.999.999</option>
                            <option value="2juta-5juta">2.000.000 - 4.999.999</option>
                            <option value="5juta-20juta">5.000.000 - 19.999.999</option>
                            <option value="Lebih dari 20juta">Lebih dari 20.000.000</option>
                        </select>
                        <span class="warning"><?php echo $error_ipenghasilan;?></span>
                    </div> <br>
                    <!-- Berkebutuhan Khusus -->
                    <div class="from-group row">
                        <label for="ikhusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                        <select name="ikhusus" class="col-sm-9 form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Netra">Netra</option>
                            <option value="Rungu">Rungu</option>
                            <option value="Grahita Ringan">Grahita Ringan</option>
                            <option value="Grahita Sedang">Grahita Sedang</option>
                            <option value="Daksa Ringan">Daksa Ringan</option>
                            <option value="Daksa Sedang">Daksa Sedang</option>
                            <option value="Laras">Laras</option>
                            <option value="Wicara">Wicara</option>
                            <option value="Tuna Ganda">Tuna Ganda</option>
                            <option value="Hiperaktif">Hiperaktif</option>
                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                            <option value="Narkoba">Narkoba</option>
                            <option value="Indigo">Indigo</option>
                            <option value="Down Sindrome">Down Sindrome</option>
                            <option value="Autis">Autis</option>
                        </select>
                        <span class="warning"><?php echo $error_ikhusus;?></span>
                    </div> <br>
                </fieldset>
                <div class="from-group row">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        <a href="exportpendaftaran.php"><button type="button" class="btn btn-secondary">Export to Excel</button></a>
                        <a href="exportpdf.php"><button type="button" class="btn btn-secondary">Export to PDF</button></a>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>
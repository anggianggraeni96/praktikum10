<?php
//Menambahkan koneksi dan library dompdf
include ('koneksi.php');
require_once ("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
//Query ke database dan mengambil data dari database.
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM pendaftaran");
$html = '<center><h3>Formulir Peserta Didik</h3></center><hr/><br/>';
$html .= '<table border="1" width"100%">
<tr>
<th>No</th>
<th>Tanggal</th>
<th>Jenis Pendaftaran</th>
<th>Tanggal Masuk Sekolah</th>
<th>NIS</th>
<th>Nomor Peserta Ujian</th>
<th>Apakah PAUD</th>
<th>Apakah TK</th>
<th>No. SKHUN</th>
<th>No. Ijazah</th>
<th>Hobi</th>
<th>Cita-cita</th>
<th>Nama Lengkap</th>
<th>Jenis Kelamin</th>
<th>NISN</th>
<th>NIK</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Agama</th>
<th>Berkebutuhan Khusus</th>
<th>Alamat Jalan</th>
<th>RT</th>
<th>RW</th>
<th>Nama Dusun</th>
<th>Nama Desa</th>
<th>Kecamatan</th>
<th>Kode Pos</th>
<th>Tempat Tinggal</th>
<th>Mode Transportasi</th>
<th>No. HP</th>
<th>No. Telepon</th>
<th>Email Pribadi</th>
<th>Penerima KPS/PKH/KIP</th>
<th>Nomor KPS/KKS/PKH/KIP</th>
<th>Kewarganegaraan</th>
</tr>';
$no = 1;
while($row = mysqli_fetch_array($query)){
    $html .= "<tr>
    <td>".$no."</td>
    <td>".$row['tanggal']."</td>
    <td>".$row['jenisDaftar']."</td>
    <td>".$row['tanggalMasuk']."</td>
    <td>".$row['nis']."</td>
    <td>".$row['npu']."</td>
    <td>".$row['paud']."</td>
    <td>".$row['tk']."</td>
    <td>".$row['noijazah']."</td>
    <td>".$row['noskhun']."</td>
    <td>".$row['hobi']."</td>
    <td>".$row['cita']."</td>
    <td>".$row['nama']."</td>
    <td>".$row['jkel']."</td>
    <td>".$row['nisn']."</td>
    <td>".$row['nik']."</td>
    <td>".$row['tempatlahir']."</td>
    <td>".$row['tgllahir']."</td>
    <td>".$row['agama']."</td>
    <td>".$row['khusus']."</td>
    <td>".$row['alamat']."</td>
    <td>".$row['rt']."</td>
    <td>".$row['rw']."</td>
    <td>".$row['dusun']."</td>
    <td>".$row['desa']."</td>
    <td>".$row['kecamatan']."</td>
    <td>".$row['pos']."</td>
    <td>".$row['tempattinggal']."</td>
    <td>".$row['transportasi']."</td>
    <td>".$row['hp']."</td>
    <td>".$row['telp']."</td>
    <td>".$row['email']."</td>
    <td>".$row['kip']."</td>
    <td>".$row['nokip']."</td>
    <td>".$row['kwn']."</td>
    </tr>";}
$html .= "</html>";
$dompdf->loadHtml($html);
//Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
//Rendering dari HTML ke PDF
$dompdf->render();
//Melakukan output file PDF
$dompdf->stream('pendaftaran.pdf');
?>
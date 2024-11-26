<?php
require '../vendor/autoload.php'; // Pastikan PhpSpreadsheet di-load

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

// Koneksi ke database
$conn = new mysqli("localhost", "username", "password", "nama_database");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query data dari tabel `pedagang`
$sql = "SELECT * FROM pedagang";
$result = $conn->query($sql);

// Buat spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header kolom
$columns = [
    "No Registrasi", "NIK", "Nama Pemilik", "Nama Usaha", "Kecamatan", 
    "Kelurahan", "Alamat KTP", "Alamat Usaha", "Deskripsi Alamat",
    "Jenis Jualan", "Jam Operasional", "No HP", "Latitude", "Longitude", "Foto KTP", "Foto NIB", "Foto Lapak"
];
$columnIndex = 1;

foreach ($columns as $column) {
    $sheet->setCellValueByColumnAndRow($columnIndex, 1, $column);
    $columnIndex++;
}

// Isi data ke dalam sheet
if ($result->num_rows > 0) {
    $rowNumber = 2; // Baris ke-2 untuk data
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValueByColumnAndRow(1, $rowNumber, $row['no_registrasi']);
        $sheet->setCellValueByColumnAndRow(2, $rowNumber, $row['nik']);
        $sheet->setCellValueByColumnAndRow(3, $rowNumber, $row['nama_pemilik']);
        $sheet->setCellValueByColumnAndRow(4, $rowNumber, $row['nama_usaha']);
        $sheet->setCellValueByColumnAndRow(5, $rowNumber, $row['kecamatan']);
        $sheet->setCellValueByColumnAndRow(6, $rowNumber, $row['nama_kelurahan']);
        $sheet->setCellValueByColumnAndRow(7, $rowNumber, $row['alamat_ktp']);
        $sheet->setCellValueByColumnAndRow(8, $rowNumber, $row['alamat_usaha']);
        $sheet->setCellValueByColumnAndRow(9, $rowNumber, $row['deskripsi_alamat']);
        $sheet->setCellValueByColumnAndRow(10, $rowNumber, $row['jenis_jualan']);
        $sheet->setCellValueByColumnAndRow(11, $rowNumber, $row['jam_operasional']);
        $sheet->setCellValueByColumnAndRow(12, $rowNumber, $row['no_hp']);
        $sheet->setCellValueByColumnAndRow(13, $rowNumber, $row['latitude']);
        $sheet->setCellValueByColumnAndRow(14, $rowNumber, $row['longitude']);

        // Tambahkan gambar
        $fotoKTPPath = 'uploads/' . $row['foto_ktp']; // Path ke foto KTP
        $fotoNIBPath = 'uploads/' . $row['foto_nib']; // Path ke foto NIB
        $fotoLapakPath = 'uploads/' . $row['foto_lapak']; // Path ke foto lapak

        if (file_exists($fotoKTPPath)) {
            $drawing = new Drawing();
            $drawing->setName('Foto KTP');
            $drawing->setPath($fotoKTPPath);
            $drawing->setHeight(50); // Tinggi gambar
            $drawing->setCoordinates('O' . $rowNumber); // Kolom untuk gambar
            $drawing->setWorksheet($sheet);
        }

        if (file_exists($fotoNIBPath)) {
            $drawing = new Drawing();
            $drawing->setName('Foto NIB');
            $drawing->setPath($fotoNIBPath);
            $drawing->setHeight(50);
            $drawing->setCoordinates('P' . $rowNumber);
            $drawing->setWorksheet($sheet);
        }

        if (file_exists($fotoLapakPath)) {
            $drawing = new Drawing();
            $drawing->setName('Foto Lapak');
            $drawing->setPath($fotoLapakPath);
            $drawing->setHeight(50);
            $drawing->setCoordinates('Q' . $rowNumber);
            $drawing->setWorksheet($sheet);
        }

        $rowNumber++;
    }
}

// Nama file Excel
$fileName = "data_pedagang_" . date('Y-m-d') . ".xlsx";

// Set header untuk download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $fileName . '"');
header('Cache-Control: max-age=0');

// Tulis file Excel
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>

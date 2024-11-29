<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    die("Anda tidak memiliki izin untuk mengekspor data.");
}

require '../vendor/autoload.php'; // Pastikan PhpSpreadsheet di-load

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
// use PhpOffice\PhpSpreadsheet\Worksheet\Drawing; // Aktifkan jika ingin menggunakan gambar

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "data_harga_pokok");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query data dari tabel `pedagang`
$sql = "SELECT no_registrasi, nik, nama_pemilik, nama_usaha, kecamatan, nama_kelurahan, 
        alamat_ktp, alamat_usaha, deskripsi_alamat, jenis_jualan, jam_operasional, 
        no_hp, latitude, longitude, foto_ktp, foto_nib, foto_lapak 
        FROM pedagang";
$result = $conn->query($sql);

// Buat spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Header kolom
$columns = [
    "No Registrasi", "NIK", "Nama Pemilik", "Nama Usaha", "Kecamatan", 
    "Kelurahan", "Alamat KTP", "Alamat Usaha", "Deskripsi Alamat",
    "Jenis Jualan", "Jam Operasional", "No HP", "Latitude", "Longitude", 
    // "Foto KTP", "Foto NIB", "Foto Lapak" // Aktifkan jika ingin menambahkan kolom gambar
];

// Tambahkan header kolom ke baris pertama
$columnIndex = 1;
foreach ($columns as $column) {
    $cellCoordinate = Coordinate::stringFromColumnIndex($columnIndex) . '1'; // A1, B1, C1, ...
    $sheet->setCellValue($cellCoordinate, $column);
    $columnIndex++;
}

// Isi data ke dalam sheet
if ($result->num_rows > 0) {
    $rowNumber = 2; // Baris ke-2 untuk data
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowNumber, $row['no_registrasi']);
        $sheet->setCellValue('B' . $rowNumber, $row['nik']);
        $sheet->setCellValue('C' . $rowNumber, $row['nama_pemilik']);
        $sheet->setCellValue('D' . $rowNumber, $row['nama_usaha']);
        $sheet->setCellValue('E' . $rowNumber, $row['kecamatan']);
        $sheet->setCellValue('F' . $rowNumber, $row['nama_kelurahan']);
        $sheet->setCellValue('G' . $rowNumber, $row['alamat_ktp']);
        $sheet->setCellValue('H' . $rowNumber, $row['alamat_usaha']);
        $sheet->setCellValue('I' . $rowNumber, $row['deskripsi_alamat']);
        $sheet->setCellValue('J' . $rowNumber, $row['jenis_jualan']);
        $sheet->setCellValue('K' . $rowNumber, $row['jam_operasional']);
        $sheet->setCellValue('L' . $rowNumber, $row['no_hp']);
        $sheet->setCellValue('M' . $rowNumber, $row['latitude']);
        $sheet->setCellValue('N' . $rowNumber, $row['longitude']);

        // Tambahkan gambar
        /*
        $target_dir = "uploads/";
        $fotoPaths = [
            'O' => $target_dir . $row['foto_ktp'],
            'P' => $target_dir . $row['foto_nib'],
            'Q' => $target_dir . $row['foto_lapak']
        ];

        foreach ($fotoPaths as $column => $path) {
            if (file_exists($path)) {
                $drawing = new Drawing();
                $drawing->setName('Foto');
                $drawing->setPath($path);
                $drawing->setHeight(50);
                $drawing->setCoordinates($column . $rowNumber);
                $drawing->setWorksheet($sheet);
            }
        }
        */

        $rowNumber++;
    }
}
// Tambahkan format khusus untuk NIK, Latitude, dan Longitude
$sheet->getStyle('B2:B' . $rowNumber)->getNumberFormat()->setFormatCode('0'); // Format angka panjang untuk NIK
$sheet->getStyle('M2:N' . $rowNumber)->getNumberFormat()->setFormatCode('0.000000'); // Format desimal untuk Latitude & Longitude

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

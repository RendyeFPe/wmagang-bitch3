<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kuesioner";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ambil dari data
$nama = $_POST['nama'];
$domisili = $_POST['domisili'];
$U1 = $_POST['U1'];
$U2 = $_POST['U2'];
$U3 = $_POST['U3'];
$U4 = $_POST['U4'];
$U5 = $_POST['U5'];
$U6 = $_POST['U6'];
$U7 = $_POST['U7'];
$U8 = $_POST['U8'];
$U9 = $_POST['U9'];

// masukkan data ke database
$sql = "INSERT INTO kuesioner (nama, domisili, U1, U2, U3, U4, U5, U6, U7, U8, U9) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiiiiiiiii",$nama, $domisili, $U1, $U2, $U3, $U4, $U5, $U6, $U7, $U8, $U9);

if ($stmt->execute()) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();

// hitung hasil kuesioner
$total_values = array();
$total_questions = 9;
$interval_min = 25;

// ambil semua response
$sql = "SELECT * FROM kuesioner";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // inisialisasitotal nilai setiap response
    for ($i = 1; $i <= $total_questions; $i++) {
        $total_values["U$i"] = 0;
    }

    // hitung total nilai setiap response
    while ($row = $result->fetch_assoc()) {
        for ($i = 1; $i <= $total_questions; $i++) {
            $total_values["U$i"] += $row["U$i"];
        }
    }

    // hitung total nilai dan rata-rata question
    $total_all_questions = 0;
    $average_values = array();
    foreach ($total_values as $key => $value) {
        $average = $value / $result->num_rows;
        $average_values[$key] = $average;
        $total_all_questions += $value;
    }

    // hitung total skor interval 25-100
    $final_score = ($total_all_questions / ($total_questions * $result->num_rows)) * $interval_min;

    // tambahkan data ke database
    $sql =
        "INSERT INTO kuesioner_hasil (total_U1, total_U2, total_U3, total_U4, total_U5, total_U6, total_U7, total_U8, total_U9,
            rata_U1, rata_U2, rata_U3, rata_U4, rata_U5, rata_U6, rata_U7, rata_U8, rata_U9,
            total_semua, nilai_interval) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "iiiiiiiiiiiiiiiiiiid",
        $total_values['U1'],
        $total_values['U2'],
        $total_values['U3'],
        $total_values['U4'],
        $total_values['U5'],
        $total_values['U6'],
        $total_values['U7'],
        $total_values['U8'],
        $total_values['U9'],
        $average_values['U1'],
        $average_values['U2'],
        $average_values['U3'],
        $average_values['U4'],
        $average_values['U5'],
        $average_values['U6'],
        $average_values['U7'],
        $average_values['U8'],
        $average_values['U9'],
        $total_all_questions,
        $final_score
    );

    // Ambil nilai_interval terbaru
    $sql = "SELECT nilai_interval FROM kuesioner_hasil ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0
    ) {
        $row = $result->fetch_assoc();
        $_SESSION['nilai_interval'] = $row['nilai_interval'];
    }

    // message
    if ($stmt->execute()) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
} else {
    echo "No responses found.<br>";
}

$conn->close();

header("Location: index.php");
exit();


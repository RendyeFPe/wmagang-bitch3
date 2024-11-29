<?php include "include/header.php"; ?>
<?php include "include/sidebar.php"; ?>
<?php include "include/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset umum */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', Arial, sans-serif;
        }

        /* Wrapper utama */
        .content-wrapper {
            margin-left: 260px;
            padding: 20px;
            background: #f8f9fc;
            min-height: 100vh;
            transition: margin-left 0.3s;
            z-index: 1;
            position: relative;
        }

        /* Konten utama */
        .content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Heading */
        h2 {
            font-size: 24px;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Kartu (card) */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background: #ffffff;
            transition: transform 0.2s, box-shadow 0.2s;
            width: 60%;
            margin-left: auto;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #007bff;
            color: #ffffff;
            font-size: 18px;
            font-weight: 500;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .card-body {
            padding: 15px;
            text-align: center;
        }

        /* Kanvas untuk chart */
        canvas {
            max-width: 100% !important;
            height: auto !important;
        }

        /* Grid responsif */
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .col-md-6 {
            flex: 1 1 calc(45% - 10px);
        }

        @media (max-width: 767px) {
            .content-wrapper {
                margin-left: 0;
            }

            .col-md-6 {
                flex: 1 1 100%;
            }
        }

        /* Efek Hover pada Heading Card */
        .card-header:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="content">
        <h2>Statistik Usaha</h2>

        <!-- Chart Containers -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Klasifikasi Usaha</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chartKlasifikasi"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Top 10 Unit Usaha</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chartUnitUsaha"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Fetch data from PHP (replace with actual queries)
        <?php
        // Query for Klasifikasi Usaha data
        $queryKlasifikasi = "SELECT jenis_jualan, COUNT(*) AS jumlah FROM pedagang GROUP BY jenis_jualan";
        $resultKlasifikasi = mysqli_query($conn, $queryKlasifikasi);
        $klasifikasiData = [];
        while ($row = mysqli_fetch_assoc($resultKlasifikasi)) {
            $klasifikasiData[] = $row;
        }

        // Query for Unit Usaha data
        $queryUnitUsaha = "SELECT jenis_jualan, COUNT(*) AS jumlah FROM pedagang GROUP BY jenis_jualan ORDER BY jumlah DESC LIMIT 10";
        $resultUnitUsaha = mysqli_query($conn, $queryUnitUsaha);
        $unitUsahaData = [];
        while ($row = mysqli_fetch_assoc($resultUnitUsaha)) {
            $unitUsahaData[] = $row;
        }

        // Convert PHP data to JavaScript
        echo "const klasifikasiData = " . json_encode($klasifikasiData) . ";\n";
        echo "const unitUsahaData = " . json_encode($unitUsahaData) . ";\n";
        ?>

        // Chart for Klasifikasi Usaha
        const ctxKlasifikasi = document.getElementById('chartKlasifikasi').getContext('2d');
        new Chart(ctxKlasifikasi, {
            type: 'pie',
            data: {
                labels: klasifikasiData.map(data => data.jenis_jualan),
                datasets: [{
                    label: 'Jumlah',
                    data: klasifikasiData.map(data => data.jumlah),
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#FF9F40'],
                    borderColor: '#fff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });

        // Chart for Top 10 Unit Usaha
        const ctxUnitUsaha = document.getElementById('chartUnitUsaha').getContext('2d');
        new Chart(ctxUnitUsaha, {
            type: 'bar',
            data: {
                labels: unitUsahaData.map(data => data.jenis_jualan),
                datasets: [{
                    label: 'Jumlah Unit',
                    data: unitUsahaData.map(data => data.jumlah),
                    backgroundColor: '#36A2EB',
                    borderColor: '#4B8BEB',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 5
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });
    </script>
</body>
</html>

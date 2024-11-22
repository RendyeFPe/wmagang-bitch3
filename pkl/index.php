<?php include "include/header.php"; ?>
<?php include "include/sidebar.php"; ?>
<?php include "include/koneksi.php"; ?>

<div class="content">
    <h2>Dashboard</h2>

    <!-- Chart Containers -->
    <div class="row">
        <div class="col-md-6">
            <canvas id="chartKlasifikasi"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="chartUnitUsaha"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="chartTenagaKerja"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="chartNilaiInvestasi"></canvas>
        </div>
    </div>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Fetch data from PHP (replace with actual queries)
    <?php
    // Query untuk data klasifikasi usaha
    $queryKlasifikasi = "SELECT jenis_jualan, COUNT(*) AS jumlah FROM pedagang GROUP BY jenis_jualan";
    $resultKlasifikasi = mysqli_query($conn, $queryKlasifikasi);
    $klasifikasiData = [];
    while ($row = mysqli_fetch_assoc($resultKlasifikasi)) {
        $klasifikasiData[] = $row;
    }

    // Query untuk data unit usaha
    $queryUnitUsaha = "SELECT jenis_jualan, COUNT(*) AS jumlah FROM pedagang GROUP BY jenis_jualan ORDER BY jumlah DESC LIMIT 10";
    $resultUnitUsaha = mysqli_query($conn, $queryUnitUsaha);
    $unitUsahaData = [];
    while ($row = mysqli_fetch_assoc($resultUnitUsaha)) {
        $unitUsahaData[] = $row;
    }

    // Ubah data PHP menjadi JSON
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
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
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
                backgroundColor: '#36A2EB'
            }]
        }
    });
</script>

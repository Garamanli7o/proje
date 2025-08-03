<?php
require_once 'header.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>    

<div class="container">
    <div style="text-align: center; font-size: 25px;">
        <h1 style="font-family: Tahoma, Geneva, sans-serif;margin:10px; padding:10px;">Makine Verileri:</h1>
    </div>

    <div class="MakineVeriTablosu row justify-content-center">
        <!-- Kart 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow rounded"style="background:pink">
                <div class="card-body text-center">
                    <h5 class="card-title">Makine 1</h5>
                    <p class="card-text">Ağır iş makinesi</p>
                    <p class="card-text"><small class="text-muted">Tarih: 2025-07-07</small></p>
                    <a href="makine1.php" class="btn btn-primary mt-2">Detay Gör</a>
                </div>
            </div>
        </div>

        <!-- Kart 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow rounded"style="background:yellow">
                <div class="card-body text-center">
                    <h5 class="card-title">Makine 2</h5>
                    <p class="card-text">Bisküvi makinesi 2</p>
                    <p class="card-text"><small class="text-muted">Tarih: 2025-07-07</small></p>
                    <a href="makine2.php" class="btn btn-primary mt-2">Detay Gör</a>
                </div>
            </div>
        </div>

        <!-- Kart 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow rounded"style="background:pink">
                <div class="card-body text-center">
                    <h5 class="card-title">Makine 3</h5>
                    <p class="card-text">Sıcaklık: 74°C</p>
                    <p class="card-text"><small class="text-muted">Tarih: 2025-07-07</small></p>
                    <a href="makine_detay.php?id=3" class="btn btn-primary mt-2">Detay Gör</a>
                </div>
            </div>
        </div>

        <!-- Kart 4 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Makine 4</h5>
                    <p class="card-text">Sıcaklık: 71°C</p>
                    <p class="card-text"><small class="text-muted">Tarih: 2025-07-07</small></p>
                    <a href="makine_detay.php?id=4" class="btn btn-primary mt-2">Detay Gör</a>
                </div>
            </div>
        </div>

        <!-- Kart 5 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Makine 5</h5>
                    <p class="card-text">Sıcaklık: 70°C</p>
                    <p class="card-text"><small class="text-muted">Tarih: 2025-07-07</small></p>
                    <a href="makine_detay.php?id=5" class="btn btn-primary mt-2">Detay Gör</a>
                </div>
            </div>
        </div>

        <!-- Kart 6 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Makine 6</h5>
                    <p class="card-text">Sıcaklık: 69°C</p>
                    <p class="card-text"><small class="text-muted">Tarih: 2025-07-07</small></p>
                    <a href="makine_detay.php?id=6" class="btn btn-primary mt-2">Detay Gör</a>
                </div>
            </div>
        </div>
    </div>       
</div>

<?php
require_once 'footer.php'; 
?>
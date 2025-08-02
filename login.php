
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makine verileri</title>
    <link rel="icon" href="src/img/wrench.png" type="image/x-icon">
    <link rel="stylesheet" href="src/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
    <body style="background-image: url('src/img/background.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <form action="kontrol.php" method="post" style="background: white; padding: 2rem 2.5rem; border-radius: 20px 20px 20px 20px; box-shadow: 0 4px 24px rgba(0,0,0,0.1); min-width: 400px;">
                <h2 class="mb-4 text-center">Giriş Yap</h2>
                <div class="mb-3">
                    <label for="username" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="username" name="KullaniciAdi"style=" border-radius: 20px 20px 20px 20px;">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Şifre</label>
                    <input type="password" class="form-control" id="password" name="Sifre" style=" border-radius: 20px 20px 20px 20px;">
                </div>
                <br>
                <button type="submit" class="btn btn-primary w-100"style=" border-radius: 20px 20px 20px 20px;">Giriş Yap</button>
            </form>
        </div>
        <!-- JAVASCRIPT FILES -->
        <?php
            require_once 'footer.php'; 
        ?>
    </body>
</html>

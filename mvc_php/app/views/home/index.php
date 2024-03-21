<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman home</title>
</head>
<body>
<div class="card text-center">
  <div class="card-header">
    Selamat datang <?= $data['nama']?>
  </div>
  <div class="card-body">
    <h5 class="card-title">Saya sedang belajar konsep MVC</h5>
    <p class="card-text">Pak Sandhika Galih mengajarkan saya menggunakan PHP native yang bekerja seperti framework</p>
    <a href="#" class="btn btn-primary">Learn more!</a>
  </div>
  <div class="card-footer text-muted">
    15 Maret 2024
  </div>
</div>
</body>
</html>
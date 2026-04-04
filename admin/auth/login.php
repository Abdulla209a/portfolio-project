<!doctype html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
  <main class="auth-wrap d-flex justify-content-center align-items-center p-3">
    <section class="auth-card">
      <h1 class="h4 mb-2">Admin tizimga kirish</h1>
      <p class="mb-4">Portfolio boshqaruv paneliga kirish uchun ma'lumotlarni kiriting.</p>
      <form class="row g-3">
        <div class="col-12">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="admin@mail.com">
        </div>
        <div class="col-12">
          <label class="form-label">Parol</label>
          <input type="password" class="form-control" placeholder="********">
        </div>
        <div class="col-12 d-flex justify-content-between align-items-center">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">Eslab qolish</label>
          </div>
          <a href="#" class="text-decoration-none">Parolni unutdingizmi?</a>
        </div>
        <div class="col-12">
          <button type="button" class="btn btn-primary w-100">Kirish</button>
        </div>
      </form>
      <p class="mt-4 mb-0">Account yo'qmi? <a href="register.php" class="text-decoration-none">Ro'yxatdan o'tish</a></p>
    </section>
  </main>
</body>
</html>

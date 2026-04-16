
<!doctype html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Admin Panel</title>
  <meta name="description" content="Portfolio loyihalarini boshqarish uchun admin panel.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/admin.css">
</head>
<body>
  <div class="admin-layout">
    <aside class="sidebar">
      <a href="#" class="brand">AA Admin</a>
      <nav class="menu">
        <a href="#" class="menu-link active">Dashboard</a>
        <a href="#" class="menu-link">Loyihalar</a>
        <a href="#" class="menu-link">Xizmatlar</a>
        <a href="#" class="menu-link">Xabarlar</a>
        <a href="#" class="menu-link">Sozlamalar</a>
        <a href="auth/logout.php" class="menu-link">Chiqish</a>
      </nav>
    </aside>
    <div class="content-wrap">
      <header class="topbar">
        <div>
          <h1 class="h4 mb-0">Portfolio Admin Panel</h1>
          <small class="text-secondary">Sayt kontentini shu yerdan boshqarishingiz mumkin</small>
        </div>
        <div class="d-flex align-items-center gap-2">
          <a href="../index.php" class="btn btn-outline-light btn-sm">Saytni ko'rish</a>
          <button class="btn btn-primary btn-sm">Saqlash</button>
        </div>
      </header>

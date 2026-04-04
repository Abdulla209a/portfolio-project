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
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
  <div class="admin-layout">
    <aside class="sidebar">
      <a href="#" class="brand">AZ Admin</a>
      <nav class="menu">
        <a href="#" class="menu-link active">Dashboard</a>
        <a href="#" class="menu-link">Loyihalar</a>
        <a href="#" class="menu-link">Xizmatlar</a>
        <a href="#" class="menu-link">Xabarlar</a>
        <a href="#" class="menu-link">Sozlamalar</a>
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

      <main class="main-content">
        <section class="row g-3 mb-4">
          <div class="col-sm-6 col-xl-3">
            <div class="stat-card">
              <p>Jami loyihalar</p>
              <h3>12</h3>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="stat-card">
              <p>Yangi xabarlar</p>
              <h3>8</h3>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="stat-card">
              <p>Faol xizmatlar</p>
              <h3>5</h3>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="stat-card">
              <p>Bugungi tashrif</p>
              <h3>143</h3>
            </div>
          </div>
        </section>

        <section class="card-box mb-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h5 mb-0">Portfolio loyihasini qo'shish</h2>
            <span class="badge text-bg-info">Yangi</span>
          </div>
          <form class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Loyiha nomi</label>
              <input type="text" class="form-control" placeholder="Masalan: Restaurant Landing">
            </div>
            <div class="col-md-6">
              <label class="form-label">Kategoriya</label>
              <select class="form-select">
                <option>Landing Page</option>
                <option>Corporate</option>
                <option>E-commerce</option>
                <option>Portfolio</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">GitHub yoki Demo link</label>
              <input type="url" class="form-control" placeholder="https://example.com">
            </div>
            <div class="col-md-6">
              <label class="form-label">Loyiha rasmi</label>
              <input type="file" class="form-control">
            </div>
            <div class="col-12">
              <label class="form-label">Qisqa tavsif</label>
              <textarea class="form-control" rows="4" placeholder="Loyiha haqida qisqacha yozing..."></textarea>
            </div>
            <div class="col-12 d-flex gap-2">
              <button type="button" class="btn btn-primary">Loyihani saqlash</button>
              <button type="reset" class="btn btn-outline-light">Tozalash</button>
            </div>
          </form>
        </section>

        <section class="card-box">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h5 mb-0">Mavjud loyihalar</h2>
            <input type="search" class="form-control form-control-sm table-search" placeholder="Qidirish...">
          </div>
          <div class="table-responsive">
            <table class="table table-dark table-hover align-middle mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nomi</th>
                  <th>Kategoriya</th>
                  <th>Holat</th>
                  <th>Yangilangan sana</th>
                  <th>Amal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>E-commerce Landing</td>
                  <td>Landing Page</td>
                  <td><span class="badge text-bg-success">Aktiv</span></td>
                  <td>2026-04-02</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-outline-info">Tahrirlash</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">O'chirish</button>
                  </td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Corporate Website</td>
                  <td>Corporate</td>
                  <td><span class="badge text-bg-success">Aktiv</span></td>
                  <td>2026-03-28</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-outline-info">Tahrirlash</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">O'chirish</button>
                  </td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Personal Portfolio</td>
                  <td>Portfolio</td>
                  <td><span class="badge text-bg-warning">Draft</span></td>
                  <td>2026-03-25</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-outline-info">Tahrirlash</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">O'chirish</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </main>
    </div>
  </div>
</body>
</html>

<!doctype html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact CRUD - Edit</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/contact.css">
</head>
<body>
  <div class="page-wrap">
    <div class="panel">
      <div class="title-row">
        <h1 class="h4 mb-0">Contact xabarini tahrirlash</h1>
        <a href="index.php" class="btn btn-outline-light btn-sm">Orqaga</a>
      </div>
      <form class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Ism</label>
          <input type="text" class="form-control" value="Ali Valiyev">
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" value="ali@mail.com">
        </div>
        <div class="col-12">
          <label class="form-label">Mavzu</label>
          <input type="text" class="form-control" value="Yangi loyiha">
        </div>
        <div class="col-12">
          <label class="form-label">Xabar matni</label>
          <textarea class="form-control" rows="6">Assalomu alaykum, loyiha bo'yicha bog'lanmoqchi edim.</textarea>
        </div>
        <div class="col-12 d-flex gap-2">
          <button type="button" class="btn btn-primary">Yangilash</button>
          <button type="button" class="btn btn-outline-danger">Delete</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<?php
session_start();
?>
<!doctype html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abdulla's Portfolio</title>
  <meta name="description" content="Frontend va web dizayn portfolio single page sahifasi.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="header-area">
    <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
      <div class="container">
        <a class="navbar-brand fw-bold text-white" href="#home">AA Portfolio</a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#home">Bosh sahifa</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">Men haqimda</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Xizmatlar</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Ishlarim</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Bog'lanish</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="home" class="hero-section d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <span class="badge hero-badge mb-3">Backend Developer </span>
            <h1 class="display-4 fw-bold mb-3">Portfolio sahifamga xush kelibsiz</h1>
            <p class="lead text-light-emphasis mb-4">Men zamonaviy, tezkor va mobilga mos web sahifalar yarataman. Quyida mening xizmatlarim va tayyor loyihalarim bilan tanishishingiz mumkin.</p>
            <div class="d-flex flex-wrap gap-3">
              <a href="#portfolio" class="btn btn-primary btn-lg px-4">Ishlarimni ko'rish</a>
              <a href="#contact" class="btn btn-outline-light btn-lg px-4">Bog'lanish</a>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="hero-card p-4">
              <h5 class="mb-3">Qisqacha ko'rsatkichlar</h5>
              <div class="row g-3">
                <div class="col-6">
                  <div class="stat-box">
                    <h3>2+</h3>
                    <p>Yillik tajriba</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="stat-box">
                    <h3>3+</h3>
                    <p>Tugallangan loyiha</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="stat-box">
                    <h3>2+</h3>
                    <p>Mamnun mijoz</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="stat-box">
                    <h3>100%</h3>
                    <p>Responsive backend xizmat</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="section-padding">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <img src="assets/img/portfolio-1.svg" class="img-fluid rounded-4 shadow-sm" alt="Portfolio preview">
          </div>
          <div class="col-lg-6">
            <h2 class="section-title">Men haqimda</h2>
            <p>Men foydalanuvchi tajribasiga e'tibor beradigan web dasturchiman. Loyihalarda toza kod, qulay interfeys va yuqori ishlash tezligini birinchi o'ringa qo'yaman.</p>
            <p>Asosan landing page, portfolio, korporativ sayt va admin panel interfeyslarini zamonaviy uslubda ishlab chiqaman.</p>
            <div class="row g-3 mt-2">
              <div class="col-md-6">
                <div class="skill-item">
                  <span>HTML / CSS </span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 95%;">95%</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="skill-item">
                  <span>Bootstrap</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 92%;">92%</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="skill-item">
                  <span>PHP</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 85%;">85%</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="skill-item">
                  <span>UI Design</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 88%;">88%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section-padding section-bg">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">Xizmatlar</h2>
          <p class="section-subtitle">Har bir loyiha uchun individual va sifatli yondashuv</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="service-card h-100">
              <h5>Landing Page</h5>
              <p>Mahsulot yoki xizmatlaringiz uchun konversiyaga yo'naltirilgan, zamonaviy landing sahifa yaratish.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-card h-100">
              <h5>Portfolio Sayt</h5>
              <p>Shaxsiy brendingizni kuchaytiruvchi, ishlaringizni professional tarzda namoyish etuvchi sayt.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="service-card h-100">
              <h5>UI/UX Dizayn</h5>
              <p>Figma asosida sodda, chiroyli va foydalanuvchiga qulay interfeys dizaynlari tayyorlash.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="section-padding">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="section-title">So'nggi loyihalarim</h2>
          <p class="section-subtitle">Quyida bir nechta namunaviy ishlarim keltirilgan</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <article class="portfolio-card">
              <img src="assets/img/portfolio-1.svg" class="img-fluid" alt="E-commerce loyiha rasmi">
              <div class="portfolio-content">
                <h5>E-commerce Landing</h5>
                <p>Onlayn do'kon uchun sotuvga yo'naltirilgan landing page dizayni.</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="portfolio-card">
              <img src="assets/img/portfolio-2.svg" class="img-fluid" alt="Korporativ sayt loyihasi">
              <div class="portfolio-content">
                <h5>Corporate Website</h5>
                <p>Kompaniya xizmatlari va jamoasini tanishtiruvchi to'liq korporativ sayt.</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="portfolio-card">
              <img src="assets/img/portfolio-3.svg" class="img-fluid" alt="Shaxsiy portfolio loyihasi">
              <div class="portfolio-content">
                <h5>Personal Portfolio</h5>
                <p>Freelancer va dasturchilar uchun modern one-page portfolio yechimi.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-padding section-bg">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-5">
            <h2 class="section-title">Bog'lanish</h2>
            <p class="mb-4">Yangi loyiha boshlamoqchimisiz? Menga yozing, qisqa vaqt ichida javob beraman.</p>
            <ul class="contact-list list-unstyled">
              <li><strong>Telefon:</strong> +998 94 652 55 94</li>
              <li><strong>Email:</strong> Abdullaatajanovv@gmail.com</li>
              <li><strong>Manzil:</strong> Xorazm, O'zbekiston</li>
            </ul>
          </div>
          <div class="col-lg-7">
            <?php
            if(!empty($_SESSION['errors'])){
              echo "<ul class='alert alert-danger'>";
              foreach($errors as $error){
                echo "<li>$error</li>";
              }
              echo "</ul class='alert alert-danger'>";
              unset($_SESSION['errors']);
            }
            if(!empty($_SESSION['success'])){
              echo "<div class='alert alert-success'>{$_SESSION['success']}</div>";
              unset($_SESSION['success']);
            }
            
            ?>
            <form action="db/insert_mess.php" method="POST" class="contact-form">
              <div class="row g-3">
                <div class="col-md-6">
                  <input name="name" type="text" class="form-control" placeholder="Ismingiz" required>
                </div>
                <div class="col-md-6">
                  <input name="email" type="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-12">
                  <input name="subject" type="text" class="form-control" placeholder="Mavzu">
                </div>
                <div class="col-12">
                  <textarea name="message" class="form-control" rows="5" placeholder="Xabaringiz"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary px-4">Yuborish</button>
                </div>
              </div>
            </form> 
          </div>
        </div>
      </div>
    </section> 
  </main>

  <footer class="footer-area py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between gap-2">
      <p class="mb-0">© 2026 AA Portfolio. Barcha huquqlar himoyalangan.</p>
      <p class="mb-0">Bootstrap asosida yaratilgan single-page portfolio</p>
    </div>
  </footer>

</body>
</html>

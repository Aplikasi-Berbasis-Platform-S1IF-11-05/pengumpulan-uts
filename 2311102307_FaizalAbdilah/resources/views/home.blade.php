<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jall Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
body {
    background: #0d0d0d;
    color: white;
    scroll-behavior: smooth;
    font-family: 'Segoe UI', sans-serif;
}

.navbar {
    background: rgba(0,0,0,0.85);
    backdrop-filter: blur(10px);
}

.hero {
    height: 100vh;
    background: linear-gradient(135deg, #ff0000, #000000);
    display: flex;
    align-items: center;
    text-align: center;
}

.btn-red {
    background: #ff0000;
    color: white;
    border-radius: 30px;
    padding: 10px 25px;
}
.btn-red:hover {
    background: #cc0000;
}

.card {
    background: #111;
    border: none;
    border-radius: 15px;
    overflow: hidden;
    transition: 0.3s;
}
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 0 25px rgba(255,0,0,0.4);
}
.card img {
    height: 200px;
    object-fit: cover;
}

.skill-box { margin-bottom: 20px; }
.skill-bar {
    background: #222;
    border-radius: 20px;
    overflow: hidden;
}
.skill-fill {
    background: linear-gradient(90deg, red, darkred);
    height: 10px;
}

.section-title { font-weight: bold; }
.section-sub { color: #aaa; }

.cta {
    background: linear-gradient(135deg, #1a0000, #000);
}

footer { background: black; }
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
<div class="container">
<a class="navbar-brand fw-bold" href="#">JallDev</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="nav">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
<li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
<li class="nav-item"><a class="nav-link" href="#project">Project</a></li>
<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
</ul>
</div>
</div>
</nav>

<!-- HERO -->
<section id="home" class="hero">
<div class="container" data-aos="fade-up">
<h1 class="fw-bold">Bikin Website Biasa Itu Mudah. Bikin yang Berkesan Itu Gua FAIZAL ABDILAH 2311102307🚀</h1>
<p class="mt-3 section-sub">
Gua bantu lu bikin website yang bukan cuma jalan, tapi juga terlihat mahal dan profesional.
</p>
<a href="#project" class="btn btn-red mt-3">Lihat Project</a>
</div>
</section>

<!-- ABOUT -->
<section id="about" class="py-5 text-center">
<div class="container" data-aos="fade-up">
<h2 class="section-title">About Me</h2>
<p class="section-sub mt-3">
Developer yang fokus bikin solusi digital modern — cepat, aman, dan punya tampilan yang bikin orang betah.
</p>
</div>
</section>

<!-- SKILLS -->
<section id="skills" class="py-5">
<div class="container">
<h2 class="text-center mb-5 section-title" data-aos="fade-up">Skills</h2>

<div class="skill-box" data-aos="fade-right">
<p>HTML / CSS <span class="float-end">90%</span></p>
<div class="skill-bar"><div class="skill-fill" style="width: 90%"></div></div>
</div>

<div class="skill-box" data-aos="fade-right">
<p>JavaScript <span class="float-end">80%</span></p>
<div class="skill-bar"><div class="skill-fill" style="width: 80%"></div></div>
</div>

<div class="skill-box" data-aos="fade-right">
<p>PHP / Laravel <span class="float-end">85%</span></p>
<div class="skill-bar"><div class="skill-fill" style="width: 85%"></div></div>
</div>

<div class="skill-box" data-aos="fade-right">
<p>Cyber Security <span class="float-end">75%</span></p>
<div class="skill-bar"><div class="skill-fill" style="width: 75%"></div></div>
</div>

</div>
</section>

<!-- FORM TAMBAH PROJECT -->
<div class="container mb-5" data-aos="fade-up">
<h4>Tambah Project Baru</h4>
<input type="text" id="judul" class="form-control mb-2" placeholder="Nama Project">
<input type="text" id="desc" class="form-control mb-2" placeholder="Deskripsi">
<input type="text" id="img" class="form-control mb-2" placeholder="Link Gambar">
<button onclick="tambahProject()" class="btn btn-red">Tambah Project</button>
</div>

<!-- PROJECT -->
<section id="project" class="py-5">
<div class="container">

<h2 class="text-center section-title" data-aos="fade-up">Project Pilihan</h2>
<p class="text-center section-sub mb-5">Beberapa karya terbaik yang gua bangun dengan kualitas tinggi</p>

<div class="row g-4">

<div class="col-md-4" data-aos="zoom-in">
<div class="card shadow">
<img src="https://picsum.photos/400/300?random=1">
<div class="card-body">
<h5>Rental Mobil System</h5>
<p>Sistem booking kendaraan modern dengan pengalaman user yang simpel dan cepat.</p>
</div>
</div>
</div>

<div class="col-md-4" data-aos="zoom-in">
<div class="card shadow">
<img src="https://picsum.photos/400/300?random=2">
<div class="card-body">
<h5>AI Fuzzy Prediction</h5>
<p>Sistem cerdas berbasis logika fuzzy untuk analisis data yang akurat.</p>
</div>
</div>
</div>

<div class="col-md-4" data-aos="zoom-in">
<a href="https://www.bormadago.com/shop/product/3882/indomie-soto-70gr?srsltid=AfmBOorxF10rspRfF8UPmatg6lRXjjoVntk-bstpKe2vgqyoGsB6A6Bs" target="_blank" style="text-decoration:none; color:inherit;">
<div class="card shadow">
<img src="https://picsum.photos/400/300?random=3">
<div class="card-body">
<h5>ZALLSTORE</h5>
<p>Kami menyediakan produk terbaik dengan pengalaman belanja yang cepat dan nyaman.</p>
</div>
</div>
</a>
</div>

</div>

<!-- PROJECT TAMBAHAN DARI CRUD -->
<div class="row g-4 mt-4" id="project-list"></div>

</div>
</section>

<!-- CTA -->
<section class="cta py-5 text-center">
<div class="container" data-aos="fade-up">
<h2 class="fw-bold">Punya Ide Gila? Gua Bantu Realisasikan 🔥</h2>
<p class="section-sub">Diskusi gratis buat ngebangun project lu jadi nyata</p>
<a href="#contact" class="btn btn-red">Mulai Sekarang</a>
</div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-5 text-center">
<div class="container" data-aos="fade-up">
<h2>Contact</h2>
<p class="mt-3">Email: jall@email.com</p>
<p>Instagram: @jall.dev</p>
<a href="https://wa.me/+62895329226764" class="btn btn-red mt-2">Hubungi Gua</a>
</div>
</section>

<!-- FOOTER -->
<footer class="text-center py-3">
<p>© 2026 JallDev — Crafted with passion</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init({ once: true });

// CRUD SIMPLE
let projects = JSON.parse(localStorage.getItem("projects")) || [];

function renderProject() {
  let container = document.getElementById("project-list");
  container.innerHTML = "";

  projects.forEach((p, i) => {
    container.innerHTML += `
      <div class="col-md-4">
        <div class="card shadow">
          <img src="${p.img || 'https://picsum.photos/400/300?random='+i}">
          <div class="card-body">
            <h5>${p.judul}</h5>
            <p>${p.desc}</p>
            <button onclick="hapusProject(${i})" class="btn btn-danger btn-sm">Hapus</button>
          </div>
        </div>
      </div>
    `;
  });
}

function tambahProject() {
  let judul = document.getElementById("judul").value;
  let desc = document.getElementById("desc").value;
  let img = document.getElementById("img").value;

  if (!judul || !desc) return alert("isi dulu njirr");

  projects.push({ judul, desc, img });
  localStorage.setItem("projects", JSON.stringify(projects));

  document.getElementById("judul").value = "";
  document.getElementById("desc").value = "";
  document.getElementById("img").value = "";

  renderProject();
}

function hapusProject(i) {
  projects.splice(i, 1);
  localStorage.setItem("projects", JSON.stringify(projects));
  renderProject();
}

renderProject();
</script>

</body>
</html>
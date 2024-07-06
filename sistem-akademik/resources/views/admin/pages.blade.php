<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/dist/css/style.css')}}"
    />

    <!-- link bootstrsap icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <title>Sistem Akademik STTNF</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #000080;">
      <div class="container">
        <a
          class="navbar-brand"
          href="#"
          >Sistem Akademik</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="navbarNav"
        >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#about"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#projects"
                >Profile</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#contact"
                >Contact Me</a
              >
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Masuk
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @guest
                <li><a class="dropdown-item" href="{{ route('login')}}">Login</a></li>
                <li><a class="dropdown-item" href="{{ route('register')}}">Register</a></li>
                @endguest
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/dist/img/landingpage.jpg') }}" class="d-block w-100" alt="...">
        </div>
      </div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,64L60,101.3C120,139,240,213,360,208C480,203,600,117,720,122.7C840,128,960,224,1080,234.7C1200,245,1320,171,1380,133.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
    </svg>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 class="text-center">Tentang STT Nurul Fikri</h2>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-4">
              <p>
                Sekolah Tinggi Teknologi Terpadu Nurul Fikri (populer disebut STT-NF) merupakan perguruan tinggi yang memadukan keilmuan praktis di bidang teknologi informasi dengan pengembangan kepribadian islami, kompeten dan berkarakter. Pada tahun 2012, STT-NF resmi berdiri berdasarkan SK Menteri Pendidikan dan Kebudayaan Nomor 269/E/O/2012.
              </p>
            </div>
            <div class="col-md-4">
              <p>
                Salah satu tujuan berdirinya STT-NF adalah “Mencetak Sarjana komputer berakhlak mulia, profesional, dan bersertifikasi IT”. Tujuan itu untuk memenuhi kebutuhan sarjana teknologi informasi ditengah masyarakat, dengan konsisten mengusung nilai-nilai profesionalisme dan keislaman. 
            </div>
          </div>
        </div>
      </div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path
          fill="#fb8716"
          fill-opacity="1"
          d="M0,192L60,170.7C120,149,240,107,360,122.7C480,139,600,213,720,208C840,203,960,117,1080,85.3C1200,53,1320,75,1380,85.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Profile Dosen</h2>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="{{ asset('assets/dist/img/nasrul.JPG') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">NASRUL, S.Kom, M.Kom</h5>
                <p class="card-text">2019 – Ilmu Komputer – Universitas Budi Luhur</p>
                <p class="card-text">2016 – Teknik Informatika – STT Terpadu NF </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{ asset('assets/dist/img/sirojulmunir.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  Dr. Sirojul Munir, S.Si, M.Kom.</h5>
                <p class="card-text">2009 – S2 – Ilmu Komputer  – Universitas Budi Luhur</p>
                <p class="card-text">1995 – S1 – Matematika – UI</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="{{ asset('assets/dist/img/rioo.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  Ahmad Rio Adriansyah, S.Si. M.Si.</h5>
                <p class="card-text">2013 – S2 – ITB/Kanazawa University Sains Komputasi</p>
                <p class="card-text">2009 – S1 – ITB Matematika</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,224L60,202.7C120,181,240,139,360,149.3C480,160,600,224,720,224C840,224,960,160,1080,154.7C1200,149,1320,203,1380,229.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form>
                <div class="mb-3">
                  <label
                    for="Name"
                    class="form-label"
                    >Nama Lengkap</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="name"
                  />
                </div>
                <div class="mb-3">
                  <label
                    for="exampleInputEmail1"
                    class="form-label"
                    >Email</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    aria-describedby="email"
                  />
                </div>
                <div class="mb-3">
                  <label
                    for="exampleInputPassword1"
                    class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                  />
                </div>
                <div class="mb-3">
                  <label
                    for="pesan"
                    class="form-label"
                    >Pesan</label
                  >
                  <textarea
                    class="form-control"
                    id="pesan"
                    rows="3"
                  ></textarea>
                </div>
                <button
                  type="submit"
                  class="btn btn-primary"
                >
                  Kirim
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1440 320"
    >
      <path
        fill="#000080"
        fill-opacity="1"
        d="M0,160L60,181.3C120,203,240,245,360,229.3C480,213,600,139,720,138.7C840,139,960,213,1080,234.7C1200,256,1320,224,1380,208L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
      ></path>
    </svg>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class=" text-white text-center pb-4" style="background-color: #000080;">
      <p>
        Created with by <i class="bi bi-suit-heart-fill text-danger"></i>
        <a
          href=""
          class="text-white fw-bold"
          >Zalfa Khoirunnisa</a
        >
      </p>
    </footer>
    <!-- Akhir Footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

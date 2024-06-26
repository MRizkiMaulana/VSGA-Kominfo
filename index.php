<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pariwisata - Landing Page</title>
    <link
      href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
      rel="stylesheet"
    />
    <style>
      .jumbotron {
        position: relative;
        background-image: url("assets/img/2025-BMW-M5-001-1080.jpg");
        background-size: cover;
        color: white;
      }
      .jumbotron::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(
          to bottom,
          rgba(0, 0, 0, 0),
          rgba(0, 0, 0, 0.5)
        );
        z-index: 1;
      }
      .jumbotron .container-fluid {
        position: relative;
        z-index: 2;
      }
      .footer {
        background-color: #343a40;
        color: white;
        padding: 20px 0;
      }
      .footer a {
        color: #ffffff;
        text-decoration: none;
      }
      .footer a:hover {
        color: #d4d4d4;
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <!-- Jumbotron -->
    <div class="jumbotron p-4 mb-0 bg-body-tertiary">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat Datang di Persewaan Mobil</h1>
        <p class="col-md-8 fs-4">Sudah terpecaya setelah 1000 tahun berdiri</p>
      </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="p-2 container-fluid" style="background-color: white">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Beranda</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paket.php"
                >Pendaftaran Paket Wisata</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar_pesanan.php">Daftar Pesanan</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Cari Transaksi"
              aria-label="cari-transaksi"
            />
            <button class="btn btn-outline-success" type="submit">Cari</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Grid -->
    <div class="mt-5 container text-center">
      <div class="row">
        <div class="col">
          <div class="card" style="width: 25rem">
            <img
              src="assets/img/grahame-jenkins-p7tai9P7H-s-unsplash.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Mobil</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque
                dolores ipsa nemo deleniti nulla saepe alias cupiditate facilis,
                tenetur numquam accusamus exercitationem distinctio dolor
                aliquid tempore? Laborum ut dolorem facilis!
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 25rem">
            <img
              src="assets/img/joey-banks-YApiWyp0lqo-unsplash.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Mobil</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
                laboriosam voluptates architecto iure dolore assumenda non
                libero quae culpa saepe. Consequuntur, dicta natus. Blanditiis
                est in facilis nihil tempore inventore!
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 25rem">
            <img
              src="assets/img/sven-d-a4S6KUuLeoM-unsplash.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Mobil</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                aspernatur voluptas veritatis repudiandae itaque totam quo nemo
                deleniti, provident, eum ducimus laudantium aliquam harum earum
                dolor, magnam ex accusantium quibusdam.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L40,122.7C80,117,160,107,240,122.7C320,139,400,181,480,218.7C560,256,640,288,720,250.7C800,213,880,107,960,96C1040,85,1120,171,1200,202.7C1280,235,1360,213,1400,202.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        <div style="background-color: #0099ff;" class="d-flex flex-wrap justify-content-between py-4 px-3">
        <p class="text-white" style="margin: 10px;"><img src="assets/img/logo.png" alt="" width="30" height="30" > © 2024 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex" style="margin: 15px;">
            <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-twitter text-white"></i><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-instagram text-white"></i><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="bi bi-facebook text-white"></i><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
        </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
  </body>
</html>

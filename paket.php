<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Persewaan Mobil - Daftar</title>
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
                >Pendaftaran Rental Mobil</a
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

    <div class="container">
      <h1 style="padding: 20px; text-align:center;" >Pengisian Form Pendaftaran</h1>
      <div class="row mt-5">
        <div class="col">
          <form method="POST" action="db.php">
            <div class="row">
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Nomor HP</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="nohp_pelanggan" name="nohp_pelanggan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Tanggal Pemesanan</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Durasi Sewa (Hari)</label>
                    <div class="col-sm-8">
                        <input type="number" name="durasi_sewa" class="form-control" id="durasi_sewa" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Jenis Mobil</label>
                    <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" id="jenis_mobil" name="jenis_mobil">
                            <option value="" data-price="0">-- Pilih Jenis Mobil --</option>
                            <option value="avanza" data-price="250000">Avanza (Rp. 250k/hari)</option>
                            <option value="sigra" data-price="200000">Sigra (Rp. 200k/hari)</option>
                            <option value="innova" data-price="400000">Innova (Rp. 400k/hari)</option>
                            <option value="alphard" data-price="800000">Alphard (Rp. 800k/hari)</option>
                            <option value="brio" data-price="200000">Brio (Rp. 200k/hari)</option>
                        </select>
                        <div id="jenis_mobil_error" style="color:red; display: none;">Pilih Mobil Terlebih Dahulu</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Jasa Supir</label>
                    <div class="col-sm-8">
                        <input type="checkbox" id="jasa_supir" name="jasa_supir" value="Ya"> Ya (10% dari harga sewa)
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Harga Sewa</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="harga_sewa" name="harga_sewa" required readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Jumlah Tagihan</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="total_tagihan" name="total_tagihan" required readonly>
                    </div>
                </div>
                <div class="button-container">
                    <input style="background-color: #0099ff; border-color:#0099ff; color:white"; class="btn btn-warning" id="cek_tagihan" name="cek_tagihan" type="button" value="Cek Tagihan">
                    <button type="submit" style="background-color: #0099ff;" class="btn btn-primary">Submit</button>
                </div>
              </div>
          </form>
        </div>
        <div class="col"><br><br>
          <img style="padding-left: 125px;" src="assets/img/1000_F_114623212_ULMjI6ljcl9aLt9cxDrnOyEZwCf0FRDa.jpg" width="600" height="300" alt="">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('cek_tagihan').addEventListener('click', function() {
            // Ambil nilai dari input
            const durasiSewa = parseInt(document.getElementById('durasi_sewa').value);
            const jenisMobilSelect = document.getElementById('jenis_mobil');
            const hargaPerHari = parseInt(jenisMobilSelect.options[jenisMobilSelect.selectedIndex].getAttribute('data-price'));
            const jasaSupirChecked = document.getElementById('jasa_supir').checked;

            // Hitung harga sewa
            let hargaSewa = durasiSewa * hargaPerHari;

            // Hitung biaya jasa supir jika dipilih
            let biayaSupir = 0;
            if (jasaSupirChecked) {
                biayaSupir = hargaSewa * 0.1;
            }

            // Periksa apakah jenis mobil dipilih
            if (!jenisMobilSelect.value) {
                document.getElementById('jenis_mobil_error').style.display = 'block';
                return;
            } else {
                document.getElementById('jenis_mobil_error').style.display = 'none';
            }

            // Hitung total tagihan
            let totalTagihan = hargaSewa + biayaSupir;

            // Tampilkan hasil perhitungan di input harga sewa dan total tagihan
            document.getElementById('harga_sewa').value = hargaSewa;
            document.getElementById('total_tagihan').value = totalTagihan;
        });
    </script>
  </body>
</html>

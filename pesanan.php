<?php
session_start();


require 'connect.php';

// //ambil data di url
// $id = $_GET["id_pemesanana"];

// //query data berdasarkan id
// $pesanan = query("SELECT * FROM pemesanan WHERE id_pemesanana = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beautiful Malino</title>
  <link rel="stylesheet" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar navbar-expand bg-secondary  navbar-dark sticky-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Video</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">Pemesanan</a>
          </li> -->
        </ul>
        <ul class="navbar-nav mv-2 mb-lg-0">
          <li class="nav-item ms-auto">
            <a class="nav-link active" href="pesanan.php">Pesanan Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-4">
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <h3 class="fs-5">Rangkuman Reservasi Paket Anda</h3>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-3">

          </div>
          <div class="col-9">
            : andialif
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            Nomor Telepon / HP
          </div>
          <div class="col-9">
            : 081111111
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            Jumlah Peserta
          </div>
          <div class="col-9">
            : 1
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            Waktu Perjalanan
          </div>
          <div class="col-9">
            : 4 hari
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            Layanan Paket
          </div>
          <div class="col-9">
            : Penginapan
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            Harga Paket
          </div>
          <div class="col-9">
            : Rp 4.500.000,00
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            Jumlah Tagihan
          </div>
          <div class="col-9">
            : Rp 8.500.000,00
          </div>
        </div>
      </div>
      <div class="card-footer d-flex gap-2 justify-content-center">
        <a href="" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">
          Edit
        </a>
        <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#formReservasiBatal">
          Batal
        </a>
        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formReservasiBerhasil">
          Bayar
        </a>
      </div>
    </div>
  </div>

  <div class="modal fade" id="formPesanTiketWisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Tiket Wisata</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="row">
              <div class="col-md-5">
                <label for="name">Nama Pemesan</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" value="andialif">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="phone_number">Nomor Telepon / HP</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" value="081111111">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Waktu Pelaksanaan Perjalanan</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" value="4">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Jumlah Peserta</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" value="1">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Pelayanan Paket Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    Penginapan
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">
                    Transportasi
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">
                    Makanan
                  </label>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Harga Paket Perjalanan</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" value="Rp 4.500.000,00">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Jumlah Tagihan</label>
              </div>
              <div class="col-md-7">
                <input type="text" class="form-control" value="Rp 8.500.000,00">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary me-auto">Review Pesanan</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="formReservasiBerhasil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Berhasil</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Pembayaran Anda telah berhasil!
        </div>
        <div class="modal-footer">
          <a href="index.html" class="btn btn-primary">Ok</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="formReservasiBatal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Batal Reservasi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin membatalkan reservasi?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          <a href="index.html" class="btn btn-danger">Ya, batalkan</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
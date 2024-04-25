<?php

session_start();


require 'connect.php';


//cek tombol apakah sdh ditekan
if (isset($_POST["submit"])) {

  //cek keberhasilan tambah data
  if (tambah($_POST) > 0) {
    echo "
        <script>
            alert('data berhasil ditambahkan! ');
            document.location.href = 'index.php';
        </script>
    ";
  } else {
    echo "
        <script>
            alert('data gagal ditambahkan! ');
            document.location.href = 'index.php';
        </script>
        ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Himasar land</title>
  <link rel="stylesheet" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top ">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-ite">
            <img src="himasar.png" width="50" alt="">
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#paketWisata">Paket Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#formPesanTiketWisata">Pemesanan</a>
          </li>
        </ul>
        <ul class="navbar-nav mv-2 mb-lg-0">
          <li class="nav-item ms-auto">
            <a class="nav-link" href="pesanan.php">Pesanan Saya</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="info.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="ada.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="ndd.jpg.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- <div class="img-pem"></div> -->

  <div class="container text-center">
    <div class="row">
      <div class="col-8">
        <section id="paketWisata" class="mb-4">
          <h2 class="h2">Paket Wisata</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="pelualangan.jpg.webp" class="card-img-top" alt="">
                <div class="card-body">
                  <span class="card-date">11 September 2024</span>
                  <h5 class="card-title mt-1">Paket Petualangan Alam Ekstrem</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita dignissimos
                    officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="alam.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <span class="card-date">11 September 2024</span>
                  <h5 class="card-title mt-1">Paket Wisata Alam dan Budaya</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita dignissimos
                    officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="keluarga.jpg.webp" class="card-img-top" alt="">
                <div class="card-body">
                  <span class="card-date">11 September 2024</span>
                  <h5 class="card-title mt-1">Paket Wisata Keluarga</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita dignissimos
                    officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4">
              <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="">
                <div class="card-body">
                  <span class="card-date">11 September 2024</span>
                  <h5 class="card-title mt-1">Paket Petualangan Misteri</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita dignissimos
                    officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="">
                <div class="card-body">
                  <span class="card-date">11 September 2024</span>
                  <h5 class="card-title mt-1">Paket Wisata Fotografi Alam</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita dignissimos
                    officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="">
                <div class="card-body">
                  <span class="card-date">11 September 2024</span>
                  <h5 class="card-title mt-1">PPaket Wisata Fotografi Alam

                  </h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita dignissimos
                    officiis neque? Commodi molestiae magni voluptatem recusandae unde impedit voluptatibus.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="col-4">
        <h2 class="h2">Video</h2>
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/tRxagnoYPoM?si=a--8sAo_kngZAruL" title="YouTube video" allowfullscreen></iframe>
        </div>

      </div>
    </div>
  </div>

  <div class="container my-4">


  </div>


  <div class="modal fade" id="formPesanTiketWisata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan Tiket Wisata</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-5">
                <label for="name">Nama Pemesan</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="nama" class="form-control">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="phone_number">Nomor Telepon / HP</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="no_tlp" class="form-control">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Waktu Pelaksanaan Perjalanan</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="tgl" class="form-control">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Jumlah Peserta</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="jumlah_peserta" class="form-control">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Pelayanan Paket Perjalanan</label>
              </div>
              <div class="col-md-7">
                <div class="form-check-inline">
                  <input class="form-check-input" type="checkbox" value="Penginapan" name="paket" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Penginapan
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" type="checkbox" value="Transportasi" name="paket" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">
                    Transportasi
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" type="checkbox" value="Makanan" name="paket" id="flexCheckChecked">
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
                <input type="text" name="harga" class="form-control">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-5">
                <label for="name">Jumlah Tagihan</label>
              </div>
              <div class="col-md-7">
                <input type="text" name="jumlah" class="form-control">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <a href="pesanan.php" class="btn btn-primary me-auto">Review Pesanan</a>
          <button type="button" class="btn btn-primary me-auto">Review Pesanan</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
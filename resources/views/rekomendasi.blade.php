<!doctype html>
<html lang="en">

<head>
    <title>Hasil Rekomendasi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
      <link rel="stylesheet" href="{{'assets/owl.carousel.min.css' }}" />
    <link rel="stylesheet" href="{{'assets/owl.carousel.css' }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
    <body style="background-color:primary"> 
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/mboranLogo.png" alt="" width="auto"
                        height="30"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/" aria-current="page">Beranda <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        
                        </form>
                    </div>
                </div>
            </nav>

        </header>
        
        <div class="container-fluid px-4 py-5" id="custom-cards"
        style="background-image: url('img/navy.jpg'); background-size:200% 200%;">
        <main class="text-light">
        @if (isset($penjual))
                    <h2 class= "text-center ">Hasil Rekomendasi:</h2>
                    @if ($penjual->isEmpty())

        <!-- Menampilkan pesan alert -->
        <p>
        <script>
            alert("REKOMENDASI TIDAK DITEMUKAN SILAHKAN MEMILIH ULANG KRITERIA");
        </script>  
        </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-warning col-sm-12 text-center" data-toggle="modal" data-target="#myModal">
                    Pilih Ulang Kriteria
                </button>
            </div>

        @else
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <div class="col-lg-5 mx-auto">
                        <ul>
                            @foreach ($penjual as $namaPenjual)
                                <li>
                                    <strong>Nama Penjual : </strong>{{ $namaPenjual }}
                                </li>
                            @endforeach
                        </ul>
                        <ul>
                            @foreach ($alamat as $alamatPenjual)
                                <li>
                                    <strong>Alamat Penjual : </strong>{{ $alamatPenjual }}
                                </li>
                            @endforeach
                        </ul>
                        <ul>
                            @foreach ($jamBuka as $jamBukaPenjual)
                                <li>
                                    <strong>Jam Buka : </strong> {{ $jamBukaPenjual }}
                                </li>
                            @endforeach
                        </ul>
                        <ul>
                            @foreach ($jamTutup as $jamTutupPenjual)
                                <li>
                                    <strong>Jam Tutup : </strong>{{ $jamTutupPenjual }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endif
        </main>
        <p>
        <div class="row">
            <div class="owl-carousel owl-theme">
            <div class="ml-2">
                <h5 class="mb-3 display-9 lh-1 text-center text-warning">Ibu Lily</h5>
                <img src="img/fotopedagang1.jpg" class="img-fluid rounded-2 " alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-9 lh-1 text-center text-warning">Mbak Ita</h5>
                <img src="img/fotopedagang2.jpg" class="img-fluid rounded-2" alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-9 lh-1 text-center text-warning">Ibu Nur Aisyah</h5>
                <img src="img/fotopedagang3.jpg" class="img-fluid rounded-2" alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-9 lh-1 text-center text-warning">Ibu Suharni</h5>
                <img src="img/fotopedagang4.jpg" class="img-fluid rounded-2" alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-9 lh-1 text-center text-warning">Ibu Latri</h5>
                <img src="img/fotopedagang5.jpg" class="img-fluid rounded-2" alt="">
            </div>  
            <div class="ml-2">
                <h5 class="mb-3 display-9 lh-1 text-center text-warning">Ibu Hj Sumiah</h5>
                <img src="img/fotopedagang6.jpg" class="img-fluid rounded-2" alt="">
            </div>  
        </div>
        </p>
        <!-- modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Silahkan Pilih Kriteria !</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Modal content goes here -->
        <form method="GET" action="{{ route('hasilRekomendasi') }}" class="form-horizontal">
                <div class="form-check">
                <label style="font-size: 18px!important;" class="col control-label form-check-label h3 font-weight-bold" for="form-field-1">
                    Rasa Sambal
                </label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="pedas" name="rasa_sambal" <?php echo isset($_POST['rasa_sambal']) ? ($_POST['rasa_sambal'] == 'pedas' ? 'checked' : '') : ''; ?>
                                required="">
                            Pedas
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="tidak pedas" name="rasa_sambal"
                                <?php echo isset($_POST['rasa_sambal']) ? ($_POST['rasa_sambal'] == 'tidak pedas' ? 'checked' : '') : ''; ?> required="">
                            Tidak Pedas
                        </label>
                    </div>
                </div>
                <div class="form-check">
                    <label style="font-size: 18px!important;" class="col control-label font-weight-bold" for="form-field-1">
                        Warna Sambal
                    </label>
                    <div class="col-sm-9">
                        
                        <label class="radio-inline">
                        <img src="{{ asset('img/merah.png') }}" alt="Merah" class="radio-image rounded-2" style="width: 30%;"> 
                            <input type="radio" class="square-black" value="merah" name="warna_sambal"
                                <?php echo isset($_POST['warna_sambal']) ? ($_POST['warna_sambal'] == 'merah' ? 'checked' : '') : ''; ?> required="">
                            Merah
                        </label>
                        <label class="radio-inline">
                        <img src="{{ asset('img/assetoranye.png') }}" alt="Merah" class="radio-image rounded-2" style="width: 30%;"> 
                            <input type="radio" class="square-black" value="oranye" name="warna_sambal"
                                <?php echo isset($_POST['warna_sambal']) ? ($_POST['warna_sambal'] == 'oranye' ? 'checked' : '') : ''; ?> required="">
                            Oranye
                        </label>
                    </div>
                </div>
                <div class="form-check">
                    <label style="font-size: 18px!important;" class="col control-label font-weight-bold" for="form-field-1">
                        Harga
                    </label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="sangat murah" name="harga"
                                <?php echo isset($_POST['harga']) ? ($_POST['harga'] == 'sangat murah' ? 'checked' : '') : ''; ?> required="">
                            Sangat Murah (Rp 8.000-10.000)
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="murah" name="harga" <?php echo isset($_POST['harga']) ? ($_POST['harga'] == 'murah' ? 'checked' : '') : ''; ?>
                                required="">
                            Murah (Rp 10.000-15.000)
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="mahal" name="harga" <?php echo isset($_POST['harga']) ? ($_POST['harga'] == 'mahal' ? 'checked' : '') : ''; ?>
                                required="">
                            Mahal (Rp 16.000-25.000)
                        </label>
                    </div>
                </div>

                <div class="form-check">
                    <label style="font-size: 18px!important;" class="col control-label font-weight-bold" for="form-field-1">
                        Porsi Makan
                    </label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="cukup" name="porsi_makan"
                                <?php echo isset($_POST['porsi_makan']) ? ($_POST['porsi_makan'] == 'cukup' ? 'checked' : '') : ''; ?> required="">
                            Cukup
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="banyak" name="porsi_makan"
                                <?php echo isset($_POST['porsi_makan']) ? ($_POST['porsi_makan'] == 'banyak' ? 'checked' : '') : ''; ?> required="">
                            Banyak
                        </label>
                    </div>
                </div>
                <div class="form-check">
                    <label style="font-size: 18px!important;" class="col control-label font-weight-bold" for="form-field-1">
                        Parkir 
                    </label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="tidak" name="parkir" <?php echo isset($_POST['parkir']) ? ($_POST['parkir'] == 'tidak' ? 'checked' : '') : ''; ?>
                                required="">
                            Tidak (tidak tersedia parkir untuk mobil)
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="ya" name="parkir"
                                <?php echo isset($_POST['parkir']) ? ($_POST['parkir'] == 'ya' ? 'checked' : '') : ''; ?> required="">
                            Ya  (tersedia parkir untuk mobil)
                        </label>
                    </div>
                </div>
                <div class="form-check">
                    <label style="font-size: 18px!important;" class="col control-label font-weight-bold" for="form-field-1">
                        Makan di Tempat
                    </label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="tidak" name="tempat_makan"
                                <?php echo isset($_POST['tempat_makan']) ? ($_POST['tempat_makan'] == 'tidak' ? 'checked' : '') : ''; ?> required="">
                            Tidak
                        </label>
                        <label class="radio-inline">
                            <input type="radio" class="square-black" value="ya" name="tempat_makan"
                                <?php echo isset($_POST['tempat_makan']) ? ($_POST['tempat_makan'] == 'ya' ? 'checked' : '') : ''; ?> required="">
                            Ya
                        </label>
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-12 text-center">
                    <input name="submit" type="submit" value="cari rekomendasi" class="control-label btn btn-success">
                </div>

                </div>
        </main>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

        <!-- JavaScript -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="{{'assets/owl.carousel.min.js'}}"></script>
        <script type="text/javascript" src="{{'assets/owl.carousel.js'}}"></script>
        <script>
            $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:5000,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:3
                    }
                }
            });
            });
        </script>
</body>
</html>

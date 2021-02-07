<?php 
require 'functions.php';
session_start();
if ( !isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}
$query = "SELECT * FROM user";
$data = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- my Css -->
    <link rel="stylesheet" href="css/profil-style.css">
    <link rel="stylesheet" href="css/profil-style1.css">

    <!-- font -->
    <link rel="stylesheet" type="text/css" href="icon/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title>Halaman profil</title>
  </head>


<body>
 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navabra-example2">
    <div class="container">
    <a class="navbar-brand" href="#">Kaki Elastis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto ">
        <a class="nav-item nav-link active" href="beranda.php">Home <span class="sr-only">(current)</span></a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profil
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item drop" href="profil.php">Laman Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item drop" href="edit.php">Edit Akun</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item drop" href="hapusakun.php?id=<?php echo $row['id']; ?>">Hapus Akun</a> 
          </div>
        </li>
        <a class="nav-item nav-link" href="logout.php">Logout</a>
        <a class="nav-item btn btn-primary tombol" href="#">Join Us</a>
      </div>
    </div>
    </div>
  </nav>
  <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <!-- akhir navbar -->

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid mb-1" id="jumbotron">
  <div class="container">
    <h1 class="display-4">The More You Feel <br> The More You Know</h1>
    <p class="lead">Finding out and Explore more Indonesia to know futher</p>
  </div>
</div>
<!-- akhir jumbroton -->

<!-- Konten1 -->
<section>
        <div class="row bg-light mb-4">
           <div class="col-md-8 mt-5 mb-5"> 
            <div class="card">
                <div class="card-body">
                 <h2 class='ah'>Profil </h2>
                 <h4  class="pt-4 pb-4">Travel Indonesia adalah perusahaan travel terkemuka di Asia Tenggara yang menyediakan berbagai pilihan destinasi wisata alam dunia , 
                yang memungkinkan Anda untuk menciptakan momen bersama orang-orang terkasih. Kami menawarkan destinasi yang bagus untuk para traveler indonesia yang
                ingin menjelajahi dunia dengan menggunakan teknologi yaitu web programming.
                Kunjungan web Travel Indonesia telah dikunjungi lebih dari 30 juta kali, menjadikannya web paling populer di Asia Tenggara.
                Yang menjadikan web kami banyak diminati orang adalah kami menyediakan kartu member khusus untuk kalian yang mau bergabung dengan kami
                dimana nantinya kartu member dapat dipergunakan dalam memesan tiket di traveloka dan tentunya akan mendapat diskon tiap bulannya.
                 </h4>
                </div>
              </div>
           </div>

           <div class="col-md-4 mt-5 mb-5">
            <div class="card">
                <div class="card-body bg-light" >
               
                  <form name="form">
                      <h2 class='ah'>Cek Harga Tiket</h2>
                          <table>
                            <tr>
                                <td>Tujuan</td>
                                <td><select name="tujuan">
                                <option value="bali">Bali</option>
                                    <option value="rajaampat">Raja Ampat</option>
                                    <option value="danautoba">Danau Toba</option>
                                    <option value="pulaukomodo">Pulau Komodo</option>
                                    <option value="labuanbajo">Labuan Bajo</option>
                                    <option value="lombok">Lombok</option>
                                    <option value="misool">Misool</option>
                                    <option value="belitung">Belitung</option>
                                    <option value="sombori">Sombori</option>
                                    <option value="salissingan">Salissingan</option>
                                </select></section></td>
                            </tr>
                            <tr>
                                <td>Jenis Pelanggan</td>
                                <td><select name="Pelanggan">
                                    <option value="Member">Member</option>
                                     <option value="Non-Member">Non-Member</option>
                                </select></section></td>
                            </tr>
                            <tr>
                                <td>Jumlah Tiket</td>
                                <td><input type="text" name="jumlaht"></td>
                            </tr>
                            <tr>
                              <td>Harga Tiket</td>
                              <td><input type="text" name="hargat" disabled=""></td>
                          </tr>
                            <tr>
                                <td>Harga Total</td>
                                <td><input type="text" name="totalp" disabled=""></td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td><input type="text" name="diskon" disabled=""></td>
                            </tr>
                            <tr>
                                <td>Total Pembayaran</td>
                                <td><input type="text" name="totald" disabled=""></td>
                            </tr>
                            <tr> <td><p></p></td> </tr>
                            <tr>
                              <td></td>
                              <td><input type="button" value="Hitung" Onclick="cek()">
                            <input type="reset" value="Ulangi" ></td>
                        </tr>
                        </table>
                    </form>
              </div>
           </div>
        </div>
       </div>
      </section>
<!-- Akhir Konten1 -->

<!-- Konten2 -->
<section>
<h2 class='ah'> KENAPA HARUS MENJADI MEMBER ?</h2>
        <div class="row pt-5">
           <div class="col-md-8 mb-4 pad"> 
            
                 <h3>Dapat Kartu Member</h3>
                
                 <p>Dengan menjadi member kamu akan mendapat potongan untuk memesan tiket di mitra kami yaitu traveloka dan berbagai diskon
                   diskon lainnya yang akan kamu dapatkan lewat email yang sudah kamu daftarkan sebelumnya.
                 </p>
           </div>

           <div class="col-md-4 mb-4 ">
            
                 <h5> <br> </h5>
                 <p style="text-align : center;"><i class="far fa-address-card fa-5x icon hover" style="color:cadetblue"></i>
                  </p>
            </div>
        </div>
        <p><br></p>
        <div class="row">
          <div class="col-md-4 mb-4 ">
           
                <h5> <br> </h5>
                <p style="text-align : center;"><i class="fas fa-key fa-5x icon" style="color:cadetblue;"></i>
                  <span class="sr-only">Loading…</span>
                </p>
           </div>
          <div class="col-md-8 mb-4 pad"> 
           
                <h3>Jaminan Tetap</h3>
                
                <p> Karena kami telah bekerja sama dengan seluruh bank yang ada di Indonesia maka akan memudahkan anda dalam melakukan transaksi.
              Pembayaran nya mudah dilakukan bisa online bisa juga bayar ditempat dengan menunjukkan kode
              yang akan kami kirimkan.
                </p>
          </div>
       </div>

       <p><br></p>
        <div class="row">
          <div class="col-md-8 mb-4 pad"> 
           
            <h3>Traksaksi</h3>
          
            <p>karena kami telah bekerja sama dengan seluruh bank yang ada di Indonesia maka akan memudahkan anda dalam melakukan transaksi.
              Pembayaran nya mudah dilakukan bisa online bisa juga bayar ditempat dengan menunjukkan kode
              yang akan kami kirimkan.
            </p>
      </div>
          <div class="col-md-4 mb-4">
                <h5> <br> </h5>
                <p style="text-align : center;"><i class="fab fas fa-handshake fa-5x icon" style="color:cadetblue;"></i>
                </p>
           </div>
       </div>
      </section>
<!-- Akhir Konten2-->



<!-- foto -->
<section>
<h2 class="mt-5 mb-9  text-center ah" id="anggota">ANGGOTA</h2>
<hr>
<div class="row bg-light">
    <div class="container">
      <div class="row">
        <br><br><br><br><br><br><br><br>
        <div class="container"> 
            <div class="row mt-5 mb-5">
                <div class="col-md-4 col-sm-6 ">
                    <div class="our-team">
                        <div class="pic">
                            <img src="css/img/yanda.jpeg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Yanda Aziz</h3>
                            <span> Mahasiswa S1 Ilmu Komputer USU 2019</span>
                        </div>
                        <ul class="social">
                               <li><a href="#" class="fa fa-facebook"></a></li>
                               <li><a href="#" class="fa fa-instagram"></a></li>
                               <li><a href="#" class="fab fa-whatsapp"></a></li>
                               <li><a href="#" class="fa fa-twitter"></a></li>     
                        </ul>
                    </div>
                </div>
    
    
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="css/img/victor.jpeg">
                        </div>
                        <div class="team-content">
                            <h3 class="title ah">Victor Hutapea</h3>
                            <span> Mahasiswa S1 Ilmu Komputer USU 2019</span>
                        </div>
                        <ul class="social">
                               <li><a href="https://m.facebook.com/vitooctavianus.hutapea" class="fa fa-facebook"></a></li>
                               <li><a href="https://instagram.com/victor_hutapea?igshid=197nb5rtfpbx9" class="fa fa-instagram"></a></li>
                               <li><a href="#" class="fab fa-whatsapp"></a></li>
                               <li><a href="#" class="fa fa-twitter"></a></li>     
                        </ul>
                    </div>
                </div>
    
    
            </div>
        </div>
      </div>
      </div>
    </section>

<!-- Footer -->
</div>
<section class="client Oc">
  <h2 class="txt ah">Our Client</h2>
  <p class="txt">In developing the panorama of Indonesia, Kaki Elastis needs a lot of help from various partners. Therefore to fullfil that, we "Kaki Elastis" collaborate with many partners and large companies in Indonesia. Here are the names of our cooperation partners in showing Indonesian tourism. Among them is Pesona Indoensia,amazon,Yatch Indonesia,Cruise Indonesia,Traveloka,Grab,Garuda Indonesia and there are many more.</p>
  <div class="imgBx-2 Pht">
    <img src="css/img/pesona_indonesia.png" alt="brand1">
    <img src="css/img/brand2.png" alt="brand2">
    <img src="css/img/Yachts.webp" alt="brand3">
    <img src="css/img/Cruise.webp" alt="brand4">
    <img src="css/img/traveloka.png" alt="brand5">
    <img src="css/img/grab.png" alt="brand6">
    <img src="css/img/Garuda_indonesia.png" alt="brand7">
  </div>
</section>
<section class="penutup">
  <ul>
    <p class="txt">Follow us on : </p>
    <li><a href="#"><img src="css/img/facebook.png" alt="facebook"></a></li>
    <li><a href="#"><img src="css/img/twitter.png" alt="twitter"></a></li>
    <li><a href="#"><img src="css/img/linkedin.png" alt="linkendin"></a></li>
  </ul>
</section>


<!-- Akhir Footer -->

<script type="text/javascript" src="profil.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
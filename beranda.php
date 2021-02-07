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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- My CSS -->
<link rel="stylesheet" href="css/beranda-style.css">
<!-- JQuery -->
<script src="jQuery/jQuery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <a class="nav-item nav-link active" href="#jumbotron">Home <span class="sr-only">(current)</span></a>
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
  <div class="jumbotron jumbotron-fluid" id="jumbotron">
    <div class="container">
      <div class="coba">
        <h1 class="display-4">The More You Feel <br> The More You Know</h1>
        <p class="lead">Welcome, <?php echo $row['nama']; ?></p>
      </div>
    </div>
  </div>
  <!-- akhir jumbroton -->

  <!-- Cointainer -->
<div class="container">
  <!-- info Panel -->
  <div class="row justify-content-center">
    <div class="col-10 info-panel">
      <div class="row inside-info-panel">
        <div class="col-lg col-hov Foc" id="Foc">
          <a href="#Our">
            <img src="css/img/arrows.png" alt="Our_Focus" class="float-left">
            <h4>OUR FOCUS</h4>
            <p>Knowing more about our focus of this website</p>
          </div>
        </a>
        <div class="col-lg col-hov Des" id="Amazing">
          <a href="#Destination">
            <img src="css/img/holidays.png" alt="Destination" class="float-left">
            <h4>Destination</h4>
            <p>Further more about amazing tourism</p>
          </div>
        </a>
        <div class="col-lg col-hov Info" id="Information">
          <a href="#Info">
            <img src="css/img/symbol.png" alt="Information" class="float-left">
            <h4>Information</h4>
            <p>Prepare Yourself with many Information</p>
          </div>
        </a>
      </div>
    </div>
  </div>
<!-- akhir info-panel -->

<!-- our service -->
<!-- <div class="row our-service">
  <div class="col">
    <img src="" alt="" class="img-fluid">
  </div>
  <div class="col"></div>
</div> -->


<!-- end for our service -->
</div>
  <!-- akhir container -->


  <!-- item-1 -->
  <div class="paralax">
    <div class="container bgn1">
      <a href="#Foc">
    <div class="row bgn0" id="Our">
      <div class="col text-center">
        <h1>Our Focus</h1>
      </div>
    </div>
    </a>
    <div class="row bgn1-1">
      <div class="col">
        <p>With the rapid advancement of technology in the present, we as students from one of the state universities in Indonesia have designed a platform where we want to distract again the potential of natural beauty and panorama in Indonesia.Cause we know that It's time for Indonesia known in international eye with some amazing destination.So with that we will introduce a web application called Kaki Elastis. </p>
      </div>
      <div class="col">
        <p>Kaki Elastis is a platform where we utilize one of the technologies, web application for the purpose of promoting tourism in Indonesia.With the theme The More You Feel The More You Know, we would like to again introduce the beauty of the world in Indonesia that many people haven't seen before. The charm of Indonesia will be one step where the beauty of tourism will be a development that is not inferior to the development of today's technology.</p>  
      </div>
    </div>
  </div>
  </div>
  <!-- end for item-1 -->

  <!-- item-2 -->
  <div class="itm-2" id="Destination">
  <a href="#Amazing">
  <div class="row">
    <div class="col text-center Amazing">
      <h1>Amazing Destination</h1>
    </div>
  </div>
</a>
<div class="background">
		<div class="responsive">
			<div class="coba-1">
        <div class="explanation explan">
          <center>
          <p class="ex">Nusa Tenggara Timur</p>
        </center>
        </div>
      </div>
      <div class="coba-2">
        <div class="explanation explan">
          <center>
          <p class="ex">Raja Ampat</p>
        </center>
        </div>
      </div>
      <div class="coba-3">
        <div class="explanation explan">
          <center>
          <p class="ex">Pura Uluwatu</p>
        </center>
        </div>
      </div>
      <div class="coba-4">
        <div class="explanation explan">
          <center>
          <p class="ex">Bunaken</p>
        </center>
        </div>
      </div>
      <div class="coba-5">
        <div class="explanation explan">
          <center>
          <p class="ex">Danau Toba</p>
        </center>
        </div>
      </div>
			<!-- <div class="coba-6"></div>
		  </div> -->
  </div>
	</div>
  <!-- akhir item-2 -->

  <!-- item-3 -->
  <div class="latar">
    <a href="#Information">
  <div class="container" id="Info">
    <div class="row text-center GI">
      <div class="col">
        <h1>General Information</h1>
      </div>
    </div>
  </div>
</div>
</a>
  <div class="item-3">
  <div class="container-3">
        <div class="kartu">
          <div class="imgBx" data-text="Visa">
            <img src="css/img/travel.png" alt="icon-1">
          </div>
          <div class="isi">
            <div>
              <h3>Visa and Immigration Information</h3>
              <p>Planning to visit Indonesia soon? Here are some formal things to check to make sure you can enjoy the wonders of the archipelago!</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="kartu">
          <div class="imgBx" data-text="History">
            <img src="css/img/education.png" alt="icon-1">
          </div>
          <div class="isi">
            <div>
              <h3>History</h3>
              <p>There are countless amazing stories behind the making of the nation of archipelago. Be enthralled and take a glimpse of the history of Indonesia.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="kartu">
          <div class="imgBx" data-text="Language">
            <img src="css/img/language.png" alt="icon-1">
          </div>
          <div class="isi">
            <div>
              <h3>Language</h3>
              <p>If You wanna go to Indonesia,you have to know more about language of Indonesia called Bahasa Indonesia.Click Read More to know more.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="kartu">
          <div class="imgBx" data-text="Time">
            <img src="css/img/time.png" alt="icon-1">
          </div>
          <div class="isi">
            <div>
              <h3>Time Differences</h3>
              <p>Different country, different language. These basic knowledge of Indonesian language will help a lot if you are planning to visit Indonesia.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="kartu">
          <div class="imgBx" data-text="Currency">
            <img src="css/img/cureency.png" alt="icon-1">
          </div>
          <div class="isi">
            <div>
              <h3>Currency</h3>
              <p>Planning to go to Indonesia and bringing a lot of money to spend? Learn about Indonesian currency and where to find the exchange!</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="kartu">
          <div class="imgBx" data-text="Embassies">
            <img src="css/img/Embasses.png" alt="icon-1">
          </div>
          <div class="isi">
            <div>
              <h3>Embassies</h3>
              <p>Information on Foreign Countries Embassies, Consulates or Representatives in Indonesia’s Capital City, Jakarta and Favorite Tourist Destination, Bali.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- akhir item-3 -->
</div>
<section class="client Oc">
  <h2 class="txt">Our Client</h2>
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



  <!-- Optional JavaScript -->

  <!-- animation js  -->
<script type = "text/javascript" language = "javascript">
  function geser(){
    var coba=document.querySelector(".coba");
    var coba1= coba.getBoundingClientRect().left;
    var a = window.innerHeight/1.3;
    if(coba1<a){
      coba.classList.add("coba1");
    }
  }
  window.addEventListener("scroll",geser);

  function geser2(){
    var ourfocus=document.querySelector(".Foc");
    var coba2=ourfocus.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      ourfocus.classList.add("Foc1");
    }
  }
  window.addEventListener("scroll",geser2);

  function geser3(){
    var Des=document.querySelector(".Des");
    var coba2=Des.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      Des.classList.add("Des1");
    }
  }
  window.addEventListener("scroll",geser3);

  function geser4(){
    var Info=document.querySelector(".Info");
    var coba2=Info.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      Info.classList.add("Info1");
    }
  }
  window.addEventListener("scroll",geser4);

  function geser5(){
    var bgn0=document.querySelector(".bgn0");
    var coba2=bgn0.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      bgn0.classList.add("bgn01");
    }
  }
  window.addEventListener("scroll",geser5);

  function geser6(){
    var bgn1=document.querySelector(".bgn1-1");
    var coba2=bgn1.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      bgn1.classList.add("bgn1-2");
    }
  }
  window.addEventListener("scroll",geser6);

  function geser7(){
    var Amazing=document.querySelector(".Amazing");
    var coba2=Amazing.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      Amazing.classList.add("Amazing1");
    }
  }
  window.addEventListener("scroll",geser7);

  function geser8(){
    var Gi=document.querySelector(".GI");
    var coba2=Gi.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      Gi.classList.add("GI1");
    }
  }
  window.addEventListener("scroll",geser8);

  function geser9(){
    var Oc=document.querySelector(".Oc");
    var coba2=Oc.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      Oc.classList.add("Oc1");
    }
  }
  window.addEventListener("scroll",geser9);

  function geser10(){
    var Pth=document.querySelector(".Pht");
    var coba2=Pth.getBoundingClientRect().top;
    var a = window.innerHeight/1.3;
    if(coba2<a){
      Pth.classList.add("Pth1");
    }
  }
  window.addEventListener("scroll",geser10);
// jQuery code
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


      </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
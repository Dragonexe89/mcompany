<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>M Company</title>
	<link rel="icon" href="img/com.png" type="image/png">
	 <link rel="stylesheet" href="css/bootstrap.min.css">

	<style>

		.nav{
	height: 42px;
      background-image: url('img/bg-menu.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: 0-100px;
      color: #FFFFFF;

		}

		.jumbotron{
	height: 500px;
      background-image: url('img/bg-menu-hover.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: auto;
      color: #FFFFFF;
      overflow: hidden;
		}
    a:hover{
      color: #FFFFFF;
    }
    .mg{
      margin-left: 200px;
    }
    .ms{
      margin-left: 125px;
    }
    section hr{
      
      width: 300px;
      border-bottom: 3px solid #000;
    }
 
	</style>
</head>
<body>
  <?php
   $a = [ 
          ['Visi dan Misi','Jurusan','Info Pendaftaran dan Biaya','Klinik untuk Daftar Online'],
        ];
  ?>
  <table border="0" width="100%">
  <tr>
    <td width="50%">
    <p align="center">
    <img border="0" src="img/logo.png" width="375" height="115"></td>
    <td>
    <p align="center"><b>Telp (0341) - 8604715 <br>
      Jl.Muharto Gg VII C No.18 </b><br>
      <img src="img/twitter.png" width="5%" alt="">
      <img src="img/linkedin.png" width="5%" alt="">
      <img src="img/facebook.png" width="5%" alt="">
      <img src="img/youtube.png" width="5%" alt="">
      <img src="img/rss.png" width="5%" alt=""></td>
  </tr>
</table>

 	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container mr-1" align="center">
	<img src="img/logo.png" width="200px" height="65px" alt="">
	<span class="navbar-text"><b>
      Telp (0341) - 8604715 <br>
      Jl.Muharto Gg VII C No.18 </b><br>
      <img src="img/twitter.png" width="5%" alt="">
      <img src="img/linkedin.png" width="5%" alt="">
      <img src="img/facebook.png" width="5%" alt="">
      <img src="img/youtube.png" width="5%" alt="">
      <img src="img/rss.png" width="5%" alt="">
    </span>
	</div>
	</nav> -->

<ul class="nav nav-pills">
  <?php
      foreach ($a as $key => $value) {
    ?>
  <li class="nav-item mg">
    <a class="nav-link mr-4" href="#"><font size="+1">Home</a></font>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link mr-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <font size="+1">Profile</font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"> <?php echo $value[0] ?> </a>
          <a class="dropdown-item" href="#"> <?php echo $value[1] ?> </a>
        </div>
     <li class="nav-item dropdown">
        <a class="nav-link mr-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <font size="+1">Pendaftaran</font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"> <?php echo $value[2] ?> </a>
          <a class="dropdown-item" href="#"> <?php echo $value[3] ?> </a>
        </div>
  <li class="nav-item">
    <a class="nav-link mr-3" href="#" tabindex="-1"><font size="+1">Galeri</font></a>
  </li>
</ul>
  <?php  }?>

	<div class="jumbotron jumbotron-fluid pt-4">
  <div class="container" align="center">
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img  src="img/slide1.jpg" class="d-block w-55" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-55" width="970px" height="441px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" class="d-block w-55" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
</div>

<div class="container">
    <div class="row"></div>
<div class="row" align="center">
  <div class="col-md">
  <div class="card">
	
		<div class="card-center">
  <img src="img/desktop.png" width="100px" height="100px" alt="...">
  <div class="card-body">
    <h5 class="card-title">Desktop</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>
<div class="col-md">
<div class="card">

  <div class="card-center">
  <img src="img/web.png"  width="100px" height="100px" alt="...">
  <div class="card-body">
    <h5 class="card-title">Web</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
</div>

<div class="col-md"> 
<div class="card">
  
    <div class="card-center">
  <img src="img/mobile.png" width="100px" height="100px" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mobile</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
  </div>
</div>
</div><br>
<br>

<section>
<table border="0" align="center" width="85%" height="83">
  <tr>
    <td width="316" valign="top">

    <img border="0" src="img/com.png" width="24" height="24"><b>&nbsp;LASTEST NEWS</b>
    <hr>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Mollitia tenetur suscipit voluptatibus<img border="0" src="img/thumb1.png" width="300" height="100">
    <p align="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Mollitia tenetur suscipit voluptatibus,</p>
    <p align="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Mollitia tenetur suscipit voluptatibus,Lorem ipsum dolor sit amet 
    consectetur.</p>
    <p align="left">voluptatibus,Lorem ipsum dolor sit amet 
    consectetur.</p>
    <p align="left">
    <img border="0" src="img/com.png" width="24" height="24"><b>&nbsp;TESTIMONIAL</b></p>
    <hr>Lorem ipsum dolor sit amet consectetur adipisicing elit.
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Fatoni-Web Design</p></td>

   </td>
    <td valign="top">
      <p align="left"><font size="+2" color="#000080"><b>WELCOME TO COMPANY</b></font></p>
    <img border="0" src="img/logo.png" width="375" height="141" align="left"><p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia 
    tenetur suscipit voluptatibus, ipsam? Aut veniam, fugit fuga corporis 
    itaque ipsa deserunt quibusdam quae! Eveniet facere, fugit repellendus 
    adipisci omnis soluta. Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. Est, placeat ex suscipit molestiae repudiandae minima 
    optio qui sunt sed consequuntur. Eos numquam veritatis minus dolor 
    distinctio ipsum, possimus voluptatem rem. Lorem ipsum, dolor sit amet 
    consectetur, adipisicing elit. Ipsa aut recusandae rem mollitia sequi 
    nam nesciunt ratione aliquam quia at tenetur illo esse exercitationem, 
    quibusdam obcaecati repudiandae ullam possim.Lorem ipsum dolor sit amet 
    consectetur adipisicing elit. Mollitia tenetur suscipit voluptatibus, 
    ipsam? Aut veniam, fugit fuga corporis itaque ipsa deserunt quibusdam 
    quae! Eveniet facere.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia 
    tenetur suscipit voluptatibus, ipsam? Aut veniam, fugit fuga corporis 
    itaque ipsa deserunt quibusdam quae! Eveniet facere, fugit repellendus 
    adipisci omnis soluta. Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. Est, placeat ex suscipit molestiae repudiandae minima 
    optio qui sunt sed consequuntur. Eos numquam veritatis minus dolor 
    distinctio ipsum, possimus voluptatem rem. Lorem ipsum, dolor sit amet 
    consectetur, adipisicing elit. Ipsa aut recusandae rem mollitia sequi 
    nam nesciunt ratione aliquam quia at tenetur illo esse exercitationem, 
    quibusdam obcaecati repudiandae ullam possim.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia 
    tenetur suscipit voluptatibus, ipsam? Aut veniam, fugit fuga corporis 
    itaque ipsa deserunt quibusdam quae! Eveniet facere, fugit repellendus 
    adipisci omnis soluta. Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. Est, placeat ex suscipit molestiae repudiandae minima 
    optio qui sunt sed consequuntur. Eos numquam veritatis minus dolor 
    distinctio ipsum, possimus voluptatem rem. Lorem ipsum, dolor sit amet 
    consectetur, adipisicing elit.consequuntur. Eos numquam veritatis minus dolor 
    distinctio ipsum, possimus voluptatem</td>
  </tr>
  <tr align="center">
    <td colspan="2" valign="top" align="center">
    <table border="0" align="center" width="100%">
      <tr><br>
        <td width="100" align="center">
        <img border="0" src="img/client1.png" width="160" height="70"></td>

        <td width="100" align="center">
        <img border="0" src="img/client2.png" width="160" height="70"></td>

        <td width="100" align="center">
        <img border="0" src="img/client3.png" width="160" height="70"></td>

        <td width="100" align="center">
        <img border="0" src="img/client4.png" width="160" height="59"></td>

        <td width="100" align="center">
        <img border="0" src="img/client5.png" width="160" height="70"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</section><br>

<ul class="nav nav-pills">
  
  <li class="nav-item ms ">
 <a class="nav-link mr-4" href="#"><font color="#FFFFFF" size="+1">Copyright 2021 | All Right Reserved</a></font>
  </li>
</ul>


<script src="js/jquery-ui.js"></script>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>


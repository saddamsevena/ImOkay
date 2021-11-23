<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
    <style>
      body {
        background-color: #ededed;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      a {
        text-decoration: none;
        color: inherit;
      }
      a:hover {
        color: inherit;
        transition: inherit;
      }

      .nav {
        color: #ededed;
        font-size: 15px;
        transition: color .15s;
      }
      .nav:hover {
        color: #F2E03F;
      }

      footer {
        margin-top: auto;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark py-2 px-5">
      <div class="container-fluid">
        <a href="#">
          <img src="{{ asset('Logo_NoBG.png') }}" alt="Logo I'm Okay!" height=50>
        </a>
        <a class="nav" href="#">Beranda</a>
        <a class="nav" href="#">Self-Healing Program</a>
        <!--<a class="nav" href="#">Quick Test</a>-->
        <a class="nav" href="#">Artikel</a>
        <!-- kalo blm login pake ini -->
        <!--<div>
          <button type="button" class="btn btn-light">Register</button>
          <button type="button" class="btn btn-secondary">Login</button>
        </div>-->
        <!-- kalo udah login pake ini -->
        <div class="dropdown show">
          <a class="nav" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" type="button">
          Nama User <i class="fa fa-user-circle mx-2" style="font-size: 25px;"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <h1>Hello, world!</h1>

    <!-- Footer -->
<footer class="text-center text-lg-start bg-dark">

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-8 mx-auto mb-4">
          <!-- Content -->
          <img src="{{ asset('Logo_NoBG.png') }}" alt="Logo I'm Okay!" width=300>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <a href="#!" class="nav">Help & Support</a>
          </h6>
          <h6 class="text-uppercase fw-bold mb-4">
            <a href="#!" class="nav">Cara Penggunaan</a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <a href="#!" class="nav">About Us</a>
          </h6>
          <p>
            <a href="#!" class="nav">Tentang Kami</a>
          </p>
          <p>
            <a href="#!" class="nav">Kontak Kami</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom text-light">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Hak Cipta © 2021 I'm Okay!</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <span class="me-4">Follow us on</span>
      <a href="" class="me-4">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="me-4">
        <i class="fa fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->
</footer>
<!-- Footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
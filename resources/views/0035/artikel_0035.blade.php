<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
      .container-artikerl p{
        text-align: center;
      }
      .container-artikerl img{
        margin: 30px;
      }
      .text{
        border: 1px solid;
        width: 600px;
        height: 410px;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
        font: 24px;
      }
      .text p{
        margin-left: 10px; 
        text-align: left;
      }
    </style>
    <title>Artikel</title>
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">Praktikum PTW</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('home_0035') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('artikel_0035') }}">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact_0035') }}">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-artikerl">
        <center>
          <img src="{{ url('img/laravel.jpg') }}" alt="" width="450">
        </center>  
        <div class="text">
          <p><strong>Laravel</strong> adalah kerangka kerja aplikasi web berbasis PHP yang sumber terbuka, menggunakan konsep Model-View-Controller (MVC). Laravel berada dibawah lisensi MIT, dengan menggunakan GitHub sebagai tempat berbagi kode</p>
          <p><strong>Framework</strong> ini mengikuti struktur MVC (Model View Controller), MVC adalah sebuah metode aplikasi dengan memisahkan data dari tampilan berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.</p>
          <p>Dengan menggunakan struktur MVC maka membuat laravel mudah untuk dipelajari dan mempercepat proses pembuatan prototipe aplikasi web. Framework ini juga menyediakan fitur bawaan seperti otentikasi, mail, perutean, sesi, dan daftar berjalan.</p>
          <p>Framework ini banyak disukai oleh para web developer, Sesuai sedikit penjelasan diatas. Kelebihan lainnya yaitu Laravel sangat mudah untuk disesuaikan, Karena kemudahan itulah kamu dapat membuat suatu struktur proyek kamu sendiri yang memenuhi permintaan aplikasi web kamu.</p>        
        </div>
      </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
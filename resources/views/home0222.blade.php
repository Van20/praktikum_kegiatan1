<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
    <link rel="icon" href="img/unnamed.jpg">

    <title>Home</title>
    <style>
                .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Add some padding inside the card container */
        .container {
        padding: 2px 16px;
        }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href = "{{url('/home')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

       </div> 
  </nav>
    <div class="jumbotron text-center" id="header">
      <div class="header">
        <br>
        <h2 class="nick">SELAMAT DATANG DI WEBSITE DASKOM</h2>
        <p class="kerja">Mari Belajar Terkait IT dan Pembelajaran Terkait Lainnya</p>
      </div>
    </div>

    <main role ="main" class="container">
  </div>
    
  <div class="text-center" id="header">
      <div class="header">
        <br>
        <h4 class="nick">Silahkan Pilih Menu Di Bawah Ini</h4>
      </div>
    </div>
    <br>
    </div>
    <div class="card text-center">
        <br><a class="nav-link" href = "{{url('/home')}}">
                <h4><b>Home</b></h4>
                <p>Menuju Halaman Home</p>
            </a>
    </div>

    <div class="card text-center">
        <br><a class="nav-link" href = "{{url('/artikel')}}">
                <h4><b>Artikel</b></h4>
                <p>Baca Artikel Terkait Bahasa Pemrograman</p>
            </a>
    </div>
    <div class="card text-center">
        <br><a class="nav-link" href = "{{url('/contact')}}">
                <h4><b>Contact Us</b></h4>
                <p>Mari Berkenalan dengan Saya</p>
            </a>
    </div>
</main> 
<br>
<br>
<br>
<br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html> 
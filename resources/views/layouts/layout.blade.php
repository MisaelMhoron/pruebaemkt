<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>  
  <title>prueba</title>
 
  <style>
    body {
  margin:0;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

div {
  flex: 1;
}


  </style>


</head>
<body>
  <!-- --------- HEADER -------------------- -->
  <header style="position: sticky;
            top: 0;
            z-index: 10;
           ">
  <nav class="navbar navbar-expand-sm navbar-light bg-light" >
  <a class="navbar-brand" href="#">
    <img src="/images/logo2.png" alt="logo">
  </a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Menu 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Menu 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Menu 3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Menu 4</a>
    </li>
  </ul>
</nav>
  </header>
  <!-- ---------- CONTENIDO------------------ -->
  <div style="background-color:#F0F0F0;">
  @yield('content')
</div>
  <!-- ------------FOOTER--------------------- -->
  
<!-- Footer -->
<footer style="background: black;" class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">
  <a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a>
    <a href="https://sv.linkedin.com/"><i class="fa fa-linkedin"></i></a>
    <a href="https://www.instagram.com/?hl=es"><i class="fa fa-instagram" aria-hidden="true"></i>
  </div>
</footer>
 <!-- -------------------------------------- -->
</body>

</html>
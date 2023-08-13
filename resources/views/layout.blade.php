<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Online student attendance systems @yield('title_name')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{asset('assets/student/css/style.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>
  <!-- heder start here -->
  <div class="container-fluid p-3">
    <div class="row">
      <div class="col-md-3">
        Call us <i class="bi bi-phone"></i> (+91)9173357217
      </div>
      <div class="col-md-7">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
      </div>
      <div class="col-md-2">

     
          <a href="/create-account"><button type="button" class="btn btn-sm btn-outline-dark w-50"><i class="bi bi-person-add fs-4"></i><span class="badge badge-danger bg-danger rounded-circle rounded-pill">0</span> </i></button></a>
            
       
      </div>
    </div>
  </div>

  <!-- navbar start here -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Attendance management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 40%;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about-us">AboutUs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/feedback-us">Feedback</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/create-account">SignUp</a></li>
            <li><a class="dropdown-item" href="/login">SignIn</a></li>
          
          </ul>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="/contact-us">Contact</a>
        </li>
        <li class="nav-item">
        <i class="bi bi-cart fs-4 mt-0"><span class="badge badge-danger bg-danger rounded-circle rounded-pill">0</span></i>
      </li>
      </ul>
    
    </div>
  </div>
</nav>

<!-- content here -->
@yield('content')
<!-- footer start here -->
<div class="footer p-5">
  <div class="row">
      <div class="col-md-9 mt-3">
          <div class="row">
              <div class="col-md-4">
                  <ul class="footer-link">
                      <li><a href="" class=""><h4>Shops</h4></a></li>
                      <li class="mt-5"><a href="">New In</a></li>
                      <li><a href="">Women</a></li>
                      <li><a href="">Men</a></li>
                      <li><a href="">Bags & assesories</a></li>
                      <li><a href="">Tops brands</a></li>
                      <li><a href="">Sale & special offers</a></li>
                      <li><a href="">Lookbook</a></li>
                      
                  </ul>
              </div>
              
              <div class="col-md-4">
                  <ul class="footer-link">
                      <li><a href="" class=""><h4>Informations</h4></a></li>
                      <li class="mt-5"><a href="">New In</a></li>
                      <li><a href="">Women</a></li>
                      <li><a href="">Men</a></li>
                      <li><a href="">Bags & assesories</a></li>
                      <li><a href="">Tops brands</a></li>
                      <li><a href="">Sale & special offers</a></li>
                      <li><a href="">Lookbook</a></li>
                      
                  </ul>
              </div>
              
              <div class="col-md-4">
                  <ul class="footer-link">
                      <li><a href="" class=""><h4>Customer service</h4></a></li>
                      <li class="mt-5"><a href="">New In</a></li>
                      <li><a href="">Women</a></li>
                      <li><a href="">Men</a></li>
                      <li><a href="">Bags & assesories</a></li>
                      <li><a href="">Tops brands</a></li>
                      <li><a href="">Sale & special offers</a></li>
                      <li><a href="">Lookbook</a></li>
                      
                  </ul>
              </div>
          </div>
      </div>
      <div class="col-md-3 mt-3">
          <h4 class="text-white">Newsletter</h4>
          <p class="text-white">Signup up for free newsletter</p>
          <input type="text" name="email" placeholder="Type your email" class="border border-1 border-white form-control bg-dark">
          <input type="submit" name="subscribe" value="Subscribe" class="btn btn-sm w-100 subscribe-btn mt-2">
          <p><i class="bi bi-facebook"></i>
              <i class="bi bi-youtube"></i>
              <i class="bi bi-instagram"></i>
              <i class="bi bi-whatsapp"></i>
              <i class="bi bi-twitter"></i>
          </p>
      </div>
  </div>
  </div>
  
  <div class="bg-dark p-5 text-white text-center">copyright@2023 All right reserved company
  
    <div class="scroll-top page-scroll visible-md visible-sm visible-lg visible-xs float-end subscribe-btn rounded-circle p-2">
      <a class="btn  text-white fs-4" href="#page-top" style="opacity:0.4">
        <i class="bi bi-arrow-up-circle fs-5"></i>
      </a>
    </div>
    
  
  </div> 
   
  
</body>
</html>
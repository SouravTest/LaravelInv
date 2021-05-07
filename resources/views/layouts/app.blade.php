<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

 
    <html lang="en" class="full-height">

        <!--Main Navigation-->
        <header>
        
          <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
            <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Profile</a>
                </li>
              </ul>
            </div>
          </nav>
        
          <div class="view intro-2">
            <div class="full-bg-img">
              <div class="mask rgba-black-light flex-center">
                <div class="container text-center white-text">
                  <div class="white-text text-center wow fadeInUp">
                    <h2>This Navbar is fixed</h2>
                    <h5>It will always stay visible on the top, even when you scroll down</h5>
                    <br>
                    <p>Full page intro with background image will be always displayed in full screen mode, regardless
                      of device </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </header>
        <!--Main Navigation-->
        
        <!--Main Layout-->
        <main class="text-center py-5">
        
          <div class="container">
            <div class="row">
              <div class="col-md-12">
        
                <p align="justify">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                  anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                  voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
              </div>
            </div>
          </div>
        
        </main>
        <!--Main Layout-->

        
<div class="container">

    @yield('content')
</div>
    <!-- Footer -->
<footer class="page-footer font-small bg-primary">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 ">© 2021 Copyright:
      <a href="#" style="text-decoration: none" class="text-white"> SOURAV TECH</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
  <script>
      </script>
</body>
</html>
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>
    <body>
<div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
            
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                  <a class="nav-link" href="/product">Product</a>
                  <a class="nav-link" href="/user">Users</a>
                 
                </div>
              </div>
            </div>
          </nav>
        </div>

        @section('body')
        This is the master sidebar.
    @show

    @yield('body2')
     
    </body>
</html>
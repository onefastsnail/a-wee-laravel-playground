<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <title>App Name - @yield('title')</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <style>
            .navbar {
                margin: 2rem 0;
            }
        </style>

    </head>
    <body>

        <div class="container">

            <div class="row">
                <div class="col">

                    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <a class="navbar-brand" href="/">Something</a>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ $playgroundUrl }}">Playground</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                          </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="text" placeholder="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                      </div>
                    </nav>

                </div>
            </div>

          <div class="row">

            <div class="col-md-3 push-md-9">
              @section('sidebar')
                  <p>This is the master sidebar.</p>
              @show
            </div>

            <div class="col-md-9 pull-md-3">
              @yield('content')
            </div>

          </div>

        </div>

    </body>
</html>
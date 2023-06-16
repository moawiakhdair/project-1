<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>snaks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row bg-img">
          <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand text-white" href="#">Snaks</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="snaks">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item mx-3">
                        <a class="nav-link" href="#">category</a>
                      </li>
                      <li class="nav-item mx-3">
                        <a class="nav-link" href="#">order</a>
                      </li>
                      <li class="nav-item mx-3">
                        <a class="nav-link disabled">user</a>
                      </li>
                      @if (Route::has('login'))
                      @auth
                          <a href="{{url('/home')}}" class="nav-link">Home</a>
                          @else
                          <a href="{{Route('login')}}" class="nav-link">log in</a>
                          @if (Route::has('register'))
                          <a href="{{route('register')}}" class="nav-link">register</a>

                          @endif
                      @endauth

                  @else

                  @endif
                    </ul>
                  </div>
                </div>
              </nav>
          </div>
        </div>
    </div>
    <div class="row my-3 justify-content-between mx-2 p-3">
        <div class="card py-2" style="width: 18rem;">
            <img src="{{asset('img/snaks/p1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row" justify-content-center >
                <a href="#" class="btn btn-warning">order now</a>
              </div>
            </div>
        </div>
            <div class="card py-2" style="width: 18rem;">
                <img src="{{asset('img/snaks/p2.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="row" justify-content-center >
                    <a href="#" class="btn btn-warning">order now</a>
                  </div>
                </div>
    </div>
    <div class="card py-2" style="width: 18rem;">
        <img src="{{asset('img/snaks/p3.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <div class="row" justify-content-center >
            <a href="#" class="btn btn-warning">order now</a>
          </div>
        </div>
</div>
<div class="card py-2" style="width: 18rem;">
    <img src="{{asset('img/snaks/p4.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <div class="row" justify-content-center >
        <a href="#" class="btn btn-warning">order now</a>
      </div>
    </div>
</div>
</body>
</html>

<?php
/*tipos de variables */
$string = "TEXTO";
$int = 1;
$suma =1 + 2;
echo $suma; 
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <div class="row ">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <div class="row">
      <div class="col-3 ">
        <ul class="list-group">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
        </ul>
      </div>
      <div class="col-6 ">
        <div class="card" style="width: 18rem;">
          <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class=" col-3">
      </div>
    </div>
  </div>
</body>

</html>
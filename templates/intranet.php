<!DOCTYPE html>
<html lang ="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title><?=$title?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/src/img/37.ico" />
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg  bg-body-tertiary p-0 m-0 d-flex flex-row justify-content-between" >
        <div class="d-flex flex-row align-items-center justify-content-center m-0 p-0">
            <a class="navbar-brand m-0 p-0" href="#">
                <img src="/src/img/37.ico" height="75px" alt="Logo" loading="lazy"/>
            </a>
        </div>
        <div >
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
              </form>
        </div>
        <div>
        <a class="navbar-brand" href="#">
            <img src="/src/img/user_logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
          </a>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Documents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">AnnuaireI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">AnnuaireF</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">AnnuaireC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Wiki</a>
              </li>
          </ul>
        </div>
    </nav>
</div>
<div class="container-fluid">
    <nav class="navbar">

    </nav>
</div >
<div>
$content
</div>
</body>
</html>